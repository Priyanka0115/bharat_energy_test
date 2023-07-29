<?php

    session_start();

    
   if(isset($_SESSION['flash_message'])) {
    $message = $_SESSION['flash_message'];
    unset($_SESSION['flash_message']);
    echo $message;
}

    if(isset($_SESSION['user_id']) =="") {
        header("Location: login.php");
    }

?>

<script>
        //setTimeout(function() {
         // document.querySelectorAll('.alert').style.display = 'none';
      //  }, 5000); // Will execute this function after 5 seconds

//         $(document).ready(function(){
//         setTimeout(function() {
//         $("#successMessage").hide('blind', {}, 500)
//     }, 5000);
// });
    </script>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>User Info Dashboard | Tutsmake.com</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
 
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
               <!--  <div class="card">
                  <div class="card-body"> -->
                   <!--  <h5 class="card-title">Name :- <?php //echo $_SESSION['user_name']?></h5>
                    <p class="card-text">Email :- <?php //echo $_SESSION['user_email']?></p>
                    <p class="card-text">Mobile :- <?php //echo $_SESSION['user_mobile']?></p> -->
                    <a href="logout.php" class="btn btn-primary">Logout</a>
                

<div class="table-responsive">
<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
<thead>
<tr>
<th>ID</th>
<th>Name</th>
<th>Email</th>
<th>Mobile</th>
<th>Role</th>
</tr>
</thead>
<tfoot>
<tr>
<th>ID</th>
<th>Name</th>
<th>Email</th>
<th>Mobile</th>
<th>Role</th>
</tr>
</tfoot>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "sample";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
$sql = 'SELECT * from users';
if (mysqli_query($conn, $sql)) {
echo "";
} else {
echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
$count=1;
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
// output data of each row
$i=1;
while($row = mysqli_fetch_assoc($result)) { ?>
<tbody>
<tr>
<th>
<?php echo $i++; ?>
</th>
<td>
<?php echo $row['name']; ?>
</td>
<td>
<?php echo $row['email']; ?>
</td>
<td>
<?php echo $row['mobile']; ?>
</td>
<td>
<?php echo $row['role']; ?>
</td>

</tr>
</tbody>
<?php
$count++;
}
} else {
echo '0 results';
}
?>
</table>



    </div>       
      </div>
         </div>
            </div>


</body>
</html>
