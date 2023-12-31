<!DOCTYPE html>
<html>
<head>
	<title>How to create SEO friendly sluggable URL Laravel 9 Example - LaravelTuts.com</title>
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h2>How to create SEO friendly sluggable URL Laravel 9 Example - LaravelTuts.com</h2><br/>
        <form method="POST" action="{{ route('item-create') }}" autocomplete="off">
            @if(count($errors))
                <div class="alert alert-danger">
                    <strong>Whoops!</strong> There were some problems with your input.
                    <br/>
                    <ul>
                        @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group {{ $errors->has('title') ? 'has-error' : '' }}">
                        <input type="text" id="title" name="title" class="form-control" placeholder="Enter Title" value="{{ old('title') }}">
                        <span class="text-danger">{{ $errors->first('title') }}</span>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <button class="btn btn-success">Create New Item</button>
                    </div>
                </div>
            </div>
        </form>
        <div class="panel panel-primary">
        <div class="panel-heading">Item management</div>
        <div class="panel-body">
            <table class="table table-bordered">
                <thead>
                    <th>Id</th>
                    <th>name</th>
                    <th>URL</th>
                    <th>slug</th>
                    <th>Updated Date</th>
                </thead>
                <tbody>
                    @if($items->count())
                        @foreach($items as $key => $item)
                            <tr>
                                <td>{{ ++$key }}</td>
                                <td>{{ $item->name }}</td>
                                <td><a href="">{{ URL::to('/') . '/item/' . $item->slug }}</a></td>
                                <td>{{ $item->slug }}</td>
                                <td>{{ $item->updated_at }}</td>
                            </tr>
                        @endforeach
                    @else
                        <tr>
                            <td colspan="4">There are no data.</td>
                        </tr>
                    @endif
                </tbody>
            </table>
        </div>
        </div>
    </div>
</body>
</html>