<?php

//Declaring namespace
namespace LaswitchTech\MAIL;

//Import SMTP class into the global namespace
//These must be at the top of your script, not inside a function
use LaswitchTech\SMTP\phpSMTP;
use LaswitchTech\IMAP\phpIMAP;

class phpMAIL {

  protected $SMTP;
  protected $IMAP;

	public function __construct(){
    // Setup phpSMTP
		$this->SMTP = new phpSMTP();
    // Setup phpIMAP
		$this->IMAP = new phpIMAP();
	}

}
