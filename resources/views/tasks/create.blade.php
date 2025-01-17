@extends('layouts.admin')

@section('title', 'Create Task')

@section('page-title', 'Create Task')

@section('breadcrumb')
    <li class="breadcrumb-item">Action</li>
    <li class="breadcrumb-item">Tasks</li>
    <li class="breadcrumb-item">Task List</li>
    <li class="breadcrumb-item active">Create List</li>
@endsection

@section('content')
<div class="card mb-4">
    <div class="card-header d-flex justify-content-between align-items-center">
        <div class="card-header-title">
            <i class="fa-brands fa-wpforms me-1"></i>
            Task Form
        </div>
        <a href="{{route('tasks.create')}}" class="btn btn-success"><i class="fa-regular fa-floppy-disk"></i></a>
    </div>
    <div class="card-body">
        
    </div>
</div>
    
@endsection