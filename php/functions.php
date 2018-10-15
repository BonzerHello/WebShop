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
        $output .= '<li>'.makeLink($class, $url, t($page)).'</li>';
    }
    $output .="</ul></nav>";

    return $output;

}

function languageNavigation($language, $pageId){
    global $languages;
    $urlbase = add_param($_SERVER['PHP_SELF'], 'pageId',$pageId);
    $output = "<div class=\"langSelect\">";
    $allLinks = [];
    foreach($languages as $lang){
        $class = $language == $lang ? 'active' : 'inactive';
        $url = add_param($urlbase, 'lang', $lang);
        array_push($allLinks,makeLink($class, $url, strtoupper($lang)));
    }
    $output .= join(' | ',$allLinks);
    $output .= "</div>";

    return $output;
}

function makeLinkToSite($pageId, $pageAction, $label){
    global $lang;
    $urlbase = add_param($_SERVER['PHP_SELF'], 'lang', $lang);
    $url = add_param($urlbase, 'pageId', $pageId);
    $url = add_param($url, 'pageAction', $pageAction);
    return '<a href="'.$url.'">'.t($label).'</a>';
}

function makeLink($class, $url, $page){
    return '<a class="'.$class.'" href="'.$url.'">'.$page.'</a>';
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

