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

    <div class="container marketing">

    <div class="row">
        <div class="col-lg-3">
            <img class="rounded-circle" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Generic placeholder image" width="140" height="140">
            <h2>Cadastrar elementos</h2>
            <p>aaaaaaa</p>
            <p><a class="btn btn-secondary" href="#" role="button">cadastrar &raquo;</a></p>
        </div>
        <div class="col-lg-3">
            <img class="rounded-circle" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Generic placeholder image" width="140" height="140">
            <h2>Cadastrar tipo</h2>
            <p>aaaaaaa</p>
            <p><a class="btn btn-secondary" href="#" role="button">cadastrar &raquo;</a></p>
        </div>
        <div class="col-lg-3">
            <img class="rounded-circle" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Generic placeholder image" width="140" height="140">
            <h2>Cadastrar reino</h2>
            <p>aaaaaaa</p>
            <p><a class="btn btn-secondary" href="#" role="button">cadastrar &raquo;</a></p>
        </div>
        <div class="col-lg-3">
            <img class="rounded-circle" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Generic placeholder image" width="140" height="140">
            <h2>Cadastrar princesas</h2>
            <p>aaaaaaa</p>
            <p><a class="btn btn-secondary" href="#" role="button">cadastrar &raquo;</a></p>
        </div>
    </div>
</body>
</html>