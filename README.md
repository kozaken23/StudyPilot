# StudyPilot

学習タスクサポートアプリ (未完成)
環境構築
Dockerビルド
　

1. git clone git@github.com:kozaken23/StudyPilot.git
2. docker-compose up -d --build
Laravel環境構築
1. docker-compose exec php bash
2. compose install
3. .env.exampleファイルから.envを作成し、環境変数を変更
4. php artisan key:generate


使用技術
・PHP 7.4.9
・Laravel 8.83.8
・MySQL 15.1