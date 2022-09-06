<?php

namespace AbstractFactory;

class SonyLED implements AbstractLED
{
    public function TVfunctionB(): string
    {
        return "SONY LED TV <br>";
    }
}