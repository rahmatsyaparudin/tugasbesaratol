<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Infinite Scale</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link rel="stylesheet" href="css/style.css" type="text/css" />
<script type="text/javascript" src="js/jquery.min.js"></script>

<?php 
  include 'maps.php';
  include 'lib_func.php';
?>

</head>
<body id="top">

<div class="wrapper row1">
<div id="header" class="clear">
      <?php 
        header_web(); 
        sigin_form();
        ?>
    </div> 
  
</div>

<div class="wrapper row2">
  <?php menu_utama(); ?>
</div>

<!-- ####################################################################################################### -->
<div class="wrapper row4">
  <div id="container" class="clear"> 
    <!-- ####################################################################################################### -->
    <h2 class="title">Pendaftaran Pengusaha Baru</h2>
    <form name="daftar" action="" method="POST">
    <table cellpadding="0" cellspacing="0" width="50%" align="center">
        <thead>
          <tr>
            <th colspan="3">Pendaftaran Pengusaha Baru</th>
          </tr>
        </thead>
        <tbody>
          <tr class="dark">
            <th colspan="3" height="30">Biodata Pengusaha</th>
          </tr>
          <tr class="light">
            <td>Nama</td>
            <td>:</td>
            <td><input type="text" name="nama" placeholder="Nama Pengusaha" size="30" maxlength="40" required></td>
          </tr>
          <tr class="dark">
            <td>No KTP</td>
            <td>:</td>
            <td><input type="text" pattern="[0-9]+" name="noktp" placeholder="No Identitas" size="30" maxlength="20" required></td>
          </tr>
          <tr class="light">
            <td>Email</td>
            <td>:</td>
            <td><input type="email" name="email" placeholder="Email" size="30" maxlength="20" required></td>
          </tr>
          <tr class="dark">
            <td>Tanggal Lahir</td>
            <td>:</td>
            <td><input type="date" name="ttl" size="10" required></td>
          </tr>
          <tr class="light">
            <td>Alamat</td>
            <td>:</td>
            <td><textarea name="alamat" placeholder="Alamat Pengusaha" cols="29" rows="5" required></textarea></td>
          </tr>
          <tr class="dark">
            <td>Tanggal Lahir</td>
            <td>:</td>
            <td><input type="file" name="foto" size="10" required></td>
          </tr>
          <tr class="light">
            <th colspan="3" height="30">Data Akun Pengusaha</th>
          </tr>
          <tr class="dark">
            <td>Username</td>
            <td>:</td>
            <td><input type="text" name="username" placeholder="Username" size="30" maxlength="23" required></td>
          </tr>
          <tr class="light">
            <td>Password</td>
            <td>:</td>
            <td><input type="text" name="userpass" placeholder="Password" size="30" maxlength="38" required></td>
          </tr>
           <tr class="dark">
            <th colspan="3"><input type="submit" name="submit" value="Daftar"> <input type="reset" name="reset" value="Reset"></th>
          </tr>
        </tbody>
      </table>
      </form>

    <!-- ####################################################################################################### -->
    <div class="clear"></div>
  </div>
</div>
<!-- ####################################################################################################### -->

<div class="wrapper">
  <?php footer_web(); ?>
</div>
</body>
</html>