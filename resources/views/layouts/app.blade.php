<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@hasSection('title') @yield('title') | @endif {{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/js/app.js'])
    @livewireStyles
</head>
<body>
    <style>
        body { /*fon de la pagina*/
            font-family: 'Nunito', Arial, sans-serif;
            background-color: #f8fafc;
        }
        nav.bg-white {
            background: linear-gradient(135deg,rgb(rgb(49, 210, 242)) 0%,rgb(rgb(36, 128, 177)) 100%);
            color: #fff;
            font-size: 1rem;
            font-family: 'Nunito', Arial, sans-serif;
        }
        nav.bg-white .navbar-brand img {
            filter: brightness(0) invert(1);
        }
        nav.bg-white .nav-link {
            color:rgb(rgb(33, 120, 172));
            font-weight: 500;
            font-size: 1.05rem;
            padding: 10px 18px;
            border-radius: 6px;
            transition: background 0.2s, color 0.2s;
        }
        nav.bg-white .nav-link:hover,
        nav.bg-white .nav-link.active {
            background:rgb(49, 210, 242);
            color: #fff;
        }
        /*este es el que indica que link esta activo*/
        nav.bg-white .nav-link.active-menu {
            background: rgb(255, 255, 255);
            font-weight: bold;
            color: rgb(33, 120, 172);
            box-shadow: 0 2px 8px rgba(33, 120, 172);
        }
        nav.bg-white .nav-item + .nav-item {
            margin-top: 2px;
        }
        nav.bg-white .dropdown-menu {
            background:rgb(255, 0, 0);
            border: none;
        }
        nav.bg-white .dropdown-item { /*logout*/
            color: rgb(255, 255, 255);
            font-size: 1rem;
        }
        nav.bg-white .dropdown-item:hover {
            background:rgb(207, 0, 0);
            color: #fff;
        }
        nav.bg-white .border-bottom,
        nav.bg-white .border-top {
            border-color:rgb(33, 120, 172) !important;
        }
        nav.bg-white .navbar-brand {
            font-size: 1.3rem;
            font-weight: bold;
            color: rgb(33, 172, 40);
        }
        nav.bg-white .navbar-brand:hover {
            color: #e0e7ef;
        }
        .flex-grow-1 {
            background: #f1f5f9; /*fondo general del menu */
        }
        @media (max-width: 768px) {
            nav.bg-white {
                width: 100vw !important;
                position: relative !important;
                min-height: auto;
            }
            .flex-grow-1 {
                margin-left: 0 !important;
            }
        }
    </style>
    <div id="app">
        <div class="d-flex">
            <!-- Sidebar -->
            <nav class="bg-white shadow-sm border-end vh-100" style="width: 220px; position: fixed; top: 0; left: 0; z-index: 1030;">
                <div class="d-flex flex-column h-100">
                    <div class="p-3 border-bottom text-center">
                        <img src="{{ asset('storage/image/sielogolargo.png') }}" alt="Logo" height="48" style="max-width: 100%; margin-bottom: 10px;" onerror="this.onerror=null;this.src='{{ asset('images/sielogolargo.png') }}';">
                    </div>
                    <div class="flex-grow-1">
                        @auth()
                        <ul class="nav flex-column">
                            @if(auth()->check())
                                @if(auth()->user()->hasRole(['Soporte', 'Ventas', 'Administrador']))
                                    <li class="nav-item">
                                        <a href="{{ url('/home') }}"
                                           class="nav-link{{ Request::is('home*') ? ' active-menu' : '' }}">
                                            Calendario
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{ url('/upolizas') }}"
                                           class="nav-link{{ Request::is('upolizas*') ? ' active-menu' : '' }}">
                                            Uso de Polizas
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{ url('/polizas') }}"
                                           class="nav-link{{ Request::is('polizas*') ? ' active-menu' : '' }}">
                                            Polizas
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{ url('/soportes') }}"
                                           class="nav-link{{ Request::is('soportes*') ? ' active-menu' : '' }}">
                                            Soporte
                                        </a>
                                    </li>
                                @endif

                                @if(auth()->user()->hasRole(['Soporte', 'Ventas', 'Administrador']))
                                    
                                    <li class="nav-item">
                                        <a href="{{ url('/aspels') }}"
                                           class="nav-link{{ Request::is('aspels*') ? ' active-menu' : '' }}">
                                            Aspel
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{ url('/contpaqis') }}"
                                           class="nav-link{{ Request::is('contpaqis*') ? ' active-menu' : '' }}">
                                            CONTPAQi
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{ url('/hosts') }}"
                                           class="nav-link{{ Request::is('hosts*') ? ' active-menu' : '' }}">
                                            Hosts
                                        </a>
                                    </li>
                                @endif

                                @if(auth()->user()->hasRole(['Ventas', 'Administrador']))
                                    <li class="nav-item">
                                        <a href="{{ url('/ventas') }}"
                                           class="nav-link{{ Request::is('ventas*') ? ' active-menu' : '' }}">
                                            Ventas
                                        </a>
                                    </li>
                                @endif

                                @if(auth()->user()->hasRole(['Administrador']))
                                    <li class="nav-item">
                                        <a href="{{ url('/contribuyentes') }}"
                                           class="nav-link{{ Request::is('contribuyentes*') ? ' active-menu' : '' }}">
                                            Contribuyentes
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{ url('/bitacora') }}"
                                           class="nav-link{{ Request::is('bitacora*') ? ' active-menu' : '' }}">
                                            Bitacora
                                        </a>
                                    </li
                                @endif

                                
                                @if(auth()->user()->hasRole(['Contabilidad']))
                                    <li class="nav-item">
                                        <a href="{{ url('/contribuyentes') }}"
                                           class="nav-link{{ Request::is('contribuyentes*') ? ' active-menu' : '' }}">
                                            Contribuyentes
                                        </a>
                                    </li>
                                @endif

                                @if(auth()->user()->hasRole('Administrador'))
                                    <li class="nav-item">
                                        <a href="{{ url('/clientes') }}"
                                           class="nav-link{{ Request::is('clientes*') ? ' active-menu' : '' }}">
                                            Clientes
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{ url('/amenazas') }}"
                                           class="nav-link{{ Request::is('amenazas*') ? ' active-menu' : '' }}">
                                            Antivirus
                                        </a>
                                    </li>
                                @endif
                            @endif
                        </ul>
                        @endauth()
                    </div>
                    <div class="p-3 border-top mt-auto">
                        <ul class="nav flex-column">
                            @guest
                                @if (Route::has('login'))
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('login') }}">{{ __('Inicar Sesión') }}</a>
                                    </li>
                                @endif
                                @if (Route::has('register'))
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('register') }}">{{ __('Registrarse en el Sistema') }}</a>
                                    </li>
                                @endif
                            @else
                                <li class="nav-item dropdown">
                                    <a id="navbarDropdown" class="nav-link dropdown-toggle d-flex align-items-center" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                        <i class="bi bi-person-circle me-2"></i>
                                        {{ Auth::user()->name }}
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="{{ route('logout') }}"
                                           onclick="event.preventDefault();
                                                         document.getElementById('logout-form').submit();">
                                                            <i class="glyphicon glyphicon-remove me-2"></i>
                                            <i class="bi bi-box-arrow-right me-2"></i>
                                            {{ __('Cerrar Sesión') }}
                                        </a>
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                            @csrf
                                        </form>
                                    </div>
                                </li>
                            @endguest
                        </ul>
                    </div>
                </div>
            </nav>
            <!-- Content Wrapper -->
            <div class="flex-grow-1" style="margin-left:220px;">

        <main class="py-4">
            @yield('content')
        </main>
    </div>
    @livewireScripts
    <script type="module">
        const addModal = new bootstrap.Modal('#createDataModal');
        const editModal = new bootstrap.Modal('#updateDataModal');
        window.addEventListener('closeModal', () => {
           addModal.hide();
           editModal.hide();
        })
    </script>
    @stack('scripts')
