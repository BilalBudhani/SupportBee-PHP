<?php
require __dir__.'/../lib/supportbee.php';

$params = array(
  'sub_domain' => 'your sub domain',
  'auth_token' => 'API Token'  # You can find your API token in Settings > API Token screen.
);

$supportbee = new SupportBee\Client($params);
$tickets = $supportbee->getTickets();

echo '<pre>';
print_r($tickets);

?>