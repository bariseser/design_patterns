<?php


namespace IceCream;

abstract class IceCreamDecorator implements IIceCream
{

    /**
     * @var IIceCream
     */
    protected $iceCream;

    /**
     * IceCreamDecorator constructor.
     * @param $iceCream
     */
    public function __construct(IIceCream $iceCream)
    {
        $this->iceCream = $iceCream;
    }
}
