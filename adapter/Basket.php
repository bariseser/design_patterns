<?php

namespace Bariseser\AdapterPattern;

class Basket
{
    public $teamA;
    public $teamB;
    public $teamAScoreP1;
    public $teamAScoreP2;
    public $teamAScoreP3;
    public $teamAScoreP4;
    public $teamBScoreP1;
    public $teamBScoreP2;
    public $teamBScoreP3;
    public $teamBScoreP4;

    /**
     * @return mixed
     */
    public function getTeamA(): string
    {
        return $this->teamA;
    }

    /**
     * @param mixed $teamA
     */
    public function setTeamA(string $teamA)
    {
        $this->teamA = $teamA;
    }

    /**
     * @return mixed
     */
    public function getTeamB(): string
    {
        return $this->teamB;
    }

    /**
     * @param mixed $teamB
     */
    public function setTeamB(string $teamB)
    {
        $this->teamB = $teamB;
    }

    /**
     * @return mixed
     */
    public function getTeamAScoreP1(): int
    {
        return $this->teamAScoreP1;
    }

    /**
     * @param mixed $teamAScoreP1
     */
    public function setTeamAScoreP1(int $teamAScoreP1)
    {
        $this->teamAScoreP1 = $teamAScoreP1;
    }

    /**
     * @return mixed
     */
    public function getTeamAScoreP2(): int
    {
        return $this->teamAScoreP2;
    }

    /**
     * @param mixed $teamAScoreP2
     */
    public function setTeamAScoreP2(int $teamAScoreP2)
    {
        $this->teamAScoreP2 = $teamAScoreP2;
    }

    /**
     * @return mixed
     */
    public function getTeamAScoreP3(): int
    {
        return $this->teamAScoreP3;
    }

    /**
     * @param mixed $teamAScoreP3
     */
    public function setTeamAScoreP3(int $teamAScoreP3)
    {
        $this->teamAScoreP3 = $teamAScoreP3;
    }

    /**
     * @return mixed
     */
    public function getTeamAScoreP4(): int
    {
        return $this->teamAScoreP4;
    }

    /**
     * @param mixed $teamAScoreP4
     */
    public function setTeamAScoreP4(int $teamAScoreP4)
    {
        $this->teamAScoreP4 = $teamAScoreP4;
    }

    /**
     * @return mixed
     */
    public function getTeamBScoreP1(): int
    {
        return $this->teamBScoreP1;
    }

    /**
     * @param mixed $teamBScoreP1
     */
    public function setTeamBScoreP1(int $teamBScoreP1)
    {
        $this->teamBScoreP1 = $teamBScoreP1;
    }

    /**
     * @return mixed
     */
    public function getTeamBScoreP2(): int
    {
        return $this->teamBScoreP2;
    }

    /**
     * @param mixed $teamBScoreP2
     */
    public function setTeamBScoreP2(int $teamBScoreP2)
    {
        $this->teamBScoreP2 = $teamBScoreP2;
    }

    /**
     * @return mixed
     */
    public function getTeamBScoreP3(): int
    {
        return $this->teamBScoreP3;
    }

    /**
     * @param mixed $teamBScoreP3
     */
    public function setTeamBScoreP3(int $teamBScoreP3)
    {
        $this->teamBScoreP3 = $teamBScoreP3;
    }

    /**
     * @return mixed
     */
    public function getTeamBScoreP4(): int
    {
        return $this->teamBScoreP4;
    }

    /**
     * @param mixed $teamBScoreP4
     */
    public function setTeamBScoreP4(int $teamBScoreP4)
    {
        $this->teamBScoreP4 = $teamBScoreP4;
    }

    public function sendPN(): string
    {
        return $this->toString();
    }

    private function toString(): string
    {
        return sprintf("Match Result: \n%s: Period 1: %d, Period 2: %d, Period 3: %d, Period 4: %d\n%s Period 1: %d, Period 2: %d, Period 3: %d, Period 4: %d",
            $this->getTeamA(),
            $this->getTeamAScoreP1(),
            $this->getTeamAScoreP2(),
            $this->getTeamAScoreP3(),
            $this->getTeamAScoreP4(),
            $this->getTeamB(),
            $this->getTeamBScoreP1(),
            $this->getTeamBScoreP2(),
            $this->getTeamBScoreP3(),
            $this->getTeamBScoreP4());
    }
}
