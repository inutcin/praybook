Artisan. Системное.
============================

# Информация о системе

```
php artisan about
```

```
  Environment ................................................................  
  Application Name ................................................... Laravel  
  Laravel Version ................................................... 10.48.10  
  PHP Version ......................................................... 8.2.19  
  Composer Version ..................................................... 2.7.6  
  Environment ........................................................ testing  
  Debug Mode ......................................................... ENABLED  
  URL .............................................................. localhost  
  Maintenance Mode ....................................................... OFF  

  Cache ......................................................................  
  Config .......................................................... NOT CACHED  
  Events .......................................................... NOT CACHED  
  Routes .......................................................... NOT CACHED  
  Views ............................................................... CACHED  

  Drivers ....................................................................  
  Broadcasting .......................................................... null  
  Cache ................................................................ redis  
  Database ..................................................... pgsql_usercat  
  Logs ................................................................ stderr  
  Queue ................................................................ redis  
  Session .............................................................. redis  

```

# Информация о системе (только о среде выполнения) 

```
php artisan about --only=environment
```

```
  Environment ................................................................  
  Application Name.................................................... Laravel  
  Laravel Version ................................................... 10.48.10  
  PHP Version ......................................................... 8.2.19  
  Composer Version...................................................... 2.7.6  
  Environment ........................................................ testing  
  Debug Mode ......................................................... ENABLED  
  URL .............................................................. localhost  
  Maintenance Mode........................................................ OFF  

```

```
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
