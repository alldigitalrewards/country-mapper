<?php

namespace AllDigitalRewards\CountryMapper\Entity;

class Country extends AbstractEntity
{
    protected $alpha2;
    protected $numeric;

    /**
     * @return mixed
     */
    public function getAlpha2()
    {
        return $this->alpha2;
    }

    /**
     * @param mixed $alpha2
     */
    public function setAlpha2($alpha2): void
    {
        $this->alpha2 = $alpha2;
    }

    /**
     * @return mixed
     */
    public function getNumeric()
    {
        return $this->numeric;
    }

    /**
     * @param mixed $numeric
     */
    public function setNumeric($numeric): void
    {
        $this->numeric = $numeric;
    }
}
