<?php


namespace Classes;


class Money
{
    private float $amount;
    private Currency $currency;

    public function __construct($amount, Currency $currency)
    {
        $this->setAmount($amount);
        $this->setCurrency($currency);
    }


    public function getAmount(): float
    {
        return $this->amount;
    }

    public function getCurrency(): Currency
    {
        return $this->currency;

    }

    private function setAmount($amount): void
    {
        if (is_float($amount) || is_int($amount)) {
            $this->amount = floatval($amount);
        } else throw new \InvalidArgumentException($amount . " is not number!");

    }

    private function setCurrency( Currency $currency): void
    {

        $this->currency = $currency;

    }

    public function equals(Money $money): bool
    {
        if ($this == $money) {
            return true;
        }
        return false;


    }

    public function add(Money $money): Money
    {
        if (!$this->currency->equals($money->currency)) {
            throw new \InvalidArgumentException("these objects have different currency, I can't sum them");

        }
        return new Money($this->getAmount() + $money->getAmount(), $this->currency);

    }


}

$money1 = new Money(124.2, new Currency('UAH'));
$money2 = new Money(14, new Currency('USD'));
$money3 = new Money(26.53, new Currency('EUR'));
$money4 = new Money(12.5, new Currency('USD'));
$money5 = new Money(18.7, new Currency('USD'));
