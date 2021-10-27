<?php

namespace Bariseser\AdapterPattern;

class BasketAdapter implements ISport
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

    public function sendMatchResult()
    {
        $match = new Basket();
        $match->setTeamA($this->matchData['teamA']);
        $match->setTeamB($this->matchData['teamB']);
        $match->setTeamAScoreP1($this->matchData['TeamAScoreP1']);
        $match->setTeamAScoreP2($this->matchData['TeamAScoreP2']);
        $match->setTeamAScoreP3($this->matchData['TeamAScoreP3']);
        $match->setTeamAScoreP4($this->matchData['TeamAScoreP4']);
        $match->setTeamBScoreP1($this->matchData['TeamBScoreP1']);
        $match->setTeamBScoreP2($this->matchData['TeamBScoreP2']);
        $match->setTeamBScoreP3($this->matchData['TeamBScoreP3']);
        $match->setTeamBScoreP4($this->matchData['TeamBScoreP4']);
        return $match->sendPN();
    }
}
