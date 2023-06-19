<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Profile</title>
  <link rel="stylesheet" href="style.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>

<body>
  <?php
  //include auth_session.php file on all user panel pages
  include("auth_session.php");
  ?>
  <?php
  $server = mysqli_connect("localhost", "root", "", "webdinamis");

  if ($server) {
    echo "";
  } else {
    echo "Gagal";
  }

  $sql    = "SELECT * FROM biodata2";
  $result = mysqli_query($server, $sql);
  ?>

  <?php


  if (mysqli_num_rows($result) > 0) {

    while ($tampil = mysqli_fetch_assoc($result)) {
  ?>

      <div class="container mt-5">

        <div class="row d-flex justify-content-center">
          <div class="col-md-7">
            <div class="card p-3 py-4">
              <div class="text-center">
                <center><img src="https://pub-static.fotor.com/assets/projects/pages/d5bdd0513a0740a8a38752dbc32586d0/fotor-03d1a91a0cec4542927f53c87e0599f6.jpg" width="100" class="rounded-circle"></center>
              </div>
              <div class="text-center mt-3">
                <center>
                  <h5 class="mt-2 mb-0"><?php echo   $tampil["Nama"]; ?></h5>
                </center>
                <center><span><?php echo   $tampil["Nis"]; ?></span> <span> | </span> <span><?php echo   $tampil["Rombel"]; ?></span> <span> | </span> <span><?php echo   $tampil["Rayon"]; ?></span></center>


              <?php
            }
          } else {
              ?>
              <tr>
                <td colspan="8">No data found</td>
              </tr>
            <?php } ?>





            <?php
            $server = mysqli_connect("localhost", "root", "", "webdinamis");



            if ($server) {
              echo "<center><b><font style : color = 'green'>Logged IN!</font></b></center>";
            } else {
              echo "Gagal";
            }

            $sql    = "SELECT * FROM biodata3";
            $result = mysqli_query($server, $sql);

            ?>

            <center>
              <br>

              <h4>Nilai Anda</h4>
              <table class="table" border="0" cellspacing="" cellpadding="18">
                <?php


                if (mysqli_num_rows($result) > 0) {

                  while ($tampil = mysqli_fetch_assoc($result)) {
                ?>
                    <div class="px-4 mt-1">

                      <thead>
                        <tr>
                          <th scope="col">NO</th>
                          <th scope="col">Mata Pelajaran</th>
                          <th scope="col">Nilai</th>

                        </tr>
                      </thead>
                      <tbody>
                        <tr class="table-primary">
                          <th scope="row">1</th>
                          <td>DPK</td>
                          <td><?php echo   $tampil["DPK"]; ?></td>
                        </tr>
                        <tr class="table-primary">
                          <th scope="row">2</th>
                          <td>Fisika</td>
                          <td><?php echo   $tampil["Fisika"]; ?> </td>
                        </tr>
                        <tr class="table-primary">
                          <th scope="row">3</th>
                          <td>IPS</td>
                          <td><?php echo   $tampil["IPS"]; ?></td>
                        </tr>
                        <tr class="table-primary">
                          <th scope="row">4</th>
                          <td>Kimia</td>
                          <td><?php echo   $tampil["Kimia"]; ?> </td>
                        </tr>
                        <!-- <tr class="table-primary">
      <th scope="row">3</th>
      <td>Sejarah</td>
                <td><?php echo   $tampil["sejarah"]; ?>  </td>
    </tr> -->
                      </tbody>




                    </div>



                  <?php
                  }
                } else {
                  ?>
                  <tr>
                    <td colspan="8">No data found</td>
                  </tr>
                <?php } ?>
              </table>
            </center>







            <center><a href="index.php?page=logout">LogOut</a></center>


              </div>




            </div>

          </div>

        </div>

      </div>


      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>

</html>