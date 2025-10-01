<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>ログイン</title>
    <link href="{{ asset('css/sb-admin-2.min.css') }}" rel="stylesheet">
</head>
<body class="bg-gradient-primary">

<div class="container">

    <!-- ログインカード -->
    <div class="row justify-content-center">
        <div class="col-lg-5">
            <div class="card o-hidden border-0 shadow-lg my-5">
                <div class="card-body p-5">
                    <div class="text-center">
                        <h1 class="h4 text-gray-900 mb-4">ログイン</h1>
                    </div>
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="form-group">
                            <input type="email" name="email" 
                                   class="form-control form-control-user @error('email') is-invalid @enderror" 
                                   placeholder="メールアドレス" 
                                   value="{{ old('email') }}" required autofocus>
                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <input type="password" name="password" 
                                   class="form-control form-control-user @error('password') is-invalid @enderror" 
                                   placeholder="パスワード" required>
                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <button type="submit" class="btn btn-primary btn-user btn-block">ログイン</button>
                    </form>
                    <hr>
                    <div class="text-center">
                        <a class="small" href="{{ route('register') }}">アカウント作成</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

</body>
</html>
