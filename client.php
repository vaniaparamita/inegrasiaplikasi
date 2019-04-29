<?php
    $curl = curl_init();
    curl_setopt_array ($curl, [
        CURLOPT_RETURNTRANSFER => 1,
        CURLOPT_URL => 'http://10.33.34.121/read.php',
        CURLOPT_POST => 1,
        CURLOPT_POSTFIELDS => [
            'key' => '1234' ,
        ]
    ]);
    $result = curl_exec($curl);
    curl_close($curl);

    $result = json_decode($result);
    ?>
<form action ="http://10.33.34.121/create.php" method ="post">
  <div class="form-group">
    <label>First Name</label>
    <input type="text" class="form-control" placeholder="First Name" name="nama">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Last Name</label>
    <input type="text" class="form-control" placeholder="Last Name">
  </div>
  <div class="form-group form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
    <div class="container">
            <table class="table table-hover table-bordered ">
            <thead class="thead-dark">
            <tr>
            <th scope="col">id</th>
            <th scope="col">First Name</th>
            <th scope="col">Last Name</th>
            </thead>
            <tbody>
                <?php foreach($result as $r) : ?>
                <tr>
                    <th scope="row"><?=$r->actor_id?></th>
                    <td><?=$r->first_name?></td>
                    <td><?=$r->last_name?></td>

                    </tr>
                    <?php endforeach ?>
                    </tbody>
                    </table>
                    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>