<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recharge</title>
    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>
    
    <link rel="stylesheet" href="css/recharge.css">
</head>
<body> 
    <div class='container'>
      <form method='post' action='' class='frm'>
      <div class="head_h1"><h1>Recharge  request</h1>
      </div>
        <hr>
        <div class='group'>
          <label>Enter Employee Id :</label>
          <input type='text' name='employee_id' required>
        </div>
        <div class='group'>
          <input type='submit' name='submit' class='btn-green' value='search'>
        </div>
        <div class="create_id">
        <p><h5><a href="registration.php">Create New Employee id</a></h5></p>
        </div>
        <div class="all_records">
        <p><h5><a href="all_records.php">View all records</a></h5></p>
        </div>
      </form>
    </div>
    <?php 
    include("connection.php");

      if(isset($_POST['submit'])){
      $empid=$_POST['employee_id'];

            $sql=" SELECT * FROM `tbl_recharge` WHERE `employee_id`='".$empid."' ";
            $result=$con->query($sql);
           if($result->num_rows>0){ ?>
          <table>
            <thead>
              <tr>
                <th>Sno</th>
                <th>Name</th>
                <th>Email</th>
                <th>mobile number</th>
                <th>Employee ID</th>
                <th>Edit</th>
                <th>Delete</th>
              </tr>
            </thead>
            <tbody>
              <?php 
              
                while($row=$result->fetch_assoc()){
              ?>
              <tr>
                <td><?php echo $row["Sno"]; ?></td>
                <td><?php echo $row["name"]; ?></td>
                <td><?php echo $row["email"]; ?></td>
                <td><?php echo $row["number"]; ?></td>
                <td><?php echo $row["employee_id"]; ?></td>

                <td><a href='edit.php?editid=<?php echo $row["Sno"]; ?>' class='btn-blue'>update</a></td>
                <td><a href='delete.php?deleteid=<?php echo $row["Sno"]; ?>' onclick='return confirm("Are You Sure?")'  class='btn-red'>Delete</a></td>
              </tr>
              <?php } ?>
            </tbody>
          </table>
        <?php }?>
      <?php }else{ ?>
        <div class='alert-red'>No Records</div>
      <?php }?>
    </div>
  </body>
</html>







