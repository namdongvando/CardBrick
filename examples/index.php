<?php

use CardBrick\doithecaoonline;

include "../src/doithecaoonline.php";
include "../src/HttpClient.php";

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