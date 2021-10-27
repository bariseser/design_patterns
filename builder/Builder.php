<?php


namespace Bariseser\BuilderPattern;


interface Builder
{
    public function addWheel();

    public function addEngine();

    public function addDoors();

    public function getVehicle(): Vehicle;

    public function createVehicle();
}
