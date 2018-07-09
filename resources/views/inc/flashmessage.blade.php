
@foreach (['danger', 'warning', 'success', 'info'] as $msg)
    @if(Session::has('alert-'.$msg))
    <div class="column notification flash-message is-{{ $msg }} has-text-centered">
	      	{{ Session::get('alert-' . $msg) }}
	</div>
    @endif
@endforeach

@if(Session::has('alert-destroy'))

	      		<form method="POST" action="{{ route('birders.destroy', ['birder' => $target]) }}">
				<div class="control level notification flash-message is-danger">

                    {{ csrf_field() }}
                    {{method_field('DELETE')}}

                <div class="level-left">
                	{{ Session::get('alert-destroy') }}
				</div>
				<div class="field is-grouped level-right">
                <div class="control">
					<button type="submit" class="button is-primary" name="action" value="destroy">Poista</button>
				</div>
				<div class="control">
					<button type="submit" class="button is-light" name="action" value="cancel">Peru</button>
				</div>

				</div>

				</div>
				</form>
@endif



