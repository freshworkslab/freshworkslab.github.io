<?php
// Include the FreshsalesAnalytics library
require 'FreshsalesAnalytics.php';

// Initialize FreshsalesAnalytics with your domain and app token
FreshsalesAnalytics::init(array(
    'domain' => 'https://fwlabscrm.myfreshworks.com/crm/sales', // Replace with your Freshsales domain
    'app_token' => '09f03f2ab515e6a2659ac75c67c74ac2fd223fc2fc3439b404d9d7d253d3e635' // Replace with your app token
));

// Capture form data
$firstName = $_POST['firstName'];
$lastName = $_POST['lastName'];
$email = $_POST['email'];
$alternateContactNumber = $_POST['alternateContactNumber'];
$companyName = $_POST['companyName'];
$website = $_POST['website'];

// Prepare data for Freshsales
$new_contact = array(
    "first_name" => $firstName,
    "last_name" => $lastName,
    "email" => $email,
    "custom_field_alternate_contact_number" => $alternateContactNumber, // Replace with the actual field name in Freshsales
    "company" => array(
        "name" => $companyName,
        "website" => $website
    )
);

// Send data to Freshsales using the identify method
FreshsalesAnalytics::identify($email, $new_contact);

// Optional: Redirect to a thank you page or show a success message
echo "Thank you for registering! Your information has been saved.";
?>
