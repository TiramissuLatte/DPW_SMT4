<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
$name = $_POST['name'];
$email = $_POST['email'];
$comment = $_POST['comment'];
echo "<script>alert('Terima kasih, $name, pesan Anda telah berhasil dikirim!');</script>";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8" />
<meta name="viewport"
content="width=device-width, initial- scale=1" />
<title>Landing Page</title>
<link
rel="stylesheet" href="bootstrap/bootstrap- 5.3.3/dist/css/bootstrap.min.css"
/>
<style> h1 {
font-size: 50px; font-weight: 900;
}
</style>
</head>
<body>
<nav
class="navbar bg-dark border-bottom border-body navbar-expand-lg"
data-bs-theme="dark"
>
<div class="container-fluid">
<a class="navbar-brand" href="#">Iksyaf</a>
<button
class="navbar-toggler" type="button"
data-bs-toggle="collapse" data-bs-
target="#navbarSupportedContent" aria- controls="navbarSupportedContent" aria-expanded="false"
aria-label="Toggle navigation"
>
<span class="navbar-toggler- icon"></span>
</button>
<div class="collapse navbar-collapse" id="navbarSupportedContent">
<ul class="navbar-nav me-auto mb-2 mb-lg-0">
<li class="nav-item">
<a class="nav-link active" aria-current="page" href="#aboutme"
>About Me</a>
</li>
<li class="nav-item">
<a class="nav-link active" aria-current="page"
href="#portofolio"
>Portofolio</a>
</li>
<li class="nav-item">
<a class="nav-link active" aria-current="page" href="#contact"
>Contact</a>
</li>
</ul>
<form class="d-flex" role="search">
<input
class="form-control me-2" type="search" placeholder="Search"
aria-label="Search"
/>
<button class="btn btn-outline- success" type="submit">
Search
</button>
</form>
</div>
</div>
</nav>
<div class="m-5" id="aboutme">
<div class="d-flex justify-content- between align-items-center">
<div>
<h1>ABOUT ME</h1>
<p class="w-50">
Halo! Perkenalkan nama saya Muhammad Ikram Syafwan. Saya berasal dari Batam, Kepulauan Riau. Saya lahir pada 29 Februari 2004. Saat ini saya sedang menempuh pendidikan di Program Studi Teknik Informatika Universitas Riau.
</p>
</div>
<img class="w-25" src="images/Artboard 1.png" alt="" />
</div>
</div>
<div class="m-5" id="portofolio">
<h1>PORTOFOLIO</h1>
<div class="row">
<div class="col-sm-6 mb-3 mb-sm-0">
<div class="card text-center shadow-sm">
<img
src="images/github.jpg" class="card-img-top w-50 mx- auto" alt="..."/>
<div class="card-body">
<h5 class="card- title">GitHub</h5>
<p class="card-text">
Berikut adalah projek-projek yang saya buat di GitHub.
</p>
<a href="https://github.com/ ox1dized" class="btn btn- primary"
>Check</a>
</div>
</div>
</div>
<div class="col-sm-6">
<div class="card text-center shadow-sm">
<img
src="images/instagram.jpg" class="card-img-top w-50 mx- auto" alt="..."/>
<div class="card-body">
<h5 class="card- title">Instagram</h5>
<p class="card-text">
Berikut adalah projek-projek yang saya buat di Instagram.
</p>
<a href="https://www.instagram. com/ikram.syaf/"
class="btn btn-primary"
>Check</a>
</div>
</div>
</div>
</div>
</div>
<div class="formdiv m-5" id="contact">
<h1>CONTACT</h1>
<form class="shadow-sm p-3 border rounded" method="post" action="<?php echo htmlspecialchars($_SERVER ["PHP_SELF"]);?>">
<div class="form-floating mb-3">
<input type="text" class="form-control" id="name" name="name" placeholder="Your Name">
<label for="name">Name</label>
</div>
<div class="form-floating mb-3">
<input type="email" class="form- control" id="email" name="email" placeholder="name@example.com">
<label for="email">Email address</label>
</div>
<div class="form-floating mb-3">
<textarea class="form-control" placeholder="Leave a comment here" id="comment" name="comment" style="height: 100px"></textarea>
<label for="comment">Comments</label>
</div>
<button type="submit" class="btn btn- primary btn-lg">Send</button>
</form>
</div>
<div class="container">
<footer class="py-3 my-4">
<ul class="nav justify-content-center border-bottom pb-3 mb-3">
<li class="nav-item">
<a href="#aboutme" class="nav- link px-2 text-body-secondary"
>About Me</a
>
</li>
<li class="nav-item">
<a href="#portofolio" class="nav- link px-2 text-body-secondary"
>Portofolio</a
>
</li>
<li class="nav-item">
<a href="#contact" class="nav- link px-2 text-body-secondary"
>Contact</a
>
</li>
</ul>
<p class="text-center text-body- secondary">
© 2024 Muhammad Ikram Syafwan
</p>
</footer>
</div>
<script src="bootstrap/bootstrap- 5.3.3/dist/js/bootstrap.bundle
.min.js"></script>
</body>
</html>
