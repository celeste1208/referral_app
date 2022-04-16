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
      コンバージョン一覧
      <a href="/conversion/create" role="button">
        <button type="button" class="btn btn-primary">新規作成</button>
      </a>

      <table class="table">
        <thead>
          <tr>
            <th scope="col">ID</th>
            <th scope="col">紹介者メールアドレス</th>
            <th scope="col">被紹介者メールアドレス</th>
            <th scope="col">ステータス</th>
            <th scope="col">詳細</th>
          </tr>
        </thead>
        <tbody>
        @foreach($referers as $referer)
            @foreach($referer->referrals as $referral)
            <tr>
                <th scope="row">{{$referral->id}}</th>
                <td>{{$referer->email}}</td>
                <td>{{$referral->email}}</td>
                <td>承認済み</td>
                <td>
                    <a href="/conversion/show" role="button">
                        <button type="button" class="btn btn-primary">詳細</button>
                    </a>
                </td>
            </tr>
            @endforeach
        @endforeach
          <tr>
            <th scope="row">1</th>
            <td>yamada@hoge.co.jp</td>
            <td>narumiya@hoge.co.jp</td>
            <td>承認済み</td>
            <td>
              <a href="/conversion/show" role="button">
                <button type="button" class="btn btn-primary">詳細</button>
              </a>
            </td>
          </tr>
          <tr>
            <th scope="row">1</th>
            <td>yamada@hoge.co.jp</td>
            <td>narumiya@hoge.co.jp</td>
            <td>承認済み</td>
            <td>
              <a href="/conversion/show" role="button">
                <button type="button" class="btn btn-primary">詳細</button>
              </a>
            </td>
          </tr>
          <tr>
            <th scope="row">1</th>
            <td>yamada@hoge.co.jp</td>
            <td>narumiya@hoge.co.jp</td>
            <td>承認済み</td>
            <td>
              <a href="/conversion/show" role="button">
                <button type="button" class="btn btn-primary">詳細</button>
              </a>
            </td>
          </tr>
        </tbody>
      </table>

    </div>
</div>
@endsection
