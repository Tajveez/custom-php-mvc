<?php

namespace app\core;

class Request
{
    public function getPath()
    {
        $path = $_SERVER['REQUEST_URI'] ?? '/';
        $position = strpos($path, '?');

        if ($position === false) return $path;

        $path = substr($path, 0, $position);
        return $path;
    }

    public function getMethod()
    {
        $method = $_SERVER['REQUEST_METHOD'];
        return strtolower($method);
    }

    public function getBodyParams()
    {
        $params = [];
        if ($this->getMethod() === 'get') {
            foreach ($_GET as $key => $value) {
                $params[$key] = filter_input(INPUT_GET, $key, FILTER_SANITIZE_SPECIAL_CHARS);
            }
        }

        if ($this->getMethod() === 'post') {
            foreach ($_POST as $key => $value) {
                $params[$key] = filter_input(INPUT_POST, $key, FILTER_SANITIZE_SPECIAL_CHARS);
            }
        }

        return $params;
    }
}
