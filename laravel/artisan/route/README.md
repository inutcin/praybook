Artisan. Маршруты
=========================

# Сгенерировать кэш маршрутов

```
php artisan route:cache
```

# Очистить кэш маршрутов

```
php artisan route:clear
```



# Список маршрутов
```
php artisan route:list
```

```
  GET|HEAD   / ...................................................................................................................
  POST       _ignition/execute-solution ............ ignition.executeSolution › Spatie\LaravelIgnition › ExecuteSolutionController
  GET|HEAD   _ignition/health-check ........................ ignition.healthCheck › Spatie\LaravelIgnition › HealthCheckController
  POST       _ignition/update-config ..................... ignition.updateConfig › Spatie\LaravelIgnition › UpdateConfigController
  GET|HEAD   api/user ............................................................................................................
  GET|HEAD   sanctum/csrf-cookie ............................... sanctum.csrf-cookie › Laravel\Sanctum › CsrfCookieController@show

```

# Установка Laravel Sanctum

```
php artisan install:api
```
