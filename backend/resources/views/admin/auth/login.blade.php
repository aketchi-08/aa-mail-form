@extends('layouts.admin')

@section('content')
<form method="POST" action="{{ route('admin.login') }}">
    @csrf
    <input type="email" name="email" placeholder="メールアドレス" required>
    <input type="password" name="password" placeholder="パスワード" required>
    <button type="submit">ログイン</button>
</form>
@endsection
