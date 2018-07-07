@extends('layout')

@section('content')

             <article>

                <h3 class="title is-6">Pinnatiedot lintuharrastajalta: {{ $birder->name }}&nbsp;<span class="tag has-text-grey light">nykyiset tiedot</span></h3>

                @forelse($listcategorys as $listcategory)

                <form method="POST" action="{{ route('birders.edit', ['id' => $birder->id]) }}">

                    <div class="columns is-1">

                        <div class="column is-2 tight">

                            {{ $listcategory->category }}

                        </div>

                        <div class="column is-narrow tight field has-addons">

                            @if ($birder->hasPointsInCategory($listcategory->id))

                                <!-- <span class="tag is-info"></span> -->

                                <p class="control">
                                    <input class="input is-small points-input" type="number" size="4" pattern="[0-9]{1-4}" min="0" max="2000" name="cat_{{$listcategory->id}}_amount" value="{{ $birder->pointsInCategory($listcategory->id)->amount }}" onclick="this.select()">
                                </p>
                                <p class="control">
                                    <a class="button is-small is-static points-input">
                                     {{ $birder->PointsAmountInCategory($listcategory->id) }}
                                    </a>
                                </p>

                            @else

                                <p class="control">
                                    <input class="input is-small points-input" type="number" size="4" pattern="[0-9]{1-4}" min="0" max="2000" name="cat_{{$listcategory->id}}_amount" value="0" onclick="this.select()">
                                </p>
                                <p class="control">
                                    <a class="button is-small is-static points-input" disabled>
                                     0
                                    </a>
                                </p>

                            @endif

                         </div>

                         <div class="column is-narrow tight field has-addons">

                             @if ($birder->hasPointsInCategory($listcategory->id))

                                 <!-- <span class="tag is-static"></span> -->

                                 <p class="control">
                                     <input class="input is-small species-input" type="text" pattern="*" name="cat_{{$listcategory->id}}_species" value="{{ $birder->pointsInCategory($listcategory->id)->newest_species }}" onclick="this.select()">
                                 </p>
                                 <p class="control">
                                     <a class="button is-small is-static species-input">
                                      {{ ( $birder->pointsInCategory($listcategory->id)->newest_species =! "" )? $birder->pointsInCategory($listcategory->id)->newest_species : 'ei lajia' }}
                                     </a>
                                 </p>

                             @else

                                 <p class="control">
                                     <input class="input is-small species-input" type="text" pattern="*" name="cat_{{$listcategory->id}}_species" value="" onclick="this.select()">
                                 </p>
                                 <p class="control">
                                     <a class="button is-small is-static species-input" disabled>
                                      ei lajia
                                     </a>
                                 </p>

                             @endif

                          </div>

                        <div class="column is-narrow tight field has-addons">

                            @if ( $birder->hasPointsInCategory($listcategory->id) )

                                <!-- <span class="tag is-static"></span> -->

                                <p class="control">
                                    <input class="input is-small species-input" type="text" pattern="*" name="cat_{{$listcategory->id}}_date" value="{{ Carbon\Carbon::parse($birder->pointsInCategory($listcategory->id)->newest_date)->format('j.n.Y') }}" onclick="this.select()">
                                </p>
                                <p class="control">
                                    <a class="button is-small is-static date-input">
                                     {{ Carbon\Carbon::parse($birder->pointsInCategory($listcategory->id)->newest_date)->format('j.n.Y') }}
                                    </a>
                                </p>

                            @else

                                <p class="control">
                                    <input class="input is-small date-input" type="text" pattern="*" name="cat_{{$listcategory->id}}_date" value="" onclick="this.select()">
                                </p>
                                <p class="control">
                                    <a class="button is-small is-static date-input" disabled>
                                     ei pvm
                                    </a>
                                </p>

                            @endif

                         </div>

                    </div>

                @empty
                <p>Pinnoja ei vielä ole.</p>
                @endforelse

                <div class="columns is-multiline is-mobile">

                    <div class="column is-third">

                    {{ csrf_field() }}

                            <div class="field level">
                                <div class="control">
                                <button type="submit" class="level-left button is-primary" name="action" value="save">Tallenna</button>
                                </div>
                                <button type="submit" class="level-left button is-danger" name="action" value="destroy">Poista</button>
                            </div>
                    </form>

                    @if (count($errors) > 0)

                        <div class="column notification flash-message is-warning has-text-centered">
                            <p>{{ $errors->first() }}</p>
                        </div>

                    @endif

                    @if (count($errors) === 0)

                        @include('inc.flashmessage')

                    @endif

                    </div>

                </div>

            </article>


@endsection