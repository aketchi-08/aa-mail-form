@extends('layouts.admin')

@section('content')
<div class="card">
    <div class="card-header">ユーザー詳細</div>
    <div class="card-body">
        <p><strong>ID:</strong> {{ $user->id }}</p>
        <p><strong>名前:</strong> {{ $user->name }}</p>
        <p><strong>メール:</strong> {{ $user->email }}</p>
        <p><strong>登録日:</strong> {{ $user->created_at }}</p>
    </div>
</div>
@endsection
