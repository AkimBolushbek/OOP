<?php
/**
 * Created by PhpStorm.
 * User: Akim
 * Date: 05.01.15
 * Time: 23:44
 */

class Color {
    public $red;
    public $green;
    public $blue;

    function __construct($red,$green,$blue)
    {
        $this->red   =  $red ;
        $this->green =  $green;
        $this->blue  =  $blue ;
    }
}