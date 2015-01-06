<?php
/**
 * Created by PhpStorm.
 * User: Akim
 * Date: 05.01.15
 * Time: 23:48
 */

require_once('Component.php');
class Rectangle  extends Component{
    function __construct($color, $width, $height)
    {
        $this->color =  $color;
        $this->width =  $width ;
        $this->height=  $height;
    }

    function render()
    {
        echo '<div
                    style="background-color:RGB('.$this->color->red.','.$this->color->green.','.$this->color->blue.');
                    width:'.$this->width.'px;
                    height:'.$this->height.'px"&gt;</div>';
    }
}