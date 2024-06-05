Системные помощники
============================

```
php artisan about
php artisan about --only=environment
php artisan config:show database
php artisan env:encrypt
php artisan env:encrypt --key=3UVsEgGVK36XN82KKeyLFMhvosbZN1aF
php artisan env:decrypt
php artisan env:decrypt --key=3UVsEgGVK36XN82KKeyLFMhvosbZN1aF
php artisan env:decrypt --key=qUWuNRdfuImXcKxZ --cipher=AES-128-CBC
php artisan env:decrypt --env=staging
php artisan env:decrypt --force
php artisan config:cache
php artisan config:clear
php artisan down
php artisan down --refresh=15
php artisan down --retry=60
php artisan down --secret="1630542a-246b-4b66-afa1-dd72a4c43515"
php artisan down --with-secret
php artisan down --render="errors::503"
php artisan down --redirect=/
php artisan up


```