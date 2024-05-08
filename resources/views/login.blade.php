<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container p-4">
        <div class="row">
            <div class="col-md-4 m-auto">
                <form action="{{ route('login')}}" method="post" class="p-4 rounded border ">
                        {{ csrf_field() }}
                        <input type="text" class="form-control form-control-lg  mb-3" name="email" placeholder="Username">
                        <input type="password" class="form-control form-control-lg  mb-3" name="password" placeholder="Password">
                        <button class="btn btn-success">Login</button>
                </form>
            </div>
        </div>
    </div>
</body>

</html>
