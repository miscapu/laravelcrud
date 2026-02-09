<!doctype html>
<html lang="{{str_replace('_','-',app()->getLocale())}}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{$title}}</title>

    @yield('head')
</head>
<body>

    {{--Grid Bootstrap 5.3--}}

    <div class="container text-center">
        <div class="row">
            <div class="col-1">

            </div>
            <div class="col-10">
                @yield('content')
            </div>
            <div class="col-1">

            </div>
        </div>
    </div>

    {{--Grid Bootstrap 5.3 end--}}



    @yield('scripts')
</body>
</html>
