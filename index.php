<?php
/**
 * Created by PhpStorm.
 * User: Akim
 * Date: 05.01.15
 * Time: 23:56
 */

require_once('Color.php');
require_once('Component.php');
require_once('Rectangle.php');
require_once('BorderedRectangle.php');
require_once('PositionedRectangle.php');
require_once('Renderer.php');

$color = new Color(127,0,0);
$rect = new Rectangle($color, 100, 50);
$rect->render();


$color2 = new Color(100,50,100);
$borderRect = new BorderedRectangle($color2,200,200,' red');
$borderRect->render();

$color3 = new Color(150,150,20);
$posRect = new PositionedRectangle($color3,200,200 ,350,400);
$posRect->render();


$obArray = array($posRect,$borderRect);
$rend = new Renderer($obArray);
$rend->render();