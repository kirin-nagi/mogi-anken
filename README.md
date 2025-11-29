<h1>模擬案件　フリマアプリ</h1>

<br>
<h2>環境構築</h2>
<br>

１, git clone リンク
２, docker-compose up -d --build
<br>


<h3>laravel環境構築</h3>
<br>

１,docker-compose exec php bash


２,compose install


３, cp .env.example .env


４， .envファイルの一部を以下のように編集
DB_CONNECTION=mysql
DB_HOST=mysql
DB_PORT=3306
DB_DATABASE=laravel_db
DB_USERNAME=laravel_user
DB_PASSWORD=laravel_pass


５．php artisan key:generate


６，php artisan migrate


７，php artisan db:seed


