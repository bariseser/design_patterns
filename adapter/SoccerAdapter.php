<?php

namespace Bariseser\AdapterPattern;

class SoccerAdapter implements ISport
{
    /**
     * @var array
     */
    private $matchData = [];

    /**
     * @param array $matchData
     */
    public function setMatchData(array $matchData)
    {
        $this->matchData = $matchData;
    }

    public function sendMatchResult(): string
    {
        $pn = new Soccer();
        $pn->setTeamA($this->matchData['teamA']);
        $pn->setTeamB($this->matchData['teamB']);
        $pn->setTeamAScore($this->matchData['teamAScore']);
        $pn->setTeamBScore($this->matchData['teamBScore']);
        return $pn->sendPN();
    }
}
