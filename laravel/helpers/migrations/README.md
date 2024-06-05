Помощники миграций
==============

#### Создать миграцию
```shell
php artisan make:migration create_flights_table
```

#### Узнать статус миграций 
```shell
php artisan migrate:status
```

#### Исполнить неисполненные миграции
```shell
php artisan migrate 
```

#### Показать SQL-запросы, но не выполнять миграции 
```shell
php artisan migrate --pretend
```

#### Запускать миграции на продуктовой среде без подтверждения 
```shell
php artisan migrate --force
```

#### Откатить последний пакет миграций 
```shell
php artisan migrate:rollback
```

#### Откатить последние 5 миграций 
```shell
php artisan migrate:rollback  --step=5
```

#### Откатить определённый пакет миграций 
```shell
php artisan migrate:rollback --batch=3
```

#### Показать SQL-запросы, но не откатывать миграции 
```shell
php artisan migrate:rollback --pretend
```

#### Откатить все миграции 
```shell
php artisan migrate:reset
```

#### Удалить все таблицы, а после запустить все миграции 
```shell
php artisan migrate:fresh
```

#### Откатить, а затем запустить все миграции 
```shell
php artisan migrate:refresh
```

#### Откатить, а затем запустить последние 5 миграций 
```shell
php artisan migrate:refresh --step=5
```

#### Выгрузить все миграции в один SQL-файл
```shell
php artisan schema:dump
```

#### Выгрузить все миграции в один SQL-файл и удалить существующие миграции
```shell
php artisan schema:dump --prune
```
