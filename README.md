## Version

| PHP     | Laravel | MySQL    | Node    |
|:-------:|:-------:|:--------:|:-------:|
| 8.1     | 9       | 8.0      | 16      |

## How to use

1. `$ cd Unit_sample`
3. `$ docker compose up -d`
3. `$ docker compose exec app php artisan key:generate`
3. `$ docker compose exec app php artisan key:generate --env=testing`
6. `$ docker compose exec app php artisan migrate:fresh --seed`
