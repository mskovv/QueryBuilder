<?php
include 'database/QueryBuilder.php';
$pdo = include 'database/startDB.php';
$queryBulder = new QueryBuilder($pdo);

$users = $queryBulder->getAll('users');
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <title>QueryBuilder</title>
</head>
<body>
  <div class="container overflow-hidden mt-3">
    <div class="row">
      <div class="col-md">
        <a href="add.php">
          <button type="button" class="btn btn-primary">Add User</button>
        </a>
      <table class="table mt-2">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Job Title</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
          <?php foreach($users as $user):?>
          <tr>
            <th scope="row"><?php echo $user['id']?></th>
            <td><?php echo $user['name']?></td>
            <td><?php echo $user['job_title']?></td>
            <td>
              <a href="edit.php?id=<?php echo $user['id']?>"><button type="button" class="btn btn-warning">Edit</button></a>
              <a href="delete.php?id=<?php echo $user['id']?>"><button type="button" class="btn btn-danger">Delete</button></a>
            </td>
          </tr>
          <?php endforeach;?>
        </tbody>
      </table>
      </div>
    </div>
  </div>
</body>
</html>