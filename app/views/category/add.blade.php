<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Category − Add</title>
</head>
<body>
    <section class="container">
        <h1 class="text-center text-uppercase">Thêm mới</h1>

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

        <form action="{{route('store')}}" method="POST" class="col-5 mx-auto">
            <div class="mb-3">
                <label for="name" class="form-label fw-semibold">Name:</label>
                <input type="text" class="form-control" name="name" id="name">
            </div>
            <div class="mb-3">
                <label for="" class="form-label fw-semibold">Status:</label>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="status" value="1" id="active">
                    <label class="form-check-label" for="active">Active</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="status" value="2" id="disable">
                    <label class="form-check-label" for="disable">Disable</label>
                </div>
            </div>
            <div class="mb-3 text-end">
                <a href="{{route('list')}}" class="btn btn-success">Danh sách</a>
                <button type="reset" class="btn btn-secondary">Hủy</button>
                <button type="submit" name="btn-add" class="btn btn-primary">Thêm</button>
            </div>
        </form>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>