<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
      <a class="navbar-brand" href="/">
      {{ config('app.name') }}
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav">
            <x-nav-link :active="request()->routeIs('home')" href="/">Home</x-nav-link>
            <x-nav-link :active="request()->routeIs('about')" href="/about">About</x-nav-link>
            <x-nav-link :active="request()->routeIs('contact')" href="/contact">Contact</x-nav-link>
            <x-nav-link :active="request()->routeIs('posts*')" href="/posts">Posts</x-nav-link>
        
        </ul>
      </div>
    </div>
  </nav>