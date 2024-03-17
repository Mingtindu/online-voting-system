<?php
session_start();
if(!isset($_SESSION['userData'])){
    header("location: ../");
    exit();
}
else{

}

?>

<!DOCTYPE html> 
<html lang="en"> 
  
<head> 
    <meta charset="UTF-8"> 
    <meta http-equiv="X-UA-Compatible"
          content="IE=edge"> 
    <meta name="viewport" 
          content="width=device-width,  
                   initial-scale=1.0"> 
    <title>GeeksForGeeks</title> 
    <link rel="stylesheet" 
          href="style.css"> 
    <link rel="stylesheet" 
          href="responsive.css"> 
          <style>
            a{
                text-decoration:none;
            }
          </style>
</head> 
  
<body> 
    
    <!-- for header part -->
    <header> 
  
        <div class="logosec"> 
            <div class="logo">Voting System</div> 
            <img src= 
"https://media.geeksforgeeks.org/wp-content/uploads/20221210182541/Untitled-design-(30).png"
                class="icn menuicn" 
                id="menuicn" 
                alt="menu-icon"> 
        </div> 
  
        <div class="searchbar"> 
            <input type="text" 
                   placeholder="Search"> 
            <div class="searchbtn"> 
              <img src= 
"https://media.geeksforgeeks.org/wp-content/uploads/20221210180758/Untitled-design-(28).png"
                    class="icn srchicn" 
                    alt="search-icon"> 
              </div> 
        </div> 
  
        <div class="message"> 
            <div class="circle"></div> 
            <img src= 
"https://media.geeksforgeeks.org/wp-content/uploads/20221210183322/8.png" 
                 class="icn" 
                 alt=""> 
            <div class="dp"> 
              <img src= 
"https://media.geeksforgeeks.org/wp-content/uploads/20221210180014/profile-removebg-preview.png"
                    class="dpicn" 
                    alt="dp"> 
              </div> 
        </div> 
  
    </header> 
  
    <div class="main-container"> 
        <div class="navcontainer"> 
            <nav class="nav"> 
                <div class="nav-upper-options"> 
                    <div class="nav-option option1"> 
                        <img src= 
"https://media.geeksforgeeks.org/wp-content/uploads/20221210182148/Untitled-design-(29).png"
                            class="nav-img" 
                            alt="dashboard"> 
                        <h3> User info</h3> 
                    </div> 
  
                    <div class="option2 nav-option"> 
                        <img src= 
"https://media.geeksforgeeks.org/wp-content/uploads/20221210183322/9.png"
                            class="nav-img" 
                            alt="articles"> 
                        <a href="voter.html"><h3> Voter</h3> </a>
                    </div> 
  
                    <div class="nav-option option3"> 
                        <img src= 
"https://media.geeksforgeeks.org/wp-content/uploads/20221210183320/5.png"
                            class="nav-img" 
                            alt="report"> 
                        <a href="candidate.html"><h3> Candidate</h3></a> 
                    </div> 
  
                    <div class="nav-option option4"> 
                        <img src= 
"https://media.geeksforgeeks.org/wp-content/uploads/20221210183321/6.png"
                            class="nav-img" 
                            alt="institution"> 
                            <a href="groups.html"><h3> Groups</h3></a> 
                        
                    </div> 
  
                    <div class="nav-option option5"> 
                        <img src= 
"https://media.geeksforgeeks.org/wp-content/uploads/20221210183323/10.png"
                            class="nav-img" 
                            alt="blog"> 
                            <a href="results.html"><h3> Results</h3></a> 
                    </div> 
  
                    <div class="nav-option option6"> 
                        <img src= 
"https://media.geeksforgeeks.org/wp-content/uploads/20221210183320/4.png"
                            class="nav-img" 
                            alt="settings"> 
                        <h3> Settings</h3> 
                    </div> 
  
                    <div class="nav-option logout"> 
                        <img src= 
"https://media.geeksforgeeks.org/wp-content/uploads/20221210183321/7.png"
                            class="nav-img" 
                            alt="logout"> 
                        <h3>Logout</h3> 
                    </div> 
  
                </div> 
            </nav> 
        </div> 
        <div class="main"> 
  
            <div class="searchbar2"> 
                <input type="text" 
                       name="" 
                       id="" 
                       placeholder="Search"> 
                <div class="searchbtn"> 
                  <img src= 
"https://media.geeksforgeeks.org/wp-content/uploads/20221210180758/Untitled-design-(28).png"
                        class="icn srchicn" 
                        alt="search-button"> 
                  </div> 
            </div> 
  
            <div class="box-container"> 
                <h1>User information</h1>
                <div class="profile">
                  
                   <?php
                     $userData = $_SESSION['userData'];

                     // Display user information
                     $name = $userData['name'];
                     $mobile = $userData['mobile'];
                     $address = $userData['address'];
                     $photo = $userData['photo'];
                 
                     echo "Name: $name <br>";
                     echo "Mobile: $mobile <br>";
                     echo "Address: $address <br>";
                     echo "Photo: <img src='../uploads/$photo' alt='User Photo'> <br>";
                 
                   ?>

                </div>



  
  
                          
            
        
        </div> 
    </div> 
  
    <script src="./index.js"></script> 
</body> 
</html>