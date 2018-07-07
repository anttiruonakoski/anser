
    @foreach (['danger', 'warning', 'success', 'info'] as $msg)
        @if(Session::has('alert-'.$msg))
        <div class="column notification flash-message is-{{ $msg }} has-text-centered">
 	      	{{ Session::get('alert-' . $msg) }}
 	    </div>
        @endif
    @endforeach
