@extends('layouts.app')

@section('content')
<div class="container">
    <div>
      キャンペーン一覧
      <p>
        <h3>紹介コンバージョン数</h3>
        {{ $campaign->conversion_count }}
      </p>

      <p>
        <h3>LPアクセス数</h3>
        {{ $campaign->lp_access_count }}
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
