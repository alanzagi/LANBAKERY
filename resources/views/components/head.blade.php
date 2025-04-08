<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ $title }}</title>
    <link rel="shortcut icon" href="{{ asset('images/alanxcode.jpg') }}" type="image/x-icon">
    {{-- J-Query --}}
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    {{-- Internal Javascript --}}
    <script src="{{ asset('js/script.js') }}"></script>
    {{-- TailwindCSS --}}
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    {{-- Notyf --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/notyf@3/notyf.min.css">
    <script src="https://cdn.jsdelivr.net/npm/notyf@3/notyf.min.js"></script>
    {{-- CSS Font Imported --}}
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Rubik+Vinyl&display=swap');

        .font-poppins {
            font-family: "Poppins", serif;
        }

        .font-rubik-vinyl {
            font-family: "Rubik Vinyl", serif;
        }
    </style>
</head>
