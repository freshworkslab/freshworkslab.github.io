<?php
// Include the FreshsalesAnalytics library
require 'FreshsalesAnalytics.php';

// Initialize the Freshsales library with your domain and app token
FreshsalesAnalytics::init(array(
    'domain' => 'https://fwlabscrm.myfreshworks.com/crm/sales', // Replace with your Freshsales domain
    'app_token' => '09f03f2ab515e6a2659ac75c67c74ac2fd223fc2fc3439b404d9d7d253d3e635' // Replace with your app token
));

// Capture user data and the page URL dynamically
$userIdentifier = 'john.doe@example.com'; // Replace this with dynamic user data from session or database

// Capture the full page URL dynamically
$scheme = isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? 'https' : 'http';
$host = $_SERVER['HTTP_HOST'];
$uri = $_SERVER['REQUEST_URI'];
$fullUrl = "$scheme://$host$uri";

// Track the page view
FreshsalesAnalytics::trackPageView(array(
    'identifier' => $userIdentifier,
    'url' => $fullUrl
));

// Optional: Display a confirmation message
echo "Page view tracked successfully for $userIdentifier on $fullUrl.";
?>

