<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">
    <title>Crud operation</title>
</head>

<body>
    <div class="container my-3">
        <h1 class="text-primary" style="text-align: center;"> My CRUD Operation </h1>
        <button class="btn btn-primary">
            <a href="user.php" class="text-light text-decoration-none">
                Add User
            </a>
        </button>
    </div>
    <table class="table table-striped my-2">
        <thead>
            <tr>
                <th scope="col">Sr. No.</th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Mobile</th>
                <th scope="col">Password</th>
                <th scope="col">Operation</th>
            </tr>
        </thead>
        <tbody>



            <?php
            include 'connect.php';
            $sql = "select * from `crud`";
            $result = mysqli_query($con, $sql);
            if ($result) {
                while ($row = mysqli_fetch_assoc($result)) {
                    $id = $row['id'];
                    $name = $row['name'];
                    $email = $row['email'];
                    $mobile = $row['mobile'];
                    $password = $row['password'];
                    echo
                    '<tr>
                <th scope="row">' . $id . '</th>
                <td>' . $name . '</td>
                <td>' . $email . '</td>
                <td>' . $mobile . '</td>
                <td>' . $password . '</td>

                <td><button class="btn btn-primary"><a class="text-light text-decoration-none" href="update.php?updateid=' . $id . '">Update</a></button></td>
                <td><button class="btn btn-danger"><a class="text-light text-decoration-none" href="delete.php?deleteid=' . $id . '"> Delete</a></button></td>
            </tr>';
                }
            }
            ?>

        </tbody>
    </table>
    <!-- for alert  -->
    <!-- <script></script> -->
</body>

</html>