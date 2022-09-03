<?php

abstract class Taxi
{
    abstract public function factorymetod() : Product;

    public function TaxiOperation($TaxiDrive): void
    {
        $product = $this->factorymetod();
        $product->Model();
        $product->Price();
        $product->TaxiMove($TaxiDrive);
    }
}

Class Econom extends Taxi
{
    private $EconomeTaxi ;

    public function __construct(string $EconomeTaxi)
    {
        $this->EconomeTaxi = $EconomeTaxi;
    }

    public function factorymetod(): Product
    {
        return new ConEconom($this->EconomeTaxi);
    }
}

class Standart extends Taxi
{
    private $StandartTaxi;

    public function __construct(string $StandartTaxi)
    {
        $this->StandartTaxi = $StandartTaxi;
    }

    public function factorymetod(): Product
    {
        return new ConStandart($this->StandartTaxi);
    }
}

class Luxe extends Taxi
{
    private $LuxeTaxi;

    public function __construct(string $LuxeTaxi)
    {
        $this->LuxeTaxi = $LuxeTaxi;
    }

    public function factorymetod(): Product
    {
        return new ConLuxe($this->LuxeTaxi);
    }
}

interface Product
{
    public function Model(): void;
    public function Price(): void;
    public function TaxiMove($taxiDrive): void;

}

Class ConEconom implements Product
{
    private $EconomTaxi;

    public function __construct(string $EconomTaxi)
    {
        $this->EconomTaxi = $EconomTaxi;
    }

    public function Model(): void
    {
        echo "Reno 203 ";
    }

    public function Price(): void
    {
        echo " 4$ ";
    }

    public function TaxiMove($taxiDrive): void
    {
        echo $this->EconomTaxi ;
    }
}

class ConStandart implements Product
{
        private $StandarteTaxi;

        public function __construct(string $StandarteTaxi)
        {
            $this->StandarteTaxi = $StandarteTaxi;
        }

    public function Price(): void
        {
            echo "15$";
        }
        public function Model(): void
        {
            echo "Mersedes 420";
        }
        public function TaxiMove($taxiDrive): void
        {
            echo $this->StandarteTaxi;
        }
}

class ConLuxe implements Product
{
    private $luxsesTaxi;

    public function __construct(string $luxsesTaxi)
    {
        $this->luxsesTaxi = $luxsesTaxi;
    }

    public function Model(): void
    {
        echo "Lexsus";
    }
    public function Price(): void
    {
        echo "50$";
    }
    public function TaxiMove($taxiDrive): void
    {
        echo $this->luxsesTaxi;
    }
}
function clientCode(Taxi $taxi)
{
    $taxi->TaxiOperation("Такси приехало");

}


clientCode(new Econom("Econom"));

clientCode(new Standart("Standart"));

clientCode(new Luxe("Lux"));