<!DOCTYPE html>
<html lang="en">
<head>
  
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>First website</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Serif&display=swap" rel="stylesheet">
</head>
<body>
    <!-- write you code here  -->
 <div class="container">
<form method="POST" action="insert.php">
  <div class="row">
    <div class="col">
     <input class="fname" name="fname" type="text" placeholder="First Name">
     <input class="lname" type="text" name="lname" placeholder="Last Name">
     <input class="age" type="text" name="age" placeholder="Age">
     <input class="clg" type="text" name="clg" placeholder="Collage Name">
    </div>

    <div class="col" id="del">
     <div class="row">
        <?php
        include("connection.php");
        $query="SELECT * FROM `user_data`";
        $data=mysqli_query($conn,$query);
        while($row = mysqli_fetch_assoc($data)){
            $fname=$row['fname'];
            $lname=$row['lname'];
            $age=$row['age'];
            $clg=$row['clg'];
        }
        
        ?>
        
        <div class="col">
            <input class="first" type="text" name="" placeholder="<?php echo $fname; ?>">
        </div>
        <div class="col">
            <input class="del1" type="submit" onclick="asd();" value="Delete">
        </div>
     </div>
     <div class="row">
        <div class="col">
            <input class="last" type="text" placeholder="<?php echo $lname; ?>">
        </div>
        <div class="col">
            <input class="del2" type="submit" onclick="asd();" value="Delete">
        </div>
     </div>
     <div class="row">
        <div class="col">
            <input class="ages" type="text" placeholder="<?php echo $age; ?>">
        </div>
        <div class="col">
            <input class="del3" type="submit" onclick="asd();" value="Delete">
        </div>
     </div>
     <div class="row">
        <div class="col">
            <input class="collage" type="text" placeholder="<?php echo $clg; ?>">
        </div>
        <div class="col">
            <input class="del4" type="submit" onclick="asd();" value="Delete">
        </div>
     </div>
     
    </div>


  </div>
  <div class="button">
    
        <input class="reset" type="submit" name="delete" value="Reset"> 

        <input class="submit" name="submit" type="submit" >
    
  </div>
</form>
 </div>
 <script>
    function asd(){
        var xhr = new XMLHttpRequest();
        var url = 'delete.php';
        xhr.open("GET", url, true);
        xhr.onreadystatechange = function () {
            if (this.readyState == 4 && this.status == 200) {
                console.log(this.responseText);
            }
        }
        xhr.send();
    }
    run();

    </script>
</body>
</html>