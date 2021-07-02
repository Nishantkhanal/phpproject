<!DOCTYPE html>
<html>
<head>
<title>
</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="container">
        <div class="col-lg-12"><br><br>
            <h1 class="text-warning text-center">Displaying Data</h1><br>
            <table class="table table-strip table-hover table-bordered">
                <tr class="bg-dark text-white text-center">
                    <th>ID</th>
                    <th>Lecturer Name</th>
                    <th>Gender</th>
                    <th>Phone</th>
                    <th>Email ID</th>
                    <th>Address</th>
                    <th>Nationality</th>
                    <th>DOB</th>
                    <th>Faculty</th>
                    <th>Module</th>
                    <th>delete</th>
                    <th>update</th>
                    
                </tr>
         <?php

               include 'conn.php';

                 $q = "select * from formtable"; 

                  $query = mysqli_query($con,$q);
                  while($res = mysqli_fetch_array($query)){ 

        ?>
                <tr class="text-center">
                    <td><?php echo $res['id']; ?></td>
                    <td><?php echo $res['Lecturer Name']; ?></td>
                    <th><?php echo $res ['Gender']; ?></td>
                    <td><?php echo $res ['Phone']; ?></td>
                    <td><?php echo $res ['Email id']; ?></td>
                    <td><?php echo $res ['Address']; ?></td>
                    <td><?php echo $res ['Nationality']; ?></td>
                    <td><?php echo $res ['DOB']; ?></td>
                    <td><?php echo $res ['Faculty']; ?></td>
                    <td><?php echo $res [' Module']; ?></td>
                    <td> <button class="btn-danger btn"><a href="delete.php?id=<?php echo $res['id']; ?>" class="text-white">Delete</a> </button></td>
                    <td> <button class="btn-primary btn"><a href="update.php?id=<?php echo $res['id']; ?>" class="text-white">Update</a> </button></td>
                </tr>
                <?php
                  }
                ?>
            </table>
        </div>
    </div>
</body>
</html>