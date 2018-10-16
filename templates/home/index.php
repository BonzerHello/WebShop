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

$output = "<h1>".t('home_camping')."</h1>";

foreach($data as $placeKey => $placeValue) {
	$output.= "<div class=\"box-camping\">";
	$output .= '<img src="'.$placeValue["Bild"].'" alt="'.$placeValue["AltText"].'"/>';
	$output .= '<h3>'.$placeValue["PlaceName"].'</h3>';
	$output .= '<p>'.$placeValue["PlaceDesc"].'</p>';
	$output .= makeLinkToSiteCamping('camping','details','camping_anzeigen',$placeValue["campingId"]);
    $output .= '</div>';
}

echo $output;
echo "</section>";