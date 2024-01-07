<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
</head>
<style>
    body {
        background-color: #F1F2F5; /* Ganti dengan kode warna yang diinginkan */
    }

    .image-logo img{
        width: 250px;
        margin-top: 30px;
    }

    .container-login .title{
        display: flex;
        justify-content: center;
        margin-top: 70px;

    }

    .form-login{
        display: flex;
        justify-content: center;
        
    }

    .form-login input {
        width: 500px;
    }

    .forgot-password a{
        text-decoration: none;
        display: flex;
        justify-content: center;
    }

    .button-submit button{
        margin-top:35px;
        width: 250px;
        border-radius:100px;
        background-color: #3B3E88;
        border-color: #3B3E88;
    }

</style>
<body>
<div class="container">
    <div class="image-logo">
        <img src="https://inalumdihati.id/wp-content/uploads/2022/09/Logo-Inalum-Operating-1.png" alt="">
    </div>
</div>

<div class="container-login">
    <div class="title">
        <h2>Register</h2>
    </div>
    <div class="form-login">
        <form action="/admin/register/post" method="post">
        @csrf
            <div class="mb-3 mt-3">
                <input class="form-control" placeholder="Role" name="role">
            </div>
            <div class="mb-3 mt-3">
                <input class="form-control" placeholder="Nama Lengkap" name="full_name">
            </div>
            <div class="mb-3 mt-3">
                <input class="form-control" placeholder="Username" name="username">
            </div>
            <div class="mb-3 mt-3">
                <input type="password" class="form-control" placeholder="Password" name="password">
            </div>

            <div class="button-submit d-flex justify-content-center">
                <button type="submit" class="btn btn-primary">Sign Up</button>
            </div>
        </form>
    </div>
</div>
</body>
</html>