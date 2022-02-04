<?php

class VOD
{
    public array $films;
    public float $tarif;
    public static int $nombreAbonnes;

    public function __construct()
    {
        $this->films = [
            'Harry Potter et la coupe de feu',
            'Iron Man',
            'Les visiteurs',
            'Fast and Furious',
            'Star Wars',
        ];
        $this->tarif = 11.99;
        self::$nombreAbonnes = 1500;
    }

    /**
     * @return array|string[]
     */
    public function getFilms(): array
    {
        return $this->films;
    }

    /**
     * @param array|string[] $films
     */
    public function setFilms(array $films): void
    {
        $this->films = $films;
    }

    /**
     * @return float
     */
    public function getTarif(): float
    {
        return $this->tarif;
    }

    /**
     * @param float $tarif
     */
    public function setTarif(float $tarif): void
    {
        $this->tarif = $tarif;
    }

    /**
     * @return int
     */
    public static function getNombreAbonne(): int
    {
        return self::$nombreAbonnes;
    }

    /**
     * @param int $nombreAbonne
     */
    public static function setNombreAbonne(int $nombreAbonne): void
    {
        self::$nombreAbonnes = $nombreAbonne;
    }

    /**
     * @param int $addAbo
     */
    public static function addAbos(int $addAbo): void
    {
        self::$nombreAbonnes = $addAbo;
    }

    /**
     * @return int
     */
    public static function getAbo(): int
    {
        return self::$nombreAbonnes;
    }
}
