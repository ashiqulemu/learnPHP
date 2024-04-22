
 <!-- connection database   -->

 <?php include("connection.php");?> 


   <?php 
   
    if(isset($_POST['submit'])){

       $fullName  = $_POST['fullname'];
       $email  = $_POST['email'];
       $phone  = $_POST['phone'];
       $bday   = $_POST['bday'];
       $gender = $_POST['gender'];
       $game   = $_POST['game'];
       $district  = $_POST['district'];  

       $sql = "INSERT INTO register (fullName, email, phone, bday, gender, game, district)
                VALUES ('$fullName', '$email', '$phone', '$bday','$gender', '$game', '$district')";

       
       $insertQuery =  mysqli_query($conn, $sql ); // must be given first $conn then query 

        if($insertQuery){
            echo "data inserted";
        }
        else{
             echo"not inserted!";
        }

     

    }


   
   
   ?> 
   

