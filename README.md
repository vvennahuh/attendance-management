## attendance-management(勤怠管理システムアプリ)

## 作成目的
人事評価のため。

## アプリケーションURL
（現在はプログラムを色々いじった影響でアクセスできなくなっています。申し訳ございません。）
http://localhost/atte
http://localhost/attelogin

## 機能一覧
ログイン・ログアウト機能、新規会員登録機能、勤務開始時間・休憩時間・退勤時間記録、従業員一覧・日付一覧ページによる勤務記録確認、従業員個別の勤務記録確認

## テーブル設計書

![スクリーンショット 2024-10-24 15 14 34](https://github.com/user-attachments/assets/20d910e0-50ad-4252-b0fa-fc30f3903d0e)


## 環境構築
- Dockerビルド
1.git clone git@github.com:coachtech-material/laravel-docker-template.git
2.docker-compose up -d --build

- Laravel環境構築
1.docker-compose exec php bash
2.composer install
3. .env.exampleファイルから.env作成。環境変数の変更
（DB_DATABASE=laravel_db
DB_USERNAME=laravel_user
DB_PASSWORD=laravel_pass）
4.php artisan key:generate
5.php artisan migrate
6.composer require laravel/fortify
7.composer require laravel-lang/lang:~7.0 --dev
8.cp -r ./vendor/laravel-lang/src/ja ./resources/lang/
9. php artisan make:controller ~
10. php artisan make:model ~
11. php artisan make:factory ~
12. php artisan make:seeder ~
13. php artisan make:migration ~


## 使用技術(実行環境)
- PHP 3.8
- Laravel 8.x
- Mysql 8.0.26

## ER図
<img width="759" alt="スクリーンショット 2024-10-24 19 58 42" src="https://github.com/user-attachments/assets/931f3320-0b0e-41b8-a2d7-98eb5e4f032c">


## URL
- 開発環境
- http://localhost/atte
- http://localhost/attelogin
- phpMyadmin:
- http://localhost:8080/
