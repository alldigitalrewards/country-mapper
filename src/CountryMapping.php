<?php

namespace AllDigitalRewards\CountryMapper;

class CountryMapping
{
    /**
     * Using assets flags from our language mapper
     * @var string
     */
    private $imageFlagBasePath = 'https://storage.googleapis.com/language_mapping/flags';
    private $imageCountryBasePath = 'https://storage.googleapis.com/country_mapper/flags';

    public function getMapping(): array
    {
        return [
            [
                'short_code' => 'US',
                'name' => 'United States',
                'flag' => $this->imageFlagBasePath . '/en_US.png',
            ],
            [
                'short_code' => 'CA',
                'name' => 'Canada',
                'flag' => $this->imageCountryBasePath . '/Canada.png',
            ],
            [
                'short_code' => 'MX',
                'name' => 'Mexico',
                'flag' => $this->imageCountryBasePath . '/mexico.jpeg',
            ],
            [
                'short_code' => 'ES',
                'name' => 'Spain',
                'flag' => $this->imageFlagBasePath . '/es_ES.png',
            ],
            [
                'short_code' => 'DE',
                'name' => 'Germany',
                'flag' => $this->imageFlagBasePath . '/de_DE.png',
            ],
            [
                'short_code' => 'IN',
                'name' => 'India',
                'flag' => $this->imageFlagBasePath . '/hi_IN.png',
            ],
            [
                'short_code' => 'JP',
                'name' => 'Japan',
                'flag' => $this->imageFlagBasePath . '/ja_JP.png',
            ],
            [
                'short_code' => 'KR',
                'name' => 'Korea',
                'flag' => $this->imageFlagBasePath . '/ko_KR.png',
            ],
            [
                'short_code' => 'IT',
                'name' => 'Italy',
                'flag' => $this->imageFlagBasePath . '/it_IT.png',
            ],
            [
                'short_code' => 'MY',
                'name' => 'Malaysia',
                'flag' => $this->imageFlagBasePath . '/ms_MY.png',
            ],
            [
                'short_code' => 'NL',
                'name' => 'Netherlands',
                'flag' => $this->imageFlagBasePath . '/nl_NL.png',
            ],
            [
                'short_code' => 'BR',
                'name' => 'Brazil',
                'flag' => $this->imageFlagBasePath . '/pt_BR.png',
            ],
            [
                'short_code' => 'RU',
                'name' => 'Russia',
                'flag' => $this->imageFlagBasePath . '/ru_RU.png',
            ],
            [
                'short_code' => 'CN',
                'name' => 'China',
                'flag' => $this->imageFlagBasePath . '/zh_Hans_CN.png',
            ],
            [
                'short_code' => 'AT',
                'name' => 'Austria',
                'flag' => $this->imageFlagBasePath . '/austria.png',
            ],
            [
                'short_code' => 'BE',
                'name' => 'Belgium',
                'flag' => $this->imageFlagBasePath . '/belgium.png',
            ],
            [
                'short_code' => 'BG',
                'name' => 'Bulgaria',
                'flag' => $this->imageFlagBasePath . '/bulgaria.png',
            ],
            [
                'short_code' => 'CY',
                'name' => 'Cyprus',
                'flag' => $this->imageFlagBasePath . '/cyprus.png',
            ],
            [
                'short_code' => 'CZ',
                'name' => 'Czech Republic',
                'flag' => $this->imageFlagBasePath . '/czech_republic.png',
            ],
            [
                'short_code' => 'DK',
                'name' => 'Denmark',
                'flag' => $this->imageFlagBasePath . '/denmark.png',
            ],
            [
                'short_code' => 'EE',
                'name' => 'Estonia',
                'flag' => $this->imageFlagBasePath . '/estonia.png',
            ],
            [
                'short_code' => 'FI',
                'name' => 'Finland',
                'flag' => $this->imageFlagBasePath . '/finland.png',
            ],
            [
                'short_code' => 'FR',
                'name' => 'France',
                'flag' => $this->imageFlagBasePath . '/france.png',
            ],
            [
                'short_code' => 'GR',
                'name' => 'Greece',
                'flag' => $this->imageFlagBasePath . '/greece.png',
            ],
            [
                'short_code' => 'IE',
                'name' => 'Ireland',
                'flag' => $this->imageFlagBasePath . '/ireland.png',
            ],
            [
                'short_code' => 'LV',
                'name' => 'Latvia',
                'flag' => $this->imageFlagBasePath . '/latvia.png',
            ],
            [
                'short_code' => 'LT',
                'name' => 'Lithuania',
                'flag' => $this->imageFlagBasePath . '/lithuania.png',
            ],
            [
                'short_code' => 'LU',
                'name' => 'Luxembourg',
                'flag' => $this->imageFlagBasePath . '/luxembourg.png',
            ],
            [
                'short_code' => 'MT',
                'name' => 'Malta',
                'flag' => $this->imageFlagBasePath . '/malta.png',
            ],
            [
                'short_code' => 'PL',
                'name' => 'Poland',
                'flag' => $this->imageFlagBasePath . '/poland.png',
            ],
            [
                'short_code' => 'PT',
                'name' => 'Portugal',
                'flag' => $this->imageFlagBasePath . '/portugal.png',
            ],
            [
                'short_code' => 'RO',
                'name' => 'Romania',
                'flag' => $this->imageFlagBasePath . '/romania.png',
            ],
            [
                'short_code' => 'SK',
                'name' => 'Slovakia',
                'flag' => $this->imageFlagBasePath . '/slovakia.png',
            ],
            [
                'short_code' => 'SI',
                'name' => 'Slovenia',
                'flag' => $this->imageFlagBasePath . '/slovenia.png',
            ],
            [
                'short_code' => 'SE',
                'name' => 'Sweden',
                'flag' => $this->imageFlagBasePath . '/sweden.png',
            ],
            [
                'short_code' => 'GB',
                'name' => 'United Kingdom',
                'flag' => $this->imageFlagBasePath . '/uk.png',
            ],
        ];
    }

    public function getApprovedCountryList(): array
    {
        return array_map(
            function ($row) {
                return $row['short_code'];
            },
            $this->getMapping()
        );
    }

    public function isApprovedCountry(string $country): bool
    {
        return in_array($country, $this->getApprovedCountryList());
    }
}
