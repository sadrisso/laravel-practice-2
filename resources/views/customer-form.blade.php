<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css">
<link rel="stylesheet" href="style.css">
<title>Form</title>
</head>
<body class="container">

    <form action="{{$url}}" method="post">
        @csrf
        <h2 class="text-center">{{$title}}</h2>
        <div class="form-group">
            <label for="Name">Name</label>
            <input type="text" class="form-control" id="name" placeholder="Enter name" name='name' value="{{$customer->name ?? ''}}">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Email address</label>
            <input type="email" class="form-control" id="Email1" placeholder="Enter email" name='email' value='{{$customer->email ?? ''}}'>
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
            <input type="password" class="form-control" id="Password1" placeholder="Password" name='password'>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.13.0/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.min.js"></script>
</body>
</html>