
# Установка пакета TegBot

Для установки пакета используйте команду:

```bash
composer require tegbot/tegbot
```

## Публикация ассетов

Для публикации ассетов используйте команду:

```bash
php artisan vendor:publish --provider="Teg\Providers\TegbotServiceProvider"
```

## Создание бота

Для создания нового бота используйте команду:

```bash
php artisan teg:new
```

## Проверка бота

Бот готов к использованию. Для проверки введите команду:

```bash
/start
```
