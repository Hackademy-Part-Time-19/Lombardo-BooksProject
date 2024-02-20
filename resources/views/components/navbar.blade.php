<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav"
        aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item active">
                <a class="nav-link" href="{{route('welcome')}}">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('books.index') }}">books</a>
            </li>

        </ul>
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="{{ route('books.create') }}">Crea il tuo libro</a>
            </li>
        </ul>
        
        @guest
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="/login" style="color:red">Login</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/register" style="color:blue">Register</a>
                </li>
            </ul>
        @endguest
        
        @auth
           
            <form action="/logout" method="POST">
                @csrf
                <button>Logout</button>
            </form>
            


        @endauth
    </div>
</nav>
