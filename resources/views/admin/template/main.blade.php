<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>@yield('title','Default') | Panel De Administracion</title>
    <link rel="stylesheet" href="{{asset('plugins/bootstrap/css/bootstrap.css')}}">
</head>
<body>
    
    @include('admin.template.nav')
    
    <section>
        @yield('contenido')
    </section>
</html>