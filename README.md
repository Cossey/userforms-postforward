# UserForms POST Forwarder

Adds functionality to the UserDefinedForms Page to allow you to forward a HTTP POST to an external URL.
This could be used for when you have a third party website or API developed outside of SilverStripe that you need to send Form POSTs to for further processing.

[![Packagist](https://img.shields.io/packagist/v/stewartcossey/userforms-postforward.svg)]()
[![license](https://img.shields.io/github/license/Cossey/userforms-postforward.svg)]()

## Requirements

* [UserForms Module](http://addons.silverstripe.org/add-ons/silverstripe/userforms)
* [PHP cURL](http://php.net/manual/en/curl.setup.php)
    
## Installation

```ssh
$ composer require stewartcossey/userforms-postforward
```

You can also copy the contents of this repository to a folder called `userforms-postforward`.

You will need to run `dev/build?flush=all` after installing this module.

## Documentation
[User Guide](/docs/en/userguide.md)
