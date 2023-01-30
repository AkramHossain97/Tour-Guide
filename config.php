<?php
require('stripe-php-master/init.php');

$publishableKey="Your Key(key hidden for personal safety)";

$secretKey="Your Key(key hidden for personal safety)";

\Stripe\Stripe ::setApikey($secretKey);
?>