</body>
</html>


<script>
    document.addEventListener('DOMContentLoaded', function () {
        const sidebar = document.querySelector('nav[style*="position: fixed"]');
        const mainContent = document.querySelector('.flex-grow-1[style*="margin-left"]');
        const toggleBtn = document.createElement('button');
        toggleBtn.innerHTML = '&#9776;';
        toggleBtn.setAttribute('aria-label', 'Toggle sidebar');
        toggleBtn.style.position = 'fixed';
        toggleBtn.style.top = '15px';
        toggleBtn.style.left = '230px';
        toggleBtn.style.zIndex = '2000';
        toggleBtn.style.background = '#fff';
        toggleBtn.style.border = '1px solid #ddd';
        toggleBtn.style.borderRadius = '4px';
        toggleBtn.style.padding = '6px 10px';
        toggleBtn.style.cursor = 'pointer';
        toggleBtn.style.transition = 'left 0.3s';

        document.body.appendChild(toggleBtn);

        let collapsed = false;

        toggleBtn.addEventListener('click', function () {
            collapsed = !collapsed;
            if (collapsed) {
                sidebar.style.marginLeft = '-220px';
                mainContent.style.marginLeft = '0';
                toggleBtn.style.left = '10px';
            } else {
                sidebar.style.marginLeft = '0';
                mainContent.style.marginLeft = '220px';
                toggleBtn.style.left = '230px';
            }
        });
    });
</script>