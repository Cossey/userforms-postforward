# UserForms POST Forwarder
Adds functionality to the UserDefinedForms to allow you to forward a HTTP POST to an additional/external URL.
This could be used for when you have a third party website or API developed outside of SilverStripe that you need to send Form POSTs to for further processing.

[![Packagist](https://img.shields.io/packagist/v/stewartcossey/userforms-postforward.svg)]() [![license](https://img.shields.io/github/license/Cossey/userforms-postforward.svg)]()


## Requirements
The SilverStripe UserForms Module.

## Installation
```sh
$ composer require stewartcossey/userforms-postforward
```
You can also copy the contents of this repository to the Root SilverStripe folder.

You will need to run `dev/build?flush=all` after installing this module.

## How it works
Everything is configured under the *POST Forwarding* tab. Turn on Forwarding and then enter the URL to forward the HTTP POST to. All fields in the *Form Fields* section will be sent along with any Additional Fields specified in the *POST Forwarding* section as an x-www-form-urlencoded HTTP POST.