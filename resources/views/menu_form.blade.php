<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

    <title>Food-Hub</title>
  </head>
  <body>

    <main>
        <h1 class="p-5"><center>Add menu Form</center></h1>

        <div class="container">
            <form method="post" action="{{ route('add.menu') }}">
                @csrf
                <div class="mb-3">
                  <label class="form-label">Name</label>
                  <input name="name" required type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                  <div id="emailHelp" class="form-text">Add the name of your menu</div>
                </div>
                <div class="mb-3">
                    <label class="form-label">Price</label>
                    <input name="price" required type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                  </div>
                <button type="submit" class="btn btn-primary">Submit</button>
                <a href="{{ route('dashboard') }}" class="btn btn-success">Back</a>
              </form>
        </div>
    </main>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
</body>
</html>
