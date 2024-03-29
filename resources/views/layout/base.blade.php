<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset("css/app.css")}}">
    <title>Laravel Crud Comic</title>

</head>
    <body>
        @include('partials.header')

        <main>
            <div class="container">
                @yield('pageContent')
            </div>
        </main>
      
        

        <script src="{{asset("js/app.js")}}"></script>
    </body>
</html>