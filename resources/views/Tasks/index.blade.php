@extends('layouts.base')

@section('content')
<div class="row">
    <div class="col-12">
        <div>
            <h2 class="text-white">CRUD de Tareas</h2>
        </div>
        <div>
            <a href="{{route('tasks.create')}}" class="btn btn-primary">Crear tarea</a>
        </div>
    </div>

    @if (Session::get('success'))
        <div class="alert alert-success mt-2">
            <strong>{{Session::get('success')}}</strong>             
        </div>
    @endif

    <div class="col-12 mt-4">
        <table class="table table-bordered text-white">
            <tr class="text-secondary">
                <th>Tarea</th>
                <th>Descripción</th>
                <th>Fecha</th>
                <th>Estado</th>
                <th>Acción</th>
            </tr>
            @foreach ($tasks as $task)
                <tr>
                    <td class="fw-bold">{{$task->title}}</td>
                    <td>{{$task->description}}</td>
                    <td>
                    {{$task->due_date}}
                    </td>
                    @php
                        $badgeClass = '';
                        switch ($task->status) {
                            case 'Pendiente':
                                $badgeClass = 'warning';
                                break;
                            case 'En Progreso':
                                $badgeClass = 'info';
                                break;
                            case 'Completada':
                                $badgeClass = 'success';
                                break;
                            default:
                                $badgeClass = 'secondary';
                        }
                    @endphp
                    <td>                         
                        <span class="badge bg-{{$badgeClass}} fs-6">{{$task->status}}</span>
                    </td>
                    <td>
                        <a href="{{route('tasks.edit', $task->id)}}" class="btn btn-warning">Editar</a>

                        <form action="{{route('tasks.destroy', $task->id)}}" method="POST" class="d-inline" onsubmit="return confirm('¿Estás seguro de que quieres eliminar esta tarea?');">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Eliminar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </table>
        {{$tasks->links()}}
    </div>
</div>
@endsection
