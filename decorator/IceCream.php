<?php


namespace IceCream;


class IceCream implements IIceCream
{
    const PRICE = 25;

    public function makeIceCream(): string
    {
        return "Base IceCream";
    }

    public function getPrice(): int
    {
        return self::PRICE;
    }
}
