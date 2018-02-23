<?php

class SavingsAccount extends Account {
	protected $interest = 0.005; // 0,5%

	function getInterest() {
		return $this->interest;
	}
}
