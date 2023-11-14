<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Test form</title>
    <link rel="stylesheet" href="">
</head>

<body>
    <form action="{{ url('/api/handle-form') }}" method="POST" role="form">
        <legend>Test submit form233</legend>
        {{-- <input type="hidden" name="_token" value="{{ csrf_token() }}"> --}}
        <div class="form-group">
            <label for="">email</label>
            <input type="text" name="email" class="form-control" id="" placeholder="Input field">
            <br>
            <label for="">password</label>
            <input type="text" name="password" class="form-control" id="" placeholder="Input field">
            <br>

            <label for="">select file</label>
            <input type="file" name="file" class="form-control" id="" placeholder="Input field">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

</body>

</html>
