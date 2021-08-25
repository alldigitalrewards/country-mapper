# Country Mapper Library

This is a Country mapper which maps a Country Alpha or Numeric code 

## Install

Via Composer
```bash
$ composer require alldigitalrewards/country-mapper
```

## Usage
```bash
These calls throw CountryMapperException

**Get Whitelisted Iso**:

$iso = (new CountryInputMapperService())->getWhitelistedIso(840);
$this->assertSame('840', $iso);

**Get Whitelisted Alpha2**:

$alpha = (new CountryInputMapperService())->getWhitelistedAlpha2('US');
$this->assertSame('US', $alpha);

**Get Country by Input (accepts iso/alpha2)**:

$country = (new CountryInputMapperService())->getMappedCountry('840');
$this->assertInstanceOf(Country::class, $country);
$this->assertSame('US', $country->getAlpha2());
$this->assertSame('840', $country->getNumeric());
```
## Testing

```bash
$ composer test
```
