<?php
/**
 * Created by PhpStorm.
 * User: Akim
 * Date: 05.01.15
 * Time: 23:46
 */

abstract class Component {
    public $color;
    public $width;
    public $height;
    abstract public function render();
}