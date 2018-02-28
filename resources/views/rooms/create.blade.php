@extends('layouts.app')

@section('content')
<div class="pages">
<div class="container">
    <div class ="col-md-6 col-md-offset-3">
        <div class="panel panel-default">
            <div class="panel-heading">Create Your Room</div>

            <div class="panel-body">
                <form class="form-horizontal" method="POST" action="{{ url('rooms') }}">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label for="title" class="col-md-4 control-label">Title</label>
                        <div class="col-md-6">
                            <input type="text" class="form-control" id="title" name ="title">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="inputPassword3" class="col-md-4 control-label">Password</label>
                        <div class="col-md-6">
                            <input type="password" class="form-control" id="inputPassword3" name="password">
                        </div>
                    </div>
                    <div class="col-md-6 col-md-offset-4">
                        <button type="submit" class="btn btn-primary">Create</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
</div>
@endsection