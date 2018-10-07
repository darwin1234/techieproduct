<?php 
session_start();
use PayPal\Api\Payer;
use PayPal\Api\Item;
use PayPal\Api\ItemList;
use PayPal\Api\Details;
use PayPal\Api\Amount;
use PayPal\Api\Transaction;
use PayPal\Api\RedirectUrls;
use PayPal\Api\Payment;
class dsPaypal{
	
	private $tourname;
	private $price;
	private $shipping;
	private $total;
	
	public function PaypalExecute($paypal){
		$lastID = $_SESSION['lastID'];
		$product = $this->tourname;
		$price =  $_SESSION['Price']; 
		$shipping = 0;
		$total =  $_SESSION['Price'];
		$payer = new Payer();
		$payer->setPaymentMethod('paypal');
		$item = new Item();
		$item->setName($product)
					  ->setCurrency('PHP')
					  ->setQuantity(1)
					  ->setPrice($price);
		$itemList = new ItemList();
		$itemList->setItems([$item]);
		$details = new Details();
		$details->setShipping($shipping)
				->setSubtotal($price);
		
		$amount	= new Amount();
		$amount->setCurrency('PHP')
			   ->setTotal($total)
			   ->setDetails($details);
			   
		$transaction = new Transaction();
		$transaction->setAmount($amount)
				->setItemList($itemList)
				->setDescription('Pay For Something Payment')
				->setInvoiceNumber(md5($lastID));
												
		$redirectUrls = new RedirectUrls();
		$redirectUrls->setReturnUrl('http://localhost/grabhotel/success.php/?paid=true')
					  ->setCancelUrl('http://localhost/grabhotel/success.php/?paid=false');
		$payment = new Payment();
		$payment->setIntent('sale')
				 ->setPayer($payer)
				 ->setRedirectUrls($redirectUrls)
				 ->setTransactions([$transaction]);
				  echo $payment;
		try{
			$payment->create($paypal);
		}catch(Exception $e)
		{	
			echo "<pre>";
			die($e);	
			echo "</pre>";
		}
		$approvalUrl = $payment->getApprovalLink();
		header("location: {$approvalUrl}");	
	}
	
	public function paypalparams($tourname,$price,$shipping,$total){
		
		$this->tourname 	= $tourname;
		$this->price		= $price;
		$this->shipping		= $shipping;
		$this->total		= $total;
		
	}	
	
	
}					
