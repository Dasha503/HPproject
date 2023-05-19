<?php

declare(strict_types=1);

$uriParts = parse_url($_SERVER["REQUEST_URI"]);

switch ($uriParts['path'] ?? '') {
    case '':
    case '/':
        require_once __DIR__ . DIRECTORY_SEPARATOR . 'main.php';
        break;
    case '/detail1':
        require_once __DIR__ . DIRECTORY_SEPARATOR . 'detail1.html';
        break;
    case '/detail2':
        require_once __DIR__ . DIRECTORY_SEPARATOR . 'detail2.html';
        break;
    case '/detail3':
        require_once __DIR__ . DIRECTORY_SEPARATOR . 'detail3.html';
        break;
    case '/detail4':
        require_once __DIR__ . DIRECTORY_SEPARATOR . 'detail4.html';
        break;
    case '/detail5':
        require_once __DIR__ . DIRECTORY_SEPARATOR . 'detail5.html';
        break;
    default:
        http_response_code(404);
        require_once __DIR__.DIRECTORY_SEPARATOR . '404.php';
}