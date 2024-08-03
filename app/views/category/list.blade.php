@if (isset($_SESSION["success"]))
    @php echo '<script>alert("Xóa thành công nhé!")</script>'; @endphp
    @php unset($_SESSION["success"]); @endphp
@endif

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Category − List</title>
</head>
<body>
    <section class="container col-6">
        <h1 class="text-center text-uppercase">List</h1>

        <a href="{{route('add')}}" class="btn btn-primary">Add new</a>

        <table class="table table-hover">
            <thead>
                <tr class="text-uppercase">
                    <th>ID</th>
                    <th>Name</th>
                    <th>Status</th>
                    <th class="col-3">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($data as $item) { ?>
                    <tr>
                        <td><?= $item->id ?></td>
                        <td><?= $item->name ?></td>
                        <td>
                            <?php echo $item->status == 1 ? 'Active' : 'Disable'; ?>
                        </td>
                        <td>
                            <a href="{{route('edit/'.$item->id)}}" class="btn btn-outline-warning">🖊️</a>
                            <a onclick="return confirm('Are you sure?')" href="{{route('destroy/'.$item->id)}}" class="btn btn-outline-danger">🗑️</a>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>

    </section>

</body>
</html>