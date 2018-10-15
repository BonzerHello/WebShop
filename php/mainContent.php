<?php
/**
 * Created by IntelliJ IDEA.
 * User: tilli
 * Date: 01.10.2018
 * Time: 18:14
 */

//pseudo data structure, will be replaced with from a database


$data = array(
	["Bild" => "./images/seen/brienzersee.jpg", "AltText" => "Bild vom Brienzersee", "PlaceName" => "Brienzersee", "PlaceDesc" => "Schöne Lage, kinderfreundlich"],
	["Bild" => "./images/seen/bielersee.jpg", "AltText" => "Super Bild vom Bielersee", "PlaceName" => "Bielersee", "PlaceDesc" => "Willkommen im schönen Seeland"],
	["Bild" => "./images/seen/neuenburgersee.jpg", "AltText" => "Bild vom Neuenburgersee", "PlaceName" => "Neuenburgersee", "PlaceDesc" => "Lac de Neuchâtel"]

);

$output = "<h1>".t('home_camping')."</h1>";

foreach($data as $placeKey => $placeValue) {
	$output.= "<div class=\"box-camping\">";
	$output .= '<img src="'.$placeValue["Bild"].'" alt="'.$placeValue["AltText"].'"/>';
	$output .= '<h3>'.$placeValue["PlaceName"].'</h3>';
	$output .= '<p>'.$placeValue["PlaceDesc"].'</p>';
	$output .= makeLinkToSite('camping','details','camping_anzeigen');
    $output .= '</div>';
}	

echo $output;