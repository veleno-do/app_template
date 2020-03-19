<?php

namespace MyMVC\Core\Router;

use \MyMVC\Core\Views\Material as Material;

class Response
{
    public function __construct( Material $material )
    {
        return $this->function = $material->function;
    }


    public function issue()
    {
        return $this->function;
    }
}
