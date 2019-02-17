@if(session()->has('msg'))

    {{-- <div class="alert alert-info">{{ Session::get('msg') }}</div> --}}

    <div class="alert alert-info alert-dismissible fade show" role="alert">
      {{ Session::get('msg') }}
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>

@endif

@if(session()->has('danger'))

    {{-- <div class="alert alert-danger">{{ Session::get('danger') }}</div> --}}

    <div class="alert alert-danger alert-dismissible fade show" role="alert">
      {{ Session::get('danger') }}
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>

@endif