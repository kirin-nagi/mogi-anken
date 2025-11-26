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
                    <img src='/storage/img/logo.svg' width="250">
                </a>
                <div class="form-group">
                    <form action="/search" method="GET" class="input-group search-box">
                        <input type="text" name="keyword" class="form-control" placeholder="なにをお探しですか？" value="{{ request()->input('keyword') }}" >
                    </form>
                </div>
                <nav>
                    <ul class="header-nav">
                        <li class="header-nav__item">
                            @auth
                            <a href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="header-nav__link">ログアウト</a>
                            <form id="logout-form" action="{{ route('logout') }}" method="post" style="display: none;">
                                @csrf
                            </form>
                            <a class="header-nav__link" href="/mypage">マイページ</a>
                            @else
                            <a class="header-nav__link" href="/login">ログイン</a>
                            <a class="header-nav__link" href="/login">マイページ</a>
                            @endauth
                        </li>
                        <li class="header-nav__item">
                            <button class="header-nav__link--button" type="button" onclick="window.location.href='/sell'">
                                出品
                            </button>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </header>

    <main>
    @yield('content')
    <div class="search-results"></div>
    @yield('scripts')
    </main>

    <script>
        document.addEventListener('DOMContentLOaded', function(){
            const input = document.getElementById('search');
            const results = document.querySelector('.search-results');
            let timer = null;

            input.addEventListener('keyup', function(){
                clearTimer('timer');
                const keyword = input.value.trim();

                if(keyword.length === 0){
                    results.innerHTML = '';
                    return;
                }

                timer = setTimeout(() => {
                    fetch('/search?keyword=${encodeURIComponent(keyword)}')
                        .then(res => res.json())
                        .then(date => {
                            if (date.length === 0){
                                results.innerHTML = '<p>該当する商品がありません</p>';
                            } else {
                                let html = '<ul class="list-group">';
                                date.forEach(p =>{
                                    html +='
                                    <li class="list-group-item">
                                        <a href="/products/${p.id}">${p.name}</a>
                                    </li>';
                                });
                                html += '</ul>';
                                results.innerHTML = html;
                            }
                        })
                        .catch(err => console.error('検索エラー:', err));
                }, 300);
            });
        });
    </script>
</body>

</html>