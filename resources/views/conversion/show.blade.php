@extends('layouts.app')

@section('content')
<div class="container">
    <div>
      コンバージョン詳細
      <p>
        紹介者メールアドレス
        {{ Form::text('referer_mail', 'yamada@hoge.co.jp') }}
      </p>
      <p>
        被紹介者メールアドレス
        {{ Form::text('referral_mail', 'narumiya@hoge.co.jp') }}
      </p>
      <p>
        インセンティブ付与ステータス変更
        {{ Form::radio('incentive_status', 'yet', false, ['class' => 'radio-button__input']) }}未対応
        {{ Form::radio('incentive_status', 'approval', false, ['class' => 'radio-button__input']) }}承認
        {{ Form::radio('incentive_status', 'not_approval', false, ['class' => 'radio-button__input']) }}非承認
      </p>
      {{ Form::submit('送信') }}
    </div>
</div>
@endsection
