<?php

namespace Bariseser\AdapterPattern;

interface ISport
{

    public function setMatchData(array $data);

    public function sendMatchResult();

}
