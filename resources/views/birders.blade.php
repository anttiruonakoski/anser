@extends('layout')

@section('content')

             <article class="content">

                <div class="columns is-mobile">

                    <div class="column is-two-thirds-desktop is-mobile">

                        <form method="POST" action="{{ route('birders.store') }}">

                        {{ csrf_field() }}

                            <div class="field is-grouped">

                            <p class="control is-expanded">
                                <input class="input" type="text" placeholder="Lisää uusi pinnanilmoittaja" name="name" autofocus>
                            </p>

                            <p class="control">
                                <input type="submit" class="button is-primary" value="Lisää"></input>
                            </p>

                            </div>

                         </form>

                        @if (count($errors) > 0)

                            <div class="column notification flash-message is-warning has-text-centered">
                                {{ $errors->first('name') }}
                            </div>

                        @endif

                        @if (count($errors) == 0)

                            @include('inc.flashmessage')

                        @endif

                    </div>

                </div>

                <h3 class="title is-6">Pinnoja ilmoittaneet lintuharrastajat: <span class="tag light has-text-grey">(eri pinnalajien määrä)</span></h3>

                <div class="columns">

                @foreach ($birders->chunk($chunksize) as $chunk)

                <div class="column is-one-third">

                    <div class="columns is-multiline is-mobile">

                            @foreach ($chunk as $birder)

                        <div class="column is-two-thirds-desktop tight">
                            <a href="{{ route('birders.show', ['birder' => $birder]) }}"> {{ $birder->name }} </a>

                        </div>

                        <div class="column is-third tight">

                            <form method="POST" action=" {{ route('birders.destroy', ['birder' => $birder]) }} ">
                            {{ csrf_field() }}
                            {{method_field('DELETE')}}
                            <span class="tag light has-text-grey">{{ $birder->countPoints() }}</span>&nbsp;&nbsp;
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

                @endforeach

                </div>

                </div>

            </article>

@endsection
