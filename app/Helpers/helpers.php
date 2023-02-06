<?php
use Illuminate\Support\Str;

define("PAGEANNONCE", "annonce");
define("PAGEUPDATEANNONCE", "editannonce");
define("PAGEADDANNONCE", "addannonce");
define("PAGEVIEWANNONCE", "vuannonce");


function setMenuClass($route, $classe){
    if(contains(request()->route()->getName(), $route)){
        return $classe;
    }

    return "";
}


function setMenuActive($route){
    $routeActuel = request()->route()->getName();

    if($routeActuel === $route ){
        return "active";
    }
    return "";
}

function contains($container, $contenu){
    return Str::contains($container, $contenu);
}



