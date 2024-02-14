<?php

namespace AllDigitalRewards\Tests;

use AllDigitalRewards\CountryMapper\CountryListService;
use PHPUnit\Framework\TestCase;

class CountryListServiceTest extends TestCase
{
    public function testALIsBlacklistedCountry()
    {
        self::assertTrue((new CountryListService())->isCountryBlacklisted('AL'));
    }

    public function testBYIsBlacklistedCountry()
    {
        self::assertTrue((new CountryListService())->isCountryBlacklisted('BY'));
    }

    public function testCFIsBlacklistedCountry()
    {
        self::assertTrue((new CountryListService())->isCountryBlacklisted('CF'));
    }

    public function testHUIsBlacklistedCountry()
    {
        self::assertTrue((new CountryListService())->isCountryBlacklisted('HU'));
    }

    public function testCUIsBlacklistedCountry()
    {
        self::assertTrue((new CountryListService())->isCountryBlacklisted('CU'));
    }

    public function testKPIsBlacklistedCountry()
    {
        self::assertTrue((new CountryListService())->isCountryBlacklisted('KP'));
    }

    public function testIRIsBlacklistedCountry()
    {
        self::assertTrue((new CountryListService())->isCountryBlacklisted('IR'));
    }

    public function testIQIsBlacklistedCountry()
    {
        self::assertTrue((new CountryListService())->isCountryBlacklisted('IQ'));
    }

    public function testQZIsBlacklistedCountry()
    {
        self::assertTrue((new CountryListService())->isCountryBlacklisted('QZ'));
    }

    public function testLBIsBlacklistedCountry()
    {
        self::assertTrue((new CountryListService())->isCountryBlacklisted('LB'));
    }

    public function testLYIsBlacklistedCountry()
    {
        self::assertTrue((new CountryListService())->isCountryBlacklisted('LY'));
    }

    public function testNIIsBlacklistedCountry()
    {
        self::assertTrue((new CountryListService())->isCountryBlacklisted('NI'));
    }

    public function testSOIsBlacklistedCountry()
    {
        self::assertTrue((new CountryListService())->isCountryBlacklisted('SO'));
    }

    public function testSSIsBlacklistedCountry()
    {
        self::assertTrue((new CountryListService())->isCountryBlacklisted('SS'));
    }

    public function testSDIsBlacklistedCountry()
    {
        self::assertTrue((new CountryListService())->isCountryBlacklisted('SD'));
    }

    public function testSYIsBlacklistedCountry()
    {
        self::assertTrue((new CountryListService())->isCountryBlacklisted('SY'));
    }

    public function testVEIsBlacklistedCountry()
    {
        self::assertTrue((new CountryListService())->isCountryBlacklisted('VE'));
    }

    public function testYEIsBlacklistedCountry()
    {
        self::assertTrue((new CountryListService())->isCountryBlacklisted('YE'));
    }

    public function testZWIsBlacklistedCountry()
    {
        self::assertTrue((new CountryListService())->isCountryBlacklisted('ZW'));
    }

    public function testERIsBlacklistedCountry()
    {
        self::assertTrue((new CountryListService())->isCountryBlacklisted('ER'));
    }

    public function testMMIsBlacklistedCountry()
    {
        self::assertTrue((new CountryListService())->isCountryBlacklisted('MM'));
    }

    public function testAFIsBlacklistedCountry()
    {
        self::assertTrue((new CountryListService())->isCountryBlacklisted('AF'));
    }

    public function testCDIsBlacklistedCountry()
    {
        self::assertTrue((new CountryListService())->isCountryBlacklisted('CD'));
    }

    public function testETIsBlacklistedCountry()
    {
        self::assertTrue((new CountryListService())->isCountryBlacklisted('ET'));
    }

    public function testRUIsBlacklistedCountry()
    {
        self::assertTrue((new CountryListService())->isCountryBlacklisted('RU'));
    }

}
