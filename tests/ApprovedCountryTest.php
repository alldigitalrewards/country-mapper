<?php

namespace AllDigitalRewards\Tests;

use AllDigitalRewards\CountryMapper\CountryMapping;
use PHPUnit\Framework\TestCase;

class ApprovedCountryTest extends TestCase
{
    public function testArrayOfApprovedCountries()
    {
        $approvedList = ['US', 'CA', 'MX', 'ES', 'DE', 'IN', 'JP', 'KR', 'IT', 'MY', 'NL', 'BR', 'RU', 'CN'];
        $countries = (new CountryMapping())->getApprovedCountryList();
        $this->assertSame($approvedList, $countries);
    }

    public function testApprovedCountryReturnsFalse()
    {
        $this->assertFalse((new CountryMapping())->isApprovedCountry('AL'));
    }

    public function testApprovedCountryReturnsTrue()
    {
        $this->assertTrue((new CountryMapping())->isApprovedCountry('RU'));
    }
}
