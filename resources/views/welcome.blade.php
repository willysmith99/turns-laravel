<x-app-layout>
    <x-slot name="header">
        <h2 class="h4 font-weight-bold">
            Home
        </h2>
    </x-slot>

    <div class="container-fluid my-3 pt-2 px-3 shadow bg-light">
        <div class="row">
            <div class="col-6">
                <img src="{{asset('storage/image/Calendar.png')}}" alt="">
            </div>
            <div class="col-6 mt-5">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet atque impedit error, eveniet laudantium ut repudiandae dicta. Placeat commodi dolorem eos necessitatibus, nam unde assumenda eum harum earum eaque quisquam?
                <div class="d-grid gap-2 d-flex justify-content-center mt-3 pb-3">
                    <a class="btn btn-primary btn-lg me-3" href="{{ route('turnos.index') }}">Ver turnos</a>
                </div>
            </div>
        </div>
        
    </div>

</x-app-layout>



{{-- <!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Laravel</title>


    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">


    <link href="{{ asset('css/app.css') }}" rel="stylesheet">


    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css">

    <style>
        body {
            font-family: 'Nunito';
            background: #f7fafc;
        }
    </style>
</head>
<body>
    <div class="container-fluid fixed-top p-4">
        <div class="col-12">
            <div class="d-flex justify-content-end">
                @if (Route::has('login'))
                    <div class="">
                        @auth
                            <a href="{{ url('/dashboard') }}" class="text-muted">Dashboard</a>
                        @else
                            <a href="{{ route('login') }}" class="text-muted">Log in</a>

                            @if (Route::has('register'))
                                <a href="{{ route('register') }}" class="ms-4 text-muted">Register</a>
                            @endif
                        @endif
                    </div>
                @endif
            </div>
        </div>
    </div>


               
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js" integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous"></script>
</body>
</html> --}}
