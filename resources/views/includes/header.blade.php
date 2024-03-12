<header class="container d-flex flex-wrap justify-content-center py-3 mb-4 border">
      <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto link-body-emphasis text-decoration-none">
        <h1 class="fs-4">Simple header</h1>
      </a>

      <ul class="nav nav-pills">
        <li class="nav-item "><a href="{{ route('home') }}" class="nav-link @if(Route::is('home'))active @endif" aria-current="page">Home</a></li>
      </ul>
</header>