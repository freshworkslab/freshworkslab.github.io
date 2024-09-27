<?php
/**
 *
 * Date: 2/25/16
 * Time: 5:22 PM
 */

require (dirname(__FILE__) . '/FreshsalesAnalytics.php');

FreshsalesAnalytics::init(array(
   'domain' =>  "https://fwlabscrm.myfreshworks.com/crm/sales",
    'app_token' => "09f03f2ab515e6a2659ac75c67c74ac2fd223fc2fc3439b404d9d7d253d3e635"
));
FreshsalesAnalytics::identify(array(
    'identifier' => "john@abc.com",
    'Last name' => "Doe",
    'company' => array(
    	'Name' => "Sample Company"
    ),
    'deal' => array(
    	'Name' => "Sample Deal"
    )
));
FreshsalesAnalytics::trackEvent(array(
    'identifier' => 'john@abc.com',
    'name' => 'Sample Event Name',
    'prop1' => 'value1', //Custom Property
    'prop2' => 'value2' //Custom Property
));
FreshsalesAnalytics::trackPageView(array(
   'identifier' => 'john@abc.com',
    'url' => 'http://www.sample.com'
));
?>
