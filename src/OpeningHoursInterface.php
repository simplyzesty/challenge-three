<?php

namespace App;

interface OpeningHoursInterface
{

public function nextOpening(\DateTime $date);

public function isOpen(\DateTime $date);

}
