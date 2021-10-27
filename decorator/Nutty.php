<?php


namespace IceCream;


use IceCream\IceCreamDecorator;

class Nutty extends IceCreamDecorator
{

    const PRICE = 10;

    public function makeIceCream(): string
    {
        return $this->iceCream->makeIceCream(). $this->addNuts();
    }

    private function addNuts(): string
    {
        return " + cruncy nuts";
    }

    public function getPrice(): int
    {
        return $this->iceCream->getPrice() + self::PRICE;
    }
}
