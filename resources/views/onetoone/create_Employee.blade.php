<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <!-- Brand -->
  <a class="navbar-brand" href="#">Logo</a>

  <!-- Links -->
  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link" href="{{route('create')}}">Employee</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#">Salary</a>
    </li>
  </ul>
</nav>
<br>
  
<div class="container">
  <h3>welcome..........</h3>

  <form action="{{route('store')}}" method="post">
  	@csrf
  <div class="form-group">
    <label for="email">Name:</label>
    <input type="text" class="form-control" name="name"  id="email">
  </div>
  <div class="form-group">
    <label for="pwd">Phone:</label>
    <input type="text" class="form-control" name="phone"  id="pwd">
  </div>
  <div class="form-group">
    <label for="pwd">city:</label>
    <input type="text" class="form-control" name="city"  id="pwd">
  </div>
  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
  
</div>

</body>
</html>
