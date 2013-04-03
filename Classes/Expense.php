<?php

	class Expense {
	
		// Fields
		private $amount;
		private $account;
		private $date;
		private $description;
		
		// GETers
		function getAmount() {
			return $this->amount;
		}
		function getAccount() {
			return $this->account;
		}
		function getDate() {
			return $this->date;
		}
		function getDescription() {
			return $this->description;
		}
		
		// SETters
		function setAmount($value) {
			$this->amount = $value;
		}
		function setAccount($value) {
			$this->account = $value;
		}
		function setDate($value) {
			$this->date = $value;
		}
		function setDescription($value) {
			$this->description = $value;
		}
		
		// CONSTRUCTOR
		public function __construct($json) {
			
		}
		
	}

?>