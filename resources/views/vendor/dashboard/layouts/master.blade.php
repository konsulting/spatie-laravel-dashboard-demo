<!DOCTYPE html>
<html lang="en">
<head>
    <title>Dashboard</title>
    <link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,900'
          rel='stylesheet'
          type='text/css'>
    <link href="{{ mixOrPlain("css/dashboard.css") }}" rel="stylesheet"/>
    <meta name="google" value="notranslate">
    <meta name="csrf-token" content="{{ csrf_token() }}">
</head>
<body>

    @yield('content')

    @if(usingNodeServer())
        <script src="{{ config('dashboard.node_server_address') }}/socket.io/socket.io.js"></script>
    @endif
    <script src="{{ mixOrPlain("js/dashboard.js") }}"></script>

</body>
</html>
