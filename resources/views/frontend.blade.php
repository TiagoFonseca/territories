<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html>

    <head>
        <title>Territory proj</title>

        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">

        <!--<link rel="stylesheet" href="https://bootswatch.com/flatly/bootstrap.min.css">-->
        
        <!-- Materialize stuff  -->
        <!--Import Google Icon Font-->
        <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <!--Import materialize.css-->
        <link type="text/css" rel="stylesheet" href="{{ asset('/css/materialize.min.css') }}"  media="screen,projection"/>
        <link type="text/css" rel="stylesheet" href="{{ asset('/css/master.css') }}"  media="screen,projection"/>
        
        <meta id="token" name="token" content="{ { csrf_token() } }">
        
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>


        <style>

        </style>
    </head>
    <body>

       @include('partials.menu.navbar')
        <div class="container">
        @if ( Session::has('flash_message') )
 
              <div class="alert {{ Session::get('flash_type') }}">
                  <h4>{{ Session::get('flash_message') }}</h4>
              </div>
              
            @endif

            <!-- @if (session('message'))
                <div class="alert alert-success">
                    <button type="button" class="close" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    {{ session('message') }}</div>
            @endif  -->
            <script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js" integrity="sha512-K1qjQ+NcF2TYO/eI3M6v8EiNYZfA95pQumfvcVrTHtwQVDG+aHRqLi/ETn2uB+1JqwYqVG3LIvdm9lj6imS/pQ==" crossorigin="anonymous"></script>
            

            @yield('content')
        </div>
        @yield('footer')
        @include('partials.scripts')

    </body>
</html>
