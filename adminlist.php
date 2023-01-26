<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data table </title>

    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css">
    <link rel="stylesheet" href=" https://cdn.datatables.net/1.13.1/css/dataTables.bootstrap5.min.css">
</head>

<body>

    <div class="container py-5">
        <div class="row">



       <?php
include_once 'connection.php';
$result = mysqli_query($conn,"SELECT * FROM personaldetails_tb");
?>
<?php
if (mysqli_num_rows($result) > 0) {
?>




            <table id="example" class="table table-striped" style="width:100%">
                <thead>
                    <tr>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Phone </th>
                        <th>Gender</th>
                        
                        
                    </tr>
                </thead>
                <tbody>
   <?php
$i=0;
while($row = mysqli_fetch_array($result)) {
?>
<tr>
<td><?php echo $row["fname"]; ?></td>
<td><?php echo $row["sname"]; ?></td>
<td><?php echo $row["phone"]; ?></td>
<td><?php echo $row["gender"]; ?></td>

</tr>
<?php
$i++;
}
?>
</table>
<?php
}
else{
echo "Empty Table ";
}
?>


  
                </tbody>

            </table>

        </div>
    </div>



    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="//cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
    <script src="//cdn.datatables.net/1.13.1/js/dataTables.bootstrap5.min.js"></script>

    <script src="./app.js"></script>



</body>
</html>
