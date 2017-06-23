<?php

use App\Middleware\Validator;

class ProductsController extends ControllerApi
{
    public function editAction(){
        $validate = new Validator(Products::ProductRule());
        if ($validate->getErrorsMessage()){
            return $this->response->setJsonContent(errorsResponse($validate->getErrorsMessage()))->setStatusCode(400);
        }
        $data = $this->request->getJsonRawBody();
        $product = new Products();
        $product->name = $data->name;
        $product->price = $data->email;
        $product->created_at = date('Y-m-d');
        $product->save($data);
        $this->logs->info('aaa: ' . json_encode($data));
        $this->response->setJsonContent(successResponse(MessageTestConfig::CREATE_SUCCESS))->setStatusCode(400);
        return $this->response;
    }

}

