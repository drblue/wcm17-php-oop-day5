<?php

require("includes/Account.php");
require("includes/SavingsAccount.php");
require("includes/CreditAccount.php");

$accounts = [];
$firstAccount = new Account("1", 100);

$secondAccount = new SavingsAccount("2", 250);

$thirdAccount = new CreditAccount("3", -5000);

array_push($accounts, $firstAccount, $secondAccount, $thirdAccount);

foreach ($accounts as $account) {
	$className = get_class($account);
	$interestInPercent = $account->getInterest() * 100;
	echo "I am an account of class {$className}<br>";
	echo "The current balance is: {$account->getBalance()} kr<br>";
	echo "The accounts interest is: {$interestInPercent}%<br>";
	echo "The yearly interest would be: {$account->getTotalInterest()} kr<br>";
	echo "<br>";
}
