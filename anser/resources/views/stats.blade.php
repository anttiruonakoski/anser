@extends('layout')

@section('content')

	<div>


		@foreach($data as $d)
			<table class="table">
				<th> cat header </th>
			@foreach($d as $d2)
				<tr><td> {{ $d2->birder_id }} </td><td> {{ $d2->amount}} </td> </tr>
			@endforeach
			</table>
		@endforeach

	<p>Muuta tietoja klikkaamalla nimeä</p>

@endsection