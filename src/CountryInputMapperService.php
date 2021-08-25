<?php

namespace AllDigitalRewards\CountryMapper;

use AllDigitalRewards\CountryMapper\Entity\Country;
use Exception;
use League\ISO3166\ISO3166;

class CountryInputMapperService
{
    /**
     * @param mixed $countryInput
     * @return Country
     * @throws CountryMapperException
     */
    public function getMappedCountry($countryInput): Country
    {
        $this->validate($countryInput);

        $lookup = (string)$countryInput;

        $data = $this->findByAlpha2($lookup);
        if (empty($data) === false) {
            return $this->hydrateCountry($data);
        }
        $data = $this->findByIso($lookup);
        if (empty($data) === false) {
            return $this->hydrateCountry($data);
        }

        throw new CountryMapperException('Country: ' . $lookup . ' not found');
    }

    private function findByAlpha2(string $country): ?array
    {
        try {
            $countryCodeLookup = new ISO3166();
            return $countryCodeLookup->alpha2($country);
        } catch (Exception $exception) {
            return null;
        }
    }

    private function findByIso(string $country): ?array
    {
        try {
            $countryCodeLookup = new ISO3166();
            return $countryCodeLookup->numeric($country);
        } catch (Exception $exception) {
            return null;
        }
    }

    /**
     * @param mixed $iso
     * @return Country
     * @throws CountryMapperException
     */
    public function getIsoToAlpha($iso): Country
    {
        $this->validate($iso);

        $data = $this->findByIso((string)$iso);
        if (empty($data) === true) {
            throw new CountryMapperException('Country: ' . $iso . ' not found');
        }
        return $this->hydrateCountry($data);
    }

    /**
     * @throws CountryMapperException
     */
    public function getAlphaToIso(string $alpha): Country
    {
        $this->validate($alpha);

        $data = $this->findByAlpha2($alpha);
        if (empty($data) === true) {
            throw new CountryMapperException('Country: ' . $alpha . ' not found');
        }
        return $this->hydrateCountry($data);
    }

    /**
     * @param string $alpha2
     * @return mixed
     * @throws CountryMapperException
     */
    public function getWhitelistedAlpha2(string $alpha2)
    {
        $country = $this->getAlphaToIso($alpha2);
        if ($this->isCountryBlacklisted($country->getAlpha2())) {
            throw new CountryMapperException("Country: {$country->getAlpha2()} is a blacklisted country");
        }
        return $country->getAlpha2();
    }

    /**
     * @param string $iso
     * @return mixed
     * @throws CountryMapperException
     */
    public function getWhitelistedIso(string $iso)
    {
        $country = $this->getIsoToAlpha($iso);
        if ($this->isCountryBlacklisted($country->getAlpha2())) {
            throw new CountryMapperException("Country: {$country->getAlpha2()} is a blacklisted country");
        }
        return $country->getNumeric();
    }

    private function hydrateCountry(array $data): Country
    {
        return new Country($data);
    }

    /**
     * @throws CountryMapperException
     */
    private function validate($country)
    {
        if (empty($country) === true || empty(trim($country)) === true) {
            throw new CountryMapperException('You must provide a country for mapping');
        }
    }

    /**
     * @param string $alpha2
     * @return bool
     */
    private function isCountryBlacklisted(string $alpha2): bool
    {
        return in_array($alpha2, (new CountryListService())->blacklistedCountries());
    }
}
