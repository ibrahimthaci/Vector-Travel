<?php session_start(); 
    if(!isset($_SESSION['user'])) {
        header('Location: index.php');
    }

    // If user is not admin return back
    if($_SESSION['user']['role'] != 1) {
        header('Location: index.php');
    }

      include_once 'db_connection.php';
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">

        <title>Admin Panel</title>

         <!-- Bootstrap CSS CDN -->
         
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <!-- Our Custom CSS -->
        <link rel="stylesheet" href="assets/style4.css">
        

    </head>
    <body>



        <div class="wrapper">
            <!-- Sidebar Holder -->
            <nav id="sidebar">
                <div class="sidebar-header">
					<h3>Wellcome Admin</h3>
                    <img src = "images/11295722_997127320305962_5162151465108625997_n.jpg" class="img-responsive"  >
                    
                </div>

                <ul class="list-unstyled components">
                    <li class="active">
                        <a href="#reservations" data-toggle="tab">
                            <i class="glyphicon glyphicon-th-list"></i>
                            Reservations
                        </a>
                    </li>
                    <li>
                        <a href="#users" data-toggle="tab">
                            <i class="glyphicon glyphicon-user"></i>
                            User
                        </a>
                        </li>
                    <li>
                        <a href="#">
                            <i class="glyphicon glyphicon-briefcase"></i>
                            About
                        </a>
                        <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false">
                            <i class="glyphicon glyphicon-duplicate"></i>
                            Pages
                        </a>
                        <ul class="collapse list-unstyled" id="pageSubmenu">
                            <li><a href="#">Login</a></li>
                            <li><a href="#">Registrations</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#">
                            <i class="glyphicon glyphicon-link"></i>
                            Portfolio
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="glyphicon glyphicon-paperclip"></i>
                            FAQ
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="glyphicon glyphicon-send"></i>
                            Contact
                        </a>
                    </li>
                </ul>

               <!--  Kjo pjese eshte krijuar nga krijuesi faqes per download te faqes pra nuk na duhet
			   <ul class="list-unstyled CTAs">
                    <li><a href="https://bootstrapious.com/tutorial/files/sidebar.zip" class="download">Download source</a></li>
                    <li><a href="https://bootstrapious.com/p/bootstrap-sidebar" class="article">Back to article</a></li>
                </ul> -->
            </nav>

            <!-- Page Content Holder -->
            <div id="content" class="container" > <!--class="container"-->

                <nav class="navbar navbar-default">
                    <div class="container-fluid">

                        <div class="navbar-header">
                            <button type="button" id="sidebarCollapse" class="btn btn-info navbar-btn">
                                <i class="glyphicon glyphicon-align-left"></i>
                                <span>Toggle Sidebar</span>
                            </button>
                        </div>

                        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                            <ul class="nav navbar-nav navbar-right">
                                <li><a href="#">Admin</a></li>
                              <!-- Nuk na duhet kjo liste se jane mjaft
							  <li><a href="#">Page</a></li> -->
                                <li><a href="#">Page</a></li>
                                <li><a href="server.php?logout=1">Log out</a></li>
                            </ul>
                        </div>
                    </div>
                </nav>
                
                <div class="tab-content">
                    <div id="reservations" class="tab-pane fade in active">
                        <?php 
                            $res = $db->query("SELECT res.id, DATE(res.in_date) AS in_date, DATE(res.out_date) AS out_date, res.rooms, res.guests, CONCAT(user.firstname, ' ', user.lastname) AS username FROM rezervimet AS res, users AS user WHERE res.user_id = user.id");
                            $rows = $res->fetch_all(MYSQLI_ASSOC);
                        ?>

                        <?php if (sizeof($rows) > 0): ?>
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    
                                    <th>In date</th>
                                    <th>Out date</th>
                                    <th>Rooms</th>
                                    <th>Guest</th>
                                    <th>User</th>
                                    
                                </tr>
                            </thead>
                            <tbody>
                           <?php foreach ($rows as $row): ?>
                                <tr>
                                        
                                    <td><?php echo $row['in_date'] ?></td>
                                    <td><?php echo $row['out_date'] ?></td>
                                    <td><?php echo $row['rooms'] ?></td>
                                    <td><?php echo $row['guests'] ?></td>
                                    <td><?php echo $row['username'] ?></td>
                                    <td>
     <button class='btn btn-sm btn-danger'><i class="glyphicon glyphicon-edit"></i> Edit </button>
     <button class='btn btn-sm btn-danger'><i class="glyphicon glyphicon-trash"></i> Delete </button>
                                  
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                            </tbody>
                        </table>  
                        <?php else: ?>
                            <h3>There is no reservation</h3>
                        <?php endif ?>                      
                    </div>
                   
                    <div id="users" class="tab-pane fade">
                        <?php 
                            $res = $db->query("SELECT *  FROM users "); 
                            // oder by nese deshirojm mi paraqit me naj rendite cfardo qofte 
                            $rows = $res->fetch_all(MYSQLI_ASSOC);
                        ?>

                        <?php if (sizeof($rows) > 0): ?>
                        <table class="table">
                            <thead>
                                <tr>
                                    
                                    <td>ID</td>
                                    <td>First Name</td>
                                    <td>Last Name</td>
                                    <td>Age</td>
                                    <td>Email</td>
                                    <td>Address</td>
                                    <td>State</td>
                                    <td>Role</td>


                                </tr>
                            </thead>
                            <tbody>
                            <?php foreach ($rows as $row): ?>
                                <tr id="user-row-<?php echo $row['id'] ?>">
                                    <td><?php echo $row['id'] ?></td>
                                    <td><?php echo $row['firstname'] ?></td>
                                    <td><?php echo $row['lastname'] ?></td>
                                    <td><?php echo $row['age'] ?></td>
                                    <td><?php echo $row['email'] ?></td>
                                    <td><?php echo $row['address'] ?></td>
                                    <td><?php echo $row['state'] ?></td>
                                    <td><?php echo $row['role'] ?></td>
                                    <td>
                                        <button class='btn btn-sm btn-danger' onclick="toggleEditUser(<?php echo $row['id'] ?>)"><i class="glyphicon glyphicon-edit"></i> Edit </button>
                                        <button class='btn btn-sm btn-danger' onclick="deleteUser(<?php echo $row['id'] ?>)"><i class="glyphicon glyphicon-trash"></i> Delete </button>
                                    </td>
                                </tr>

                                <!-- Edit user input -->
                                <tr id="edit-user-row-<?php echo $row['id'] ?>" style="display: none;">
                                    <td><?php echo $row['id'] ?></td>
                                    <td>
                                        <input type="text" class='form-control' value="<?php echo $row['firstname'] ?>" name="firstname">
                                    </td>
                                    <td>
                                        <input type="text" class='form-control' value="<?php echo $row['lastname'] ?>" name="lastname">
                                    </td>
                                    <td>
                                        <input type="text" class='form-control' value="<?php echo $row['age'] ?>" name="age">
                                    </td>
                                    <td>
                                        <input type="text" class='form-control' value="<?php echo $row['email'] ?>" name="email">
                                    </td>
                                    <td>
                                        <input type="text" class='form-control' value="<?php echo $row['address'] ?>" name="address">
                                    </td>
                                    <td>
                                        <input type="text" class='form-control' value="<?php echo $row['state'] ?>" name="state">
                                    </td>
                                    <td>
                                        <input type="text" class='form-control' value="<?php echo $row['role'] ?>" name="role">
                                    </td>
                                    <td>
                                        <button class='btn btn-sm btn-success' onclick="editUser(<?php echo $row['id'] ?>)"><i class="glyphicon glyphicon-edit"></i> Save </button>
                                    </td>
                                </tr>
                            <?php endforeach ?>
                            </tbody>
                        </table>  
                        <?php else: ?>
                            <h3>There is no reservation</h3>
                        <?php endif ?>                      
                    </div>
                    </div>
                </div>

               <!--  <div class="line"></div>

                <h2>Lorem Ipsum Dolor</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p> -->

                
            </div>
        </div>





        <!-- jQuery CDN -->
         <script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
         <!-- Bootstrap Js CDN -->
         <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

         <script type="text/javascript">
             $(document).ready(function () {
                 $('#sidebarCollapse').on('click', function () {
                     $('#sidebar').toggleClass('active');
                 });
             });

             function toggleEditUser(id) {
                // Hide normal row
                $("#user-row-"+id).toggle();

                // Show edit row inputs
                $("#edit-user-row-"+id).toggle();
             }

             function editUser(id) {
                // Get inputs
                var inputs = $("#edit-user-row-"+id).find("input");
                var data = {editUser: true};
                $.each(inputs, function(i, input) {
                    data[input.getAttribute('name')] = input.value;
                })

                $.ajax({
                    type: "POST",
                    url : "server.php",
                    data : data,
                    dataType : "json"
                }).then(function(res){
                    console.log(res);
                    if(res){
                        alert("Update successfully");
                    }else{
                        alert("Something went wrong")
                    }
                })

                toggleEditUser(id);
             }

             function deleteUser(id) {
                $.ajax({
                    type: "POST",
                    url: "server.php",
                    data: {deleteUser: true, id: id},
                    dataType: "json"
                }).then(function(res) {
                    if(res) {
                        alert("Are you sure to delete this user");
                        $("#user-row-"+id).remove();
                    } else {
                        alert("Something went wrong")
                    }
                })
             }
         </script>
        
		 
        
    </body>
</html>
