<?php

namespace App\config;

use App\src\controller\BackController;
use App\src\controller\FrontController;
use App\src\controller\ErrorController;
use Exception;

class Router
{   private $frontController;
    private $backController;
    private $errorController;
    private $request;

    public function __construct(){

        $this->request = new Request();
        $this->frontController = new FrontController();
        $this->backController = new BackController();
        $this->errorController = new ErrorController();
    }

    public function run()
    {   var_dump($this->request);
        try{
            if(isset($_GET['route']))
            {
                if($_GET['route'] === 'article'){
                    
                    $this->frontController->article($_GET['articleId']);
                }
                elseif($_GET['route'] === 'addArticle'){
                    $this->backController->addArticle($_POST);
                }
                else{
                    $this->errorController->errorNotFound();
                }
            }
            else{
                
                $this->frontController->home();
            }
        }
        catch (Exception $e)
        {
            $this->errorController->errorServer();
        }
    }
}