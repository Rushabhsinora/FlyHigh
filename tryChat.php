<?php
 $servername = "localhost";
 $username = "root";
 $password = "";
 $db = "fly_high";
 
 $conn = new mysqli($servername, $username, $password, $db);

 if($conn->connect_error){
    die("Failed Connection: " . $conn->connect_error);
  }

  session_start();

  $sql = "SELECT * from customer where C_id=" . $_GET['id'];
  $res = $conn->query($sql);

    if ($res->num_rows == 1) {
        while($row = $res->fetch_assoc()){
            $cName = $row['C_Name'];
			
        }
    }
    else{
        echo "ERROR";
    }
    
    $_SESSION['c_name'] = $cName;
    $_SESSION['id'] = $_GET['id'];
	echo $_SESSION['mname'];

?>

<html>

<head>
    <style>
        .box{
            position: relative;
            width: 45%;
            height: 90%;
            border: 2px solid black;
            margin: auto;
            top: 5%;
        }

        .box .name{
            position: absolute;
            width: 100%;
            height: 20px;
            background: lightblue;
            text-align: center;
        }

        .box .content{
            padding: 20px 10px 0 20px;
            overflow: scroll;
            width: auto;
            height: 75%;
            background: lightgreen;
        }

        .box .text{
            position: absolute;
            width: 100%;
            bottom: 0;
        }

        .box .content p.time{
            text-align: right; 
            width: 100%;
        }

        .home{
            position: relative;
            top: 4%;
            left: 5%;
        }

    </style>
</head>

<body>
    <div class="home">
        <a href="medicalmain.php?action=<?php $_SESSION['mname'] ?>" class="back">Go Back!</a>
    </div>
    <div class="box">
        <div class="name"><?php echo "You chat with $cName"; ?></div>
        <div class="content">
            <?php
                $sql2 = "SELECT * from admtocus where C_Name='$cName' OR Me_Name='$cName'";
                $res2 = $conn->query($sql2);

                if ($res2->num_rows > 0) {
                    while($row2 = $res2->fetch_assoc()){
                        //$usr = $row2['C_Name'];
                        if($row2['C_Name'] == $cName){
                            echo "<h3 id='cus' style=\"color:red; text-align: left\">".$row2['C_Name']."</h3>";
                        echo "<p>" .$row2['comment']. "</p>";
                        //echo "<p class='time'>" .$row2['tim']. "</p>";
                        }

                        else{
                            echo "<h3 id='cus' style=\"color:blue; text-align: right\">".$_SESSION['mname']."</h3>";
                            echo "<p style=\"text-align: right\">" .$row2['comment']. "</p>";
                            //echo "<p class='time'>" .$row2['tim']. "</p>";
                        }
                    }
                }
                
            ?>
        </div>
        <div class="text">
            <form method="post" action="sentToDB.php?action=sent&id="<?php echo $_GET['id'] ?>>
                <textarea name="message" rows="5" cols="70"></textarea>
                <input type="submit" value="Send"/>
            </form>
        </div>
    </div>

    <?php
        
    ?>
</body>
</html>