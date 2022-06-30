<!DOCTYPE html>
<html>
<head>
    <title>Laravel Livewire CRUD</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet">
    @livewireStyles
</head>
<body>
    @livewire('components.navbar')
    {{
        $slot
    }}
    
    @livewireScripts
    <script type = "text/javascript" src="{{asset('js/app.js')}}"></script>
    <script src="https://cdn.jsdelivr.net/gh/livewire/turbolinks@v0.1.x/dist/livewire-turbolinks.js" data-turbolinks-eval="false" data-turbo-eval="false"></script>
</body>
</html>