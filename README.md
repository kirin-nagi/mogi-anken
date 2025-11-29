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


４， .envファイルの一部を以下のように編集<br>
DB_CONNECTION=mysql<br>
DB_HOST=mysql<br>
DB_PORT=3306<br>
DB_DATABASE=laravel_db<br>
DB_USERNAME=laravel_user<br>
DB_PASSWORD=laravel_pass<br>


５．php artisan key:generate


６，php artisan migrate


７，php artisan db:seed


<h3>github環境構築</h3>
<br>

１，git clone git@github.com:kirin-nagi/mogi-anken.git
<br>

２，cd リポジトリ名
<br>

３，git remote set-url origin git@github.com:kirin-nagi/リポジトリ名.git
<br>

４，git add .
<br>

５，git commit -m "リモートリポジトリ変更"
<br>

６，git push origin main
<br>





<h2>使用技術</h2>
<br>


点h1>模擬案件　フリマアプリ</h1>

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


４， .envファイルの一部を以下のように編集<br>
DB_CONNECTION=mysql<br>
DB_HOST=mysql<br>
DB_PORT=3306<br>
DB_DATABASE=laravel_db<br>
DB_USERNAME=laravel_user<br>
DB_PASSWORD=laravel_pass<br>


５．php artisan key:generate


６，php artisan migrate


７，php artisan db:seed


<h3>github環境構築</h3>
<br>

１，git clone git@github.com:kirin-nagi/mogi-anken.git
<br>

２，cd リポジトリ名
<br>

３，git remote set-url origin git@github.com:kirin-nagi/リポジトリ名.git
<br>

４，git add .
<br>

５，git commit -m "リモートリポジトリ変更"
<br>

６，git push origin main
<br>





<h2>使用技術</h2>
<br>


１，laravel 8.83.8
<br>


２，PHP 8.1.33
<br>


３，mysql 　8.0.26

<h2>URL</h2>
<br>

・環境開発：　　http://localhost/
<br>

・phpMyAdmin:  http://localhost:8080/

