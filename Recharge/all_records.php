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
  <link rel="stylesheet" href="//cdn.datatables.net/1.13.7/css/jquery.dataTables.min.css">

  <style>
    body {
      background-color: whitesmoke;
    }

    .form-row {
      display: flex;
      align-items: center;
      justify-content: center;
    }

    .col input {
      margin: 0px 30px 20px 30px;
      height: 24px;
    }
    .table .thead .tr .th {
      text-align: center;

    }
    table.dataTable thead>tr>th.sorting, table.dataTable thead>tr>th.sorting_asc, table.dataTable thead>tr>th.sorting_desc, table.dataTable thead>tr>th.sorting_asc_disabled, table.dataTable thead>tr>th.sorting_desc_disabled, table.dataTable thead>tr>td.sorting, table.dataTable thead>tr>td.sorting_asc, table.dataTable thead>tr>td.sorting_desc, table.dataTable thead>tr>td.sorting_asc_disabled, table.dataTable thead>tr>td.sorting_desc_disabled {
    cursor: pointer;
    position: relative;
    padding-right: 26px;
    text-align: center;
}
  </style>
</head>

<body>

  <div class='container'>

    <form method='GET' action='/Recharge/all_records.php' class='frm'>

      <div class="form-row">
        <div class="col">
          <input type="text" class="form-control" placeholder="Name" name="name" value="<?php echo (isset($_GET['name']) && !empty($_GET['name'])) ? $_GET['name'] : ""; ?>">
        </div>
        <div class="col">
          <input type="text" class="form-control" placeholder="Email" name="email" value="<?php echo (isset($_GET['email']) && !empty($_GET['email'])) ? $_GET['email'] : ""; ?>">
        </div>
        <div class="col">
          <input type="text" class="form-control" placeholder="Number" name="number" value="<?php echo (isset($_GET['number']) && !empty($_GET['number'])) ? $_GET['number'] : ""; ?>">
        </div>
        <div class="col">
          <input type="text" class="form-control" placeholder="Employee ID" name='employee_id' value="<?php echo (isset($_GET['employee_id']) && !empty($_GET['employee_id'])) ? $_GET['employee_id'] : ""; ?>">
        </div> <br> <br>
      </div>
      <div class='sub'>
        <input type='submit' class='btn-green' value='search'>
      </div>
  </div>
  <div class="search">

    <?php
    include("connection.php");
      $query = " WHERE 1";
      $query .= (isset($_GET['name']) && !empty($_GET['name'])) ? " AND `name` LIKE '%" . $_GET['name'] . "%'" : "";
      $query .= (isset($_GET['email']) && !empty($_GET['email'])) ? " AND `email` LIKE '%" . $_GET['email'] . "%'" : "";
      $query .= (isset($_GET['number']) && !empty($_GET['number'])) ? " AND `number` LIKE '%" . $_GET['number'] . "%'" : "";
      $query .= (isset($_GET['employee_id']) && !empty($_GET['employee_id'])) ? " AND `employee_id` LIKE '%" . $_GET['employee_id'] . "%'" : "";
      $sql = " SELECT * FROM `tbl_recharge`" . $query;
      $result = $con->query($sql); ?>

  <div class="table">
    <table id="myTable">
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

        if ($result) {

          while ($row = $result->fetch_assoc()) {
        ?>
            <tr>
              <td><?php echo $row["Sno"]; ?></td>
              <td><?php echo $row["name"]; ?></td>
              <td><?php echo $row["email"]; ?></td>
              <td><?php echo $row["number"]; ?></td>
              <td><?php echo $row["employee_id"]; ?></td>
              <td><a href='edit.php?editid=<?php echo $row["Sno"]; ?>' class='btn-blue'>update</a></td>
              <td><a href='delete.php?deleteid=<?php echo $row["Sno"]; ?>' onclick='return confirm("Are You Sure?")' class='btn-red'>Delete</a></td>
            </tr>
          <?php } ?>
      </tbody>
    </table>
  <?php } ?>
  </div>
  </div>
</body>
<script src="//cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
<script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
<script>
  let table = new DataTable('#myTable');
</script>
</body>

</html>