<?php
session_start();
include('connection.php');
error_reporting(0);
$userprofile=$_SESSION['user_name'];
if($userprofile==true)
{

}
else{
    header('location:admin.php');
}

?>
<html>
<head>
<style>
    ul{
            margin:0px;
            padding:0px;
            list-style:none;

        }
        
         ul{
            list-style:none;
            float:right;
            margin:0;
            padding:0;
            display:flex;
        }
         ul li a{
            line-height:35px;
            color:lightgrey;
            padding:12px 40px;
            text-decoration:none;
            text-transform:uppercase;
            font-size:15px;
            font-weight:bold;


        }
         ul li a:hover{
            background:rgba(0,0,0,0.7);
            border-radius:12px;

        }






div{
    position:absolute;
    left:50%;
    top:50%;
    transform:translate(-50%,-50%);
}
.content-table{
    border-collapse:collapse;
    margin:25px 0;
    font-size:0.5cm;
    min-width:400px;
    border-radius:5px 5px 0 0;
    overflow:hidden;

}
.content-table thead tr{
    background-color:#009879;
    color:#ffffff;
    text-align:left;
    font-weight:bold;

}

.content-table td,
.content-table th{
    padding:12px 15px;
}
.content-table tbody tr{
    border-bottom:1px solid #dddddd;
}
.content-table tbody tr{
    background-color:#f3f3f3;
}
.content-table tbody tr:hover{
    background-color:white;
}
</style>
</head>
<body>

                <ul>
                    <li><a href="changepassword1.php">Change Password</a></li>
                    <li><a href="admindetail.php">transportation detail</a></li>
                    <li><a href="logout.php">log out</a></li>

                </ul>

</body>
</html>
<?php
include("connection.php");
error_reporting(0);
$query="select * from transportation";
$data=mysqli_query($conn,$query);
$total=mysqli_num_rows($data);

if($total!=0)
{
    ?>
    <div>
    <table class="content-table">
    <thead>
          <tr>
            <th>route_no</th>
            <th>route_name</th>
            <th>from</th>
            <th>to</th>
            <th>distance</th>
            <th>fare_price</th>
          </tr>
    </thead>
 
 <?php
 while($result=mysqli_fetch_assoc($data))
 {
     echo "<tbody><tr>
            <td>".$result['route_no']."</td>
            <td>".$result['route_name']."</td>
            <td>".$result['from_t']."</td>
            <td>".$result['to_t']."</td>
            <td>".$result['distance']."</td>
            <td>".$result['fare_price']."</td>
            <td><a href='delete.php?rn=$result[route_no]' onclick='cdelete()'><button>delete</button></a></td>
          </tr></tbody>";


        }
    
}

?>
</table>
<script>
function cdelete(){
    confirm('are you sure you  want to delete this data');

}
</script>
</div>