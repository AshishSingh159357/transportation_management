<?php
  session_start();
  include("connection.php");
  error_reporting(0);
?>
<html>
    <head>
        <meta charset="utf-8">
        <title>HOME</title>
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
            border-radius:24px;
            transition:0.25s;
            cursor:pointer;

        }
        .box input[type="submit"]:hover{
            background:#2ecc71;

        }
        .box a{
            color :aquamarine;
            text-decoration: none;
        }
        .te {
            color : green;
        }
        .box h6{
            color=red;
        }
        
        </style>
    </head>
<body>
    <form class="box" action="" method="GET">
        <h1>ADMIN</h1>
        <input type="text" name="username" placeholder="Username">
        <input type="password" name="password" placeholder="Password">
        <input type="submit" name="submit" value="submit">
        <a href="http://localhost/php/Account.php">create an account</a><br/>
        

    <?php
    if($_GET['submit'])
    {
    
      $usr=$_GET['username'];
      $psw=$_GET['password'];
      $query= "select username,password from account where username='$usr' and password='$psw'";
      $data=mysqli_query($conn,$query);
      $num=mysqli_num_rows($data);
      if($num==1)
      {   
          $_SESSION['user_name']=$usr;
          $_SESSION['o_password']=$psw;
          header('location:admindetail.php');
      }
      else
      {
          print "<font color='red'>incorrect username or passwords";
      }
      
    }

    ?>
    </form>

</body>
</html>