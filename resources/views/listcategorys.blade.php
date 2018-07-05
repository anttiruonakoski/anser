@extends('layout')

@section('content')

	<article>

		<h3 class="title is-6">Pinnakategoriat:</h3>

		    @foreach ($listcategorys as $category)

		    <div id="wrapper" class="columns">

		        <div class="column is-narrow-touch is-narrow-tablet is-narrow-mobile is-one-quarter ">

		        <a href="{{ url('listcategorys', [$category->id]) }}"> {{ $category->category }} </a>

		        </div>

		        <div class="column is-narrow">

		        <form method="POST" action=" {{ url('listcategorys', [$category->id]) }} ">

		            {{ csrf_field() }}
		            {{method_field('DELETE')}}

		            <input type="submit" class="button is-danger is-outlined is-small" value="poista"></input>

		        </form>

		        </div>

		     </div>

		    @endforeach

		    <div class="columns is-multiline is-mobile">

		                        <div class="column">

		                    <form method="POST" action="/listcategorys">

		                        {{ csrf_field() }}

		                        <div class="field is-grouped">

		                            <p class="control is-expanded">
		                                <input class="input" type="text" placeholder="Lisää uusi pinnakategoria" name="category" autofocus>
		                            </p>

		                            <p class="control">
		                                <input type="submit" class="button is-primary
		                                " value="Lisää"></input>
		                            </p>

		                        </div>

		                    </form>

		                    </div>

		                    </div>

		                @if (count($errors) > 0)

                   	 	<div class="column notification is-warning flash-message">
                       		<p> {{ $errors->first('category') }} </p>
                    	</div>

                		@endif

               			 @if (count($errors) == 0)

                    	@component('inc.flashmessage')
                    	@endcomponent

                		@endif

	</article>

@endsection

