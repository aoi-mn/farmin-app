<!DOCTYPE html>
<html>

<head>
    @if (request()->is('admin*'))
        {{-- Include additional meta tags or scripts for admin --}}
        @include('Components.Admin.Head')
    @else
        @include('Components.Head')
    @endif

    @routes
    
    @vite('resources/js/app.js')
    @inertiaHead
</head>

<body>
    @inertia

    @if (request()->is('admin*'))
        {{-- Include additional scripts for admin --}}
        @include('Components.Admin.Script')
    @else
        @include('Components.Script')
    @endif
</body>

</html>
