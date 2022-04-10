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
      キャンペーン一覧

      <p>
        <h3>編集</h3>
        <a href="/campaign/show" role="button">
          <button type="button" class="btn btn-primary">紹介者</button>
        </a>

      </p>

      <p>

        <h3>タグ表示</h3>
        <a href="/conversion" role="button">
          <button type="button" class="btn btn-primary">紹介者</button>
        </a>
      </p>

      <p>
        <h3>紹介コンバージョン数</h3>
        2

      </p>

      <p>
        <h3>LPアクセス数</h3>
        1
      </p>

      <p>
        <h3>紹介者一覧</h3>

        <a href="/referer" role="button">
          <button type="button" class="btn btn-primary">紹介者</button>
        </a>
      </p>

      <p>
        <h3>コンバージョン一覧</h3>
        <a href="/conversion" role="button">
          <button type="button" class="btn btn-primary">紹介者</button>
        </a>
      </p>


    </div>
</div>
@endsection
