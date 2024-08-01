<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Category − List</title>
</head>
<body>
    <section class="container">
        <h1 class="text-center text-uppercase">Danh sách</h1>

        <a href="{{route('add')}}" class="btn btn-primary">Add new</a>

        <table class="table table-hover">
            <thead>
                <tr class="text-uppercase">
                    <th>ID</th>
                    <th>Name</th>
                    <th>Status</th>
                    <th class="col-2 text-center">Action</th>
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
                        <td class="text-end">
                            <button class="btn btn-outline-warning">Edit</button>
                            <button class="btn btn-outline-danger">Disable</button>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>

    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>