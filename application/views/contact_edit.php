<!DOCTYPE html>
<html lang="en">
<head>
    <title>Ha Thang's test</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="container">
        <h2 class="text-success text-center"> Contact detail</h2>
        <form method="post" action="/ows-contact/index.php/contact/save/<?= $contact_item->id?>">
            <div class="form-group">
                <label for="">ID</label>
                <input type="text" class="form-control" id="" placeholder="Mã nhân viên" name="id" value="<?= $contact_item->id ?>" >
            </div>
            <div class="form-group">
                <label for="">Name</label>
                <input type="text" class="form-control" id="" value="<?= $contact_item->name ?>" name="name">
            </div>
            <div class="form-group">
                <label for="">Phone</label>
                <input type="text" class="form-control" id="" value="<?= $contact_item->phone1 ?>" name="phone1">
            </div>
            <div class="form-group">
                <label for="">Phone2</label>
                <input type="text" class="form-control" id="" value="<?= $contact_item->phone2 ?>" name="phone2">
            </div>
            <div class="form-group">
                <label for="">Email</label>
                <input type="text" class="form-control" id="" value="<?= $contact_item->email ?>" name="email">
            </div>
            <div class="form-group">
                <label for="">Facebook</label>
                <input type="text" class="form-control" id="" value="<?= $contact_item->fb ?>" name="fb">
            </div>
            <div class="form-group">
                <label for="">Company</label>
                <input type="text" class="form-control" id="" value="<?= $contact_item->company ?>" name="company">
            </div>

            <input class="btn btn-success" type="submit" value="Update" />
            <input class="btn btn-danger" type="button" value="Delete" onclick="remove(<?= $contact_item->id ?>)"/>
            <a class="btn btn-primary" href="/ows-contact/index.php">Back</a>
        </form>
    </div>
    <script
            src="https://code.jquery.com/jquery-1.12.4.min.js"
            integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ="
            crossorigin="anonymous"></script>
    <script>
        function remove(id) {
            var isConfirm = confirm("Bạn có chắc muốn xóa không?");
            if (isConfirm) {
                $.get('/ows-contact/index.php/contact/del/'+id).then(function(data) {
                    if (data == "success")
                        window.location = "http://localhost/ows-contact";
                    else
                        alert('Có lỗi xảy ra.');
                })
            }
        }
    </script>

</body>
</html>
