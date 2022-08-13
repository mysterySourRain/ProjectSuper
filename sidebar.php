<div id="layoutSidenav_nav">
    <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
        <div class="sb-sidenav-menu">
<div class="nav">
    <!-- <div class="sb-sidenav-menu-heading">Semester</div>
    <a class="nav-link" href="index.php">
        <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
        Dashboard
    </a> -->

    <?php  
    $query1 = "SELECT * FROM category"; 
    $result1 = pg_exec($conn, $query1);
    $query2 = "SELECT * FROM subtab order by id";
    $result2 = pg_exec($conn, $query2); 
    $query3 = "SELECT * FROM classtab";
    $result3 = pg_exec($conn, $query3);

    while ($row1 = pg_fetch_array($result1)){ 
    echo"<div class='sb-sidenav-menu-heading'>$row1[title]</div>
    ";

        while ($row2 = pg_fetch_array($result2)){ 
        echo "<a class='nav-link collapsed' href=$row2[address] ";
if ($row2['tabname'] == "Grades"){
    echo "data-bs-toggle='collapse' data-bs-target='#collapseLayouts' aria-expanded='false' aria-controls='collapseLayouts'>
    ";
}

else{
    echo ">
    ";
}
        echo "<div class='sb-nav-link-icon'><i class='$row2[iconname]'></i></div>$row2[tabname]";
if ($row2['tabname'] == "Grades"){
    echo "<div class='sb-sidenav-collapse-arrow'><i class='fas fa-angle-down'></i></div>
    </a>
    <div class='collapse' id='collapseLayouts' aria-labelledby='headingOne' data-bs-parent='#sidenavAccordion'>
    <nav class='sb-sidenav-menu-nested nav'>
    ";
    while ($row3=pg_fetch_array($result3)){
    $classtype=$row3['classtype'];
        echo "<a class='nav-link' href=$row2[address]?class=$classtype method='get'> $classtype</a>";
        
    }
    echo"  
    
    </nav></div>";
}
        echo "</a>
<div class='collapse' id='collapseLayouts' aria-labelledby='headingOne' data-bs-parent='#sidenavAccordion'>
<nav class='sb-sidenav-menu-nested nav'></nav></div>
";
        }    
    }?>

    <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapsePages" aria-expanded="false" aria-controls="collapsePages">
        <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
        Profile
        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
    </a>
    <div class="collapse" id="collapsePages" aria-labelledby="headingTwo" data-bs-parent="#sidenavAccordion">
        <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
<a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#pagesCollapseAuth" aria-expanded="false" aria-controls="pagesCollapseAuth">
    Authentication
    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
</a>
<div class="collapse" id="pagesCollapseAuth" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordionPages">
    <nav class="sb-sidenav-menu-nested nav">
        <a class="nav-link" href="login.php">Login</a>
        <a class="nav-link" href="register.php">Register</a>
        <a class="nav-link" href="password.html">Forgot Password</a>
    </nav>
</div>
<a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#pagesCollapseError" aria-expanded="false" aria-controls="pagesCollapseError">
    Error
    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
</a>
<div class="collapse" id="pagesCollapseError" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordionPages">
    <nav class="sb-sidenav-menu-nested nav">
        <a class="nav-link" href="401.html">401 Page</a>
        <a class="nav-link" href="404.html">404 Page</a>
        <a class="nav-link" href="500.html">500 Page</a>
    </nav>
</div>
        </nav>
    </div>
    <!-- <div class="sb-sidenav-menu-heading">Addons</div>
    <a class="nav-link" href="charts.html">
        <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
        Charts
    </a>
    <a class="nav-link" href="tables.html">
        <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
        Tables
    </a> -->
</div>
        </div>
        <div class="sb-sidenav-footer">
<div class="small">Logged in as:</div>
<?php echo $_SESSION['firstname']." ".$_SESSION['lastname'];?>
        </div>
    </nav>
</div>
        
