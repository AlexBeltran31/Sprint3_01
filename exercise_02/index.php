<?php
require 'interface.php';
require 'BankTransfer.php';
require 'PaymentProcessor.php';
require 'PayPalPaymentGateway.php';
require 'StripePaymentGateway.php';

$stripe = new StripePaymentGateway();
$paypal = new PayPalPaymentGateway();
$bank = new BankTransfer();

$processor1 = new PaymentProcessor($stripe);
echo $processor1->procesarPago(100);

$processor2 = new PaymentProcessor($paypal);
echo $processor2->procesarPago(200);

$processor3 = new PaymentProcessor($bank);
echo $processor3->procesarPago(300);