# PHP-клиент для API Тинькофф Бизнес

Позволяет делать запросы к [OpenAPI](https://business.tinkoff.ru/openapi/docs) сервиса Тинькофф Бизнес на языке PHP.
Формат данных, получаемых по REST API, полностью соответствует схеме, указанной в документации для REST API.

В REST-клиенте реализованы следующие методы:

* [Выставление счета](https://business.tinkoff.ru/openapi/docs#operation/postApiV1InvoiceSend)
* [Получить информацию по компании](https://business.tinkoff.ru/openapi/docs#operation/getApiV1Company)
* [Получить счета](https://business.tinkoff.ru/openapi/docs#operation/getApiV3Bank-accounts)
* [Получить выписку по счету клиента за определенный период](https://business.tinkoff.ru/openapi/docs#operation/getApiV1Bank-statement)

## Требования

- PHP 8.0+
- Composer

## Установка

1. Установить клиент:
```bash
composer require kiriunin/tinkoff-business-api
```

2. Создать токен в личном кабиненте Тинькофф Бизнес

## Использование

```php
// Пример 1. Получение ИНН компании
use Kiriunin\TinkoffBusinessApi\Tinkoff;

// Создать клиент с токеном
$tinkoff = Tinkoff::create('YOUR_TOKEN');

// Или создать Sandbox-клиент
$tinkoff = Tinkoff::create('SANDBOX_TOKEN', true);

// Так же, можно указать дополнительные опции Guzzle, например для Proxy
$tinkoff = Tinkoff::create('YOUR_TOKEN', false, ['proxy' => 'http://localhost:8125']);

// Сделать запрос на получение данных о компании и ее реквизитов
$companyInn = $tinkoff->company()
                    ->get()
                    ->getRequisites()
                    ->getInn();
```

```php
// Пример 2. Получение выписки по счету за сегодняшний день
use Kiriunin\TinkoffBusinessApi\Tinkoff;
use Kiriunin\TinkoffBusinessApi\Schema\Requests\BankStatementRequest;

// Создать клиент с токеном
$tinkoff = Tinkoff::create('YOUR_TOKEN');

// Создать запрос
$request = new BankStatementRequest('ACCOUNT_ID');

// Установить сегодняшнюю дату 
$request->setFrom(new DateTime());

// Сделать запрос на получение выписки по счету
$statement = $tinkoff->accounts()->statement($request);
```
