# Zesty Challenge


In order to run it simply  

1. composer install if vendor dir not present.  
  the included composer.json file doesn't really use any packages but mainly gives us  
  namespaces and autoloading so we can `use App\Classname` instead of having to include(filename.php)  

2. Launch built in PHP webserver from the command line with any random port number, e.g. 8007  
   `php -S localhost:8007`

3. Browse to http://localhost:8007  

4. Comment / uncomment calls to specific tests in the constructor if index.php  



# Resources Used  
Below is a list of all 3rd party resources or research done to complete the challenge.  

  * [PHP Manual for Timezone conversion](https://www.php.net/manual/en/datetime.settimezone.php)
  * [PHP Manual for Date Formats](https://www.php.net/manual/en/datetime.format.php)
