<?php

class EUProduct extends Product
{
    public function formatPrice(): string
    {
        return $this->getPrice().' €';
    }
}