<?php 

define('BELGIAN_PATH_VIEW', 'app/view');

include '../vendor/autoload.php';


$view = new Belgian\View\LoadView('home');

$view->render();

