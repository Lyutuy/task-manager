@extends('../layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-left">
        <div class="col-md-12">
            <a href="" class="btn btn-success">{{ __('Add new Task') }}</a>
        </div>
    </div>
        <hr>
        @foreach($project as $item)
            <h1> Task List of <b>{{ $item->title }}</b></h1>
        @endforeach
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
                    <th>Status</th>
                    <th>Timestamp</th>
                    <th>Actions</th>
                </tr>
                </thead>
                <tbody>
                @foreach($tasks as $task)
                <tr>
                    <td>{{ $task->title }}</td>
                    <td>{{ $task->status }}</td>
                    <td>{{ $task->created_at }}</td>
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
