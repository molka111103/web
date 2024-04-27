<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <style>
        .navbar-brand img {
            max-width: 40px;
            margin-right: 10px;
        }
    </style>
</head>
<body>
    <header class="header">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container">
            <a class="navbar-brand" href="index.html"><h2>WeTravel  <span class="ag">Agency</span></h2></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="admin_pannel.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="admin_voyage.php">Voyage</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="admin_hotel.php">Hotel</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="admin_reservation.php">Reservations</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="admin_messages.php">Messages</a>
                        </li><bh>
                        <li class="nav-item">
                         
                            <a type="button" class="btn btn-outline-danger" href="logout.php">Logout</a>
                        
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
</body>
</html>


