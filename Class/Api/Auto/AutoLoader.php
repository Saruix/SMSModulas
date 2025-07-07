
<?php

spl_autoload_register('AppAutoLoader');

function AppAutoLoader($classname)
{
    // Define base directories
    $baseDirs = [
        "./../Config/",
        "Mailer/PHPMailer/phpmailer/phpmailer/src/",
        "./../Controller/",
        "./../Dialog/",
        "./../Hook/",
        "./../Json/",
        "./../Model/",
        "./../Module/",
        "./../Security/",
        "./../Service/",
        "./../View/",
        "./../View/Analytic/",
        "./../View/Assignment/",
        "./../View/Fee/",
        "./../View/MarksSheet/",
        "./../View/Scholar/",
        "./../View/ShareHolder/",
        "./../View/Staff/",
        "./../View/Subject/"
    ];

    // Define file extension
    $extension = ".php";

    // Sanitize class name to prevent directory traversal
    $classname = str_replace(['..', '/', '\\'], '', $classname);

    // Attempt to load the class file from each base directory
    foreach ($baseDirs as $baseDir) {
        $file = $baseDir . $classname . $extension;
        if (file_exists($file)) {
            require_once $file;
            return;
        }
    }
}
