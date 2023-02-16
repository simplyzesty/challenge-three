<?php
require_once ("vendor/autoload.php");

/**
* This is our CONTROLLER
* To use symfony/var-dumper in composer allows us to easily
* debug use dump($anyvar);
**/

use App\Shop;

class Controller {



  public function __construct()
  {
	     // do test one
       $this->test1();

       // do test two
       //$this->test2();

        // do test three
        //$this->test3();
  }


  /**
   * test 1 - show the Hours
   **/
  public function test1()
  {
	  $shop = new Shop();
    $hours  = $shop->getHours();

    // loop through -  add to the hours array with an isopen = true/false for that day


    // If sending JSON, it should set a  proper Content-Type header
    // so broswer knoes its JSON content
    header('Content-Type: application/json');
    echo json_encode($hours);
  }

  /**
   * test 2 - adjust nextOpening if shop is closed on Wednesdays
   **/
  public function test2()
  {
    $shop = new Shop(); // creating a Shop instance again - can we improve that?

    // Set the initial Date (today) to be a fictional Wednesday

    // Send in that Wednesday Date to nextOpening()

    $output = [];
    echo json_encode($output);
  }

  /**
   * test 3 - show openHours for a Shop in Central Europe ('Europe/Paris')
   * localised to Chicago timezone ('America/Chicago')
   **/
  public function test3()
  {
    $shop = new Shop(); // do we really need 3 separate instances of Shop? no we dont.

    // fetch time from shop class

    // Now convert timezone using Obect Oriented DateTime methods
    // Hint: (https://www.php.net/manual/en/datetime.settimezone.php )

    $output = [];
    echo json_encode($output);
  }

}

// Launch
new Controller();
