<?php

namespace App\Entity\Player;

/**
 * Class Player
 * @package App\Entity\Player
 */
class Player
{
    /**
     * @var string
     */
    private $name;

    /**
     * @var PlayerStats
     */
    private $stats = [];

    /**
     * @var array
     */
    private $skills = [];


    /**
     * Player constructor.
     * @param string $name
     * @param PlayerStats $playerStats
     */
    public function __construct(string $name, PlayerStats $playerStats)
    {
        $this->name = $name;
        $this->stats = $playerStats;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @return PlayerStats
     */
    public function getStats(): PlayerStats
    {
        return $this->stats;
    }

    /**
     * @return array
     */
    public function getSkills(): array
    {
        return $this->skills;
    }

    /**
     * @param $skills
     */
    public function setSkills($skills): void
    {
        $this->skills = $skills;
    }
}