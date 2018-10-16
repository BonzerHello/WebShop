<?php
/**
 * Created by IntelliJ IDEA.
 * User: danie
 * Date: 15.10.2018
 * Time: 18:44
 */
$campingId = get_param('campingId','');

$output = "";

foreach($data as $placeKey => $placeValue) {
    if ($placeKey == 'campingId' && $placeValue["campingId"] == $campingId) {
        $output .= "<div class=\"box-camping\">";
        $output .= '<img src="'.$placeValue["Bild"].'" alt="'.$placeValue["AltText"].'"/>';
        $output .= '<h3>'.$placeValue["PlaceName"].'</h3>';
        $output .= '<p>'.$placeValue["PlaceDesc"].'</p>';
        $output .= '</div>';
    }
}
echo $output;

?>