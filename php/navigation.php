<?php
/**
 * Created by IntelliJ IDEA.
 * User: tilli
 * Date: 01.10.2018
 * Time: 18:13
 */

$siteNames = ["Suche", "Karte"];

echo "<nav><ul>";
foreach ($siteNames as $value){
    echo "<li><a href='#'>$value</a></li>";
}
echo "</ul></nav>";



/*$output =  <<<HTMLCONTENT
<nav>
            <ul>
                <li><a href="#">Suche</a></li>
                <li><a href="#">Karte</a> </li>
            </ul>
        </nav>
HTMLCONTENT;
echo $output;*/