<?php
class TemplateEngine {
    private $basedir;

    function __construct($path = null) {
        $this->basedir = !is_null($path)? $path: __DIR__;
    }

    function apply($template, $atts = []) {
        $source = "$this->basedir/$template.php";
        if(file_exists($source)) {
            extract($atts);
            include $source;
        }
    }
}
