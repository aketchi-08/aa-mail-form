@extends('layouts.user')

@section('content')
<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800">フォーム編集</h1>

    <div class="card shadow mb-4">
        <div class="card-body">
            <form action="{{ route('user.forms.update', $form->id) }}" method="POST">
                @csrf
                @method('PUT')

                <div class="form-group">
                    <label for="title">フォームタイトル</label>
                    <input type="text" name="title" id="title" class="form-control @error('title') is-invalid @enderror" value="{{ old('title', $form->title) }}" required>
                    @error('title')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>

                <button type="submit" class="btn btn-primary mt-3">更新</button>
                <a href="{{ route('user.forms.index') }}" class="btn btn-secondary mt-3">キャンセル</a>
            </form>
        </div>
    </div>
</div>
@endsection
