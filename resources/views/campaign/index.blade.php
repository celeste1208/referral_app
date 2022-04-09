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
      <table class="table">
        <thead>
          <tr>
            <th scope="col">ID</th>
            <th scope="col">キャンペーン名</th>
            <th scope="col">ステータス</th>
            <th scope="col">紹介コンバージョン数</th>
            <th scope="col">LPアクセス数</th>
            <th scope="col">紹介者一覧</th>
            <th scope="col">編集</th>
            <th scope="col">タグ表示</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row">1</th>
            <td>プロダクトA</td>
            <td>公開</td>
            <td>10</td>
            <td>1000</td>
            <td>
              <a href="/conversion" role="button">
                <button type="button" class="btn btn-primary">紹介者</button>
              </a>
            </td>
            <td>
              <button type="button" class="btn btn-primary">編集</button>
            </td>
            <td>
              <button type="button" class="btn btn-primary">タグ表示</button>
            </td>

          </tr>
          <tr>
            <th scope="row">2</th>
            <td>プロダクトA</td>
            <td>公開</td>
            <td>10</td>
            <td>1000</td>
            <td>
              <a href="/conversion" role="button">
                <button type="button" class="btn btn-primary">紹介者</button>
              </a>


            </td>
            <td>
              <button type="button" class="btn btn-primary">編集</button>
            </td>
            <td>
              <button type="button" class="btn btn-primary">タグ表示</button>
            </td>

          </tr>
          <tr>
            <th scope="row">3</th>
            <td>プロダクトA</td>
            <td>公開</td>
            <td>10</td>
            <td>1000</td>
            <td>
              <a href="/conversion" role="button">
                <button type="button" class="btn btn-primary">紹介者</button>
              </a>

            </td>
            <td>
              <button type="button" class="btn btn-primary">編集</button>
            </td>
            <td>
              <button type="button" class="btn btn-primary">タグ表示</button>
            </td>

          </tr>
        </tbody>
      </table>

    </div>
</div>
@endsection
