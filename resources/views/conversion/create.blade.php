@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
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
