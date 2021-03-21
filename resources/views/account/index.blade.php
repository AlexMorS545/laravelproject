<h3>
    Hello,&nbsp;
    @if (Auth::check())
        {{ Auth::user()->name }}
    @endif
    <form action="{{ route('logout') }}" method="post">
        @csrf
            <button type="submit">Выход</button>
    </form>
</h3>