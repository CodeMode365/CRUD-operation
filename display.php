<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Display</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>

</head>

<body>

    <div class="container">
        <div class="col-lg-12">
            <br><br>
            <h1 class="text-warning text-center">Display Table Data</h1>
            <table class="table table-striped table-hover table-bordered">
                <tr class="bg-dark text-light text-center">
                    <th>Id</th>
                    <th>Username</th>
                    <th>Password</th>
                    <th>Update</th>
                    <th>Update</th>
                </tr>
                <?php

                include 'connection.php';

                $query = "SELECT * from crudtable";
                $queryRun = mysqli_query($connection,$query);
                while($result = mysqli_fetch_array($queryRun)){

                ?>
                <tr>
                    <td><?php echo $result['id']; ?></td>
                    <td><?php echo $result['username']; ?></td>
                    <td><?php echo $result['password']; ?></td>
                    <td>
                        <button class="btn btn-danger" ><a  class="text-white" href="delete.php?id=<?php echo $result['id'];?>">Delete</a> </button>
                    </td>
                    <td>
                    <button class="btn btn-success" ><a  class="text-white" href="update.php?id=<?php echo $result['id'];?>">Update</a> </button>
                    </td>
                </tr>
                <?php
                }
                ?>
            </table>
        </div>
    </div>
    <button class="btn-primary mx-auto btn text-center" style="position:relative;top:10px; left:50%; transform:translateX(-50%);"><a class="text-white" href="insert.php">Insert Data into table</a></button>

</body>

</html>