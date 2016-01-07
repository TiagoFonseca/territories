<!DOCTYPE html>
<html>
    <head>
        <title>Territory proj</title>

        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">

        <link rel="stylesheet" href="https://bootswatch.com/flatly/bootstrap.min.css">

        <link rel="stylesheet" href="{{ URL::asset('css/app.css') }}">

        <style>

        </style>
    </head>
    <body>
      {{-- {!! $menu_MyNavBar->asUl() !!}    --}}
       @include('partials.menu.navbar')
        <div class="container" />

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
    </body>
</html>
