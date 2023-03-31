<?php

namespace AllDigitalRewards\Tests;

use AllDigitalRewards\CountryMapper\CountryMapping;
use PHPUnit\Framework\TestCase;

class ApprovedCountryTest extends TestCase
{
    public function testApprovedCountryReturnsFalse()
    {
        $this->assertFalse((new CountryMapping())->isApprovedCountry('AL'));
        $this->assertFalse((new CountryMapping())->isApprovedCountry('HU'));
        $this->assertFalse((new CountryMapping())->isApprovedCountry('HR'));
    }

    public function testApprovedCountryReturnsTrue()
    {
        $this->assertTrue((new CountryMapping())->isApprovedCountry('RU'));
        $this->assertTrue((new CountryMapping())->isApprovedCountry('GB'));
        $this->assertTrue((new CountryMapping())->isApprovedCountry('RO'));
    }
}
