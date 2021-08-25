<?php

namespace AllDigitalRewards\Tests;

use AllDigitalRewards\CountryMapper\CountryInputMapperService;
use AllDigitalRewards\CountryMapper\CountryMapperException;
use AllDigitalRewards\CountryMapper\Entity\Country;
use PHPUnit\Framework\TestCase;

class CountryMapperTest extends TestCase
{
    public function testGetMappedCountryThrowsExceptionWithEmptyInput()
    {
        try {
            $service = (new CountryInputMapperService())->getMappedCountry('');
        } catch (CountryMapperException $e) {
            $this->assertSame('You must provide a country for mapping', $e->getMessage());
        }
    }

    public function testGetMappedCountryThrowsExceptionWithInvalidCountry()
    {
        try {
            $service = (new CountryInputMapperService())->getMappedCountry('ZZ');
        } catch (CountryMapperException $e) {
            $this->assertSame('Country: ZZ not found', $e->getMessage());
        }
    }

    public function testGetMappedCountryReturnsCountryWithAlpha()
    {
        $country = (new CountryInputMapperService())->getMappedCountry('US');
        $this->assertInstanceOf(Country::class, $country);
        $this->assertSame('US', $country->getAlpha2());
        $this->assertSame('840', $country->getNumeric());
    }

    public function testGetMappedCountryReturnsCountryWithNumeric()
    {
        $country = (new CountryInputMapperService())->getMappedCountry('840');
        $this->assertInstanceOf(Country::class, $country);
        $this->assertSame('US', $country->getAlpha2());
        $this->assertSame('840', $country->getNumeric());
    }

    public function testGetWhitelistedAlpha2ThrowsException()
    {
        try {
            $service = (new CountryInputMapperService())->getWhitelistedAlpha2('ZZ');
        } catch (CountryMapperException $e) {
            $this->assertSame('Country: ZZ not found', $e->getMessage());
        }
    }

    public function testGetWhitelistedAlpha2ReturnsCountryAlpha()
    {
        $alpha = (new CountryInputMapperService())->getWhitelistedAlpha2('US');
        $this->assertSame('US', $alpha);
    }

    public function testGetWhitelistedIsoThrowsException()
    {
        try {
            $service = (new CountryInputMapperService())->getWhitelistedIso('922');
        } catch (CountryMapperException $e) {
            $this->assertSame('Country: 922 not found', $e->getMessage());
        }
    }

    public function testGetWhitelistedIsoReturnsCountryNumeric()
    {
        $numeric = (new CountryInputMapperService())->getWhitelistedIso(840);
        $this->assertSame('840', $numeric);
    }

    public function testGetWhitelistedAlphaThrowsBlackListedException()
    {
        try {
            $service = (new CountryInputMapperService())->getWhitelistedAlpha2('AL');
        } catch (CountryMapperException $e) {
            $this->assertSame("Country: AL is a blacklisted country", $e->getMessage());
        }
    }

    public function testGetWhitelistedIsoThrowsBlackListedException()
    {
        try {
            $service = (new CountryInputMapperService())->getWhitelistedIso('008');
        } catch (CountryMapperException $e) {
            $this->assertSame("Country: AL is a blacklisted country", $e->getMessage());
        }
    }
}
