<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    @livewireStyles
    <title>License App</title>
</head>


<body>
    <div class="position-relative" style="height: 200px">
        <div class="text-center position-absolute top-50 start-50 translate-middle fw-bolder">
            <h1 class="text-primary ">License app</h1>

            {{-- Cette commande va aller recupérer la view light.blade.php et l'inclure ici --}}
            @livewire('license')
        </div>
    </div>
    @livewireScripts
</body>

</html>
