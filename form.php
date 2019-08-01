<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="./temp.css">
  <title>Title</title>
</head>

<body>
  <div class="navbar">
    <div id="logo" style="font-size: 24px">
      <center>Club Name</center>
      <right> Welcome <?php echo $_GET['name']; ?></right>
    </div>
      <a href="/DBMS/javaclub">
    <div id="logout" style="font-size: 17px">Logout</div>
      </a>
  </div>
  <!--  ======================================= -->
  <div class="body">
    <div class="sideColumn">
      <h2 style="padding-bottom: 15px;text-decoration: underline"><center>Activities</center></h2>
      <ul style="list-style-type: dot">
      <a href="/DBMS/cricket?name=<?php echo $_GET['name']; ?>">
        <li>club inauguration ceremony date 12/11/2018</li>
</a>
<a href="/DBMS/virat">
        <li>Club Cricket cup date 15/11/2018</li>
</a>
<a href="/DBMS/club"
        <li>Club awareness program date 18/11/2018</li>
</a>
        <li>Yoga awareness program date 20/11/2018</li>
        <li>Coding  awareness program date 22/11/2018 </li>
        <li>Health awareness program date 28/11/2018</li>
        <li>Environment awareness program date 15/12/2018</li>
        <li>Club fest 2018 date 30/12/2018</li>
      </ul>
    </div>
  </div>
  <!--  ======================================= -->
  <div style="max-width: 1500px;margin:auto">
    <hr/>
  </div>
  <!--  ======================================= -->
  <div class="footer">
    <div class="left">
      <h4>Club President name</h4>
      <h5>Jeevan H</h5>
    </div>
    <div class="right">
      <h4>Club Vice President name</h4>
      <h5>Akanksh</h5>
    </div>
  </div>
</body>

</html>