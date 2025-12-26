<?php
session_start();

$page = $_GET['page'] ?? 'create-account';

require_once __DIR__.'/../Routes/webRoute.php';
