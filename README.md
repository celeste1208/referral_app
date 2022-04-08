# 環境構築
## 前提
- Docker化してないので、MySQL入れてください。
  - 参考: https://prograshi.com/framework/laravel/connect-to-mysql/
  - DB名は、referral_app
- (必要あれば).envのDBユーザー名とパスワードを修正してください
  - DB_USERNAME=root
  - DB_PASSWORD=secret
## Installation
- composer install
- php artisan serve で起動
- npm install
- npm run watch

# URL

- Saas事業者
  - アカウント登録: http://127.0.0.1:8000/register
  - ログイン: http://127.0.0.1:8000/login
  - ホーム: http://127.0.0.1:8000/home
- サービス紹介者
  - http://127.0.0.1:8000/referer/top




