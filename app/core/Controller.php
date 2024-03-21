<?php

class Controller
{
    protected $publicMethods = [];

    public function getPublicMethods(): array
    {
        return $this->publicMethods;
    }

    protected function render($path, $parameters = [], $layout = ''): void
    {
        ob_start();
        require_once (__DIR__ . '/../views/pages/' . $path . '.view.php');
        $content = ob_get_clean();

        require_once (__DIR__ . '/../views/layouts/' . $layout . '.layout.php');
    }
}
