<?php
namespace App\Library;

use Windwalker\Renderer\BladeRenderer;

/**
 * Created by PhpStorm.
 * User: thai
 * Date: 6/23/2017
 * Time: 2:57 AM
 */
class Blade extends BladeRenderer
{
    /**
     * @param $file
     * @param array|null $data
     * @return mixed
     */
    public function make($file, array $data = array()){
        $response = new \Phalcon\Http\Response();
        if (empty($data)){
            return $response->setContent($this->render($file));
        }
        return $response->setContent($this->render($file, $data));
    }
}