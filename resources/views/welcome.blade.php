<html>
    <head>
        <title>Laravel Livewire CRUD</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">

        @livewireStyles
    </head>
    <body>
        <div class='container'>
            <div class='row justify-content-center'>
                <div class='col-md-8 pt-4 pb-4'>
                    <div class='card'>
                        <div class='card-header'>
                            <h2>Laravel Livewire Crud</h2>
                        </div>
                        <div class='card-body'>
                            @if(session()->has('message'))
                            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                {{ session('message') }}
                            @endif
                            @livewire('posts')
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @livewireScripts

        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>

        <script>
            $(.close).alert('close');
        </script>
        
    </body>
</html>