<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ route('user.dashboard') }}">
        <div class="sidebar-brand-text mx-3">ユーザーダッシュボード</div>
    </a>
    <li class="nav-item">
        <a class="nav-link" href="{{ route('user.forms.index') }}">
            <span>フォーム一覧</span>
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{ route('user.forms.create') }}">
            <span>フォーム作成</span>
        </a>
    </li>
</ul>
