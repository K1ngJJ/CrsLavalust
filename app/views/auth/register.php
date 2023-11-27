<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
        <title>CaterServ - Catering Services Website Template</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="" name="keywords">
        <meta content="" name="description">

        <!-- Google Web Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=Playball&display=swap" rel="stylesheet">

        <!-- Icon Font Stylesheet -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"/>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

        <!-- Libraries Stylesheet -->
        <link href="public/CRS1/lib/animate/animate.min.css" rel="stylesheet">
        <link href="public/CRS1/lib/lightbox/css/lightbox.min.css" rel="stylesheet">
        <link href="public/CRS1/lib/owlcarousel/owl.carousel.min.css" rel="stylesheet">

        <!-- Customized Bootstrap Stylesheet -->
        <link href="public/CRS1/css/bootstrap.min.css" rel="stylesheet">

        <!-- Template Stylesheet -->
        <link href="public/CRS1/css/style.css" rel="stylesheet">
        
    <link rel="stylesheet" href="public/CRS/assets/toolkit/css/toolkit.min.css">
    <link rel="stylesheet" href="public/CRS/assets/css/Inter.css">
    <link rel="shortcut icon" href="public/catering.png">
  <link rel="apple-touch-icon" href="public/catering.png">
  <link rel="icon" href="public/favicon.ico" type="image/x-icon">
</head>
<body>
    <style>
        .transparent-form-container {
        background-color: rgba(255, 255, 255, 0.100); 
        padding: 20px; 
        border-radius: 20px; 
        width: 350px;
        margin: auto;
    }
    </style>

<section class="py-2">
        <div class="container py-5">
            <div class="row mb-4 mb-lg-5">
                <div class="col-md-8 col-xl-6 text-center mx-auto">
                    <p class="fw-bold text-success mb-2">Sign up</p>
                    <h2 class="fw-bold">Welcome</h2>
                </div>
            </div>
            <div class="row d-flex justify-content-center">
                <div class="col-md-6 col-xl-4">
                    <div class="card">
                        <div class="card-body text-center d-flex flex-column align-items-center">
                            <div class="bs-icon-xl bs-icon-circle bs-icon-primary shadow bs-icon my-4"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-person">
                                    <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z"></path>
                                </svg></div>                                
                                <div class="transparent-form-container">
                                <!-- flashmessage -->
                                <?php if(isset($_SESSION['msg'])): ?>
                                <div class="fadeIn first">
                                    <h2 class='msg'><?= $_SESSION['msg'];?></h2>
                                <div>
                                <?php endif; ?>
                                

                                <!-- formvalidation errors -->
                                <?php if(isset($errors)): ?>
                                <div class="fadeIn first">
                                    <h2 class='msg'><?= $errors; ?></h2>
                                <div>
                                <?php endif; ?>

                  <form class="row g-3 needs-validation" novalidate  method="post" action="/create">

                  <div class="col-12">
                      <label for="FullName" class="form-label">Full Name</label>
                      <input type="name" name="name" class="form-control" id="FullName" required>
                      <div class="invalid-feedback">Please enter a your name!</div>
                    </div>

                    <div class="col-12">
                      <label for="UserName" class="form-label">username</label>
                      <input type="username" name="username" class="form-control" id="UserName" required>
                      <div class="invalid-feedback">Please enter a your username!</div>
                    </div>
                   
                    <div class="col-12">
                      <label for="yourEmail" class="form-label">Your Email</label>
                      <input type="email" name="email" class="form-control" id="yourEmail" required>
                      <div class="invalid-feedback">Please enter a valid Email adddress!</div>
                    </div>

                    
                    <div class="col-12">
                      <label for="yourPassword" class="form-label">Password</label>
                      <input type="password" name="password" class="form-control" id="yourPassword" required>
                      <div class="invalid-feedback">Please enter your password!</div>
                    </div>

                    <div class="col-12">
                      <label for="confirmpassword" class="form-label">Confirm Password</label>
                      <input type="password" name="password" class="form-control" id="password" required>
                      <div class="invalid-feedback">Please confirm your password!</div>
                    </div>

                    <div class="col-12">
                      <div class="form-check">
                        <input class="form-check-input" name="terms" type="checkbox" value="" id="acceptTerms" required>
                        <label class="form-check-label" for="acceptTerms">I agree and accept the <a href="#">terms and conditions</a></label>
                        <div class="invalid-feedback">You must agree before submitting.</div>
                      </div>
                    </div>
                    <div class="col-12">
                      <button class="btn btn-primary w-100" type="submit">Create Account</button>
                    </div>
                    <div class="col-12">
                      <p class="small mb-0">Already have an account? <a href="/login">Log in</a></p>
                    </div>
                  </form>

                  </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>