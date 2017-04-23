<?php

/*
 * @package     BelgianPHP
 * @author      Estefanio NS <estefanions AT gmail DOT com>
 * @link        http://belgianphp.github.io
 * @copyright   2016 - 2017
 * 
 */



namespace Belgian\View;

class LoadStrView implements IRender
{
    private $view;
    
    public function __construct($viewFile)
    {
        $this->view = new LoadView($viewFile);
    }



    public function render(array $data = array())
    {
        ob_start();

        $this->view->render($data);
        $response = ob_get_contents();

        ob_end_clean();

        return $response;
    } 


}



