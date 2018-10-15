<?php
/**
 * Created by IntelliJ IDEA.
 * User: tilli
 * Date: 15.10.2018
 * Time: 18:47
 */

echo "<h2>".t('camping_kasse_titel')."</h2>";


if($_SERVER["REQUEST_METHOD"] == "POST"){
    echo "Formular sended";

}else{
    echo <<<PRINTFORM

    <form method="post">
    <p><label>Vorname</label>
    <input name="firstName" required/></p>
    <p><label>Nachname</label>
    <input name="lastName" required/></p>
    <p><label>E-Mail</label>
    <input name="email" required/></p>
    <p><label>Strasse</label>
    <input name="strees" required/></p>
    <p><label>PLZ</label>
    <input name="plz" required/></p>
    <p><label>Ort</label>
    <input name="city" required/></p>
    <p><label>Land</label>
    <input name="country" required></p>
    <p><label>Kommentar</label></p>
    <textarea name="ccomment"></textarea>
    <br>
    
    
    <button type="submit">Absenden</button>
    
</form>
PRINTFORM;


}
