@extends('layout')

@section('content')


            <article>

                <h3>Kaikki harrastajat:</h3>

                @foreach ($birders as $birder)

                <div id="wrapper" class="columns">

                    <div class="column">

                    <a href="{{ url('birders', [$birder->id]) }}"> {{ $birder->name }} </a>

                    </div>

                    <div class="column">

                    <form method="POST" action=" {{ url('birders', [$birder->id]) }} ">

                        {{ csrf_field() }}
                        {{method_field('DELETE')}}

                        <input type="submit" class="button is-danger is-small" value="X"></input>

                    </form>

                    </div>

                 </div>

                @endforeach


                <div>
                <form method="POST" action="/birders">

                    {{ csrf_field() }}
                    <div class="field is-grouped">

                        <p class="control is-expanded">
                            <input class="input" type="text" placeholder="Lisää uusi" name="name">
                        </p>

                        <p class="control">
                            <input type="submit" class="button is-link" value="Lisää"></input>
                        </p>

                        </div>
                    </div>

                    </div>

                </form>
                </div>

            </article>

    </article>


@endsection
