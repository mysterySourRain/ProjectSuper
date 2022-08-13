<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Register</title>
        <link href="css/styles.css?var1" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
    </head>
    <body class="bg-secondary">
        <div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                <main>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-7">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <div class="card-header"><h3 class="text-center font-weight-light my-4">Create Account</h3></div>
                                    <div class="card-body">
                                    <form action="registerProcess.php" method="POST" id="signup-form">
                                            
                                                <div class="row mb-3">
                                                <div class="col-md-6">
                                                    <div class="form-floating mb-3 mb-md-0">
                                                        <input class="form-control" name="FirstName" type="text" placeholder="Enter your first name" />
                                                        <label for="FirstName">First name</label>
                                                    </div>
                                                </div>                                                
                                                <div class="col-md-6">
                                                    <div class="form-floating">
                                                        <input class="form-control" name="LastName" type="text" placeholder="Enter your last name" />
                                                        <label for="LastName">Last name</label>
                                                    </div>
                                                </div>
                                            </div>
                                            
                                            <div class="form-floating mb-3">
                                                <input class="form-control" name="Email" type="email" placeholder="name@example.com" />
                                                <label for="Email">Email address</label>
                                            </div>
                                            <div class="row mb-3">
                                                <div class="col-md-6">
                                                    <div class="form-floating mb-3 mb-md-0">
                                                        <input class="form-control" name="Password" type="password" placeholder="Create a password" />
                                                        <label for="Password">Password</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-floating mb-3 mb-md-0">
                                                        <input class="form-control" name="password-check" type="password" placeholder="Confirm password" />
                                                        <label for="PasswordConfirm">Confirm Password</label>
                                                    </div>
                                                </div>
                                                
                                            </div>
                                            <div class="col-md-6">  
                                                    <div class="form-floating mb-3 mb-md-0">
                                                        <input class="form-control" name="studentNum" type="text" placeholder="Enter your student number" />
                                                        <label for="studentNum">Student Number</label>
                                                    </div>
                                                </div>
                                            <?php if(isset($_GET['error'])){?>
                                                <div class="col-md-6">
                                                    <p class="error"><?php echo $_GET['error'];?></p></div>  
                                                <?php } ?>
                                                <div class="mt-4 mb-0">
                                                <div class="d-grid"><input type="submit" class="btn btn-primary btn-block" href="registerProcess.php" id="signup-button"></input></div>
                                            </div>
                                            
                                            
                                        </form>

                                    </div>
                                    <div class="card-footer text-center py-3">
                                        <div class="small"><a href="login.html">Have an account? Go to login</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
            <div id="layoutAuthentication_footer">
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid px-4">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; Your Website 2022</div>
                            <div>
                                <a href="#">Privacy Policy</a>
                                &middot;
                                <a href="#">Terms &amp; Conditions</a>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
    </body>
</html>
