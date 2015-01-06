<?php
/**
 * Created by PhpStorm.
 * User: Akim
 * Date: 06.01.15
 * Time: 0:20
 */

class BorderedRectangle {
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