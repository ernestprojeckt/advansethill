<?php

namespace AbstractFactory;

use AbstractFactory\LGfactory;

interface AbstractFactory

{
    public function createLCD(): AbstractLCD;

    public function createLED(): AbstractLED;
}


function clientCode(AbstractFactory $factory)
{
    $TvLCD = $factory->createLCD();
    $TvLED = $factory->createLED();

    echo $TvLCD->TVfunctionA();
    echo $TvLED->TVfunctionB();
}


echo  clientCode(new LGfactory());

echo "<br>";

echo clientCode(new SonyFactory());
