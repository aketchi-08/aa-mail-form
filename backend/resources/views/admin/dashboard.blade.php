@extends('layouts.admin')

@section('content')
<div class="row">
    <div class="col-md-6">
        <div class="card">
            <div class="card-header">ユーザー数</div>
            <div class="card-body">
                <h3>{{ $userCount }}</h3>
            </div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="card">
            <div class="card-header">フォーム数</div>
            <div class="card-body">
                <h3>{{ $formCount }}</h3>
            </div>
        </div>
    </div>
</div>
@endsection
