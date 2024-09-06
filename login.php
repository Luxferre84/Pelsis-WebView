<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" href="style/stylelogin.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

</head>
<body>
    <div class="login-container">
        <div class="login-header">
            <div class="header-text">
                <h1>Selamat Datang PELSIS!</h1>
                <p>Masuk atau Daftarkan akun anda di PELSIS</p>
            </div>
            <img src="img/pelsisbg.png" alt="Logo" class="logo">
        </div>
        <form class="login-form">
          <div class="inputbox">
            <div class="input-group">
              <div class="textsmol">Email/Username
                <input type="text" id="email" name="email" placeholder="Email/Username" required>
              </div>
            </div>
            <div class="input-group">
            <div class="textsmol">Password</div>
                <input type="password" id="password" name="password" placeholder="Kata Sandi" required>
                <span class="toggle-password" id="togglePassword">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-eye"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M10 12a2 2 0 1 0 4 0a2 2 0 0 0 -4 0" /><path d="M21 12c-2.4 4 -5.4 6 -9 6c-3.6 0 -6.6 -2 -9 -6c2.4 -4 5.4 -6 9 -6c3.6 0 6.6 2 9 6" /></svg>
                </span>
            </div>
          </div>
            <a href="#" class="forgot-password">Lupa Kata Sandi?</a>
            <button type="button" class="login-button" id="loginButton">Masuk</button>
        </form>
        <div class="register-link">
            <p>Tidak punya akun? <a href="signup.php">Daftar</a></p>
        </div>
    </div>
    <script>
        document.getElementById('loginButton').addEventListener('click', function() {
        var email = document.getElementById('email').value;
        var password = document.getElementById('password').value;

        if (email === '' || password === '') {
            alert('Harap masukkan Email/Username dan Password.');
        } else {
            redirectToNewPage();
        }
        });

        function redirectToNewPage() {
        // Ganti URL di sini dengan halaman tujuan setelah login
        window.location.href = 'beranda.php';
        }


        const togglePassword = document.getElementById('togglePassword');
        const password = document.getElementById('password');
        let isPasswordVisible = false;

        togglePassword.addEventListener('click', function (e) {
            isPasswordVisible = !isPasswordVisible;
            // toggle the type attribute
            const type = isPasswordVisible ? 'text' : 'password';
            password.setAttribute('type', type);
            // toggle the SVG icon
            togglePassword.innerHTML = isPasswordVisible ? 
                `<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-eye-off"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M10.585 10.587a2 2 0 0 0 2.829 2.828" /><path d="M16.681 16.673a8.717 8.717 0 0 1 -4.681 1.327c-3.6 0 -6.6 -2 -9 -6c1.272 -2.12 2.712 -3.678 4.32 -4.674m2.86 -1.146a9.055 9.055 0 0 1 1.82 -.18c3.6 0 6.6 2 9 6c-.666 1.11 -1.379 2.067 -2.138 2.87" /><path d="M3 3l18 18" /></svg>` : 
                `<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-eye"><path stroke="none" d="M0 0h24v24/H0z" fill="none"/><path d="M10 12a2 2 0 1 0 4 0a2 2 0 0 0 -4 0" /><path d="M21 12c-2.4 4 -5.4 6 -9 6c-3.6 0 -6.6 -2 -9 -6c2.4 -4 5.4 -6 9 -6c3.6 0 6.6 2 9 6" /></svg>`;
        });


    </script>
</body>
</html>
