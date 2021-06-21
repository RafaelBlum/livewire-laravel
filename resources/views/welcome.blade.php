<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="{{asset('bootstrap/dist/css/bootstrap.min.css')}}" type="text/css" rel="stylesheet">
        <link href="{{asset('fontawesome-free/css/all.min.css')}}" type="text/css" rel="stylesheet">
        @livewireStyles
        <title>Laravel livewire</title>

    </head>
    <body>

        <div class="container p-3">

            <div class="row">

                <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 border-warning" style="border-radius: 16px; border: 1px solid;">
                    <div class="row">

                        @livewire('post-componente')
                        
                        @livewire('user')
                        
                        @livewire('prod.produto')
                        
                        @livewire('grid')

                    </div>
                </div>

                @livewire('form')
                @livewire('action')

            </div>
            @livewire('rodape')
        </div>
        @livewireScripts

        <script src="{{asset('bootstrap/dist/js/jquery.min.js')}}" rel="javascript" type="text/javascript"></script>
        <script src="{{asset('bootstrap/dist/js/bootstrap.bundle.min.js')}}" rel="javascript" type="text/javascript"></script>
    </body>
</html>
