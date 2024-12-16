<?php
// Load environment variables
$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();

// Access environment variables
define('EBAY_API_KEY', getenv('EBAY_API_KEY'));
define('GOOGLE_API_KEY', getenv('GOOGLE_API_KEY'));
define('AMAZON_API_KEY', getenv('AMAZON_API_KEY'));
define('SERP_API_KEY', getenv('SERP_API_KEY'));
