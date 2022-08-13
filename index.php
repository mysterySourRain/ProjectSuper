<?php 
require("phpLogin.php"); 

if(isset($_SESSION['password'])){
    echo "<script>location.replace('login.php');</script>";
    /* header("location:login.php");
    exit(); */
} 
session_start();
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>HavenCanvas</title>
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
        <link href="styles.css?v1" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
    </head>
    <body class="sb-nav-fixed">
        <?php require("nav.php"); ?>
        <div id="layoutSidenav">
            <?php require("sidebar.php"); ?>
            <div id="layoutSidenav_content">
                <main>
                <a class="nav-link" href="logout.php"> $classtype</a>
                    <!-- <form action="logout.php">
                     <button type="button" href="logout.php" class="btn btn-outline-logout" style="float: right">Log Out</button>
                       
                    </form> -->
                     
                    <div class="container-fluid px-4">
                       <?php 
                        $querySem = "SELECT * FROM semester where id=$_SESSION[id_last_sem]"; 
                        $resultSem = pg_exec($conn, $querySem);
                        $rowSem = pg_fetch_array($resultSem);
                        echo "<h1 class='mt-4'>$rowSem[year] $rowSem[sem]</h1>"
                        ?>
                        
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Dashboard</li>
                            
                        </ol>
                        
                        <div class="row">

                            <?php
                                while($row4=pg_fetch_array($result4)){
                                    echo"<div class='col-xl-3 col-md-6'>
                                        <div class='card bg-$row4[cardbg] text-white mb-4 '>
                                            <div class='card-body'>$row4[classtype]</div>
                                            <div class='card-footer d-flex align-items-center justify-content-between'>
                                                <a class='small text-white stretched-link' href='grades.php'>View Details</a>
                                                <div class='small text-white'><i class='fas fa-angle-right'></i></div>
                                            </div>
                                        </div>
                                    </div>";
                                }
                            ?>
                            
                        </div>
                        <div class="row">
                            <div class="col-xl-6">
                                <div class="card mb-4">
                                    <div class="card-header">
                                        <i class="fas fa-chart-area me-1"></i>
                                        Area Chart Example
                                    </div>
                                    <div class="card-body"><canvas id="myAreaChart" width="100%" height="40"></canvas></div>
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="card mb-4">
                                    <div class="card-header">
                                        <i class="fas fa-chart-bar me-1"></i>
                                        Bar Chart Example
                                    </div>
                                    <div class="card-body"><canvas id="myBarChart" width="100%" height="40"></canvas></div>
                                </div>
                            </div>
                        </div>
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                DataTable Example
                            </div>
                            <div class="card-body">
                                <table id="datatablesSimple">
                                    <thead>
                                                                             
                                        
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </main>
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
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="assets/demo/chart-area-demo.js"></script>
        <script src="assets/demo/chart-bar-demo.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
        <script src="js/datatables-simple-demo.js"></script>
    </body>
</html> 
