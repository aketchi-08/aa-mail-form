@extends('layouts.admin')

@section('content')
<div class="card">
    <div class="card-header">フォーム一覧</div>
    <div class="card-body p-0">
        <table class="table table-striped mb-0">
            <thead>
                <tr>
                    <th>ID</th><th>タイトル</th><th>ユーザー</th><th>作成日</th><th>操作</th>
                </tr>
            </thead>
            <tbody>
                @foreach($forms as $form)
                <tr>
                    <td>{{ $form->id }}</td>
                    <td>{{ $form->title }}</td>
                    <td>{{ optional($form->user)->name }}</td>
                    <td>{{ $form->created_at }}</td>
                    <td>
                        <a href="{{ route('admin.forms.show', $form->id) }}" class="btn btn-sm btn-info">表示</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <div class="card-footer">
        {{ $forms->links() }}
    </div>
</div>
@endsection
