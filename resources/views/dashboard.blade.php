<form method="POST" action="{{ route('logout') }}">
    @csrf
        <x-responsive-nav-link :href="route('logout')"
            onclick="event.preventDefault();
            this.closest('form').submit();">
            {{ __('Log Out') }}
        </x-responsive-nav-link>
</form>

@if (Auth::user()->role_id == 1)
<body style="background-color: green"

    <div class="">
        You are logged in as {{ Auth::user()->username }}
    </div>

@elseif(Auth::user()->role_id == 2)
    <body style="background-color: blue"
    <div class="">
        You are a POWERUSER.

        <a href="{{ route('admin') }}">Admin Page</a>

    </div>

@elseif(Auth::user()->role_id == 3)
<body style="background-color: red"

    <div class="">

        You are an admin, listen. AN ADMIN

        <a href="{{ route('admin') }}">Admin Page</a>
    </div>

@endif
