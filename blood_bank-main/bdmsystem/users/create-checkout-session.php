<?php

require "../users/stripe-php/init.php";

//require 'vendor/autoload.php';
\Stripe\Stripe::setApiKey('sk_test_51IY2UoSJyZhNztlR6JkxEIQlNQhPDNNCPe2pAyeR6bXIWF2hokqlf7ckvhRUB42CTAOrHbZbO5uVSixGJBCaO9Fj00GI9Gu5hB');

header('Content-Type: application/json');

$YOUR_DOMAIN = 'http://c14f2cb088ad.ngrok.io/blood_bank/bdmsystem/users';

$checkout_session = \Stripe\Checkout\Session::create([

  'payment_method_types' => ['card'],
  'line_items' => [[
    'price_data' => [
      'currency' => 'inr',
      'unit_amount' => 10000,
      'product_data' => [
        'name' => 'Blood Bank',
        // 'images' => ["https://demo.wpexperts.io/donation-product-for-woocommerce/product/wc-donation-checkout-donation/"],
      ],
    ],
    'quantity' => 1,
  ]],
  'mode' => 'payment',
  'success_url' => $YOUR_DOMAIN . '/thanks.php',
  'cancel_url' => $YOUR_DOMAIN . '/cancel.php',
]);

echo json_encode(['id' => $checkout_session->id]);