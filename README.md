# Arche Assets

[![PyPI version](https://badge.fury.io/py/acdh-uri-norm-rules.svg)](https://badge.fury.io/py/acdh-uri-norm-rules)
[![Latest Stable Version](https://poser.pugx.org/acdh-oeaw/arche-assets/v/stable)](https://packagist.org/packages/acdh-oeaw/arche-assets)
[![License](https://poser.pugx.org/acdh-oeaw/arche-assets/license)](https://packagist.org/packages/acdh-oeaw/arche-assets)

Set of static assets used (mainly) for ARCHE data preprocessing:

* URI normalization rules used within the [ACDH-CD](https://www.oeaw.ac.at/acdh/).\
  (stored in `AcdhArcheAssets/uriNormRules.json`)
* Description of input data formats accepted by the [ARCHE](https://arche.acdh.oeaw.ac.at).\
  (stored in `AcdhArcheAssets/formats.json`)

The repository provides also Python 3 and PHP bindings for accessing those assets.

# Installation & usage

## Python

* Install using pip3:
  ```bash
  pip3 install acdh_uri-norm-rules
  ```
* Use with
  ```Python
  from AcdhUriNormRules import get_rules, get_normalized_uri
  print(AcdhUriNormRules.get_rules())

  wrong_id = "http://sws.geonames.org/1232324343/linz.html"

  good_id = get_normalized_uri(wrong_id)
  print(good_id)
  # "https://www.geonames.org/1232324343"
  ```

## PHP

* Install using using [composer](https://getcomposer.org/doc/00-intro.md):
  ```bash
  composer require acdh-oeaw/arche-assets
  ```
* Usage with
  ```php
  require_once 'vendor/autoload.php';
  print_r(acdhOeaw\UriNormRules::getRules());
  print_r(acdhOeaw\ArcheFileFormats::getAll();
  print_r(acdhOeaw\ArcheFileFormats::getByMime('application/json');
  print_r(acdhOeaw\ArcheFileFormats::getByExtension('application/json');
  ```
