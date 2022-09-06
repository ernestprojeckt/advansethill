<?php

namespace AbstractFactory;

class LGfactory implements AbstractFactory

{
    public function createLCD(): AbstractLCD
    {
        return new LGLCD();
    }

    public function createLED(): AbstractLED
    {
        return new LGLED();
    }
}
