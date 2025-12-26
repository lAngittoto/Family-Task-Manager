<?php
session_start();

$page = $_GET['page'] ?? 'login';

require_once __DIR__.'/../Routes/webRoute.php';