<?php
    include '../controller/controllerData.php';
    $conn = new controllerData();
?>
<html>
    <head>
        <meta charset="utf-8">
        <title>Data </title>
        <style type="text/css">
.contoh1 { font-size:16px; }
.contoh2 { font-size:16px; line-height: 20px;}
.contoh3 { font-size:16px; line-height: 1.5em;}
.contoh4 { font-size:16px; line-height: 2;}
</style>
    </head>
    <body bgcolor="#FFFFFF">
        <h2><strong><p align="center">Data </p></strong></h2>
       
        <table  border="1" cellpadding="0" cellspacing="0" align="center">
          
            <tr>
                <td width="10" height="20" align="center" valign="middle" >Id Person</td>
                <td width="150" align="center" valign="middle" >Nama</td>
                <td width="150" align="center" valign="middle" >Hobi</td>
                <!-- <td width="175" align="center" valign="middle" >Status</td>
                <td width="175" align="center" valign="middle" >Sekolah</td>
                <td width="175" align="center" valign="middle" >Skill</td> -->
               
            </tr>
            <?php foreach ($conn->list() as $value): ?>
                <tr>
                <input type='hidden' value"<?php echo $value['person_ids']?>"/>
                    <td p align="left" bgcolor="#FFFFFF"><?php echo $value['person_ids'] ?></td>
                    <td p align="left" bgcolor="#FFFFFF"><?php echo $value['names'] ?></td>
                    <td p align="left" bgcolor="#FFFFFF"><?php echo $value['person_hobbies'] ?></td>

                </tr>
            <?php endforeach; ?>
        </table>
    </body>
</html>