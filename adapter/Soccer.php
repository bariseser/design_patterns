<?php

namespace Bariseser\AdapterPattern;

class Soccer
{
    public $teamA;
    public $teamB;
    public $teamAScore;
    public $teamBScore;

    /**
     * @return mixed
     */
    public function getTeamA()
    {
        return $this->teamA;
    }

    /**
     * @param mixed $teamA
     */
    public function setTeamA($teamA)
    {
        $this->teamA = $teamA;
    }

    /**
     * @return mixed
     */
    public function getTeamB()
    {
        return $this->teamB;
    }

    /**
     * @param mixed $teamB
     */
    public function setTeamB($teamB)
    {
        $this->teamB = $teamB;
    }

    /**
     * @return mixed
     */
    public function getTeamAScore()
    {
        return $this->teamAScore;
    }

    /**
     * @param mixed $teamAScore
     */
    public function setTeamAScore($teamAScore)
    {
        $this->teamAScore = $teamAScore;
    }

    /**
     * @return mixed
     */
    public function getTeamBScore()
    {
        return $this->teamBScore;
    }

    /**
     * @param mixed $teamBScore
     */
    public function setTeamBScore($teamBScore)
    {
        $this->teamBScore = $teamBScore;
    }

    public function sendPN(): string
    {
        return $this->toString();
    }

    private function toString(): string
    {
        return sprintf("Match Result: %s %d - %s %d", $this->getTeamA(), $this->getTeamAScore(), $this->getTeamB(), $this->getTeamBScore());
    }

}
