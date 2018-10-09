<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light navbar-laravel">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">
                        @auth     
                                <li class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">
                            Data Master <span class="caret"></span>
                        </a>
                             <div class="dropdown-menu">
                               <a class="dropdown-item" href="{{ url('manager') }}">
                                 Data Manager
                               </a>
                               <a class="dropdown-item" href="{{ url('pegawai') }}">
                                Data Pegawai
                               </a>
                              <div class="dropdown-divider"></div>
                               <a class="dropdown-item" href="{{ url('supplier') }}">
                                Data Supplier
                                 </a>
                               <a class="dropdown-item" href="{{ url('barang') }}">
                                Data Barang
                                 </a>
                            </div>
                       </li>

                       <li class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">
                            Tambah Data <span class="caret"></span>
                        </a>
                             <div class="dropdown-menu">
                               <a class="dropdown-item" href="{{ url('manager/tambah') }}">
                                 Manager
                               </a>
                               <a class="dropdown-item" href="{{ url('pegawai/tambah') }}">
                                 Pegawai
                               </a>
                              <div class="dropdown-divider"></div>
                               <a class="dropdown-item" href="{{ url('supplier/tambah') }}">
                                 Supplier
                                 </a>
                               <a class="dropdown-item" href="{{ url('barang/tambah') }}">
                                 Barang
                                 </a>
                            </div>
                       </li>

                                <li><a class="nav-link" href="{{ url('transaksi') }}">Transaksi</a></li> 
                                 <li><a class="nav-link" href="{{ url('laporan/barang') }}">Laporan Barang</a></li> 
                                 
                        @endauth 
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Masuk') }}</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('register') }}">{{ __('Daftar') }}</a>
                            </li>
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
             @if(Session::has('pesan'))
            <div class="alert alert-info">
                {{ Session::get('pesan') }}
            </div>
            @endif
            @yield('content')
        </main>
    </div>
</body>
</html>
