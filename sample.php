

<?php
    require_once 'db_connect.php';

     if(!empty($_POST)){

       $Name=$_POST['Name'];
      $Email=$_POST['Email'];
     $Message=$_POST['Message'];

     if($_POST['actionbtn']) 
         {
             $insertsql="INSERT INTO feedback(Name,Email,Message) VALUES($Name,$Email,$Message)";
            $insert_db=mysqli_query($connect,$insertsql);

          if($insert_db) {
                echo "Insertion To Database Done..!!" ;    
            } else {
                echo mysqli_error($connect);
            }

         }
     }
    


?>
