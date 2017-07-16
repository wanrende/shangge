<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <!-- Scripts -->
    <script>
        window.Laravel = {!! json_encode([
            'csrfToken' => csrf_token(),
        ]) !!};
    </script>
</head>
<body>
    @section('header')
        <div class="app-index">
            <div class="pub-nav">
                <div class="nav-panner">
                    <a href="" class="nav-a">尚格 ShangGe</a>
                    <ul class="nav-ul">
                        <li><a href="">卫浴产品</a></li>
                        <li><a href="">关于我们</a></li>
                        <li><a href="">最新资讯</a></li>
                    </ul>
                    @if (Route::has('login'))
                        <div class="nav-reg-log">
                            @if (Auth::check())
                                <a href="{{ url('/home') }}">Home</a>
                            @else
                                <a href="{{ url('/login') }}">Login</a>
                                <a href="{{ url('/register') }}">Register</a>
                            @endif
                        </div>
                    @endif
                </div>
            </div>
        </div>
    @show
    @yield('content')
    @section('footer')
        <div class="footer-wrapper">
            <div class="footer-wrapper-content">
                <div class="footer_about item">
                    <h4>关于尚格</h4>
                    <ul>
                        <li>关于我们</li>
                        <li>关于我们</li>
                        <li>关于我们</li>
                        <li>关于我们</li>
                        <li>关于我们</li>
                        <li>关于我们</li>
                    </ul>
                </div>
                <div class="footer_design item">
                    <h4>设计体验中心</h4>
                    <ul>
                        <li>网站地图</li>
                        <li>网站地图</li>
                        <li>网站地图</li>
                        <li>网站地图</li>
                        <li>网站地图</li>
                        <li>网站地图</li>
                    </ul>
                </div>
                <div class="footer_brand item">
                    <h4>旗下品牌</h4>
                    <ul>
                        <li>尚格之家</li>
                        <li>尚格之家</li>
                    </ul>
                </div>
                <div class="footer_social item">
                    <h4>社交媒体</h4>
                    <ul>
                        <li>微信</li>
                        <li>微信</li>
                        <li>微信</li>
                        <li v-popover:popover1>微信</li>
                    </ul>
                </div>
            </div>
        </div>
    @show

    <!-- Scripts -->
    <script src="{{ asset('js/manifest.js') }}"></script>
    <script src="{{ asset('js/vendor.js') }}"></script>
    <script src="{{ asset('js/app.js') }}"></script>
    @section('customjs')

    @show
</body>
</html>
