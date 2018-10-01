<?php
/**
 * Created by IntelliJ IDEA.
 * User: tilli
 * Date: 01.10.2018
 * Time: 18:14
 */

$output = <<<HTMLCONTENT
<h1>Campingplätze</h1>

        <div class="box-camping">
            <img src="./images/seen/brienzersee.jpg" alt="Dies ist eim Bild"/>
            <h3>Brienzersee</h3>
            <p>Dies ist ein Beschreibungstext</p>
        </div>
        <div class="box-camping">
            <img src="./images/seen/bielersee.jpg" alt="Dies ist eim Bild"/>
            <h3>Bielersee</h3>
            <p>Dies ist ein Beschreibungstext</p>
        </div>
        <div class="box-camping">

            <img src="./images/seen/neuenburgersee.jpg" alt="Dies ist eim Bild"/>
            <h3>Neuenburgersee</h3>
            <p>Dies ist ein Beschreibungstext</p>
        </div>
HTMLCONTENT;
echo $output;