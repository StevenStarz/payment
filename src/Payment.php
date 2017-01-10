<?php

namespace Stevens\Payment;

use Stevens\Core\CoreInterface;

class Payment implements CoreInterface
{
	public static $counter = 1;

	public static function getCounter()
    {
	   	return self::$counter;
    }
}
