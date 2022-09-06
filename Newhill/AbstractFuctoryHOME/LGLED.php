<?php

namespace AbstractFactory;

class LGLED implements AbstractLED
{
    public function TVfunctionB(): string
    {
        return "LG LED TV <br>";
    }
}