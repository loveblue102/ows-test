<!DOCTYPE html>
<html lang="en">
<head>
    <title>Ha Thang's test</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
    <h2 class="text-center">Contact list</h2>
    <br>
    <a class="btn btn-outline-success" href="/ows-contact/index.php/contact/add">Add</a>
    <table class="table">
        <thead class="bg-primary">
        <tr>
            <th>#</th>
            <th>Name</th>
            <th>Phone</th>
            <th>Detail</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($contacts as $id => $item): ?>
            <tr>
                <td class="center"><?= $id+1 ?></td>
                <td><?= $item->name ?></td>
                <td><?= $item->phone1 ?></td>
                <td class="center"><a href="/ows-contact/index.php/contact/edit/<?= $item->id ?>">Chi tiết</a></td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
</div>

</body>
</html>
