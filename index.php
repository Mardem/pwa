<!doctype html>
<html lang="en">
<head>
    <base href="/pwa-example/">
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="manifest" href="manifest.json">
    <title>PWA</title>

    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <script src="assets/js/object.observe.polyfill.js"></script>
    <script src="assets/js/array.observe.polyfill.js"></script>
    <script src="assets/js/script.js"></script>

</head>
<body class="bg-light">

    <header id="header" class="container">
        <h1 class="text-center">Notas</h1>
    </header>

    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Adicione uma anotação a seguir</h4>
                        <form id="form-add-note">
                            <div class="form-group">
                                <div class="input-group mb-3">
                                    <input type="text" id="anotacao" class="form-control" placeholder="Anotação">
                                    <div class="input-group-append">
                                        <button class="btn btn-outline-secondary" type="submit">+</button>
                                    </div>
                                </div>
                            </div>
                        </form>

                        <ul id="notes">
                            <li>Nota</li>
                        </ul>

                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>