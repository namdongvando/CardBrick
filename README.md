 
## System Requirements 
PHP >= 7.4 
## Installation Instructions
  
```json
{
    "require": {
       "namdongvando/cardbrick": "^1.00"
    }
}
```

And run Composer to install CardBrick:

```bash
composer require namdongvando/cardbrick 
```

## Examples/Tutorials
 

## Code Samples

```php
<?php
require 'vendor/autoload.php';
  
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
```
 
