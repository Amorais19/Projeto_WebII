<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UACompatible" content="ie=edge">
    <title>Bibble</title>
    @vite(['resources/js/app.js'])
</head>
<body>
    <div class="container-fluid">
        <main role="main" class="py-4">
            @hasSection ('content')
                @yield ('content')
            @endif
        </main>
    </div>

</body>
</html>