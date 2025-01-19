@extends('layouts.admin')

@section('title', 'Task List')

@section('page-title', 'Task List')

@section('breadcrumb')
    <li class="breadcrumb-item">Action</li>
    <li class="breadcrumb-item">Tasks</li>
    <li class="breadcrumb-item active">Task List</li>
@endsection

@section('content')

    <div class="card mb-4">
        <div class="card-header d-flex justify-content-between align-items-center">
            <div class="card-header-title">
                <i class="fas fa-table me-1"></i>
                Tasks
            </div>
            <a href="{{ route('tasks.create') }}" class="btn btn-success">ADD</a>
        </div>
        <div class="card-body">
            <table id="datatablesSimple">
                <thead>
                    <tr>
                        <th>Title</th>
                        <th>Description</th>
                        <th>Status</th>
                        <th>Created Date</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>Title</th>
                        <th>Description</th>
                        <th>Status</th>
                        <th>Created Date</th>
                        <th>Action</th>
                    </tr>
                </tfoot>
                <tbody>
                    @foreach ($tasks as $task)
                        <tr>
                            <td>{{ $task->title }}</td>
                            <td>{{ $task->description }}</td>
                            <td>{{ $task->status }}</td>
                            <td>{{ $task->created_at }}</td>
                            <td>
                                <div class="d-flex justify-content-around">
                                    <a href="{{ route('tasks.edit', ['id' => $task->id]) }}"
                                        class="btn btn-primary">Edit</a>
                                    <a href="{{ route('tasks.delete', ['id' => $task->id]) }}"
                                        class="btn btn-warning">Delete</a>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    @if (session('confirmToast'))
        <div class="position-fixed bottom-0 end-0 p-3" style="z-index: 11">
            <div class="toast" role="alert" aria-live="assertive" aria-atomic="true" id="liveToast">
                <div class="toast-body">
                    {{ session('confirmToast') }}
                    <div class="mt-2 pt-2 border-top">
                        <form action="{{ route('tasks.destroy', ['id' => $task->id]) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-primary btn-sm">
                                Confirm
                            </button>
                            <button type="button" class="btn btn-secondary btn-sm" data-bs-dismiss="toast">Close</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    @endif
@endsection
