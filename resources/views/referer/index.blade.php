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
        @foreach($referers as $referer)
            <tr>
                <th scope="row">{{$referer->id}}</th>
                <td>{{$referer->email}}</td>
                <td>{{$referer->lp_access_count}}</td>
                <td>{{$referer->conversion_count}}</td>
            </tr>
        @endforeach
        </tbody>
      </table>

    </div>
</div>
@endsection
