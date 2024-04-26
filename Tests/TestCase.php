<?php

namespace Tests;

use SimpleWeb3\Utils;

class TestCase extends  \PHPUnit\Framework\TestCase
{
    //
    protected static function clean($item)
    {
        return strtolower(Utils::stripZero($item));
    }
}
