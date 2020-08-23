<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <a class="navbar-brand" href="{{ route('main') }}">Archive</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">
      <li class="nav-item {{ request()->is('boxes.index') ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('boxes.index') }}">{{ __('models.boxes') }}</a>
      </li>
      <li class="nav-item {{ request()->is('cells.index') ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('cells.index') }}">{{ __('models.cells') }}</a>
      </li>
    </ul>
  </div>
</nav>