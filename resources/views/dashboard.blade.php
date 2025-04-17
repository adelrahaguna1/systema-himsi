<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - Systema HIMSI</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" defer></script>
</head>
<body class="bg-light">
    <header class="bg-primary text-white py-3">
        <div class="container d-flex justify-content-between align-items-center">
            <h1 class="h3 mb-0">Systema HIMSI Dashboard</h1>
            <div class="dropdown">
                <button class="btn btn-light text-primary dropdown-toggle" type="button" id="userMenu" data-bs-toggle="dropdown" aria-expanded="false">
                    {{ Auth::user()->name }}
                </button>
                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="userMenu">
                    <li><a class="dropdown-item" href="{{ route('profile') }}">Profile</a></li>
                    <li>
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <button type="submit" class="dropdown-item">Logout</button>
                        </form>
                    </li>
                </ul>
            </div>
        </div>
    </header>

    <main class="container my-5">
        <div class="row text-center">
            <div class="col-md-4 mb-4">
                <div class="card shadow-sm">
                    <div class="card-body">
                        <h5 class="card-title text-primary">Total Users</h5>
                        <p class="display-6 fw-bold">120</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card shadow-sm">
                    <div class="card-body">
                        <h5 class="card-title text-primary">Active Projects</h5>
                        <p class="display-6 fw-bold">8</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card shadow-sm">
                    <div class="card-body">
                        <h5 class="card-title text-primary">Pending Tasks</h5>
                        <p class="display-6 fw-bold">15</p>
                    </div>
                </div>
            </div>
        </div>

        <section class="mt-5">
            <h2 class="h4 text-primary mb-3">Recent Activities</h2>
            <div class="table-responsive">
                <table class="table table-bordered table-hover">
                    <thead class="table-primary">
                        <tr>
                            <th>Date</th>
                            <th>Activity</th>
                            <th>User</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>2023-10-01</td>
                            <td>Created a new project</td>
                            <td>John Doe</td>
                        </tr>
                        <tr>
                            <td>2023-10-02</td>
                            <td>Completed a task</td>
                            <td>Jane Smith</td>
                        </tr>
                        <tr>
                            <td>2023-10-03</td>
                            <td>Updated profile</td>
                            <td>Alice Johnson</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </section>
    </main>

    <footer class="bg-primary text-white text-center py-3">
        <p class="mb-0">&copy; 2023 Systema HIMSI. All rights reserved.</p>
    </footer>
</body>
</html>
