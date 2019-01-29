<html>
   
   <head>
      <style>
         .error {color: #FF0000;}
      </style>
   </head>
   
   <body>
      <?php
         // define variables and set to empty values
         $nameErr = $passErr = $genderErr = $websiteErr = "";
         $name = $pass = $gender = $comment = $website = "";
         
         if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if (empty($_POST["name"])) {
               $nameErr = "Name is required";
            }else {
               $name = test_input($_POST["name"]);
               $uppercase = preg_match('@[A-Z]@', $name);
                $lowercase = preg_match('@[a-z]@', $name);
                $special   = preg_match('@[_]@', $name);

                if(!$uppercase || !$lowercase || !$special || strlen($name) < 8) {
                // tell the user something went wrong
                $nameErr ="Username not Allowed";
                }else {
                   
                }
            }
            
            if (empty($_POST["pass"])) {
               $passErr = "Pass is required";
            }else {
               $pass = test_input($_POST["pass"]);
               
                $uppercase = preg_match('@[A-Z]@', $pass);
                $lowercase = preg_match('@[a-z]@', $pass);
                $number    = preg_match('@[0-9]@', $pass);
                $special   = preg_quote('@[~`!@#$%^&*()_-+=\[\]{}\|\\:;\"\'<,>.]@', $pass);

                if(!$uppercase || !$lowercase || !$number || !$special || strlen($pass) < 8) {
                // tell the user something went wrong
                $passErr ="Password not Allowed";
                }else {
                  
                }
            }
            
           
         }
         
         function test_input($data) {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
         }
      ?>
     
      <h2>Absolute classes registration</h2>
     
      <p><span class = "error">* required field.</span></p>
     
      <form method = "post" action = "<?php 
         echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
         <table>
            <tr>
               <td>Username:</td>
               <td><input type = "text" name = "name" maxlength="8">
                  <span class = "error">* <?php echo $nameErr;?></span>
               </td>
            </tr>
           
            <tr>
               <td>Password: </td>
               <td><input type = "password" name = "pass" maxlength="8">
                  <span class = "error">* <?php echo $passErr;?></span>
               </td>
            </tr>
           
           
            <td>
               <input type = "submit" name = "submit" value = "Submit"> 
            </td>
				
         </table>
			
      </form>
      
      <?php
         echo "<h2>Your given values are as:</h2>";
         echo $name;
         echo "<br>";
         
         echo $pass;
         echo "<br>";
         
        
      ?>
   
   </body>
</html>