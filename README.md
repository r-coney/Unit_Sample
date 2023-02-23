## Version

| PHP     | Laravel | MySQL    | Node    |
|:-------:|:-------:|:--------:|:-------:|
| 8.1     | 9       | 8.0      | 16      |

## 使用方法

1. `$ cd Unit_sample`
3. `$ docker compose up -d`
4. `$ docker compose exec app composer install`
3. `$ docker compose exec app php artisan key:generate`
3. `$ docker compose exec app php artisan key:generate --env=testing`
6. `$ docker compose exec app php artisan migrate:fresh --seed`

## 備考
* 本来は`.env`はローカルに合わせたものを使用するのが望ましいが、  
cloneしてすぐに動作するようリモートファイルに含めている
* `.env.testing`も同様
