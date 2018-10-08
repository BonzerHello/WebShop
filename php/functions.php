<?php
/**
 * Created by IntelliJ IDEA.
 * User: tilli
 * Date: 08.10.2018
 * Time: 17:56
 */

$pages = ["home",'map'];

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


function navigation($language, $pageId){
    global $pages;
    $urlbase = add_param($_SERVER['PHP_SELF'], "lang", $language);
    $output = "<nav><ul>";
    foreach($pages as $page){
        $url = add_param($urlbase, "page", $page);
        $class = $pageId == $page ? 'active' : 'inactive';
        $output .= '<li>'.makeLink($class, $url, $page).'</li>';
    }
    $output .="</ul></nav>";

    return $output;

}

function makeLink($class, $url, $page){
    return '<a class="'.$class.'" href="'.$url.'">'.$page.'</a>';
}

