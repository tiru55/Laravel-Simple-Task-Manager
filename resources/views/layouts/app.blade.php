<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        
        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>
        <style type="text/css">
            #cardview{
                display: none;
            }
        </style>
    </head>
    <body class="font-sans antialiased bg-gray-200">
        <div class="min-h-screen bg-gray-100">
            @include('layouts.navigation')

            <!-- Page Heading -->
            <header class="bg-white shadow">
                <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                    {{ $header }}
                </div>
            </header>

            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>
        </div>
    </body>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js "></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.3/waypoints.min.js "></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Counter-Up/1.0.0/jquery.counterup.min.js "></script>
<script>
    jQuery(document).ready(function($) {
        $('.counter').counterUp({
            delay: 60,
            time: 1000,
        });
    });
</script>

<script type="text/javascript">
function switchVisible() {
            if (document.getElementById('tableview')) {

                if (document.getElementById('tableview').style.display == 'none') {
                    document.getElementById('tableview').style.display = 'block';
                    document.getElementById('cardview').style.display = 'none';
                }
                else {
                    document.getElementById('tableview').style.display = 'none';
                    document.getElementById('cardview').style.display = 'block';
                }
            }
}
    </script>
@include('sweetalert::alert')

</html>
