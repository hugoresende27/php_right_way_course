<?php
declare(strict_types=1);
class Transaction{

//    private float $amount;
//    private string $description;
//
//    public function __construct(float $amount, string $description){
//
//        $this->amount = $amount;
//        $this->description = $description;
//    }


    private ?Customer $customer = null;

    /**
     * @return Customer|null
     */
    public function getCustomer(): ?Customer
    {
        return $this->customer;
    }

    /**
     * @param Customer|null $customer
     */
    public function setCustomer(?Customer $customer): void
    {
        $this->customer = $customer;
    }

// ////////////////short construct

    public function __construct(private float $amount,
                                private ?string $description = null){

        echo $description;
    }

    public function addTax (float $rate): Transaction   //return object
    {
        $this->amount += $this->amount * $rate / 100;
        return $this;
    }

    public function applyDiscount (float $rate): Transaction    //return object
    {
        $this->amount -= $this->amount * $rate / 100;
        return $this;
    }

    public function getAmount() : float {
        return $this->amount;
    }

    public function __destruct()
    {
//        echo '<li>Destruct '.$this->description . "</li>";    //use in some cases
    }
}