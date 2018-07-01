
    @foreach (['danger', 'warning', 'success', 'info'] as $msg)
        @if(Session::has('alert-'.$msg))
        <div class="column notification flash-message is-{{ $msg }}">
 	      	<p class="">{{ Session::get('alert-' . $msg) }}</p>
 	    </div>
        @endif
    @endforeach
