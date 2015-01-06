<?php
/**
 * Created by PhpStorm.
 * User: Akim
 * Date: 06.01.15
 * Time: 0:41
 */

class Renderer {
    public $compArray = array();
    function __construct($obArray)
    {
        $this->compArray = $obArray;
    }
    function render()
    {


        for($i=0;$i<sizeof($this->compArray);$i++)
        {
            echo '<br/>'; echo '<br/>'; echo '<br/>';

            echo '<div
                    style="background-color:RGB('
                . $this->compArray[$i]->color->red .','
                . $this->compArray[$i]->color->green .','
                . $this->compArray[$i]->color->blue .');
                    width:'.$this->compArray[$i]->width.  'px;
                    height:'.$this->compArray[$i]-> height.'px;
                    position:absolute;left:'.($this->compArray[$i]->width+10).  ' ; "&gt;</div>';
            echo '<br/>';
        }

    }
} 