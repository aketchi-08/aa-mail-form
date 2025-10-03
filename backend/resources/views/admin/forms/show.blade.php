@extends('layouts.admin')

@section('content')
<div class="card">
    <div class="card-header">フォーム詳細</div>
    <div class="card-body">
        <p><strong>ID:</strong> {{ $form->id }}</p>
        <p><strong>タイトル:</strong> {{ $form->title }}</p>
        <p><strong>オーナー:</strong> {{ optional($form->user)->name }}</p>
        <hr>
        <h5>フィールド</h5>
        @if($form->fields && $form->fields->count())
            <ul>
            @foreach($form->fields as $field)
                <li>{{ $field->label }} ({{ $field->type }})</li>
            @endforeach
            </ul>
        @else
            <p>フィールドは登録されていません。</p>
        @endif

        <hr>
        <h5>送信内容（サンプル）</h5>
        @if($form->submissions && $form->submissions->count())
            @foreach($form->submissions as $submission)
                <div class="card mb-2">
                    <div class="card-body">
                        <small class="text-muted">送信日時: {{ $submission->created_at }}</small>
                        <pre>{{ json_encode($submission->payload, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE) }}</pre>
                    </div>
                </div>
            @endforeach
        @else
            <p>まだ送信はありません。</p>
        @endif
    </div>
</div>
@endsection
