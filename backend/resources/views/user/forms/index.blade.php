@extends('layouts.user')

@section('content')
<h1>フォーム一覧</h1>
<a href="{{ route('user.forms.create') }}" class="btn btn-primary mb-3">新規フォーム作成</a>

<table class="table table-bordered">
    <thead>
        <tr>
            <th>ID</th>
            <th>タイトル</th>
            <th>作成日</th>
            <th>操作</th>
        </tr>
    </thead>
    <tbody>
        @foreach($forms as $form)
        <tr>
            <td>{{ $form->id }}</td>
            <td>{{ $form->title }}</td>
            <td>{{ $form->created_at }}</td>
            <td>
                <a href="{{ route('user.forms.edit', $form->id) }}" class="btn btn-sm btn-warning">編集</a>
                <form action="{{ route('user.forms.destroy', $form->id) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-sm btn-danger" onclick="return confirm('削除しますか？')">削除</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection
