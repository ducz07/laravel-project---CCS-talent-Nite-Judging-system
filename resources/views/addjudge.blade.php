<!DOCTYPE html>
<html>
<head>
        <link href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
</head>
<body>
    <br><br>
    <div class="row">
    <div class="col-lg-12">
        @if($errors->any())
            <div class="alert alert-danger">
            @foreach($errors->all() as $error)
                <p>{{ $error }}</p>
            @endforeach()
            </div>
        @endif
        <div class="panel panel-default">
            <div class="panel-heading">
                Add a New Judge <a href="{{ url('judge') }}"><button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button></a>
            </div>
            <div class="panel-body">
                <form action="{{ url('insertjudge') }}" method="POST" enctype="multipart/form-data" class="form-horizontal">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label class="control-label col-sm-2" >Name</label>
                        <div class="col-sm-10">
                            <input type="text" name="fullname" id="fullname" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2" >Background</label>
                        <div class="col-sm-10">
                            <textarea name="background" id="background" class="form-control"></textarea>
                        </div>
                    <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                            <input type="submit" class="btn btn-primary" value="Submit" />
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
</body>
</html>