<?php
/**
 * Created by PhpStorm.
 * User: Akim
 * Date: 06.01.15
 * Time: 0:36
 */

require_once('Rectangle.php');
class PositionedRectangle extends Rectangle
{
    public $X;
    public $Y;
    function __construct($color, $width, $height, $X, $Y)
    {
        parent::__construct($color, $width, $height);
        $this->X = $X;
        $this->Y = $Y;
    }
    function render()
    {
        echo '<div
        style="background-color:rgb('.$this->color->red.','.$this->color->green.','.$this->color->blue.');
        width:'.$this->width.'px;
        height:'.$this->height.'px;
        position:absolute;left:'.$this->X.';top:'.$this->Y.' "&gt;</div>';
    }
}