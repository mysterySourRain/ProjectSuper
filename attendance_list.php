<?php
require("phpLogin.php");
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Static Navigation - SB Admin</title>
        <link href="css/styles.css?var1" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
    </head>
    <body>
        <?php require("nav.php"); ?>
        <div id="layoutSidenav">
            <?php require("sidebar.php")?>
                            
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Static Navigation</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                            <li class="breadcrumb-item active">Static Navigation</li>
                        </ol>
                        <div class="card mb-4">
                            <div class="card-body">
                                <p class="mb-0">
                                    <form action="delete_do.jsp" method="post">
                                        <table border="1" cellspacing="0">
                                        <tr>
                                        <td>ID</td>
                                        <td>Name</td>
                                        <td>password</td>
                                        <td>email</td>
                                        <th>비고</th>
                                        </tr>
                                        <%
                                         while(rs.next()) { 
                                        %><tr>
                                        <td><%=rs.getString("inputFirstName")%></td>
                                        <td><%=rs.getString("inputLastName")%></td>
                                        <td><%=rs.getString("inputEmail")%></td>
                                        <td><%=rs.getString(4)%></td>
                                        <td><a href="delete_do.jsp?del=<%=rs.getString(4)%>">delete</a>
                                        </td>
                                        </tr>
                                        <%
                                         }
                                        %></table>
                                        </form>
                                        <button><a href="register_edited.html">register.html</a>
                                        <%
                                        rs.close();
                                         stmt.close(); 
                                         conn.close();  
                                        }
                                        catch (SQLException e) {
                                         out.println("err:"+e.toString());
                                        } 
                                        %>
                                    
                                    This page is an example of using static navigation. By removing the
                                    <code>.sb-nav-fixed</code>
                                    class from the
                                    <code>body</code>
                                    , the top navigation and side navigation will become static on scroll. Scroll down this page to see an example.
                                </p>
                            </div>
                        </div>
                        <div style="height: 100vh"></div>
                        <div class="card mb-4"><div class="card-body">When scrolling, the navigation stays at the top of the page. This is the end of the static navigation demo.</div></div>
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
    </body>
</html>
