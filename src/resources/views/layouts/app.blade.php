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
                <a class="header__logo" href="/">
                    <"/src/storage/app/public/img/logo.svg">
                </a>
                <nav>
                    <ul class="header-nav">
                        <!--@if (Auth::check())-->
                        <!-- 検索フォーム書く -->
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
                        <!--@endif-->
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