<?php

$host = $_SERVER['HTTP_HOST'] ?? '';
$localHosts = ['127.0.0.1', 'localhost', '::1']; // IPv4, IPv6, nom local

if (!in_array($host, $localHosts, true)) {
    // Détecter HTTPS même derrière un proxy (Heroku)
    $isHttps = (
        (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on')
        || (!empty($_SERVER['HTTP_X_FORWARDED_PROTO']) && $_SERVER['HTTP_X_FORWARDED_PROTO'] === 'https')
    );

    if (!$isHttps || $host !== 'www.ohpetardfestival.com') {
        $requestUri = $_SERVER['REQUEST_URI'] ?? '';
        header('Location: https://www.ohpetardfestival.com' . $requestUri, true, 301);
        exit();
    }
}

use App\Kernel;

require_once dirname(__DIR__) . '/vendor/autoload_runtime.php';
return function (array $context) {
    return new Kernel($context['APP_ENV'], (bool) $context['APP_DEBUG']);
};
