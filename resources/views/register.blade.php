<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Register</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      background-color: #f8f9fa;
    }
    .card {
      border-radius: 15px;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }
    .btn-primary {
      background-color: #4CAF50;
      border: none;
    }
    .btn-primary:hover {
      background-color: #45a049;
    }
  </style>
</head>
<body>
  <div class="container">
    <div class="row justify-content-center align-items-center" style="height: 100vh;">
      <div class="col-md-6">
        <div class="card">
          <div class="card-body">
            <h2 class="text-center mb-4">Register</h2>
            <form action="{{ route('registerStore') }}" method="POST">
                @csrf
              <div class="mb-3">
                <label for="name" class="form-label"> Name</label>
                <input type="text" name="name" class="form-control" id="name" placeholder="Enter name" required>
              </div>

              <div class="mb-3">
                <label for="email" class="form-label">Email address</label>
                <input type="email" name="email" class="form-control" id="email" placeholder="Enter email" required>
              </div>
              <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" name="password" class="form-control" id="password" placeholder="Create a password" required>
              </div>
              <div class="mb-3">
                <label for="confirmPassword" class="form-label">Confirm Password</label>
                <input type="password" class="form-control" id="confirmPassword" name="password_confirmation" placeholder="Confirm password" required>
              </div>
              <button type="submit" class="btn btn-primary w-100">Register</button>
              <p class="text-center mt-3">Already have an account? <a href="{{ route('login') }}">Login</a></p>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>
</html>
