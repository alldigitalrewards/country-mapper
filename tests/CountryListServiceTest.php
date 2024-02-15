<?php

namespace AllDigitalRewards\Tests;

use AllDigitalRewards\CountryMapper\CountryListService;
use PHPUnit\Framework\TestCase;

class CountryListServiceTest extends TestCase
{
    /**
     * @dataProvider blacklistedCountriesDataSource
     */
    public function testBlacklistedCountries($countryCode)
    {
        self::assertTrue((new CountryListService())->isCountryBlacklisted($countryCode));
    }

    public function blacklistedCountriesDataSource()
    {
        return [
            ['AL'],
            ['BY'],
            ['CF'],
            ['HU'],
            ['CU'],
            ['KP'],
            ['IR'],
            ['IQ'],
            ['QZ'],
            ['LB'],
            ['LY'],
            ['NI'],
            ['SO'],
            ['SS'],
            ['SD'],
            ['SY'],
            ['VE'],
            ['YE'],
            ['ZW'],
            ['ER'],
            ['MM'],
            ['AF'],
            ['CD'],
            ['ET'],
            ['RU'],
        ];
    }
}
