@extends('layouts.admin')

@section('title', 'Update Task')

@section('page-title', 'Update Task')

@section('breadcrumb')
    <li class="breadcrumb-item">Action</li>
    <li class="breadcrumb-item">Tasks</li>
    <li class="breadcrumb-item">Task List</li>
    <li class="breadcrumb-item active">Update List</li>
@endsection

@section('content')
    <div class="card mb-4">
        <form action="{{route('tasks.update', ['id' => $task->id])}}" method="POST">
            @csrf
            <div class="card-header d-flex justify-content-between align-items-center">
                <div class="card-header-title">
                    <i class="fa-brands fa-wpforms me-1"></i>
                    Task Form
                </div>
                <button type="submit" class="btn btn-success"><i class="fa-regular fa-floppy-disk"></i></button>
            </div>
            <div class="card-body">
                <div class="mb-3">
                    <label for="title" class="form-label">Title</label>
                    <input type="text" name="title" id="title" class="form-control" value="{{ $task->title}}">
                </div>
                <div class="mb-3">
                    <label for="description" class="form-label">Description</label>
                    <textarea name="description" id="description" class="form-control">{{ $task->description }}</textarea>
                </div>
                <div class="mb-3">
                    <label for="description" class="form-label">Status</label>
                    <select class="form-select" name="status" aria-label="Default select example">
                        <option>Select Status</option>
                        <option value="pending" {{ $task->status == 'pending' ? 'selected' : '' }}>Pending</option>
                        <option value="in_progress" {{ $task->status == 'in_progress' ? 'selected' : '' }}>In progress</option>
                        <option value="completed" {{ $task->status == 'completed' ? 'selected' : '' }}>Complete</option>
                    </select>
                </div>
            </div>
        </form>
    </div>

@endsection