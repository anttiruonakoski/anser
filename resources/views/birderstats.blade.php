@extends('layout')

@section('content')

             <article>

                <h3 class="title is-6">Pinnatiedot lintuharrastajalta: {{ $birder->name }}</h3>

                @forelse($listcategorys as $listcategory)

                <form method="POST" action="{{ route('birders.edit', ['id' => $birder->id]) }}">

                    <div id="wrapper" class="columns">

                        <div class="column is-2">

                            {{ $listcategory->category }}

                        </div>

                        <div class="column is-1">

                            <div class="control">

                            @if ($birder->hasPointsInCategory($listcategory->id))

                                <input class="input is-small" type="number" size="5" name="cat_{{$listcategory->id}}_amount" value="{{ $birder->PointsAmountInCategory($listcategory->id) }}">

                            @else

                                <input class="input is-small" type="number" size="5" name="cat_{{$listcategory->id}}_amount" value="0">

                            @endif

                            </div>
                        </div>

                    </div>

                @empty
                <p>Pinnoja ei vielä ole.</p>
                @endforelse

                <div class="columns is-multiline is-mobile">

                    <div class="column">

                    {{ csrf_field() }}

                         <div class="field is-grouped">

                                <p class="control">
                                <input type="submit" class="button is-primary" value="Tallenna"></input>
                                </p>

                        </div>
                    </div>
                </form>
                </div>

                    @if (count($errors) > 0)

                        <div class="column notification is-warning flash-message">
                            <p> {{ $errors->first() }} </p>
                        </div>

                    @endif

                    @if (count($errors) === 0)

                        @component('inc.flashmessage')
                        @endcomponent

                    @endif

            </article>

    </article>

@endsection