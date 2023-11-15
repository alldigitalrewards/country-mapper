<?php

namespace AllDigitalRewards\CountryMapper;

class CountryListService
{
    public function blacklistedCountries(): array
    {
        return ['AL','BY','BA','BI','CF', 'CU','KP','CD','IR','IQ','QZ','LA','LB','LY','MK','ME','NI','RS','SO','SS','SD','SY','UA','VE','YE','ZW','BS','BB','BJ','BF','KH','KY','TD', 'KM','CG','DO','GQ','ER','GN','GW','HT','LS','LR','MG','MM','PA','UG','PR'];
    }

    public function isCountryBlacklisted(string $country): bool
    {
        return in_array($country, $this->blacklistedCountries());
    }
}
