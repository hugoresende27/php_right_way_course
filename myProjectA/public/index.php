<?php
/**
 * @var $transactions
 */



require 'core.php';

$totals = calculateTotals($transactions);

require VIEWS_PATH."transactions.php";



