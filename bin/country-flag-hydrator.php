<?php

use GuzzleHttp\Client;

require __DIR__ . '/../vendor/autoload.php';

$countries = [
    [
        'short_code' => 'AE',
        'name' => 'United Arab Emirates',
        'currency' => 'AED',
    ],
    [
        'short_code' => 'AR',
        'name' => 'Argentina',
        'currency' => 'ARS',
    ],
    [
        'short_code' => 'AU',
        'name' => 'Australia',
        'currency' => 'AUD',
    ],
    [
        'short_code' => 'BD',
        'name' => 'Bangladesh',
        'currency' => 'BDT',
    ],
    [
        'short_code' => 'BH',
        'name' => 'Bahrain',
        'currency' => 'BHD',
    ],
    [
        'short_code' => 'CH',
        'name' => 'Switzerland',
        'currency' => 'CHF',
    ],
    [
        'short_code' => 'CL',
        'name' => 'Chile',
        'currency' => 'CLP',
    ],
    [
        'short_code' => 'CO',
        'name' => 'Colombia',
        'currency' => 'COP',
    ],
    [
        'short_code' => 'EG',
        'name' => 'Egypt',
        'currency' => 'EGP',
    ],
    [
        'short_code' => 'HR',
        'name' => 'Croatia',
        'currency' => 'EUR',
    ],
    [
        'short_code' => 'HK',
        'name' => 'Hong Kong',
        'currency' => 'HKD',
    ],
    [
        'short_code' => 'HU',
        'name' => 'Hungary',
        'currency' => 'HUF',
    ],
    [
        'short_code' => 'ID',
        'name' => 'Indonesia',
        'currency' => 'IDR',
    ],
    [
        'short_code' => 'IL',
        'name' => 'Israel',
        'currency' => 'ILS',
    ],
    [
        'short_code' => 'JO',
        'name' => 'Jordan',
        'currency' => 'JOD',
    ],
    [
        'short_code' => 'KW',
        'name' => 'Kuwait',
        'currency' => 'KWD',
    ],
    [
        'short_code' => 'LK',
        'name' => 'Sri Lanka',
        'currency' => 'LKR',
    ],
    [
        'short_code' => 'NO',
        'name' => 'Norway',
        'currency' => 'NOK',
    ],
    [
        'short_code' => 'NZ',
        'name' => 'New Zealand',
        'currency' => 'NZD',
    ],
    [
        'short_code' => 'OM',
        'name' => 'Oman',
        'currency' => 'OMR',
    ],
    [
        'short_code' => 'PE',
        'name' => 'Peru',
        'currency' => 'PEN',
    ],
    [
        'short_code' => 'PH',
        'name' => 'Philippines',
        'currency' => 'PHP',
    ],
    [
        'short_code' => 'QA',
        'name' => 'Qatar',
        'currency' => 'QAR',
    ],
    [
        'short_code' => 'SA',
        'name' => 'Saudi Arabia',
        'currency' => 'SAR',
    ],
    [
        'short_code' => 'SG',
        'name' => 'Singapore',
        'currency' => 'SGD',
    ],
    [
        'short_code' => 'TH',
        'name' => 'Thailand',
        'currency' => 'THB',
    ],
    [
        'short_code' => 'TR',
        'name' => 'Turkey',
        'currency' => 'TRY',
    ],
    [
        'short_code' => 'TW',
        'name' => 'Taiwan',
        'currency' => 'TWD',
    ],
    [
        'short_code' => 'UY',
        'name' => 'Uruguay',
        'currency' => 'UYU',
    ],
    [
        'short_code' => 'VN',
        'name' => 'Vietnam',
        'currency' => 'VND',
    ],
    [
        'short_code' => 'MO',
        'name' => 'Macau',
        'currency' => 'MOP',
    ]
];
$client = new Client();
foreach ($countries as $country) {
    $response = $client->request(
        'GET',
        "https://flagsapi.com/{$country['short_code']}/flat/64.png"
    );
    $name = str_replace(' ', '_', strtolower($country['name']));
    file_put_contents(__DIR__ . "/flags/$name.png", $response->getBody());
    sleep(2);
}
