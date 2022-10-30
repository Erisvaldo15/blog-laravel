<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{$title}}</title>
    <!-- Fonts -->
     <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Righteous" rel="stylesheet">
    <!-- Custom styles for this template --> 
    <link rel="icon" href="{{asset('assets/img/favicon.ico')}}">
     @vite('resources/css/app.css') 
</head>

<body>
    @if ($thereIsHeader)
    <header>
        @include('components.header')
    </header>
    @endif
    <main @class(['p-6', 'author' => $isInAuthorPage])>
        @yield('content')
    </main>
    @if ($thereIsFooter)
        @include('components.footer')
    @endif 
    <script src="{{asset('assets/js/jquery.min.js')}}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
    <script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
    @vite('resources/js/app.js')
</body>

</html>
