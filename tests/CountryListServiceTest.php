<?php

namespace AllDigitalRewards\Tests;

use AllDigitalRewards\CountryMapper\CountryListService;
use PHPUnit\Framework\TestCase;

class CountryListServiceTest extends TestCase
{
    public function testPuertoRicoIsBlacklistedCountry()
    {
        self::assertTrue((new CountryListService())->isCountryBlacklisted('PR'));
    }
}
