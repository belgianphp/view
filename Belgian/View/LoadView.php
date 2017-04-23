<?php

/*
 * @package     BelgianPHP
 * @author      Estefanio NS <estefanions AT gmail DOT com>
 * @link        http://belgianphp.github.io
 * @copyright   2016 - 2017
 * 
 */



namespace Belgian\View;

class LoadView implements IRender
{
    private   $viewFile;

    public function __construct($viewFile)
    {
        self::init($viewFile);
    }






    public function render(array $dataArrAssoc = array())
    {
        self::throwException();

        if(is_array($dataArrAssoc) && count($dataArrAssoc))
        {
            extract($dataArrAssoc);
        }

        include $this->viewFile;
    } 








    private function init($view)
    {
        $file =  DIRECTORY_SEPARATOR . $view . '.php';

        $this->viewFile = rtrim(BELGIAN_PATH_VIEW, '/') . $file;

        return $this;
    } 







    private function throwException()
    {
        if(! file_exists($this->viewFile))
        {
            $str = "Error: '%s' Not Found.\n";
            throw new \Exception(
                sprintf($str, $this->viewFile)
            );
        }
    } 






}




