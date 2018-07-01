<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Pinnasovellus Anser</title>

		<!-- Fonts -->
		<!-- <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css"> -->

		<!-- Styles -->
		<link rel="stylesheet" type="text/css" href="{{ URL::asset('css/app.css') }}">

		<style>
		body {
		    padding-top: 20px;
		}
		</style>

  	</head>

  	<body>

  		<div class="flex-center position-ref full-height container">

    		<article style="background-image: url('/img/ans2.png'); background-position: top 20px right 20px; background-repeat: no-repeat" class="box has-background-white-bis">

          <div class="columns">

        	<div class="column">

           		<h1 class="title is-1 has-text-black-ter">Anser anser</h1>

              <div class="content">
                  Pinnantallennussovellus
              </div>

        	</div>

          <div class="column">
          </div>


          </div>



        	<div class="tabs">
        	  <ul>
        	  	<li class="{{ request()->is('/') ? 'is-active' : '' }}"><a href="/">Etusivu&nbsp;&nbsp;(pinnat)</a></li>
        	    <li class="{{ request()->is('birders') ? 'is-active' : '' }}"><a href="/birders">Pinnojen ilmoittajat</a></li>
        	    <li class="{{ request()->is('listcategorys') ? 'is-active' : '' }}"><a href="/listcategorys">Pinnakategoriat</a></li>
        	  </ul>
        	</div>

			<div>

				@yield('content')

			</div>

			<div class="">

				@yield('footer')

			</div>

		</div>

  	</body>

</html>