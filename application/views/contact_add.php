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
    <h2 class="text-warning text-center"> Add new contact</h2>
    <form method="post" action="/ows-contact/index.php/contact/save/">
        <div class="form-group">
            <label for="">Name</label>
            <input type="text" class="form-control" id="" name="name">
        </div>
        <div class="form-group">
            <label for="">Phone</label>
            <input type="text" class="form-control" id="" name="phone1">
        </div>
        <div class="form-group">
            <label for="">Phone2</label>
            <input type="text" class="form-control" id="" name="phone2">
        </div>
        <div class="form-group">
            <label for="">Email</label>
            <input type="text" class="form-control" id="" name="email">
        </div>
        <div class="form-group">
            <label for="">Facebook</label>
            <input type="text" class="form-control" id="" name="fb">
        </div>
        <div class="form-group">
            <label for="">Company</label>
            <input type="text" class="form-control" id="" name="company">
        </div>

        <input class="btn btn-success" type="submit" value="Add" />
        <a class="btn btn-primary" href="/ows-contact/index.php">Back</a>
    </form>
</div>

</body>
</html>
