#Api зданий
Используется для поиска зданий


### GET /buildings/
Выводит список зданий.   

Параметры поиска:
- limit - кол-во записей на странице
- offset - смещение


### Пример ответа api

```json
{
  "metadata": {
    "count": 2,
    "limit": 10,
    "offset": 0
  },
  "buildings": [
    {
      "id": 1,
      "address": "Красный проспект, 36",
      "coords": [
        55.030211,
        82.924354
      ]
    },
    {
      "id": 2,
      "address": "Крылова, 15",
      "coords": [
        55.041155,
        82.926822
      ]
    }
  ]
}
```