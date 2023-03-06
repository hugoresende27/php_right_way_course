<?php

/* NULL SAFE OPERATORS */
require_once 'core.php';

$trans = new Transaction(100);

varDump($trans);

//$trans->customer = new Customer();

//echo $trans->customer?->paymentProfile?->id;        //?-> to  null safe

//echo $trans->customer->paymentProfile->id ?? "not exist";

//Error: Call to a member function getPaymentProfile() on null
//echo $trans->getCustomer()->getPaymentProfile()->id ?? "none";

//()?-> to null safe on function call
echo $trans->getCustomer()?->getPaymentProfile()?->id ?? "none";

//careful, this case, createProfile function never runs
echo $trans->getCustomer()?->setPaymentProfile(createProfile())?->id ?? "none";