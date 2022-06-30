<!DOCTYPE html>
<html>
<head>
    <title>Laravel Livewire CRUD</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet">
    @livewireStyles
</head>
<body>
    @livewire('components.navbar')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    {{-- <div class="card-header">
                        <h2>Laravel Livewire CRUD</h2>
                    </div> --}}
                    {{-- <div class="card-header">
                         <a href = "/">home</a>
                    </div> --}}
                    {{-- <div class="card-body">
                        @if (session()->has('message'))
                            <div class="alert alert-success">
                                {{ session('message') }}
                            </div>
                        @endif

                        @livewire('posts')
                    </div> --}}
                </div>
            </div>
        </div>
    </div>
    @livewireScripts
     <script src="https://cdn.jsdelivr.net/gh/livewire/turbolinks@v0.1.x/dist/livewire-turbolinks.js" data-turbolinks-eval="false" data-turbo-eval="false"></script>
</body>
</html>