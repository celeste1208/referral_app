@extends('layouts.app')

@section('content')
<div class="container">
    <div>
      コンバージョン作成
      <p>
        紹介者メールアドレス
        {{ Form::text('referer_mail', 'yamada@hoge.co.jp') }}
      </p>
      <p>
        被紹介者メールアドレス
        {{ Form::text('referral_mail', 'narumiya@hoge.co.jp') }}
      </p>
      {{ Form::submit('送信') }}
    </div>
</div>
@endsection
