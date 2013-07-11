# SupportBee.com PHP API Library (W.I.P)
PHP library to interact with Great API from supportbee.com for more information check https://developers.supportbee.com/api.

### Requirements
* PHP 5.3+
* Curl 

### Usage 
```
$params = array(
  'sub_domain' => 'your sub domain',
  'auth_token' => 'API Token'  # You can find your API token in Settings > API Token screen.
);

$supportbee = new SupportBee\Client($params);
```

### Example fetch tickets
Get latest tickets from your SupportBee account.
```
$supportbee->getTickets();
```