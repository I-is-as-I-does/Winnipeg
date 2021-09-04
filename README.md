# Winnipeg

Itsy-bitsy honey pot utility.

## Getting started

```bash
$ composer require ssitu/winnipeg
```

Will also require [SSITU/Blueprints](https://github.com/I-is-as-I-does/Blueprints) 

* `FlexLogsTrait` and
* `FlexLogsInterface` specifically.  

This is a Psr-3 "logger aware" implementation with a fallback.  
If no use of other SSITU blueprints, you can download just those two files.

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

# optional:
$Winnipeg->setLogger($somePsr3Logger);

$htmlField = $Winnipeg->getHoneyPotHtml();
$css = $Winnipeg->getHoneyPotCss();
$isHoneyPotEmpty = $Winnipeg->honeyPotIsEmpty();
# or
$htmlField = $Winnipeg->getHoneyPotHtml($fieldId);
$css = $Winnipeg->getHoneyPotCss($fieldId);
$isHoneyPotEmpty = $Winnipeg->honeyPotIsEmpty($fieldId);

if(!$isHoneyPotEmpty){
$data = $Winnipeg->getLocalLogs(); 
# or check your own logger, if one was set
}
```

## Contributing

Sure! You can take a loot at [CONTRIBUTING](CONTRIBUTING.md).

## License

This project is under the MIT License; cf. [LICENSE](LICENSE) for details.
