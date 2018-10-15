<?php
/**
 * Created by IntelliJ IDEA.
 * User: tilli
 * Date: 15.10.2018
 * Time: 16:36
 */


echo "<section class=\"filter\">";
        echo '<h2>'.t('home_filter').'</h2>';
echo "</section>";

echo "<section class=\"main-content\">";

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
echo "</section>";