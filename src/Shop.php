<?php

namespace App;

use App\OpeningHoursInterface as OpeningHours;

class Shop implements OpeningHours {

  /* @var \DateTimeZone */
  private $timezone;

  public function __construct()
  {
    // not really neeed unless you want to scaffold some
    // initial data or include helper classes..
    // e.g. maybe you want to set a default timezone? for all activity.

    $this->timezone = new \DateTimeZone('Europe/Paris');

  }


  public function nextOpening(\DateTime $date)
  {
     // what day of week was passed in

     // the next day open at what time?

     // if next day is "closed' what is the next open date & time?
  }


  public function isOpen(\DateTime $date){
      // might need to format date to 3 letter day

      // check date passed in against the opening hours
  }


  public function getHours($test = 1)
  {
    // if $test is 2 then need to return different hours.

    // BUild a list of some sort for the business hours

/*
      $hours = [
        "mon" => ["open" => "09:00", "closed"=> "18:00"],
        "tue" => ["open" => "09:00", "closed"=> "18:00"],
        "wed" => ["open" => "09:00", "closed"=> "18:00", "isworkingday" => false],
        //...
      ];
*/
      // test hours array with symfony vardumper
      // dump($hours);

      return $hours;
  }


}
