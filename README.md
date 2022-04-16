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
- php artisan migrate
- php artisan db:seed --class=DatabaseSeeder
- npm install
- npm run watch

## テストユーザー
- Account1
    - メールアドレス: test@email.com
- Account2
    - メールアドレス: test2@email.com
- パスワード: test1234

# URL

- Saas事業者
  - アカウント登録: http://127.0.0.1:8000/register
  - ログイン: http://127.0.0.1:8000/login
  - ホーム: http://127.0.0.1:8000/home
- サービス紹介者
  - Saasトップ: http://127.0.0.1:8000/saas/top
  - 紹介用ポップアップ: http://127.0.0.1:8000/referer/top




