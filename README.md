# NotificationPusher

Standalone PHP library for easy devices message notifications push.

**Feel free to contribute! Thanks.**

## Contributors

* [Cédric Dugat](https://github.com/Ph3nol) (Author / Lead developer)
* [Oleg Abrazhaev](https://github.com/seyfer) (Lead developer)
* [Community contributors](https://github.com/shippeo/SlyNotificationPusher/graphs/contributors)

## Installation

In the `composer.json`

```
"repositories": [
    {
        "type": "vcs",
        "url": "https://github.com/shippeo/SlyNotificationPusher"
    }
]
```

This repository uses PSR-0 autoload.
After installation with [composer](https://getcomposer.org/download/) please adjust you autoloading config if needed 
or `include vendor/autoload.php` in your index.php.

## Requirements

* PHP 7.3+
* PHP Curl and OpenSSL modules
* Specific adapters requirements (like APNS certificate, GCM (FCM) API key, etc.)

## Today available adapters

* APNS (Apple)
* GCM (Android) and FCM (Android)

## Documentation and examples

* [Installation](https://github.com/shippeo/SlyNotificationPusher/blob/master/doc/installation.md)
* [Getting started](https://github.com/shippeo/SlyNotificationPusher/blob/master/doc/getting-started.md)
* [APNS adapter](https://github.com/shippeo/SlyNotificationPusher/blob/master/doc/apns-adapter.md)
* [GCM (FCM) adapter](https://github.com/shippeo/SlyNotificationPusher/blob/master/doc/gcm-fcm-adapter.md)
* [Create an adapter](https://github.com/shippeo/SlyNotificationPusher/blob/master/doc/create-an-adapter.md)
* [Push from CLI](https://github.com/shippeo/SlyNotificationPusher/blob/master/doc/push-from-cli.md)
* [Facades](https://github.com/shippeo/SlyNotificationPusher/blob/master/doc/facades.md)

## Todo

* Rewrite tests in PHPUnit 8+. (contributions are welcome!)
* Add new features (custom APNS payloads, GCM and FCM custom options, etc.)
* Add new adapters (like Blackberry and Windows phones)
* Write more documentation and examples!

## 1.x users

Old version is still available from [1.x branch](https://github.com/shippeo/SlyNotificationPusher/tree/1.x), with dedicated declared tag.
