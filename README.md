<h1 align="center"> 
    Project KELOMPOK GRUP B TI A1 PAGI
</h1>

## About
-Fahri Kurniawan
-Nikma hafizah
-Sinta Bella
-Wahyu ahlansyah



# Documentation API

 ** URL: http://localhost:8000/api/book

   - Method: POST

   - Request Body:

``` JSON 

{
    "title": "Januari Bersamamu",
    "author": "Fahrii"
}

```

- Success Response 

```json

{
    "title": "Januari Bersamamu",
    "author": "Fahrii",
    "updated_at": "2024-06-28T10:32:35.000000Z",
    "created_at": "2024-06-28T10:32:35.000000Z",
    "id": 1
}

```
- GET LIST BOOK 
    - Method: GET
 ** URL: http://localhost:8000/api/books
    - Success Response 

    ```json

    [
        {
            "id": 1,
            "title": "Januari Bersamamu",
            "author": "Fahrii",
            "created_at": "2024-06-28T10:32:35.000000Z",
            "updated_at": "2024-06-28T10:32:35.000000Z"
        }
    ]
    ```

