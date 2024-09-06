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

# Показать настройки баз данных

```
php artisan config:show database
```

```
  database ...................................................................  
  default ...................................................... pgsql_usercat  
  connections ⇁ sqlite ⇁ driver ....................................... sqlite  
  connections ⇁ sqlite ⇁ url ............................................ null  
  connections ⇁ sqlite ⇁ database ................... database/database.sqlite  
  connections ⇁ sqlite ⇁ prefix ..............................................  
  connections ⇁ sqlite ⇁ foreign_key_constraints ........................ true  
  connections ⇁ mysql ⇁ driver ......................................... mysql  
  connections ⇁ mysql ⇁ url ............................................. null  
  connections ⇁ mysql ⇁ host ....................................... 127.0.0.1  
  connections ⇁ mysql ⇁ port ............................................ 3306  
  connections ⇁ mysql ⇁ database ....................................... forge  
  connections ⇁ mysql ⇁ username ............................ landingshop_user  
  connections ⇁ mysql ⇁ password .............................. e2ddde57tXsMg3  
  connections ⇁ mysql ⇁ unix_socket ..........................................  
  connections ⇁ mysql ⇁ charset ...................................... utf8mb4  
  connections ⇁ mysql ⇁ collation ......................... utf8mb4_unicode_ci  
  connections ⇁ mysql ⇁ prefix ...............................................  
  connections ⇁ mysql ⇁ prefix_indexes .................................. true  
  connections ⇁ mysql ⇁ strict .......................................... true  
  connections ⇁ mysql ⇁ engine .......................................... null  
  connections ⇁ mysql ⇁ options ........................................... []  
  connections ⇁ pgsql ⇁ read ⇁ host ............................. 192.168.1.67  
  connections ⇁ pgsql ⇁ write ⇁ host ............................ 192.168.1.67  
  connections ⇁ pgsql ⇁ sticky .......................................... true  
  connections ⇁ pgsql ⇁ driver ......................................... pgsql  
  connections ⇁ pgsql ⇁ url ............................................. null  
  connections ⇁ pgsql ⇁ port ............................................ 5454  
  connections ⇁ pgsql ⇁ database ...................... landingshop_develop_db  
  connections ⇁ pgsql ⇁ username .................... landingshop_develop_user  
  connections ⇁ pgsql ⇁ password .............................. 21fPd3R71XvMa3  
  connections ⇁ pgsql ⇁ charset ......................................... utf8  
  connections ⇁ pgsql ⇁ prefix ...............................................  
  connections ⇁ pgsql ⇁ prefix_indexes .................................. true  
  connections ⇁ pgsql ⇁ search_path ................................... public  
  connections ⇁ pgsql ⇁ sslmode ....................................... prefer  
  migrations ............................................... public.migrations  
  redis ⇁ client .................................................... phpredis  
  redis ⇁ options ⇁ cluster ............................................ redis  
  redis ⇁ options ⇁ prefix ................................. laravel_database_  
  redis ⇁ default ⇁ url ................................................. null  
  redis ⇁ default ⇁ host ............................................... redis  
  redis ⇁ default ⇁ password ........................................... red15  
  redis ⇁ default ⇁ port ................................................ 6379  
  redis ⇁ default ⇁ database ............................................... 7  
```


# Зашифровать переменные окружения

```
php artisan env:encrypt
```

Зашифровать с использованием ключа

```
php artisan env:encrypt --key=3UVsEgGVK36XN82KKeyLFMhvosbZN1aF
```

# Расшифровать переменные окружения

```
php artisan env:decrypt
```
Расшифровать с помощью ключа

```
php artisan env:decrypt --key=3UVsEgGVK36XN82KKeyLFMhvosbZN1aF
```

# Закешировать конфиг

```
php artisan config:cache
```

# Сбросить кэш конфига

```
php artisan config:clear
```

# Закрыть систему на обслуживание

```
php artisan down
```

# Закрыть систему на обслуживание, в постоянной перезагрузкой страницы обслуживания

```
php artisan down --refresh=15
```

# Закрыть систему на обслуживание, пускать по паролю.

Например пускать так

[](https://example.com/1630542a-246b-4b66-afa1-dd72a4c43515)

```
php artisan down --secret="1630542a-246b-4b66-afa1-dd72a4c43515"
```

# Закрыть систему на обслуживание с редиректом

```
php artisan down --redirect=/
```

# Вернуть систему из под обслуживания

```
php artisan up
```
