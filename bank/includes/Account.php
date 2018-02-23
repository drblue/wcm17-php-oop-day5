<?php

class Account {
	protected $accountNumber;
	protected $balance;
	protected $interest = 0;

	function __construct($accountNumber, $balance) {
		$this->accountNumber = $accountNumber;
		$this->balance = $balance;
	}

	function withdraw($amount) {}
	function deposit($amount) {}

	function getBalance() {
		return $this->balance;
	}

	function getInterest() {
		return $this->interest;
	}

	function getTotalInterest() {
		return $this->balance * $this->interest;
	}
}
