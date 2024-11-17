<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dashboard - Auth App</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        body {
            background-color: #f8f9fa;
        }

        .sidebar {
            height: 100vh;
            position: fixed;
            top: 0;
            left: 0;
            width: 220px;
            background-color: #343a40;
            padding: 20px;
        }

        .sidebar .nav-link {
            color: white;
            font-weight: bold;
            margin-bottom: 15px;
        }

        .sidebar .nav-link.active {
            background-color: #495057;
            border-radius: 5px;
        }

        .content {
            margin-left: 240px;
            padding: 20px;
        }

        .content-header {
            margin-bottom: 20px;
        }

        .card {
            border-radius: 10px;
            box-shadow: 0px 0px 15px rgba(0, 0, 0, 0.1);
        }
    </style>
</head>

<body>
    <!-- Sidebar -->
    <nav class="sidebar">
        <a href="#" class="navbar-brand text-white">Auth App</a>
        <div class="nav flex-column mt-4">
            <a class="nav-link active" href="{{ route('dashboardPage') }}">Dashboard</a>
            <a class="nav-link" href="{{ route('innerPage') }}">Inner Page</a>
            <a class="nav-link" href="{{ route('userprofile') }}">Profile</a>
            <a class="nav-link" href="#">Settings</a>
            <a class="nav-link" href="#">Users</a>
            <a class="nav-link" href="#">Reports</a>
            <a class="nav-link" href="{{ route('logout') }}">Logout</a>
        </div>
    </nav>

    <!-- Main Content -->
    <div class="content">
        @section('content')
        @show
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>
