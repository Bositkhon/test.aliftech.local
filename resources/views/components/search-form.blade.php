<div>
  <form method="get" action="{{ $action }}">
    <div class="input-group mb-3">
      <input 
        type="text"
        class="form-control"
        placeholder="{{ __('buttons.search') }}..."
        name="search"
        value="{{ request('search') }}"
        aria-label="{{ __('buttons.search') }}..."
        aria-describedby="search-btn"
      >
      <div class="input-group-append">
        <button class="btn btn-primary" type="submit" id="search-btn">{{ __('buttons.search') }}</button>
        <button class="btn btn-info" type="reset" type="button">{{ __('buttons.reset') }}</button>
      </div>
      
    </div>
  </form>
</div>
