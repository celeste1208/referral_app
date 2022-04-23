@extends('layouts.app')

@section('content')
<div class="container">
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
