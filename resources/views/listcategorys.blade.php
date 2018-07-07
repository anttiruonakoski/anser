@extends('layout')

@section('content')

	<article class="content">

		<div class="columns is-mobile">

		    <div class="column is-two-thirds-desktop is-mobile">

		    	<form method="POST" action="{{ route('listcategorys') }}">

		    	    {{ csrf_field() }}

		    	    <div class="field is-grouped">

		    	        <p class="control is-expanded">
		    	            <input class="input" type="text" placeholder="Lisää uusi pinnakategoria" name="category" autofocus>
		    	        </p>

		    	        <p class="control">
		    	            <input type="submit" class="button is-primary" value="Lisää"></input>
		    	        </p>

		    	    </div>

		    	</form>

				@if (count($errors) > 0)

		       	 	<div class="column notification flash-message is-warning has-text-centered">
		           		{{ $errors->first('category') }}
		        	</div>

		    	@endif

		   		@if (count($errors) == 0)

		        	@include('inc.flashmessage')

		    	@endif

		    </div>

		</div>

		<h3 class="title is-6">Pinnakategoriat:</h3>

            <div class="columns">

                @foreach ($listcategorys->chunk($chunksize) as $chunk)

                <div class="column is-one-third">

                    <div class="columns is-multiline is-mobile">

                        @foreach ($chunk as $category)

			        		<div class="column is-half-desktop tight">

			        			<a href=" {{route ('listcategorys.show', ['listcategory' => $category]) }} "> {{ $category->category }} </a>

			        		</div>

			        		<div class="column is-third tight">

			        		<form method="POST" action="{{ route('listcategorys.destroy', ['listcategory' => $category]) }}">

			            	{{ csrf_field() }}
			            	{{method_field('DELETE')}}

			            	<input type="submit" class="button is-danger is-outlined is-small" value="poista"

							@if ( $usedlistcategorys->contains($category->id) )
						 	title="Kategoriaa ei voi poistaa, koska se sisältää pinnatietoja" disabled
							@endif

			            	></input>

			        		</form>

			        		</div>

			        	@endforeach

		     		</div>

		     	</div>

		    @endforeach




		                    </div>

		                    </div>



	</article>

@endsection

