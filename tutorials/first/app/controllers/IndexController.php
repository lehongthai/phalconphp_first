<?php

class IndexController extends ControllerBase
{
    public function onConstruct()
    {

    }


    public function indexAction()
    {

    }

    public function testAction(){
        //print_r(Library\Blade::test());die;
        //return $this->response->setContent($this->blade->render('index.index'));
        return $this->blade->make('index.index');
    }

}

