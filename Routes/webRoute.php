<?php

$page = $_GET['page'] ?? 'create-account';

$authPages = ['create-account', 'authenticate', 'admin'];

$childUSer  = [];
$parentUser = [];
$adminUser  = [];

if (in_array($page, $authPages)) {
    switch ($page) {
        case 'create-account':
            include __DIR__.'/../Auth/Controllers/createController.php';
            break;
        
        case 'authenticate':
            include __DIR__.'/../Auth/Controllers/Authenticate.php';
            break;

        case 'admin':
            require_once __DIR__.'/../App/Admin/Controllers/dashboardController.php';
            break;
    default:
            http_response_code(404);
            echo "404 Not Found";
    }
        
} elseif (in_array($page, $childUSer)){
    require_once __DIR__.'/childUser.php';
} elseif (in_array($page, $parentUser)){
    require_once __DIR__.'/parentUser.php';
} elseif (in_array($page, $adminUser)){
    require_once __DIR__.'/adminUser.php';
}
