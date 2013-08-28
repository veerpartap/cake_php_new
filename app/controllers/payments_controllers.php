<?php

/*
	Author : Veerpartap Singh
	Created: 24-06-2013
*/

class PaymentController extends AppController 
{

	var $name = "payments";
		
	public function beforeFilter()
	{
		// this function gets executed before any action of the payment controller gets executed
	}


	public function make_payment()
	{
		// this function gets executed when user is making payment for subscription plan 
	}


	public function saveTransaction()
	{
		// this function will save the transaction of the payment made by user in database and send an email to both admin and customer 
	}
}



?>
