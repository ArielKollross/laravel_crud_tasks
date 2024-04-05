@extends('app')

@section('main')

<div class="container h-100 mt-5">
    <div class="row justify-content-center align-items-center">
        <div class="card col-6">
            <div class="card-body">
                <h3 class="card-title py-4">Criar Tarefa</h3>
                <form action="{{ route('tasks.store') }}" method="post">
                    @csrf
                    <fieldset>
                        <div class="form-group mb-3">
                            <label class="form-label" for="title">Título</label>
                            <input class="form-control" id="title" type="text" name="title">
                        </div>

                        <div class="form-group mb-3">
                            <label class="form-label" for="description">Descrição</label>
                            <textarea class="form-control" id="description" type="text" name="description"></textarea>
                        </div>

                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="completed" id="completed1" value="1">
                            <label class="form-check-label" for="completed1">
                                Tarefa <strong>Concluída</strong>.
                            </label>
                        </div>
                        <div class="form-check mb-3">
                            <input class="form-check-input" type="radio" name="completed" id="completed2" value="0" checked>
                            <label class="form-check-label" for="completed2">
                                Tarefa <strong>Não</strong> concluída.
                            </label>
                        </div>

                        <button class="btn btn-primary mt-3 mb-3 px-5" type="submit">Criar</button>
                    </fieldset>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection
