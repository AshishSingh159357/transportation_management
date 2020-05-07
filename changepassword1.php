<?php
  session_start();

  include("connection.php");
  error_reporting(0);
  $userprofile=$_SESSION['user_name'];
  $opsw1=$_SESSION['o_password'];
  if($userprofile==true)
  {

  }
  else{
      header('location:admin.php');
  }
?>
<html>
    <head>
        <meta charset="utf-8">
        <title>TRANSPORTATION DETAIL</title>
        <style>
        body{
           margin:0;
           padding:0;
           font-family:sans-serif;
           background:#34495e;

        }


        .menu{
            position:fixed;
            top:0;
            left:0;
            width:100%;
            height:60px;
            padding:10px 90px;
            box-sizing:border-box;
            background:rgba(0,0,0,0.5);
            
            
        }
        div ul{
            list-style:none;
            float:right;
            margin:0;
            padding:0;
            display:flex;
        }
        div ul li a{
            line-height:35px;
            color:lightgrey;
            padding:12px 40px;
            text-decoration:none;
            text-transform:uppercase;
            font-size:15px;
            font-weight:bold;


        }
        div ul li a:hover{
            background:rgba(0,0,0,0.7);
            border-radius:12px;

        }





        .box{
            width:300px;
            padding:20px 100px;
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
        
        </style>
    </head>
<body>
<div class="menu">
                <ul>
                <li><a href="admindetail.php">transportation detail</a></li>
                    <li><a href="display.php">transportation data</a></li>
                    <li><a href="logout.php">log out</a></li>

                </ul>
        </div>
        <form class="box" action="" method="GET">
        <h1>Change Password</h1>
        <input type="text" name="opassword" placeholder="Old password">
        <input type="password" name="npassword" placeholder="New password">
        <input type="submit" name="submit" value="submit">
        

    <?php
    if($_GET['submit'])
    {
    
      $opsw=$_GET['opassword'];
      $npsw=$_GET['npassword'];
      if($opsw1==$opsw)
      {
          $query1="update account set Password='$npsw' where Username='$userprofile'";
        
          $data1=mysqli_query($conn,$query1);
          
          echo "<font color='red'>Password has been Change";
      }
      else{
        echo "<font color='red'>incorrect old password";
      }
    
          
      
    } 
    ?>
    </form>
</body>
</html>