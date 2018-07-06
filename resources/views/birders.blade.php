@extends('layout')

@section('content')


             <article class="content">

                <h3 class="title is-6">Pinnoja ilmoittaneet lintuharrastajat:</h3>

                <div class="columns">

                <div class="column is-one-third">

                    <div class="columns is-multiline is-mobile">

                        @foreach ($birders as $birder)

                        <div class="column is-8">
                            <a href="{{ route('birders.show', ['birder' => $birder]) }}"> {{ $birder->name }} </a>
                        </div>
                        <div class="column is-4">

                            <form method="POST" action=" {{ route('birders.destroy', ['birder' => $birder]) }} ">
                            {{ csrf_field() }}
                            {{method_field('DELETE')}}
                            <input type="submit" class="button is-danger is-outlined is-small" value="poista"

                            @if( $submittingbirders -> contains($birder->id) )
                                title="Ilmoittajaa ei voi poistaa, koska hänellä on pinnatietoja. Nollaa pinnat ensin."
                                disabled
                            @endif

                            ></input>
                            </form>
                        </div>
                        @endforeach

                    </div>
                </div>

                </div>


                <div class="columns is-multiline is-mobile">

                    <div class="column">

                        <form method="POST" action="{{ route('birders.store', ['birder' => $birder]) }}">

                        {{ csrf_field() }}

                            <div class="field is-grouped">

                            <p class="control is-expanded">
                            <input class="input" type="text" placeholder="Lisää uusi pinnanilmoittaja" name="name">
                             </p>

                            <p class="control">
                            <input type="submit" class="button is-primary" value="Lisää"></input>
                            </p>

                    </div>

                </form>

                </div>

                </div>

                @if (count($errors) > 0)

                    <div class="column notification is-warning flash-message">
                        <p> {{ $errors->first('name') }} </p>
                    </div>

                @endif

                @if (count($errors) == 0)

                    @include('inc.flashmessage')

                @endif

            </article>

    </div>

@endsection
