 <!DOCTYPE html>
 <html>
 <head>
 <title> Update Voter Table </title>
 </head>
 <body>
    
    <h1>Update Voter Date</h1>
    <form action="" method="POST">
    <input type="text" name="Voter_id" placeholder="Enter Voter ID"/>
    <br><br>
    <input type="text" name="FirstName" placeholder="Enter Voter First Name"/>
    <br><br>
    <input type="text" name="LastName" placeholder="Enter Voter Last Name"/>
    <br><br>
    <input type="date" name="VoterDOB" placeholder="Enter Voter DOB"/>
    <br><br>
    <input type="text" name="VoterParty" placeholder="Enter Voter Party"/>
    <br><br>
    <input type="submit" name="update" placeholder="Update"/>
 </body>
 </html>
 <?php
 include_once 'database.php';

 if(isset($_POST['update']))
 {
     $Voter_id = $_POST['Voter_id'];
     $query = "UPDATE voter SET FirstName='$_POST[FirstName]',
     LastName='$_POST[LastName]', VoterDOB='$_POST[VoterDOB]',
     VoterParty='$_POST[VoterParty]' WHERE Voter_id='$_POST[Voter_id]' ";
     $query_run = mysqli_query($conn,$query);

     if($query_run)
     {
         echo '<script type="text/javascript"> alert("Data Updated!") </script>';
     }
     else
     {
        echo '<script type="text/javascript"> alert("Data Not Updated!") </script>';
     }
 }

 ?>