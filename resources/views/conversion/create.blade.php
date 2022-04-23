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
        <form action="/conversion/store" method="post">
            @csrf
            <p>
                被紹介者メールアドレス
                <input type="text" name="email" placeholder="yamada@hoge.co.jp">
            </p>
            <p>
                プロモーションコード
                <input type="text" name="promotion_code" placeholder="code">
            </p>
            <button>送信</button>
        </form>
    </div>
</div>
@endsection
