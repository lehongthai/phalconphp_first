<?php
/**
 * Created by PhpStorm.
 * User: thai
 * Date: 6/21/2017
 * Time: 1:54 PM
 */

/**
 * @param $data
 * @return array
 */
function successResponse($data){
    return [
        'status' => 'success',
        'data' => $data
    ];
}

/**
 * @param array $messages
 * @return array
 */
function errorsResponse(array $messages){
    return [
        'status' => 'success',
        'messages' => $messages
    ];
}
