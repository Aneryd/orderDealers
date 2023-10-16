ТЕСТОВОЕ ЗАДАНИЕ "АВТО ДИЛЕР"

.env файл - конфигурация БД
```sh
DB_CONNECTION=pgsql
DB_HOST=postgresql
DB_PORT=5432
DB_DATABASE=order_dealer
DB_USERNAME=postgres
DB_PASSWORD=postgres
```

После этого, нужно выполнить несколько команд, для создания docker контейнера:
```sh
docker-compose build
docker-compose up -d
```

Далее нужно, зайти в контейнер с fpm-php и выполнить миграцию с добавлением тестовых данных:
```sh
docker exec -it orderdealers-fpm-1 bash
php artisan migrate:refresh --seed
```


После выполнения этих действий, можно приступать к работе с API.


Документация к API, доступна по аддресу  - http://127.0.0.1:8080/api/documentation

В таблице orders, колонна status - имеет следующие значения (NEW, PROGRESS, APPROVED, REJECTED)