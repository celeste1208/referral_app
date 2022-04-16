@extends('layouts.app')

@section('content')
<div class="container">
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
                <td>{{\App\Enums\IncentiveStatus::getDescription($referral->incentive_status)}}</td>
                <td>
                    <a href="/conversion/show" role="button">
                        <button type="button" class="btn btn-primary">詳細</button>
                    </a>
                </td>
            </tr>
            @endforeach
        @endforeach
        </tbody>
      </table>

    </div>
</div>
@endsection
