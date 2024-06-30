<h1 align="center"> 
    UAS KELOMPOK GRUP C TI A1 PAGI
</h1>

## About
- M ARIF SATRIA
- Ijlal Fadhil Nainggolan
- Habibi Simatupang
- Afrida Hariani
- Hasenda Ba'aq Syah



# Documentation API

 ** URL: http://localhost:8000/api/book

   - Method: POST

   - Request Body:

``` JSON 

{
    "title": "RockerFeller",
    "author": "John D RockerFeller"
}

```

- Success Response 

```json

{
    "title": "RockerFeller",
    "author": "John D RockerFeller",
    "updated_at": "2024-06-24T13:17:13.000000Z",
    "created_at": "2024-06-24T13:17:13.000000Z",
    "id": 1
}

```
- GET LIST BOOK 
    - Method: GET

    - Success Response 

    ```json

    [
        {
            "id": 1,
            "title": "RockerFeller",
            "author": "John D RockerFeller",
            "created_at": "2024-06-24T13:17:13.000000Z",
            "updated_at": "2024-06-24T13:17:13.000000Z"
        }
    ]
    ```

