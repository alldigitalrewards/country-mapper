<?php

namespace AllDigitalRewards\CountryMapper;

class CountryListService
{
    /**
     * @return array
     */
    public function blacklistedCountries(): array
    {
        return ['AL','BY','CF','HU','CU','KP','IR','IQ','QZ','LB','LY','NI','SO','SS','SD','SY','VE','YE','ZW','ER','MM','AF','CD','ET','RU'];
    }

    /**
     * @param string $country
     * @return bool
     */
    public function isCountryBlacklisted(string $country): bool
    {
        return in_array($country, $this->blacklistedCountries());
    }
}
