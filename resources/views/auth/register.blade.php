<!DOCTYPE html>
<html lang="en">
<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>

<div class="jumbotron text-center">
    <h1>Register Page</h1>

    @if(Sentinel::check())
        <form method="POST" action="{{ route('logout')  }}" id="form-submit">
            {{ csrf_field() }}
            <a onclick="document.getElementById('form-submit').submit()">Logout</a>
        </form>
        @endif
</div>

<div class="container">
    <form action="{{ route('post.register') }}" method="POST">
        {{ csrf_field() }}
        <div class="form-group">
            <label for="firstname">First Name:</label>
            <input type="text" name="first_name" class="form-control" placeholder="Enter First name" id="firstname">
        </div>
        <div class="form-group">
            <label for="lastname">Last Name:</label>
            <input type="text" name="last_name" class="form-control" placeholder="Enter Last name" id="lastname">
        </div>
        <div class="form-group">
            <label for="email">Email address:</label>
            <input type="email" name="email" class="form-control" placeholder="Enter email" id="email">
        </div>
        <div class="form-group">
            <label for="pwd">Password:</label>
            <input type="password" name="password" class="form-control" placeholder="Enter password" id="pwd">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    </div>
</div>

</body>
</html>
