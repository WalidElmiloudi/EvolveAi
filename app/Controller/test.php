<?php
$scheme = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off')
        ? 'https'
        : 'http';

    $host = $_SERVER['HTTP_HOST'];

    // If your project is in a subfolder, add it here
    $projectFolder = '/my_project'; // '' if in htdocs root

    echo $scheme . '://' . $host . $projectFolder;