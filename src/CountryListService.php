<?php

namespace AllDigitalRewards\CountryMapper;

class CountryListService
{
    /**
     * @return array
     */
    public function blacklistedCountries(): array
    {
        return ['AL','BY','BA','BI','CF','HR','CU','KP','CD','IR','IQ','QZ','LA','LB','LY','MK','ME','NI','RS','SO','SS','SD','SY','UA','VE','YE','ZW','BS','BB','BJ','BF','KH','KY','TD','CO','KM','CG','DO','GQ','ER','GN','GW','HT','LS','LR','MG','MM','PA','UG'];
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
