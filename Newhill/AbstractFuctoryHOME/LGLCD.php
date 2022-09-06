<?php

namespace AbstractFactory;

class LGLCD implements AbstractLCD
{
    public function TVfunctionA(): string
    {
        return "LCD TV LG <br>";
    }
}