<?php

class USProduct extends Product
{
    public function formatPrice(): string
    {
        return '$'.$this->getPrice();
    }
}