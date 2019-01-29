<!DOCTYPE html>
<html lang="en">
<head>
    <style>
      .error {color: #FF0000;}
    </style>
    <title>Document</title>
</head>
<body>
<?php //php 7.0.8
    $org="";
    $jumlah ="";
    $nameErr="";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["jml"])) {
        $nameErr = "Jumlah masih Kosong";
     }else {
            $org = test_input($_POST["jml"]);
            $jumlah = 0;
            for ($i = 1; $i < $org; $i++) {
              //  echo "$i + ";
            $jumlah += $i;
            }
       // echo "<br/>totalnya : $jumlah";

        }
     }

     function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
     }
?>

 <p><span class = "error">* required field.</span></p>
<form method = "post" action = "<?php 
         echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
<table>

            <tr>
               <td>Jumlah Orang:</td>
               <td><input type = "text" name = "jml" >
               <span class = "error">* <?php echo $nameErr;?></span></td>
            </tr>
            <td>
               <input type = "submit" name = "submit" value = "Submit"> 
            </td>

       
</table>
</form>
<?php
         echo "<h2>Your given values are as:</h2>";
         echo $jumlah;
         echo "<br>"; 
      ?>

</body>
</html>