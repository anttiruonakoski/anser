@extends('layout')

@section('content')

             <article>

                <h3 class="title is-6">Pinnatiedot lintuharrastajalta: {{ $birder->name }}</h3>


                <!-- uhm -->

                @forelse($listcategorys as $listcategory)

                <div id="wrapper" class="columns">

                    <div class="column is-2">

                        {{ $listcategory->category }}

                    </div>

                    <div class="column is-1">

                        <div class="control">

                        @if ($birder->hasPointsInCategory($listcategory->id))

                            <input class="input is-small" type="text" size="5" name=" {{$listcategory->id}}_amount " value=" {{ $birder->PointsAmountInCategory($listcategory->id) }}">

                        @else

                            <input class="input is-small" type="text" size="5" name=" {{$listcategory->id}}_amount " value="0">

                        @endif


                        </div>

                    </div>

                 </div>

                @empty
                <p>Pinnoja ei vielä ole.</p>
                @endforelse

                <div class="columns is-multiline is-mobile">

                    <div class="column">

                <form method="POST" action="/birders/{{ $birder->id }}">

                    {{ csrf_field() }}

                    <div class="field is-grouped">

                        <p class="control">
                            <input type="submit" class="button is-success" value="Tallenna"></input>
                        </p>

                    </div>

                </form>

                </div>

                </div>

                @if (count($errors) > 0)
                    <div class="column notification is-warning">
                      <p>Tarkista pinnat. Vain positiivisia kokonaislukuja tai 0</p>
                    </div>
                @endif

            </article>

    </article>

@endsection