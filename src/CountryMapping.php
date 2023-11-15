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
                'currency' => 'USD',
            ],
            [
                'short_code' => 'CA',
                'name' => 'Canada',
                'flag' => $this->imageCountryBasePath . '/Canada.png',
                'currency' => 'CAD',
            ],
            [
                'short_code' => 'MX',
                'name' => 'Mexico',
                'flag' => $this->imageCountryBasePath . '/mexico.jpeg',
                'currency' => 'MXN',
            ],
            [
                'short_code' => 'ES',
                'name' => 'Spain',
                'flag' => $this->imageFlagBasePath . '/es_ES.png',
                'currency' => 'EUR',
            ],
            [
                'short_code' => 'DE',
                'name' => 'Germany',
                'flag' => $this->imageFlagBasePath . '/de_DE.png',
                'currency' => 'EUR',
            ],
            [
                'short_code' => 'IN',
                'name' => 'India',
                'flag' => $this->imageFlagBasePath . '/hi_IN.png',
                'currency' => 'INR',
            ],
            [
                'short_code' => 'JP',
                'name' => 'Japan',
                'flag' => $this->imageFlagBasePath . '/ja_JP.png',
                'currency' => 'JPY',
            ],
            [
                'short_code' => 'KR',
                'name' => 'Korea',
                'flag' => $this->imageFlagBasePath . '/ko_KR.png',
                'currency' => 'KRW',
            ],
            [
                'short_code' => 'IT',
                'name' => 'Italy',
                'flag' => $this->imageFlagBasePath . '/it_IT.png',
                'currency' => 'EUR',
            ],
            [
                'short_code' => 'MY',
                'name' => 'Malaysia',
                'flag' => $this->imageFlagBasePath . '/ms_MY.png',
                'currency' => 'MYR',
            ],
            [
                'short_code' => 'NL',
                'name' => 'Netherlands',
                'flag' => $this->imageFlagBasePath . '/nl_NL.png',
                'currency' => 'EUR',
            ],
            [
                'short_code' => 'BR',
                'name' => 'Brazil',
                'flag' => $this->imageFlagBasePath . '/pt_BR.png',
                'currency' => 'BRL',
            ],
            [
                'short_code' => 'RU',
                'name' => 'Russia',
                'flag' => $this->imageFlagBasePath . '/ru_RU.png',
                'currency' => 'RUB',
            ],
            [
                'short_code' => 'CN',
                'name' => 'China',
                'flag' => $this->imageFlagBasePath . '/zh_Hans_CN.png',
                'currency' => 'CNY',
            ],
            [
                'short_code' => 'AT',
                'name' => 'Austria',
                'flag' => $this->imageFlagBasePath . '/austria.png',
                'currency' => 'EUR',
            ],
            [
                'short_code' => 'BE',
                'name' => 'Belgium',
                'flag' => $this->imageFlagBasePath . '/belgium.png',
                'currency' => 'EUR',
            ],
            [
                'short_code' => 'BG',
                'name' => 'Bulgaria',
                'flag' => $this->imageFlagBasePath . '/bulgaria.png',
                'currency' => 'BGN',
            ],
            [
                'short_code' => 'CY',
                'name' => 'Cyprus',
                'flag' => $this->imageFlagBasePath . '/cyprus.png',
                'currency' => 'EUR',
            ],
            [
                'short_code' => 'CZ',
                'name' => 'Czech Republic',
                'flag' => $this->imageFlagBasePath . '/czech_republic.png',
                'currency' => 'CZK',
            ],
            [
                'short_code' => 'DK',
                'name' => 'Denmark',
                'flag' => $this->imageFlagBasePath . '/denmark.png',
                'currency' => 'DKK',
            ],
            [
                'short_code' => 'EE',
                'name' => 'Estonia',
                'flag' => $this->imageFlagBasePath . '/estonia.png',
                'currency' => 'EUR',
            ],
            [
                'short_code' => 'FI',
                'name' => 'Finland',
                'flag' => $this->imageFlagBasePath . '/finland.png',
                'currency' => 'EUR',
            ],
            [
                'short_code' => 'FR',
                'name' => 'France',
                'flag' => $this->imageFlagBasePath . '/fr_FR.png',
                'currency' => 'EUR',
            ],
            [
                'short_code' => 'GR',
                'name' => 'Greece',
                'flag' => $this->imageFlagBasePath . '/greece.png',
                'currency' => 'EUR',
            ],
            [
                'short_code' => 'IE',
                'name' => 'Ireland',
                'flag' => $this->imageFlagBasePath . '/ireland.png',
                'currency' => 'EUR',
            ],
            [
                'short_code' => 'LV',
                'name' => 'Latvia',
                'flag' => $this->imageFlagBasePath . '/latvia.png',
                'currency' => 'EUR',
            ],
            [
                'short_code' => 'LT',
                'name' => 'Lithuania',
                'flag' => $this->imageFlagBasePath . '/lithuania.png',
                'currency' => 'EUR',
            ],
            [
                'short_code' => 'LU',
                'name' => 'Luxembourg',
                'flag' => $this->imageFlagBasePath . '/luxembourg.png',
                'currency' => 'EUR',
            ],
            [
                'short_code' => 'MT',
                'name' => 'Malta',
                'flag' => $this->imageFlagBasePath . '/malta.png',
                'currency' => 'EUR',
            ],
            [
                'short_code' => 'PL',
                'name' => 'Poland',
                'flag' => $this->imageFlagBasePath . '/poland.png',
                'currency' => 'PLN',
            ],
            [
                'short_code' => 'PT',
                'name' => 'Portugal',
                'flag' => $this->imageFlagBasePath . '/portugal.png',
                'currency' => 'EUR',
            ],
            [
                'short_code' => 'RO',
                'name' => 'Romania',
                'flag' => $this->imageFlagBasePath . '/romania.png',
                'currency' => 'RON',
            ],
            [
                'short_code' => 'SK',
                'name' => 'Slovakia',
                'flag' => $this->imageFlagBasePath . '/slovakia.png',
                'currency' => 'EUR',
            ],
            [
                'short_code' => 'SI',
                'name' => 'Slovenia',
                'flag' => $this->imageFlagBasePath . '/slovenia.png',
                'currency' => 'EUR',
            ],
            [
                'short_code' => 'SE',
                'name' => 'Sweden',
                'flag' => $this->imageFlagBasePath . '/sweden.png',
                'currency' => 'SEK',
            ],
            [
                'short_code' => 'GB',
                'name' => 'United Kingdom',
                'flag' => $this->imageFlagBasePath . '/en_GB.png',
                'currency' => 'GBP',
            ],
            [
                'short_code' => 'AE',
                'name' => 'United Arab Emirates',
                'flag' => $this->imageFlagBasePath . '/united_arab_emirates.png',
                'currency' => 'AED',
            ],
            [
                'short_code' => 'AR',
                'name' => 'Argentina',
                'flag' => $this->imageFlagBasePath . '/argentina.png',
                'currency' => 'ARS',
            ],
            [
                'short_code' => 'AU',
                'name' => 'Australia',
                'flag' => $this->imageFlagBasePath . '/australia.png',
                'currency' => 'AUD',
            ],
            [
                'short_code' => 'BD',
                'name' => 'Bangladesh',
                'flag' => $this->imageFlagBasePath . '/bangladesh.png',
                'currency' => 'BDT',
            ],
            [
                'short_code' => 'BH',
                'name' => 'Bahrain',
                'flag' => $this->imageFlagBasePath . '/bahrain.png',
                'currency' => 'BHD',
            ],
            [
                'short_code' => 'CH',
                'name' => 'Switzerland',
                'flag' => $this->imageFlagBasePath . '/switzerland.png',
                'currency' => 'CHF',
            ],
            [
                'short_code' => 'CL',
                'name' => 'Chile',
                'flag' => $this->imageFlagBasePath . '/chile.png',
                'currency' => 'CLP',
            ],
            [
                'short_code' => 'CO',
                'name' => 'Colombia',
                'flag' => $this->imageFlagBasePath . '/colombia.png',
                'currency' => 'COP',
            ],
            [
                'short_code' => 'EG',
                'name' => 'Egypt',
                'flag' => $this->imageFlagBasePath . '/egypt.png',
                'currency' => 'EGP',
            ],
            [
                'short_code' => 'HR',
                'name' => 'Croatia',
                'flag' => $this->imageFlagBasePath . '/croatia.png',
                'currency' => 'EUR',
            ],
            [
                'short_code' => 'HK',
                'name' => 'Hong Kong',
                'flag' => $this->imageFlagBasePath . '/hong_kong.png',
                'currency' => 'HKD',
            ],
            [
                'short_code' => 'HU',
                'name' => 'Hungary',
                'flag' => $this->imageFlagBasePath . '/hungary.png',
                'currency' => 'HUF',
            ],
            [
                'short_code' => 'ID',
                'name' => 'Indonesia',
                'flag' => $this->imageFlagBasePath . '/indonesia.png',
                'currency' => 'IDR',
            ],
            [
                'short_code' => 'IL',
                'name' => 'Israel',
                'flag' => $this->imageFlagBasePath . '/israel.png',
                'currency' => 'ILS',
            ],
            [
                'short_code' => 'JO',
                'name' => 'Jordan',
                'flag' => $this->imageFlagBasePath . '/jordan.png',
                'currency' => 'JOD',
            ],
            [
                'short_code' => 'KW',
                'name' => 'Kuwait',
                'flag' => $this->imageFlagBasePath . '/kuwait.png',
                'currency' => 'KWD',
            ],
            [
                'short_code' => 'LK',
                'name' => 'Sri Lanka',
                'flag' => $this->imageFlagBasePath . '/sri_lanka.png',
                'currency' => 'LKR',
            ],
            [
                'short_code' => 'NO',
                'name' => 'Norway',
                'flag' => $this->imageFlagBasePath . '/norway.png',
                'currency' => 'NOK',
            ],
            [
                'short_code' => 'NZ',
                'name' => 'New Zealand',
                'flag' => $this->imageFlagBasePath . '/new_zealand.png',
                'currency' => 'NZD',
            ],
            [
                'short_code' => 'OM',
                'name' => 'Oman',
                'flag' => $this->imageFlagBasePath . '/oman.png',
                'currency' => 'OMR',
            ],
            [
                'short_code' => 'PE',
                'name' => 'Peru',
                'flag' => $this->imageFlagBasePath . '/peru.png',
                'currency' => 'PEN',
            ],
            [
                'short_code' => 'PH',
                'name' => 'Philippines',
                'flag' => $this->imageFlagBasePath . '/philippines.png',
                'currency' => 'PHP',
            ],
            [
                'short_code' => 'QA',
                'name' => 'Qatar',
                'flag' => $this->imageFlagBasePath . '/qatar.png',
                'currency' => 'QAR',
            ],
            [
                'short_code' => 'SA',
                'name' => 'Saudi Arabia',
                'flag' => $this->imageFlagBasePath . '/saudi_arabia.png',
                'currency' => 'SAR',
            ],
            [
                'short_code' => 'SG',
                'name' => 'Singapore',
                'flag' => $this->imageFlagBasePath . '/singapore.png',
                'currency' => 'SGD',
            ],
            [
                'short_code' => 'TH',
                'name' => 'Thailand',
                'flag' => $this->imageFlagBasePath . '/thailand.png',
                'currency' => 'THB',
            ],
            [
                'short_code' => 'TR',
                'name' => 'Turkey',
                'flag' => $this->imageFlagBasePath . '/turkey.png',
                'currency' => 'TRY',
            ],
            [
                'short_code' => 'TW',
                'name' => 'Taiwan',
                'flag' => $this->imageFlagBasePath . '/taiwan.png',
                'currency' => 'TWD',
            ],
            [
                'short_code' => 'UY',
                'name' => 'Uruguay',
                'flag' => $this->imageFlagBasePath . '/uruguay.png',
                'currency' => 'UYU',
            ],
            [
                'short_code' => 'VN',
                'name' => 'Vietnam',
                'flag' => $this->imageFlagBasePath . '/vietnam.png',
                'currency' => 'VND',
            ],
            [
                'short_code' => 'MO',
                'name' => 'Macau',
                'flag' => $this->imageFlagBasePath . '/macau.png',
                'currency' => 'MOP',
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
