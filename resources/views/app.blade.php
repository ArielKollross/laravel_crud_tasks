<!DOCTYPE html>
<html lang="pt-br">
<html>
<head>
    <title>Laravel example Tasks CRUD</title>
    <meta charset="UTF-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body class="bg-light">
    <main>
        <nav class="navbar navbar-expand-lg navbar-light bg-dark mb-20 text-white">
            <div class="container-fluid">
              <a class="navbar-brand h1 text-white" href={{ route('tasks.index') }}>CRUD Tasks</a>
              <div class="justify-end ">
                <div class="col">
                  <a class="btn btn-sm btn-success" href={{ route('tasks.index') }}>Listar Task</a>
                  <a class="btn btn-sm btn-success" href={{ route('tasks.create') }}>Criar Task</a>
                </div>
              </div>
            </div>
        </nav>

        <div class="container mx-auto mt-5">
            @yield('main')
        </div>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
