<?php
require 'Currency.php';
$currency=new Currency();

$currencies=$currency->getCurrencies();
$currency->calculate_rate($_GET['amount'], $_GET['from']);

require 'views/currency-converter.php';