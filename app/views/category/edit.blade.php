<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Category − Update</title>
</head>
<body>
    <section class="container">
        <h1 class="text-center text-uppercase">Update</h1>

        <div class="text-center">
            @if (isset($_SESSION["errors"]) && isset($_GET["msg"]))
                <ul class="badge bg-danger fw-semibold lh-base">
                    @foreach ($_SESSION["errors"] as $msg)
                        <li>{{$msg}}</li>
                    @endforeach
                </ul>
                @php unset($_SESSION["errors"]);@endphp
            @endif

            @if (isset($_SESSION["success"]) && isset($_GET["msg"]))
                <p class="badge bg-success fw-semibold">
                    {{$_SESSION["success"]}}
                </p>
                @php unset($_SESSION["success"]);@endphp
            @endif
        </div>

        <form action="{{route('update/'.$data->id)}}" method="POST" class="col-5 mx-auto">
            <div class="mb-3">
                <label class="form-label fw-semibold">Name:</label>
                <input type="text" class="form-control" name="name" value="{{$data->name}}">
            </div>
            <div class="mb-3">
                <label class="form-label fw-semibold">Status:</label>
                <input type="number" class="form-control" name="status" value="{{$data->status}}">
            </div>
            <div class="mb-3 text-end">
                <a href="{{route('list')}}" class="btn btn-secondary">List</a>
                <button type="submit" name="btn-save" class="btn btn-primary">Save</button>
            </div>
        </form>
    </section>

</body>
</html>