<?php
function __autoload($class) {
    $class_file = str_replace('\\', DIRECTORY_SEPARATOR, $class);
    $path_info  = pathinfo($class_file);

    $include_path = 'lib/'
        . $path_info['dirname']
        . DIRECTORY_SEPARATOR
        . $path_info['filename']
        . '.php';

    // echo $include_path;
    // dangerous...
    @include_once($include_path);
};
?>