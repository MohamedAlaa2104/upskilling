<?php


namespace Classes;
class Account
{
    public function __construct(protected float $balance, protected bool $isActive, protected string $accountType, public $accountOwner)
    {
    }

    public function getBalance(): void
    {
        echo 'Your balance is ' . $this->balance . '<br>';
    }

    public function deposit(float $amount): void
    {
//        if ($this->isActive === false) {
//            echo 'Your account is not active. Please contact the bank' . '<br>';
//            return;
//        }

        if (!$this->isActive()) {
            return;
        }

        $this->balance += $amount;
    }

    public function withdraw(float $amount): void
    {
//        if ($this->isActive === false) {
//            echo 'Your account is not active. Please contact the bank' . '<br>';
//            return;
//        }


//        if ($amount > $this->balance) {
//            echo 'You do not have enough balance. Your current balance is ' . $this->balance . '<br>';
//            return;
//        }

        // Or  true || True => true
        // Or false || True => true
        // Or false || false => false


        // And  true || True => true
        // And false || True => false
        // And false || false => false


        if (!$this->isActive() || !$this->isEnoughBalance($amount)) {
            return;
        }


        $this->balance -= $amount;
    }


    public function getAccountType(): void
    {
        echo 'Hello Mr. ' . $this->accountOwner->printMyName() . '. Your account type is ' . $this->accountType . '<br>';
    }


    protected function isActive(): bool
    {
        if ($this->isActive === false) {
            echo "Sorry, Mr. {$this->accountOwner->printMyName()} Your account is not active. Please contact the bank" . '<br>';
            return false;
        }

        return true;
    }


    protected function isEnoughBalance(float $amount): bool
    {
        if ($amount > $this->balance) {
            echo "Sorry, Mr. {$this->accountOwner->printMyName()} You do not have enough balance. Your current balance is " . $this->balance . '<br>';
            return false;
        }

        return true;
    }


}