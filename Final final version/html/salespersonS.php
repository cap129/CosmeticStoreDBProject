<!DOCTYPE html>
<html lang="en">
    <head>
		<meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
		<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <title>Salesperson</title>
        <meta name="description" content="Custom Login Form Styling with CSS3" />
        <meta name="keywords" content="css3, login, form, custom, input, submit, button, html5, placeholder" />
        <meta name="author" content="Codrops" />
        <link rel="shortcut icon" href="../favicon.ico"> 
        <link rel="stylesheet" type="text/css" href="../css/style2.css" />
		<script src="../js/modernizr.custom.63321.js"></script>
		<!--[if lte IE 7]><style>.main{display:none;} .support-note .note-ie{display:block;}</style><![endif]-->
    </head>
    <body>
        <div class="container">
            <header>
                <div class="head-icon">
                    <img class="icon" src="../images/mascara.png" alt="cannot"/>
                    <img class="icon" src="../images/lipstick.png" alt="cannot"/>
                    <img class="icon" src="../images/female.png" alt="cannot"/>
                </div>
            
                <h1><strong>Beauty&nbsp;&nbsp; Store</strong></h1>
                <h2>Online Database System</h2>
                
                <nav class="codrops-demos">
                    <a class="current-demo" href="">Salesperson</a>
                </nav>

                <div class="support-note">
                    <span class="note-ie">Sorry, only modern browsers.</span>
                </div>
                
            </header>

      
            <div class="content">
                <div class="menuhead">
                  <div class="menubar">
                    <ul class="menu">
                        <li><a href="salespersonC.php">Customer</a></li>
                        <li><a href="salespersonO.php">Order</a></li>
                        <li class="current"><a href="salespersonS.php">Search</a></li>
                    </ul>
                  </div>
                </div>
            

                <div class="site_content">
                    <div class="h3div"><h3>Search Product</h3></div>
                    <div class="formdiv">
                        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
                            <p>Please Enter the Product ID:</p>
                            <input type="text" name="pid" placeholder="Product ID" size="20"/>
                            <input type="submit" name="submit" value="Submit" value="Search"/>
                        </form>
                    </div>

                    <div class= "resultpart">

                    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
                    
                    <?php
                    $database='DBMS';
                    $password='626391';
                    $username='can';
                    $con=mysql_connect('localhost', $username, $password) or die("error");
                    @mysql_select_db($database, $con) or die("un ");   
                    session_start();  
                    
                    //if($_SERVER["REQUEST_METHOD"] == "POST"){
                    if ($_POST['submit']=='Submit') {
                        $pid = $_POST["pid"];
                        $_SESSION["PID"] = $pid;
                        if($pid==''){
                            echo "Please insert a product ID.";
                        }
                        else{

                        //echo '<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);
                        echo "<table class='cus-result-table' id='cus-res-ta'>
                                                <tr>
                                                    <th>pid</th>
                                                    <th>pname</th>
                                                    <th>inventory</th>
                                                    <th>price</th>
                                                    <th>brand</th>
                                                    <th>update</th>
                                                    
                                                </tr>";
                        $query2=mysql_query("select pid, pname, inventory, price, brand from Product where pid='$pid'") or die("null");
                        while($r2 = mysql_fetch_row($query2))
                        {
                            echo "<tr>";
                            foreach($r2 as $cell)
                                echo "<td>$cell</td>";
                            echo "<td><input type='text' name='update-value' placeholder='new inventory'/>&nbsp;&nbsp;<input type='submit' name='update' value='update'/></td>";
                            echo "</tr>";                        

                        }

                        echo "</table>";
                        //echo "</from>";
                    }
                }
                        
                    ?>

                    </form>

                    <?php


                    $database='DBMS';
                    $password='626391';
                    $username='can';
                    $con=mysql_connect('localhost', $username, $password) or die("error");
                    @mysql_select_db($database, $con) or die("un ");      
                    session_start();
                    
                    //if($_SERVER["REQUEST_METHOD"] == "POST"){
                    if ($_POST['update']=='update') {
                        $pid = $_SESSION["PID"] ;
                        $inventory = $_POST['update-value'];
                        if($inventory==''){
                            echo "Please insert the inventory.";
                        }
                        else{
                        $query = mysql_query("UPDATE  Product SET inventory = $inventory where pid='$pid'") or die("null");
                        echo "<table class='cus-result-table' >
                                <tr>
                                    <th>pid</th>
                                    <th>pname</th>
                                    <th>inventory</th>
                                    <th>price</th>
                                    <th>brand</th>                                    
                                </tr>";
                        $query1=mysql_query("SELECT pid, pname, inventory, price, brand from Product where pid='$pid'") or die("null");
                        
                        while($r2 = mysql_fetch_row($query1))
                        {
                            echo "<tr>";
                            foreach($r2 as $cell)
                                echo "<td>$cell</td>";
                            //echo "<td><input type='submit' name='update' value='update'/></td>";
                            echo "</tr>";                        

                        }

                        echo "</table>";


                    }
                }



                    ?>

                    

                    </div>
                    <a class="back" href="mainindex.php">Back</a>
                    

                </div>
            
            </div>

        </div>


    </body>
</html>