<?php 

require 'vendor/autoload.php';

define("SITE_URL","http://localhost/paypal");

$paypal = new \PayPal\Rest\ApiContext(
	new \PayPal\Auth\OAuthTokenCredential(
	'AWKVBe7s71s0hsiU3TEeQbEbeS657DVayhP_ub1zTiR11fP7TKwJhnWSXUThDEbWcM0roY6JrqAWHOAT',
	'EDx4G_-IvjdL5bSvqPYhZTNkDo0X00DVi4lIQ-_COZ5S30A8zF241jKtoSPndjfGeSoENiS7dG3j5qic'
	)
);
