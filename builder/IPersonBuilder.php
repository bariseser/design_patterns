<?php


namespace Bariseser\BuilderPattern;


interface IPersonBuilder
{
    public function setGender();

    public function setEmployed();

    public function getResult();
}
