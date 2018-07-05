@extends('layout')

@section('content')

             <article>

                <h3 class="title is-6">Pinnatiedot lintuharrastajalta: {{ $birder->name }}</h3>

                @include('inc.statstable')

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

                        @include('inc.flashmessage')

                    @endif

            </article>

    </article>

@endsection