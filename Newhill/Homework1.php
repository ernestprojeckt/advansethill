<?php

class ValueObject
{
    private $red;
    private $green;
    private $blue;

        public function __construct(int $red, int $blue, int $green)
        {
            $this->setRed($red);
            $this->setGreen($green);
            $this->setBlue($blue);
            $this->Equals($red,$green,$blue);
        }

    public function getBlue(int $blue): int
    {

        return $this->blue;
    }


    private function setBlue(int $blue)
    {
        if ($blue < 0 || $blue > 250  ) {
            throw new Exception('blue fail');
        }
        $this->blue = $blue;
    }

    public function getGreen(): int
    {
        return $this->green;
    }

    private function setGreen(int $green): void
    {
        if ($green < 0 || $green > 250  ) {
            throw new Exception('green fail');
        }
        $this->green = $green;
    }

    public function getRed(): int
    {
        return $this->red;
    }

    private function setRed(int $red): void
    {
        if ($red < 0 || $red > 250  ) {
            throw new Exception('red fail');
        }
        $this->red = $red;
    }
     public function Equals(int $blue, int $red , int $green)
     {
         if ($red === $blue && $blue === $green){
             echo 'true'.PHP_EOL;
         } else {
             echo 'false'.PHP_EOL;
         }
     }
     public static function Random()
     {
         $red = random_int(0, 250);
         $blue = random_int(0, 250);
         $green = random_int(0, 250);
         $rgbColors = new static($blue,$red,$green);
         return $rgbColors;
     }
     public static function Mix($red,$blue,$green)
     {

         $mixcolor = ($red+$blue+$green)/2;
         return $mixcolor;
     }



}
$color = ValueObject::Random();
try {
    $color;
}catch (Exception $e)
{
    echo $e;
}

$color = ValueObject::Mix(100,100,100);
var_dump($color);
