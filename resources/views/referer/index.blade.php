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
      紹介者一覧
      <table class="table">
        <thead>
          <tr>
            <th scope="col">ID</th>
            <th scope="col">紹介者メールアドレス</th>
            <th scope="col">LPアクセス数</th>
            <th scope="col">紹介コンバージョン数</th>

          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row">1</th>
            <td>yamada@hoge.co.jp</td>
            <td>10</td>
            <td>1000</td>
          </tr>
          <tr>
            <th scope="row">2</th>
            <td>yamada@hoge.co.jp</td>
            <td>10</td>
            <td>1000</td>
          </tr>
          <tr>
            <th scope="row">3</th>
            <td>yamada@hoge.co.jp</td>
            <td>10</td>
            <td>1000</td>
          </tr>
        </tbody>
      </table>

    </div>
</div>
@endsection
