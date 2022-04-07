<!-- Load Stripe.js on your website. -->
<script src="https://js.stripe.com/v3"></script>

<!-- Create a button that your customers click to complete their purchase. Customize the styling to suit your branding. -->
<style type="text/css">
  body{
    margin: 0;
  }
  .right{
    position: absolute;
    width: 60%;
    height: calc(100%);
    display:inline-block;
    text-align: center;
  }
  .right img{
    width: 100%;
    height: 100%;
  }
  .left{
    background-color:pink;
    position: absolute;
    right: 0;
    width: 40%;
    height: calc(100%);
    display:inline-block;
    text-align: center;
  }
  .left button{
    width: 90%;
    background-color:#6772E5;
    color:#FFF;
    padding:8px 12px;
    border:0;
    border-radius:4px;
    font-size:1em;
    cursor: pointer;
    margin-top: 304px;
  }
</style>
<body>
    <div class="right">
      <img src="donation.jpg">
    </div>
    <div class="left">
      <button id="checkout-button-price_1IYPYeSJyZhNztlRmhAsvGfF" role="link" type="button"> Checkout </button>
    </div>
</body>
<?php
$YOUR_DOMAIN = 'http://localhost/blood_bank-main/bdmsystem/users';
?>

<div id="error-message"></div>

<script>
(function() {
  var stripe = Stripe('pk_test_51IY2UoSJyZhNztlRhzFBJkBAMUjP5ffSBVJosvkRfQpnd82HWDI3vJBJeCvJFdb23Tcn9TUYuvSsorRznUbc0ZYz00fQM5ElOw');

  var checkoutButton = document.getElementById('checkout-button-price_1IYPYeSJyZhNztlRmhAsvGfF');
  checkoutButton.addEventListener('click', function () {
    /*
     * When the customer clicks on the button, redirect
     * them to Checkout.
     */
    stripe.redirectToCheckout({
      lineItems: [{price: 'price_1IYPYeSJyZhNztlRmhAsvGfF', quantity: 1}],
      mode: 'payment',
      /*
       * Do not rely on the redirect to the successUrl for fulfilling
       * purchases, customers may not always reach the success_url after
       * a successful payment.
       * Instead use one of the strategies described in
       * https://stripe.com/docs/payments/checkout/fulfill-orders
       */
      successUrl: 'http://localhost/blood_bank/bdmsystem/users/thanks.php',
      cancelUrl: 'http://localhost/blood_bank/bdmsystem/users/cancel.php',
    })
    .then(function (result) {
      if (result.error) {
        /*
         * If `redirectToCheckout` fails due to a browser or network
         * error, display the localized error message to your customer.
         */
        var displayError = document.getElementById('error-message');
        displayError.textContent = result.error.message;
      }
    });
  });
})();
</script>
