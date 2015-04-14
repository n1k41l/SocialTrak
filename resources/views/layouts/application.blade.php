<!DOCTYPE html>
<html>
    <head>
        <title>{{ $title }} | Social Tracking Application</title>

    </head>
    <body>
    {{ Helpers::full_title($title)  }}
        @yield('content')
    </body>
</html>
