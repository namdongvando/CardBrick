 
## System Requirements 
PHP >= 7.4 
## Installation Instructions
  
```json
{
    "require": {
       "namdongvando/cardbrick": "^3.3"
    }
}
```

And run Composer to install CardBrick:

```bash
composer require namdongvando/cardbrick 
```

## Examples/Tutorials

The links provided below are meant to demonstrate the key features included in the project. Currently, these links are using the pfbc3.0-php5 release, please see the examples included with the project for PHP 5.3 namespaced examples.
 


## Code Samples

```php
<?php
require 'vendor/autoload.php';
 
 <?php

use CardBrick\doithecaoonline;
 
doithecaoonline::SetPartnerKey("xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx");

$doithecaoonline = new doithecaoonline();

$doithecaoonline->telco = "VIETTEL";
$doithecaoonline->amount = "300000";
$doithecaoonline->serial = "yyyyyyyyyyyy";
$doithecaoonline->code = "zzzzzzzzzzzz";
$doithecaoonline->transaction_id = "123456789";
$doithecaoonline->is_fast = 0;
$res = $doithecaoonline->PartnerAddCard();

var_dump($res);

?>

?>
```

3.3
Add form render
