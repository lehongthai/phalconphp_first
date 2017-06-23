<?php
namespace App\Middleware;

use Phalcon\Http\Response;
use Phalcon\Http\Request;
use Phalcon\Validation;

class Validator extends Validation
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
     * @var Validation
     */
    protected $validator;

    /**
     * Validator constructor.
     * @param array $validator
     */
    public function __construct($validator) {
        $this->response = new Response();
        $this->request = new Request();
        $this->validator = $validator;
    }


    /**
     * @return array|bool
     */
    public function getErrorsMessage(){
        if (count($this->validator->validate($this->request->getJsonRawBody()))){
            $errorMsg = [];
            /** @var $message Validation\Message */
            foreach ($this->validator->validate($this->request->getJsonRawBody()) as $message){
                array_push($errorMsg, $message->getMessage());
            }
            return $errorMsg;
            //return $this->response->setJsonContent(errorsResponse($errorMsg))->setStatusCode(400);
        }
        return false;
    }
}