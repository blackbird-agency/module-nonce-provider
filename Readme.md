# Category Empty Button

[![Latest Stable Version](https://img.shields.io/packagist/v/blackbird/module-nonce-provider.svg?style=flat-square)](https://packagist.org/packages/blackbird/module-nonce-provider)
[![License: MIT](https://img.shields.io/github/license/blackbird-agency/module-nonce-provider.svg?style=flat-square)](./LICENSE)

This module add access to the object "$nonceProvider" in all Magento 2 templates to facilitate implementation of CSP nonce security.

```php
/**
 * @var \Blackbird\NonceProvider\ViewModel\NonceProvider $nonceProvider
 */
<script type="text/javascript" <?= $nonceProvider->renderNonceAttribute() ?>/>
   console.log("I am authorized now !");
</script>
```

## Setup

### Get the package

**Zip Package:**

Unzip the package in app/code/Blackbird/NonceProvider, from the root of your Magento instance.

**Composer Package:**

```
composer require blackbird/module-nonce-provider
```

### Install the module

Go to your Magento root, then run the following Magento command:

```
php bin/magento setup:upgrade
```

**If you are in production mode, do not forget to recompile and redeploy the static resources, or to use the `--keep-generated` option.**

## Support

- If you have any issue with this code, feel free to [open an issue](https://github.com/blackbird-agency/module-nonce-provider/issues/new).
- If you want to contribute to this project, feel free to [create a pull request](https://github.com/blackbird-agency/module-nonce-provider/compare).

## Contact

For further information, contact us:

- by email: hello@bird.eu
- or by form: [https://black.bird.eu/en/contacts/](https://black.bird.eu/contacts/)

## Authors

- **Aline Denizot** - *Maintainer* - [It's me!](https://github.com/AlineBird)
- **Blackbird Team** - *Contributor* - [They're awesome!](https://github.com/blackbird-agency)

## License

This project is licensed under the MIT License - see the [LICENSE](LICENSE) file for details.

***That's all folks!***
