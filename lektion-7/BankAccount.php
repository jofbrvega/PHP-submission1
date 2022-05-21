<?php

class BankAccount
{
    //Properties
    public $account_number;
    public $balance;

    public function deposit($amount) 
    {
        if ($amount > 0 ) {
            $this->balance += $amount;
        }   
    }
    public function withdraw($amount) 
    {
        if ($amount <= $this->balance) {
            $this->balance -= $amount;
            return true;
        }
        return false;
    }   
}

?>