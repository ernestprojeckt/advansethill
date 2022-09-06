<?php

namespace AbstractFactory;

class SonyLCD implements AbstractLCD
{
    public function TVfunctionA(): string
    {
        return "SONY TV LCD <br>";
    }
}