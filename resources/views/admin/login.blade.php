<!DOCTYPE html>
<html lang="en">

    <head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login Form</title>
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
  integrity="sha384-KyZXEAg3QhqLMpG8r+wn4B0QswhEIJJsH1PhXbr6j6JfLWq4KzNobJh/Vj4P4s5s" crossorigin="anonymous">
  <link rel="stylesheet" href="{{asset('style/assets/css/login.css')}}">

</head>

<body>
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-6">
        <div class="card login-card">
          <div class="card-body">
            <h4 class="card-title mb-4">Login</h4>
            <form>
              <div class="mb-3">
                <label for="username" class="form-label">Username</label>
                <input type="text" class="form-control" id="username" placeholder="Enter your username">
              </div>
              <div class="mb-3">
                <label for="password" class="form-label" id="pass">Password    </label>
                <input type="password" class="form-control" id="password" placeholder="Enter your password">
              </div>
              <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input" id="rememberMe">
                <label class="form-check-label" for="rememberMe">Remember me</label>
              </div>
              <div class="text-center">
                <button type="submit" class="btn btn-primary">Login</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-6UaQT4eFJkZBj1kHaxxRyHnF3cg8iJnEvORR4Ck/v/ZFGL4x6L6UcwScbO+HztN8" crossorigin="anonymous"></script>
</body>

</html>
