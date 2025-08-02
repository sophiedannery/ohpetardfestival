<?php

$host = $_SERVER['HTTP_HOST'] ?? '';

if (!in_array($host, ['127.0.0.1', 'localhost'])) {
    $requestUri = $_SERVER['REQUEST_URI'] ?? '';
    if (
        (!isset($_SERVER['HTTPS']) || $_SERVER['HTTPS'] !== 'on') ||
        ($host !== 'www.ohpetardfestival.com')
    ) {
        header('Location: https://www.ohpetardfestival.com' . $requestUri, true, 301);
        exit();
    }
}


use App\Kernel;

require_once dirname(__DIR__) . '/vendor/autoload_runtime.php';

return function (array $context) {
    return new Kernel($context['APP_ENV'], (bool) $context['APP_DEBUG']);
};
