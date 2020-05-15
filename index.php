<?php
    include_once "classes/shout.php";
    
    $shout = new shout;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>shout box</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

        <div class="wrapper clr" >
            <header class="headsection clr">
                <h2>Shout box in php Opp , Mysqli</h2>
            </header>
            <section class="content clr">
               <div class="box">
                   <ul>
                       <?php 
                       
                            $getdata = $shout->getallData();     
                            if ($getdata) {
                                while ($row = mysqli_fetch_assoc($getdata)) {
                                        
                       ?>
                     
                        <li> <span><?php echo $row['time']; ?></span>-<b><?php echo $row['name']; ?></b> <?php echo $row['body']; ?></li>

                    <?php 
                        
                            }
                                        
                        }else{
                            echo "No Data Found";
                        }
                    ?>
                 
                   
                   </ul>
               
               </div> 
            <?php 
            
                if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                    
                    $shoutdata = $shout->insertData($_POST);
                }
            
            ?>



               <!-- form section  -->
                <div class="shoutform clr">
                   <form action="" method="post">
                       <table>
                           <tr>
                               <td>Name </td>
                               <td>:</td>
                               <td><input type="text" name="name" placeholder="Please Input Your Name" > </td>
                           </tr>

                           <tr>
                               <td>Body </td>
                               <td>:</td>
                               <td><input type="text" name="body" placeholder="please input Your Text"> </td>
                           </tr>

                           <tr>
                               <td> </td>
                               <td></td>
                               <td><input type="submit" name="submit" value="Submit"> </td>
                           </tr>
                       </table>
                   </form>
                </div>           
            </section>

            <footer class="footsection clr">
                <h2>
                    &copy; Copyright By Sarjid
                </h2>
            </footer>

            
        </div>
    
</body>
</html>