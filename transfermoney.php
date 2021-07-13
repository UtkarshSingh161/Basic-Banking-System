<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Basic Banking System</title>
    <!-- Bootstrap CDN -->
    <link rel="stylesheet" href="https://unpkg.com/bootstrap-material-design@4.1.1/dist/css/bootstrap-material-design.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">

    <!-- Fonts -->
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/table.css">

    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@500&display=swap" rel="stylesheet"> 
    <link href="https://fonts.googleapis.com/css2?family=Sansita+Swashed:wght@700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@500&display=swap" rel="stylesheet">

</head>


<body>
<nav class="navbar navbar-expand-md navbar-light bg-light">
  <a class="navbar-brand" href="index.html" style="color : #C0392B;"><b>GRIP SAVINGS BANK</b></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link" href="index.html" style="color : #C0392B;"><b>Home</b></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="createuser.html" style="color : #C0392B;"><b>Create User</b></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="transfermoney.php" style="color : #C0392B;"><b>Transfer Money</b></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="userData.php" style="color : #C0392B;"><b>Transaction History</b></a>
          </li>
      </div>
   </nav>
   <div class="my-info text-center">
        <a class="btn btn-info" href="transfer.html">Send Money</a>&nbsp;&nbsp;&nbsp;&nbsp;
        <a class="btn btn-info" href="userData.php" >See All Transactions</a>
      
</div>


 <script src="assets/js/script.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://unpkg.com/popper.js@1.12.6/dist/umd/popper.js"></script>
    <script src="https://unpkg.com/bootstrap-material-design@4.1.1/dist/js/bootstrap-material-design.js"></script>

    <!-- aos data  -->
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
      AOS.init({
        duration: 700,
      });
    </script>
</body>
</html>