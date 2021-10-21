<?php

namespace AllDigitalRewards\CountryMapper;

class CountryMapping
{
    /**
     * Using assests flags from our language mapper
     * @var string
     */
    private $imageBasePath = 'https://storage.googleapis.com/language_mapping/flags';

    public function getMapping()
    {
        return [
            [
                'short_code' => 'US',
                'name' => 'United States',
                'flag' => $this->imageBasePath . '/en_US.png',
            ],
            [
                'short_code' => 'ES',
                'name' => 'Spain',
                'flag' => $this->imageBasePath . '/es_ES.png',
            ],
            [
                'short_code' => 'DE',
                'name' => 'Germany',
                'flag' => $this->imageBasePath . '/de_DE.png',
            ],
            [
                'short_code' => 'IN',
                'name' => 'India',
                'flag' => $this->imageBasePath . '/hi_IN.png',
            ],
            [
                'short_code' => 'JP',
                'name' => 'Japan',
                'flag' => $this->imageBasePath . '/ja_JP.png',
            ],
            [
                'short_code' => 'KR',
                'name' => 'Korea',
                'flag' => $this->imageBasePath . '/ko_KR.png',
            ],
            [
                'short_code' => 'IT',
                'name' => 'Italy',
                'flag' => $this->imageBasePath . '/it_IT.png',
            ],
            [
                'short_code' => 'MY',
                'name' => 'Malaysia',
                'flag' => $this->imageBasePath . '/ms_MY.png',
            ],
            [
                'short_code' => 'NL',
                'name' => 'Netherlands',
                'flag' => $this->imageBasePath . '/nl_NL.png',
            ],
            [
                'short_code' => 'BR',
                'name' => 'Brazil',
                'flag' => $this->imageBasePath . '/pt_BR.png',
            ],
            [
                'short_code' => 'RU',
                'name' => 'Russia',
                'flag' => $this->imageBasePath . '/ru_RU.png',
            ],
            [
                'short_code' => 'CN',
                'name' => 'China',
                'flag' => $this->imageBasePath . '/zh_Hans_CN.png',
            ],
        ];
    }
}
