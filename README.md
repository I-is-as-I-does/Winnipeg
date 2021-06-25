# Winnipeg

Itsy-bitsy honey pot utility.

## Getting started

```bash
$ composer require ssitu/winnipeg
```

## How to

Field id can be set for a Winnipeg instance, or on method call, or not set at all --default field id is: `fluffandstuff`.

```php
use SSITU\Winnipeg\Winnipeg;

require_once '/path/to/vendor/autoload.php';

$Winnipeg = new Winnipeg();
# or
$fieldId = 'jovialTastiness';
$Winnipeg = new Winnipeg($fieldId);
# or
$Winnipeg = new Winnipeg();
$Winnipeg->setFieldId($fieldId);

$htmlField = $Winnipeg->getHoneyPotHtml();
$css = $Winnipeg->getHoneyPotCss();
$isHoneyPotIntact = $Winnipeg->checkHoneyPot();
# or
$htmlField = $Winnipeg->getHoneyPotHtml($fieldId);
$css = $Winnipeg->getHoneyPotCss($fieldId);
$isHoneyPotIntact = $Winnipeg->checkHoneyPot($fieldId);

if(!$isHoneyPotIntact){
$data = $Winnipeg->getCollectedData();
}
```

## Contributing

Sure! You can take a loot at [CONTRIBUTING](CONTRIBUTING.md).

## License

This project is under the MIT License; cf. [LICENSE](LICENSE) for details.
