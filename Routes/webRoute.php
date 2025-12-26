<?php

$page = $_GET['page'] ?? 'login';

$authPages = ['create', 'authenticate', 'admin'];

$childUSer  = [];
$parentUser = [];
$adminUser  = [];

if (in_array($page, $authPages)) {
    switch ($pages) {
        case 'Create':
            include __DIR__.'/../Auth/Views/Create.php';
            break;
        
        case 'Authenticate':
            include __DIR__.'/../Auth/Controllers/createController.php';
            break;

        case 'Admin':
            require_once __DIR__.'/../App/\/Admin/Controllers/dashboardController.php';
            break;
    }
}
