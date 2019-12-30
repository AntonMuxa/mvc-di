<?php

namespace system\View;

class View
{
    public function generate($template, $data = null)
    {
        if(!empty($data)){
            extract($data);
        }
        ob_start();
        include sprintf("%s/src/views/template/%s", BASE_PATH, $template);
        $output = ob_get_contents();
        ob_end_clean();
        return $output;
    }
}