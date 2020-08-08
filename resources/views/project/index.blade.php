@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-left">
        <div class="col-md-12">
            <a href="{{ route('project.create') }}" class="btn btn-success">{{ __('Add new Project') }}</a>
        </div>
    </div>
        <hr>
            <h1>Project List</h1>
        <hr>

<!-- Main content -->
    <section class="content">

        <!-- Default box -->
        <div class="box">

            <!-- /.box-header -->
            <div class="box-body">

                <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                    <th>Name</th>
                    <th>Actions</th>
                </tr>
                </thead>
                <tbody>
                @foreach($projects as $project)
                <tr>
                    <td><a href="{{ $project->id}}/tasks">{{ $project->title }}</a></td>
                    <td>
                        <button type="submit" class="fa fa-edit btn btn-warning"></button>
                        <button onclick="return confirm('Вы уверены?')"type="submit" class="fa fa-trash btn btn-danger"></button>
                    </td>
                </tr>
                @endforeach

                </tfoot>
                </table>
            </div>
            <!-- /.box-body -->
            </div>
        <!-- /.box -->
    </section>
    <!-- /.content -->


</div>
@endsection
