<?php
/**
 * Created by IntelliJ IDEA.
 * User: tilli
 * Date: 01.10.2018
 * Time: 18:13
 */



$sites = array(
    array("name" => "Suche", "src" => "./index.php"),
    array("name" => "Karte", "src" => "./karte.php")
);

$output = "<nav><ul>";
echo "<nav><ul>";
foreach($sites as $page => $page_content){
    $output .= <<<HTMLCONTENT
<li><a href='$page_content[src]'>$page_content[name]</a></li>
HTMLCONTENT;
    }
    $output .="</ul></nav>";
echo $output;