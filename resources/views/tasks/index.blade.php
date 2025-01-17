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
            <a href="{{route('tasks.create')}}" class="btn btn-success">ADD</a>
        </div>
        <div class="card-body">
            <table id="datatablesSimple">
                <thead>
                    <tr>
                        <th>Title</th>
                        <th>Description</th>
                        <th>Status</th>
                        <th>Created Date</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>Title</th>
                        <th>Description</th>
                        <th>Status</th>
                        <th>Created Date</th>
                    </tr>
                </tfoot>
                <tbody>
                    <tr>
                        <td>Tiger Nixon</td>
                        <td>System Architect</td>
                        <td>Edinburgh</td>
                        <td>61</td>
                    </tr>
                    <tr>
                        <td>Garrett Winters</td>
                        <td>Accountant</td>
                        <td>Tokyo</td>
                        <td>63</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

@endsection
