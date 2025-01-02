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
                'dial_code' => '+1',
            ],
            [
                'short_code' => 'CA',
                'name' => 'Canada',
                'flag' => $this->imageCountryBasePath . '/Canada.png',
                'currency' => 'CAD',
                'dial_code' => '+1',
            ],
            [
                'short_code' => 'MX',
                'name' => 'Mexico',
                'flag' => $this->imageCountryBasePath . '/mexico.jpeg',
                'currency' => 'MXN',
                'dial_code' => '+52',
            ],
            [
                'short_code' => 'ES',
                'name' => 'Spain',
                'flag' => $this->imageFlagBasePath . '/es_ES.png',
                'currency' => 'EUR',
                'dial_code' => '+34',
            ],
            [
                'short_code' => 'DE',
                'name' => 'Germany',
                'flag' => $this->imageFlagBasePath . '/de_DE.png',
                'currency' => 'EUR',
                'dial_code' => '+49',
            ],
            [
                'short_code' => 'IN',
                'name' => 'India',
                'flag' => $this->imageFlagBasePath . '/hi_IN.png',
                'currency' => 'INR',
                'dial_code' => '+91',
            ],
            [
                'short_code' => 'JP',
                'name' => 'Japan',
                'flag' => $this->imageFlagBasePath . '/ja_JP.png',
                'currency' => 'JPY',
                'dial_code' => '+81',
            ],
            [
                'short_code' => 'KR',
                'name' => 'Korea',
                'flag' => $this->imageFlagBasePath . '/ko_KR.png',
                'currency' => 'KRW',
                'dial_code' => '+82',
            ],
            [
                'short_code' => 'IT',
                'name' => 'Italy',
                'flag' => $this->imageFlagBasePath . '/it_IT.png',
                'currency' => 'EUR',
                'dial_code' => '+39',
            ],
            [
                'short_code' => 'MY',
                'name' => 'Malaysia',
                'flag' => $this->imageFlagBasePath . '/ms_MY.png',
                'currency' => 'MYR',
                'dial_code' => '+60',
            ],
            [
                'short_code' => 'NL',
                'name' => 'Netherlands',
                'flag' => $this->imageFlagBasePath . '/nl_NL.png',
                'currency' => 'EUR',
                'dial_code' => '+31',
            ],
            [
                'short_code' => 'BR',
                'name' => 'Brazil',
                'flag' => $this->imageFlagBasePath . '/pt_BR.png',
                'currency' => 'BRL',
                'dial_code' => '+55',
            ],
            [
                'short_code' => 'CN',
                'name' => 'China',
                'flag' => $this->imageFlagBasePath . '/zh_Hans_CN.png',
                'currency' => 'CNY',
                'dial_code' => '+86',
            ],
            [
                'short_code' => 'AT',
                'name' => 'Austria',
                'flag' => $this->imageFlagBasePath . '/austria.png',
                'currency' => 'EUR',
                'dial_code' => '+43',
            ],
            [
                'short_code' => 'BE',
                'name' => 'Belgium',
                'flag' => $this->imageFlagBasePath . '/belgium.png',
                'currency' => 'EUR',
                'dial_code' => '+32',
            ],
            [
                'short_code' => 'BM',
                'name' => 'Bermuda',
                'flag' => $this->imageFlagBasePath . '/bermuda.png',
                'currency' => 'BMD',
                'dial_code' => '+1',
            ],
            [
                'short_code' => 'BG',
                'name' => 'Bulgaria',
                'flag' => $this->imageFlagBasePath . '/bulgaria.png',
                'currency' => 'BGN',
                'dial_code' => '+359',
            ],
            [
                'short_code' => 'CY',
                'name' => 'Cyprus',
                'flag' => $this->imageFlagBasePath . '/cyprus.png',
                'currency' => 'EUR',
                'dial_code' => '+357',
            ],
            [
                'short_code' => 'CZ',
                'name' => 'Czech Republic',
                'flag' => $this->imageFlagBasePath . '/czech_republic.png',
                'currency' => 'CZK',
                'dial_code' => '+420',
            ],
            [
                'short_code' => 'DK',
                'name' => 'Denmark',
                'flag' => $this->imageFlagBasePath . '/denmark.png',
                'currency' => 'DKK',
                'dial_code' => '+45',
            ],
            [
                'short_code' => 'EE',
                'name' => 'Estonia',
                'flag' => $this->imageFlagBasePath . '/estonia.png',
                'currency' => 'EUR',
                'dial_code' => '+372',
            ],
            [
                'short_code' => 'FI',
                'name' => 'Finland',
                'flag' => $this->imageFlagBasePath . '/finland.png',
                'currency' => 'EUR',
                'dial_code' => '+358',
            ],
            [
                'short_code' => 'FR',
                'name' => 'France',
                'flag' => $this->imageFlagBasePath . '/fr_FR.png',
                'currency' => 'EUR',
                'dial_code' => '+33',
            ],
            [
                'short_code' => 'GR',
                'name' => 'Greece',
                'flag' => $this->imageFlagBasePath . '/greece.png',
                'currency' => 'EUR',
                'dial_code' => '+30',
            ],
            [
                'short_code' => 'IE',
                'name' => 'Ireland',
                'flag' => $this->imageFlagBasePath . '/ireland.png',
                'currency' => 'EUR',
                'dial_code' => '+353',
            ],
            [
                'short_code' => 'LV',
                'name' => 'Latvia',
                'flag' => $this->imageFlagBasePath . '/latvia.png',
                'currency' => 'EUR',
                'dial_code' => '+371',
            ],
            [
                'short_code' => 'LT',
                'name' => 'Lithuania',
                'flag' => $this->imageFlagBasePath . '/lithuania.png',
                'currency' => 'EUR',
                'dial_code' => '+370',
            ],
            [
                'short_code' => 'LU',
                'name' => 'Luxembourg',
                'flag' => $this->imageFlagBasePath . '/luxembourg.png',
                'currency' => 'EUR',
                'dial_code' => '+352',
            ],
            [
                'short_code' => 'MT',
                'name' => 'Malta',
                'flag' => $this->imageFlagBasePath . '/malta.png',
                'currency' => 'EUR',
                'dial_code' => '+356',
            ],
            [
                'short_code' => 'PL',
                'name' => 'Poland',
                'flag' => $this->imageFlagBasePath . '/poland.png',
                'currency' => 'PLN',
                'dial_code' => '+48',
            ],
            [
                'short_code' => 'PT',
                'name' => 'Portugal',
                'flag' => $this->imageFlagBasePath . '/portugal.png',
                'currency' => 'EUR',
                'dial_code' => '+351',
            ],
            [
                'short_code' => 'RO',
                'name' => 'Romania',
                'flag' => $this->imageFlagBasePath . '/romania.png',
                'currency' => 'RON',
                'dial_code' => '+40',
            ],
            [
                'short_code' => 'SK',
                'name' => 'Slovakia',
                'flag' => $this->imageFlagBasePath . '/slovakia.png',
                'currency' => 'EUR',
                'dial_code' => '+421',
            ],
            [
                'short_code' => 'SI',
                'name' => 'Slovenia',
                'flag' => $this->imageFlagBasePath . '/slovenia.png',
                'currency' => 'EUR',
                'dial_code' => '+386',
            ],
            [
                'short_code' => 'SE',
                'name' => 'Sweden',
                'flag' => $this->imageFlagBasePath . '/sweden.png',
                'currency' => 'SEK',
                'dial_code' => '+46',
            ],
            [
                'short_code' => 'GB',
                'name' => 'United Kingdom',
                'flag' => $this->imageFlagBasePath . '/en_GB.png',
                'currency' => 'GBP',
                'dial_code' => '+44',
            ],
            [
                'short_code' => 'AE',
                'name' => 'United Arab Emirates',
                'flag' => $this->imageFlagBasePath . '/ar_AE.png',
                'currency' => 'AED',
                'dial_code' => '+971',
            ],
            [
                'short_code' => 'AR',
                'name' => 'Argentina',
                'flag' => $this->imageFlagBasePath . '/es_AR.png',
                'currency' => 'ARS',
                'dial_code' => '+54',
            ],
            [
                'short_code' => 'AU',
                'name' => 'Australia',
                'flag' => $this->imageFlagBasePath . '/en_AU.png',
                'currency' => 'AUD',
                'dial_code' => '+61',
            ],
            [
                'short_code' => 'BD',
                'name' => 'Bangladesh',
                'flag' => $this->imageFlagBasePath . '/bn_BD.png',
                'currency' => 'BDT',
                'dial_code' => '+880',
            ],
            [
                'short_code' => 'BH',
                'name' => 'Bahrain',
                'flag' => $this->imageFlagBasePath . '/ar_BH.png',
                'currency' => 'BHD',
                'dial_code' => '+973',
            ],
            [
                'short_code' => 'CH',
                'name' => 'Switzerland',
                'flag' => $this->imageFlagBasePath . '/de_CH.png',
                'currency' => 'CHF',
                'dial_code' => '+41',
            ],
            [
                'short_code' => 'CO',
                'name' => 'Colombia',
                'flag' => $this->imageFlagBasePath . '/es_CO.png',
                'currency' => 'COP',
                'dial_code' => '+57',
            ],
            [
                'short_code' => 'EG',
                'name' => 'Egypt',
                'flag' => $this->imageFlagBasePath . '/ar_EG.png',
                'currency' => 'EGP',
                'dial_code' => '+20',
            ],
            [
                'short_code' => 'HR',
                'name' => 'Croatia',
                'flag' => $this->imageFlagBasePath . '/hr_HR.png',
                'currency' => 'EUR',
                'dial_code' => '+385',
            ],
            [
                'short_code' => 'HK',
                'name' => 'Hong Kong',
                'flag' => $this->imageFlagBasePath . '/zh_HK.png',
                'currency' => 'HKD',
                'dial_code' => '+852',
            ],
            [
                'short_code' => 'HU',
                'name' => 'Hungary',
                'flag' => $this->imageFlagBasePath . '/hu_HU.png',
                'currency' => 'HUF',
                'dial_code' => '+36',
            ],
            [
                'short_code' => 'ID',
                'name' => 'Indonesia',
                'flag' => $this->imageFlagBasePath . '/id_ID.png',
                'currency' => 'IDR',
                'dial_code' => '+62',
            ],
            [
                'short_code' => 'IL',
                'name' => 'Israel',
                'flag' => $this->imageFlagBasePath . '/he_IL.png',
                'currency' => 'ILS',
                'dial_code' => '+972',
            ],
            [
                'short_code' => 'IL',
                'name' => 'Israel',
                'flag' => $this->imageFlagBasePath . '/he_IL.png',
                'currency' => 'ILS',
                'dial_code' => '+972',
            ],
            [
                'short_code' => 'JO',
                'name' => 'Jordan',
                'flag' => $this->imageFlagBasePath . '/ar_JO.png',
                'currency' => 'JOD',
                'dial_code' => '+962',
            ],
            [
                'short_code' => 'KW',
                'name' => 'Kuwait',
                'flag' => $this->imageFlagBasePath . '/ar_KW.png',
                'currency' => 'KWD',
                'dial_code' => '+965',
            ],
            [
                'short_code' => 'LK',
                'name' => 'Sri Lanka',
                'flag' => $this->imageFlagBasePath . '/si_LK.png',
                'currency' => 'LKR',
                'dial_code' => '+94',
            ],
            [
                'short_code' => 'NO',
                'name' => 'Norway',
                'flag' => $this->imageFlagBasePath . '/nn_NO.png',
                'currency' => 'NOK',
                'dial_code' => '+47',
            ],
            [
                'short_code' => 'NZ',
                'name' => 'New Zealand',
                'flag' => $this->imageFlagBasePath . '/en_NZ.png',
                'currency' => 'NZD',
                'dial_code' => '+64',
            ],
            [
                'short_code' => 'OM',
                'name' => 'Oman',
                'flag' => $this->imageFlagBasePath . '/ar_OM.png',
                'currency' => 'OMR',
                'dial_code' => '+968',
            ],
            [
                'short_code' => 'PH',
                'name' => 'Philippines',
                'flag' => $this->imageFlagBasePath . '/en_PH.png',
                'currency' => 'PHP',
                'dial_code' => '+63',
            ],
            [
                'short_code' => 'SA',
                'name' => 'Saudi Arabia',
                'flag' => $this->imageFlagBasePath . '/ar_SA.png',
                'currency' => 'SAR',
                'dial_code' => '+966',
            ],
            [
                'short_code' => 'SG',
                'name' => 'Singapore',
                'flag' => $this->imageFlagBasePath . '/zh_SG.png',
                'currency' => 'SGD',
                'dial_code' => '+65',
            ],
            [
                'short_code' => 'TH',
                'name' => 'Thailand',
                'flag' => $this->imageFlagBasePath . '/th_TH.png',
                'currency' => 'THB',
                'dial_code' => '+66',
            ],
            [
                'short_code' => 'TR',
                'name' => 'Turkey',
                'flag' => $this->imageFlagBasePath . '/tr_TR.png',
                'currency' => 'TRY',
                'dial_code' => '+90',
            ],
            [
                'short_code' => 'UY',
                'name' => 'Uruguay',
                'flag' => $this->imageFlagBasePath . '/es_UY.png',
                'currency' => 'UYU',
                'dial_code' => '+598',
            ],
            [
                'short_code' => 'VN',
                'name' => 'Vietnam',
                'flag' => $this->imageFlagBasePath . '/vi_VN.png',
                'currency' => 'VND',
                'dial_code' => '+84',
            ],
            [
                'short_code' => 'PK',
                'name' => 'Pakistan',
                'flag' => $this->imageFlagBasePath . '/ur_PK.png',
                'currency' => 'PKR',
                'dial_code' => '+92',
            ],
            [
                'short_code' => 'MO',
                'name' => 'Macau',
                'flag' => $this->imageFlagBasePath . '/zh_MO.png',
                'currency' => 'MOP',
                'dial_code' => '+853',
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
