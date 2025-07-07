
<?php

spl_autoload_register('AppAutoLoader');

function AppAutoLoader($classname)
{
    // Define base directories
    $baseDirs = [
        "./Api/Config/",
        "Mailer/PHPMailer/phpmailer/phpmailer/src/",
        "./Api/Controller/",
        "./Api/Dialog/",
        "./Api/Hook/",
        "./Api/Json/",
        "./Api/Model/",
        "./Api/Module/",
        "./Api/Security/",
        "./Api/Service/",
        "./Api/View/",
        "./Api/View/Analytic/",
        "./Api/View/Assignment/",
        "./Api/View/Fee/",
        "./Api/View/MarksSheet/",
        "./Api/View/Scholar/",
        "./Api/View/ShareHolder/",
        "./Api/View/Staff/",
        "./Api/View/Subject/"
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
