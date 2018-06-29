@extends('layout')

@section('content')

             <article>

                <h3 class="title is-6">{{ $birder->name }}</h3>

                @forelse($birder->points()->get() as $pointdata)
                <ul>
                    <li>pinnamäärä {{ $pointdata->amount }} kategoria {{ $pointdata->listcategory_id }} </li>
                </ul>
                @empty
                <p>Pinnoja ei vielä ole.</p>

                @endforelse

                @if (count($errors) > 0)
                    <div class="column notification is-warning">
                      <p>Virheetä tähän</p>
                    </div>
                @endif

            </article>

    </article>

@endsection
