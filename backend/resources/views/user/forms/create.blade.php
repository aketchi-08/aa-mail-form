@extends('layouts.user')

@section('content')
<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800">新規フォーム作成</h1>

    <div class="card shadow mb-4">
        <div class="card-body">
            <form action="{{ route('user.forms.store') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="title">フォームタイトル</label>
                    <input type="text" name="title" id="title" class="form-control @error('title') is-invalid @enderror" placeholder="例: お問い合わせフォーム" value="{{ old('title') }}" required>
                    @error('title')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>

                <button type="submit" class="btn btn-success mt-3">作成</button>
                <a href="{{ route('user.forms.index') }}" class="btn btn-secondary mt-3">キャンセル</a>
            </form>
        </div>
    </div>
</div>
@endsection
