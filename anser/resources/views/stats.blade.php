@extends('layout')

@section('content')

		<div class="columns is-multiline is-size-7 content">

		@foreach($data as $category => $cat)
		<div class="column is-one-third">

			<!-- <h5 class="title is-6 has-text-grey-dark"> {{ $category }} </h5> -->

			<table class="table is-striped is-narrow">

				<thead class="">
					<tr>
				    	<th colspan="4" class="has-background-primary">{{ $category }}</th>
				    </tr>
				 </thead>
			<!-- <td class="has-background-primary"></td> -->
			<tbody>
			@foreach($cat as $c)
				<tr>
					<td>{{ $c->birder->name }}</td>
					<td width="14%">{{ $c->amount }}</td>
					<td class="has-text-grey">mustaleppälintu</td>
					<td class="has-text-grey">30.17.2018</td>

				</tr>
			@endforeach
			</tbody>

			</table>
		</div>
		@endforeach

		<!-- <p>Muuta tietoja klikkaamalla nimeä</p> -->


		</div>

@endsection