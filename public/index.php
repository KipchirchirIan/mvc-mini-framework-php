<?php
declare(strict_types=1);

// Initialize application
$projectRoot = dirname(__DIR__, 1);  // $_SERVER['DOCUMENT_ROOT']
$envFilePath = $projectRoot . DIRECTORY_SEPARATOR . '.env';


require_once __DIR__ . '/../env_loader.php';

loadEnv($envFilePath);