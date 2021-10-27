<?php


namespace IceCream;

class Honey extends IceCreamDecorator
{

    public function makeIceCream(): string
    {
        $this->iceCream->makeIceCream() . $this->addHoney();
    }

    private function addHoney(): string
    {
        return " + sweet honey";
    }

    public function getPrice(): int
    {
        return $this->iceCream->getPrice() + self::PRICE;
    }
}
