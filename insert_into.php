<? include('dbcontroller.php');  ?>

<?php
for ($i = 1; $i <= 10; $i++) {
  echo $i;
}

?>

<!doctype html>
<html lang="en">

<head>
  <title>Title</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>

  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

  <form action="insert_into.php" method="get">
    <table> id firstname lastname email reg_date
      <tr>
        <th>
          <div class="card">
            <div class="card-body">
              <h4 class="card-title">Title</h4>
              <h6 class="card-subtitle text-muted">Subtitle</h6>
            </div>
            <img src="holder.js/100x180/" alt="">
            <div class="card-body">
              <p class="card-text">Text</p>
              <a href="#" class="card-link">Link 1</a>
              <a href="#" class="card-link">Link 2</a>
            </div>
          </div>
        </th>
        <td>

        </td>
      </tr>
    </table>
  </form>


</body>

</html>