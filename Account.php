<?php
  include("connection.php");
  error_reporting(0);
?>
<html>
    <head>
        <meta charset="utf-8">
        <title>LOGIN FORM</title>
        <style>
        body{
           margin:0;
           padding:0;
           font-family:sans-serif;
           background:#34495e;

        }
        .box{
            width:300px;
            padding:40px;
            position: absolute;
            top:50%;
            left: 50%;
            transform:translate(-50%,-50%);
            background: #191919;
            text-align:center;
            

        }
        .box h1{
            color:white;
            text-transform:uppercase;
            font-weight:500;
        }
        .box input[type="text"],.box input[type="password"]{
            border:0;
            background:none;
            display: block;
            margin:20px auto;
            text-align: center;
            border:2px solid #3498db;
            padding: 14px 10px;
            width:200px;
            outline: none;
            color:white;
            border-radius:24px;
            transition:0.5s;

        }
        .box input[type="text"]:focus,.box input[type="password"]:focus{
            width:280px;
            border-color:#2ecc71;

        }
        .box input[type="submit"]{
            border:0;
            background:none;
            display: block;
            margin:20px auto;
            text-align: center;
            border:2px solid #2ecc71;
            padding: 14px 10px;
            width:100px;
            outline: none;
            color:white;
            border-radius:24px
            ;
            transition:0.25s;
            cursor:pointer;

        }
        .box input[type="submit"]:hover{
            background:#2ecc71;

        }
        </style>
    </head>
<body>
    <form class="box" action="" method="GET">
        <h1>CREATE AN ACCOUNT</h1>
        <input type="text" name="First_name" placeholder="First name">
        <input type="text" name="Last_name" placeholder="Last name">
        <input type="text" name="username" placeholder="Username">
        <input type="password" name="password" placeholder="Password">
        <input type="submit" name="submit" value="submit"><br/>
    <?php
    if($_GET['submit'])
    {
      $fn=$_GET['First_name'];
      $ln=$_GET['Last_name'];
      $un=$_GET['username'];
      $ps=$_GET['password'];
      
      if($fn!="" && $ln!="" && $un!="" && $ps!="")
      {
        $query="INSERT INTO account VALUES('$fn','$ln','$un','$ps')";
        $data=mysqli_query($conn,$query);
        header('location:admin.php');
      }
      else
      {
          echo "<font color='red'>All field are requiered";
      }
    
    }
    ?>
    </form>


</body>
</html>