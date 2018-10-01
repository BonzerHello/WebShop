<?php
/**
 * Created by IntelliJ IDEA.
 * User: tilli
 * Date: 01.10.2018
 * Time: 18:13
 */



$sites = array(
    array("name" => "Suche", "src" => "/suche"),
    array("name" => "Karte", "src" => "/karte")
);

echo "<nav><ul>";
foreach($sites as $page => $page_content){
        echo "<li><a href='".$page_content['src']."'>".$page_content["name"]."</a></li>";
}
echo "</ul></nav>";