<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
  </head>
  <body>
    <?php 
$users = [
      "name"=>"karem",
      "E-mail"=> "karem@gmail.com",
      "age"=> 25,
      "Degree"=> true,
      "salary"=> 20000,
]
?>

    <table>
      <thead>
        <tr>
          <th>Name</th>
          <th>email</th>
          <th>age</th>
          <th>Degree</th>
          <th>Salary</th>
        </tr>
      </thead>

      <tbody>
        <tr>
          <td><?php echo $users["name"] ?> </td>
          <td><?php echo $users["E-mail"] ?> </td>
          <td><?php echo $users["age"] ?> </td>
          <td><?php echo $users["Degree"] ?> </td>
          <td><?php echo $users["salary"] ?> </td>
       
        </tr>
      </tbody>
    </table>
    <h1>Hello, world!</h1>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
  </body>
</html>