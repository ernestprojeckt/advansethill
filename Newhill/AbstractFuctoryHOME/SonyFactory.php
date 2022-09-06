<?php

namespace AbstractFactory;

class SonyFactory implements AbstractFactory
{
    public function createLCD(): AbstractLCD
    {
        return new SonyLCD();
    }

    public function createLED(): AbstractLED
    {
        return new SonyLED();
    }
}