<!-- 全体の共通レイアウト -->
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>COACHTECH</title>
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}">
    <link rel="stylesheet" href="{{ asset('css/common.css') }}">
    @yield('css')
</head>

<body>
    <header class="header">
        <div class="header__inner">
            <div class="header-utilities">
                <a class="header__img" href="/">
                    <img src='/storage/img/logo.svg' width="300">
                </a>
                <div class="form-group">
                    <div class="input-group">
                        <input type="text" name="keyword" class="form-control" placeholder="なにをお探しですか？" value="{{ request()->input('keyword') }}" >
                    </div>
                </div>
                <nav>
                    <ul class="header-nav">
                        <li class="header-nav__item">
                            <a class="header-nav__link" href="/login">ログアウト</a>
                            <a class="header-nav__link" href="/mypage">マイページ</a>
                        </li>
                        <li class="header-nav__item">
                            <form action="/sell" method="post">
                                @csrf
                                <button class="header-nav__button">出品</button>
                            </form>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </header>

    <main>
    @yield('content')
    </main>
</body>

</html>