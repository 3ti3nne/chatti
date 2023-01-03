<?php

namespace Chatti\controllers;

class Controller
{
    const VIEWPATH = __DIR__ . '/../views/';
    const EXTENSION = '.templ.php';
    const TITLE = 'Chatti';

    /**
     * 
     */
    public function render($layout, $view, $data = null)
    {
        $layoutSplittedInArray = explode('.', $layout);

        ob_start();

        require_once(self::VIEWPATH . $layoutSplittedInArray[0] . '/' . $layoutSplittedInArray[1] . self::EXTENSION);
        $layoutContent = ob_get_contents();
        ob_end_clean();

        $layout = str_replace('{headTitle}', self::TITLE, $layoutContent);


        $viewSplittedInArray = explode('.', $view);

        ob_start();

        require_once(self::VIEWPATH . $viewSplittedInArray[0] . '/' . $viewSplittedInArray[1] . self::EXTENSION);
        $viewContent = ob_get_contents();
        ob_end_clean();

        $content = str_replace('{content}', $viewContent, $layout);

        return $content;
    }
}
