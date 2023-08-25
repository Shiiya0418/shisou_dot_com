# Relicサマーインターン（25卒）のサンプルアプリ

## 初回セットアップ手順（上から順番に実行）

```sh
# 作業ディレクトリに移動して作業を進めてください 

cp .env.example .env

#　以下はまとめてコピペして実行してください
docker run --rm \
    -u "$(id -u):$(id -g)" \
    -v "$(pwd):/var/www/html" \
    -w /var/www/html \
    laravelsail/php82-composer:latest \
    composer install

docker-compose up -d
docker-compose exec laravel.test php artisan key:generate
docker-compose exec laravel.test php artisan migrate:fresh
docker-compose exec laravel.test npm install
docker-compose exec laravel.test npm run dev
```

## 起動

```sh
docker-compose up -d
docker-compose exec laravel.test npm run dev
```

## 停止

停止する時は下記のコマンドを実行する

```sh
docker-compose stop
```

## URL
サンプルアプリ：http://localhost/

phpMyAdmin: http://localhost:8080/

## コマンドリファレンス

```sh
# MySQLコンソールにログイン
docker-compose exec mysql mysql -u sail -p'password' example_app

# キャッシュ削除
docker-compose exec laravel.test php artisan cache:clear
docker-compose exec laravel.test php artisan config:clear
docker-compose exec laravel.test php artisan route:clear
docker-compose exec laravel.test php artisan view:clear
docker-compose exec laravel.test php artisan clear-compiled

# Laravel実行コンテナにログイン
docker-compose exec laravel.test /bin/bash
```

## マイグレーションを行うコマンド
```sh
docker-compose exec laravel.test php artisan migrate
```

## シーディングを行うコマンド
```sh
docker-compose exec laravel.test php artisan db:seed --class=ShopsSeeder
```
```sh
docker-compose exec laravel.test php artisan db:seed --class=InstrumentsSeeder
```
```sh
docker-compose exec laravel.test php artisan db:seed --class=ReservationsSeeder
```

## 開発ルール
### ブランチについてのルール
- `main` `: リリース用アプリケーションブランチ（最後の最後にdevelopをマージする）
- `develop` : 開発期間中におけるmain
- `feature/issue番号-機能名` `: 各機能の開発用ブランチ
    - 例）`feature/1-Login`

### コミットメッセージについてルール
- 日本語でわかりやすいメッセージを簡潔に！
```sh
git commit -m "ログイン機能を追加"
```

### Issueに関して
はじめにIssueを建てて、それに自分をアサインし作業を行う。

### マージに関して
rebaseしても構いません