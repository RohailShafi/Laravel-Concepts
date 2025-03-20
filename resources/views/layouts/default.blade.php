<!DOCTYPE html>
<html lang="en">
<head>
{{--    <title></title>--}}
    @include('includes.head')
</head>
<body>
@include('includes.header')

{{-- Content section for child views --}}
<main class="">
    @yield('content')
</main>

@include('includes.footer')
</body>
</html>
