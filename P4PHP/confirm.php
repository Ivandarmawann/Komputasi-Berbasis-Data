<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Konfirmasi Data Diri</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">

    <style>
        body {
            font-family: 'Roboto', sans-serif;
            background: linear-gradient(135deg, #e0eafc, #cfdef3);
            color: #333;
            padding: 50px 0;
        }

        .custom-form {
            width: 70%;
            margin: auto;
            padding: 30px;
            background: #ffffff;
            border-radius: 15px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
        }

        h1 {
            text-align: center;
            color:  #2f71ff;
            margin-bottom: 20px;
            font-size: 2.5rem;
        }

        .form-label {
            font-weight: bold;
        }

        .btn-pink {
            background-color: #2f71ff;
            border: none;
            transition: background-color 0.3s ease;
            width: 100%;
        }

        .btn-pink:hover {
            background-color: #d41273;
            color: white;
        }

        @media (max-width: 768px) {
            .custom-form {
                width: 90%;
            }
        }
    </style>
</head>
<body>
    <div class="container-fluid">
        <h1>Konfirmasi Data Diri</h1>
        <p class="text-center">Berikut adalah data yang Anda isi:</p>

        <div class="p-4 mb-3 rounded custom-form">
            <div class="mb-3">
                <label class="form-label">Nama:</label>
                <p><?php echo htmlspecialchars($_GET['name']); ?></p>
            </div>                
            <div class="mb-3">
                <label class="form-label">Email:</label>
                <p><?php echo htmlspecialchars($_GET['email']); ?>@gmail.com</p>
            </div>
            <div class="mb-3">
                <label class="form-label">No. Handphone:</label>
                <p><?php echo htmlspecialchars($_GET['hp']); ?></p>
            </div>
            <div class="mb-3">
                <label class="form-label">Alamat:</label>
                <p><?php echo htmlspecialchars($_GET['alamat']); ?></p>
            </div>
            <div class="mb-3">
                <label class="form-label">Pekerjaan:</label>
                <p><?php echo htmlspecialchars($_GET['job']); ?></p>
            </div>
            <div class="mb-3">
                <label class="form-label">Jenis Kelamin:</label>
                <p><?php echo htmlspecialchars($_GET['gender']); ?></p>
            </div>
            <div class="mb-3">
                <label class="form-label">Hobby:</label>
                <p><?php echo htmlspecialchars($_GET['hobby']); ?></p>
            </div>
            <div class="mb-3">
                <label class="form-label">Status:</label>
                <p><?php echo htmlspecialchars($_GET['status']); ?></p>
            </div>
            <div class="text-center">
                <a href="form.html" class="btn btn-pink">Kembali</a>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS and Popper -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>