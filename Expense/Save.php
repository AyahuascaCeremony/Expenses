<?php

	$expense = file_get_contents("php://input");  
	echo $expense;
	if ($newExpense = json_decode($expense))
	{
		echo $newExpense->Amount;
	}

	//echo "plain expense : " . $expense;
	//echo "object expense: ";
	//print_r($newExpense);
	//echo $newExpense->Amount;
	//echo $newExpense->Account;
	//echo $newExpense->Date;
?>