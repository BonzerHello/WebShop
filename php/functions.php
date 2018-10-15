<?php
/**
 * Created by IntelliJ IDEA.
 * User: tilli
 * Date: 08.10.2018
 * Time: 17:56
 */

$pages = ['home','map'];
$languages = ['de','fr','en'];
$allLanguagesKey;

function get_param($name, $default) {
    if (!isset($_GET[$name]))
        return $default;
    return urldecode($_GET[$name]);
}

function add_param($url, $name, $value){
    if(strpos($url, '?') !== false){
        $sep = '&';
    }else{
        $sep = '?';
    }
    return $url . $sep . $name ."=" .urlencode($value);
}


function navigation($language, $pageId, $pageAction){
    global $pages;
    $urlbase = add_param($_SERVER['PHP_SELF'], "lang", $language);
    $output = "<nav><ul>";
    foreach($pages as $page){
        $url = add_param($urlbase, "pageId", $page);
        $url = add_param($url, "pageAction", $pageAction);
        $class = $pageId == $page ? 'active' : 'inactive';
        $output .= '<li>'.makeLinkWithLabel($class, $url, t($page)).'</li>';
    }
    $output .="</ul></nav>";

    return $output;

}

function languageNavigation($language, $pageId, $pageAction){
    global $languages;
    $urlbase = add_param($_SERVER['PHP_SELF'], 'pageId',$pageId);
    $output = "<div class=\"langSelect\">";
    $allLinks = [];
    foreach($languages as $lang){
        $class = $language == $lang ? 'active' : 'inactive';
        $url = add_param($urlbase, 'lang', $lang);
        $url = add_param($url, "pageAction", $pageAction);
        array_push($allLinks,makeLinkWithLabel($class, $url, strtoupper($lang)));
    }
    $output .= join(' | ',$allLinks);
    $output .= "</div>";

    return $output;
}

function makeLinkWithLabel($class, $url, $label) {
    return '<a class="'.$class.'" href="'.$url.'">'.t($label).'</a>';
}

function makeLinkToSite($pageId, $pageAction, $label){
    global $language;
    $url = add_param($_SERVER['PHP_SELF'], 'lang', $language);
    $url = add_param($url, 'pageId', $pageId);
    $url = add_param($url, 'pageAction', $pageAction);
    return makeLinkWithLabel("",$url,$label);
}

function makeLinkToSiteCamping($pageId, $pageAction, $label, $campingId){
    global $language;
    $url = add_param($_SERVER['PHP_SELF'], 'lang', $language);
    $url = add_param($url, 'pageId', $pageId);
    $url = add_param($url, 'pageAction', $pageAction);
    $url =add_param($url, 'campingId', $campingId);
    return makeLinkWithLabel("",$url, $label);
}

function t($key){
    global $language;
    global $languages;
    global $allLanguagesKey;

    if(!isset($allLanguagesKey)) {

        foreach ($languages as $lang) {
            $loadedLanguage = [];
            $fileName = './i18n/' . $lang . '.csv';
            $file = fopen($fileName, 'r');
            while (($line = fgetcsv($file, 0, '=')) !== FALSE) {
                $loadedLanguage[$line[0]] = $line[1];
            }
            fclose($file);
            $allLanguagesKey[$lang] = $loadedLanguage;
        }
    }
    return $allLanguagesKey[$language][$key] ?? $key;




}

