@extends('layouts.app')

@section('content')
<div class="pages background">
    <div class="container">
        <div class ="col-md-6 col-md-offset-3">
            <div class="panel panel-default">
                <div class="panel-heading clearfix">
                    <h4 class="panel-title pull-left" style="padding-top: 7.5 px">Create Room</h4>
                </div>

                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ url('rooms') }}">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label for="title" class="col-md-4 control-label">
                                <h5 style="margin-top: 5px;">Title</h5>
                            </label>
                            <div class="col-md-6">
                                <input type="text" class="form-control" id="title" name ="title">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="description" class="col-md-4 control-label">
                                <h5 style="margin-top: 5px;">Description</h5>
                            </label>
                            <div class="col-md-6">
                                <input type="text" class="form-control" id="description" name="description">
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