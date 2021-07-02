<?php

include 'conn.php';

if(isset($_POST['done'])){
    $user = $_POST['user'];
    $Gender = $_POST['optradio'];
    $Phone = $_POST['mobile'];
    $Email = $_POST['email'];
    $Address = $_POST['address'];
    $Nationality = $_POST['nationality'];
    $DOB = $_POST['dob'];
    $Faculty = $_POST['Faculty'];
    $Module = $_POST['module'];
    $q = "INSERT INTO `formtable`(`Lecturer Name`, `Gender`, `Phone`, `Email id`, `Address`, `Nationality`, `DOB`, `Faculty`, ` Module`) VALUES ('$user','$Gender','$Phone','$Email','$Address','$Nationality','$DOB','$Faculty','$Module')";

    $query = mysqli_query($con,$q);
}

?>
<!DOCTYPE html>
<html>
<head>
<title>
</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <script language="javascript" type="text/javascript">
    function dynamicdropdown(listindex)
    {
        switch (listindex)
        {
        case "BIT" :
            document.getElementById("module").options[0]=new Option("Select module","");
            document.getElementById("module").options[1]=new Option("COMPUTING","computing");
            document.getElementById("module").options[2]=new Option("NETWORKING","networking");
            break;
        case "BBS" : 
            document.getElementById("module").options[0]=new Option("Select module","");
            document.getElementById("module").options[1]=new Option("ENGLISH","english");
            document.getElementById("module").options[2]=new Option("ACCOUNTING","Accounting");
            document.getElementById("module").options[3]=new Option("MATH","math");
            break;
        }
        return true;
    }
    </script>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body >
 <div class="col-lg-6 m-auto"></div>

<form method="post">
    <div class="card">
       <div class="card-header bg-dark">
         <h1 class="text-white text-center">Teacher-Module Management System</h1>
       </div><br><br>
       <div class="w-50 m-auto">
     <form  method="post">
       <div class="form-group bg-success text-white">
         <label>Lecturer Name</label>
         <input type="text" name="user" autocomplete="off" class="form-control" required>
       </div>
       <div class="container bg-success text-white">
  <label>Gender</label><br>
   <div class="form-check-inline">
      <label class="form-check-label" for="radio1">
        <input type="radio" class="form-check-input" id="radio1" name="optradio" value="male" checked>Male
      </label>
    </div>
    <div class="form-check-inline">
      <label class="form-check-label" for="radio2">
        <input type="radio" class="form-check-input" id="radio2" name="optradio" value="female">Female
      </label>
    </div>
    <div class="form-check-inline">
      <label class="form-check-label">
      <input type="radio" class="form-check-input" id="radio3" name="optradio" value="others">Others <br>
      </label><br><br>
    </div><br>
       <div class="form-group bg-success text-white">
         <label>E-mail ID</label>
         <input type="text" name="email" autocomplete="off" class="form-control" required>
       </div>
       <div class="form-group">
         <label>Phone</label>
         <input type="text" name="mobile" autocomplete="off" class="form-control" required>
       </div>
       <div class="form-group">
         <label>Address</label>
         <input type="text" name="address" autocomplete="off" class="form-control" required></div>
         <div class="form-group">
         <label>Nationality</label>
         <input type="text" name="nationality" autocomplete="off" class="form-control" required>
       </div>
       <div class="form-group">
         <label>DOB</label>
         <input type="text" name="dob" autocomplete="off" class="form-control" required>
       </div>
       <div class="category_div" id="category_div">Faculty <br>
        <select id="Faculty" name="Faculty" onchange="javascript: dynamicdropdown(this.options[this.selectedIndex].value);"><br>
        <option value="">Select faculty</option><br>
        <option value="BIT">BIT</option>
        <option value="BBS">BBS</option>
        </select><br>
    </div>
    <div class="sub_category_div" id="sub_category_div">Module <br>
        <script type="text/javascript" language="JavaScript">
        document.write('<select name="module" id="module"><option value=""> module</option></select>')
        </script>
        <noscript>
        <select id="module" name="module">
            <option value="computing">COMPUTING</option>
            <option value="networking">NETWORKING</option>
        </select>
        </noscript>
    </div>



</div><br><br>
<a href="display.php" class="btn btn-default">View Records</a>
<button type="submit" class="btn btn-success" name="done">Submit</button>
    
</form>
</body>
</html>