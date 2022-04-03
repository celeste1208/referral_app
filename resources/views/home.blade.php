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
        <br>
        紹介者一覧<br><br>
        @foreach($referers as $referer)
            メールアドレス: {{$referer->email}}<br>
            <?php $i=0; ?>
            @foreach($referer->referrals as $referral)
                <?php $i++; ?>
            @endforeach
            被紹介者人数: {{$i}}<br>
            <br>
        @endforeach
    </div>
</div>
@endsection
