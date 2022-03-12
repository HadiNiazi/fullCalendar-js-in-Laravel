<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>File Import</title>
</head>
<body>

    <div class="container">
        <div class="row">
            <h4 class="text-center mt-5">Excel File Import in Laravel </h4>
            <div class="col md-10 offset-1 mt-5">
                <form method="POST" action="{{ route('books.store') }}" enctype="multipart/form-data">
                  @csrf
                    <input type="file" name="file" class="form-control">
                    <button type="submit" class="btn btn-info mt-2">Upload</button>
                </form>
            </div>
        </div>
    </div>

</body>
</html>
