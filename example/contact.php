<?php 

define('BELGIAN_PATH_VIEW', 'app/view'); 

include '../vendor/autoload.php';

$view = new Belgian\View\LoadView('contact');

$data['name']   = "Lorem Ipsum";
$data['user']   = '@lorem';
$data['email']  = 'lorem.ipsum@dolor.com';

$view->render($data);
