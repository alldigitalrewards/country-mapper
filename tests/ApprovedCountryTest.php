<?php

namespace AllDigitalRewards\Tests;

use AllDigitalRewards\CountryMapper\CountryListService;
use AllDigitalRewards\CountryMapper\CountryMapping;
use PHPUnit\Framework\TestCase;

class ApprovedCountryTest extends TestCase
{
    public function testApprovedCountryReturnsFalse()
    {
        $this->assertFalse((new CountryMapping())->isApprovedCountry('AL'));
    }

    public function testApprovedCountryReturnsTrue()
    {
        $this->assertTrue((new CountryMapping())->isApprovedCountry('RU'));
        $this->assertTrue((new CountryMapping())->isApprovedCountry('GB'));
        $this->assertTrue((new CountryMapping())->isApprovedCountry('RO'));
    }

    public function testCountryMappingInBlacklisted()
    {
        $blacklisted = (new CountryListService())->blacklistedCountries();
        $mapper = (new CountryMapping())->getApprovedCountryList();
        $blacklisted[] = $mapper[0];//add a country that is in the approved list to make this fail
        $result = array_intersect($blacklisted, $mapper);
        $this->assertNotEmpty($result);
    }

    public function testCountryMappingIsNotInBlacklisted()
    {
        $blacklisted = (new CountryListService())->blacklistedCountries();
        $mapper = new CountryMapping();
        $result = array_intersect($blacklisted, $mapper->getApprovedCountryList());
        $this->assertEmpty($result);
    }
}
