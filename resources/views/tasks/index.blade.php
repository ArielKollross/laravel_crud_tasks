@extends('app')

@section('main')

<div class="container mt-5">
    <div>
        @if(session('status'))
            <div class="alert alert-success" id="status-message">
                {{ session('status') }}
            </div>
        @endif
    </div>

    <div class="row">
        @foreach ($tasks as $task)
            <div class="col-4">
                <div class="card {{ $task->completed ? 'alert alert-success p-0' : '' }}">
                    <div class="card-header">
                        <h5 class="card-title">Título: {{ $task->title }}</h5>
                    </div>

                    <div class="card-body">
                        <p class="card-text">Descrição: {{ $task->description }}</p>

                        <p class="card-text mb-3 mt-3">Concluída: {{ $task->completed ? 'Sim' : 'Não' }}</p>
                    </div>

                    <div class="card-footer">
                        <div class="row">
                            <div class="col-sm">
                                <a href="{{ route('tasks.edit', $task->id) }}" class="btn btn-primary btn-sm">Editar</a>
                            </div>
                            <div class="col-sm">
                                <form action="{{ route('tasks.destroy', $task->id) }}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm">Remover</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
  </div>

@endsection

<script>
    setTimeout(function() {
        const statusMessage = document.getElementById('status-message');
        if (statusMessage) {
            statusMessage.classList.add('d-none');
        }
    }, 4000);
</script>
