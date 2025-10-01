@extends('layouts.user')

@section('content')
<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800">こんにちは、{{ $user->name }} さん</h1>
    <p>ここからフォーム管理ができます。</p>

    <a href="{{ route('user.forms.index') }}" class="btn btn-primary">フォーム一覧</a>
    <a href="{{ route('user.forms.create') }}" class="btn btn-success">新規フォーム作成</a>
</div>
@endsection
