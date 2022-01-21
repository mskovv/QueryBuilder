<?php
include 'database/QueryBuilder.php';
$pdo = include 'database/startDB.php';
$querybulder = new QueryBuilder($pdo);
$user = $querybulder->getOne('users',$_GET['id']);


?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <title>Document</title>
</head>

<body>
  <div class="container overflow-hidden mt-3">
    <div class="row">
      <div class="col">
        <form action="edit_handler.php?id=<?php echo $user['id']?>" method="POST">
          <div class="input-group mb-3">
            <input type="text" class="form-control" placeholder="Username" aria-label="Username" name="name" value="<?php echo $user['name']?>">
            <span class="input-group-text"> </span>
            <input type="text" class="form-control" placeholder="Job Title" aria-label="Server" name="job_title" value="<?php echo $user['job_title']?>">
          </div>
          <button class="btn btn-primary mb-2">Edit User</button>
        </form>
        <a href="index.php"><button type="button" class="btn btn-success mb-2">Go back</button></a>
      </div>
    </div>
  </div>
</body>

</html>