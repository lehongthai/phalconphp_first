<?php
/**
 * Created by PhpStorm.
 * User: thai
 * Date: 6/23/2017
 * Time: 6:49 AM
 */
use Phalcon\Mvc\Controller;
use Phalcon\Http\Response;
use Phalcon\Http\Request;

class ControllerApi extends Controller
{
    /**
     * @var Response
     */
    protected $response;

    /**
     * @var Request
     */
    protected $request;

    /**
     * ControllerApi constructor.
     */
    public function onConstruct()
    {
        $this->response = new Response();
        $this->request = new Request();
    }


}