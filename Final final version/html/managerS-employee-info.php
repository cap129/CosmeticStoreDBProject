<!DOCTYPE html>
<html lang="en">
    <head>
		<meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
		<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <title>Store Manager</title>
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
            
                <h1><strong>Beauty&nbsp;&nbsp; Me</strong></h1>
                <h2><strong>Online Database System</strong></h2>
                
                <nav class="codrops-demos">
                    <a class="current-demo" href="">
                        <?php 
                          session_start();
                          echo $_SESSION["storemanager"];
                        ?>
                    </a>
                </nav>

                <div class="support-note">
                    <span class="note-ie">Sorry, only modern browsers.</span>
                </div>
                
            </header>

      
            <div class="content">
                <div class="menuhead">
                  <div class="menubar">
                    <ul class="menu">
                        <li class="current"><a href="managerS-employee-info.php">Employee</a></li>
                        <li><a href="managerS-sales.php">Sales</a></li>
                    </ul>
                  </div>
                </div>

                <?php

                $database='DBMS';
                $password='626391';
                $username='can';                

                $table='Salesperson';                

                $con=mysql_connect('localhost', $username, $password) or die("error");
                @mysql_select_db($database, $con) or die("un ");    

                session_start();
                $storeid = $_SESSION["storemanager"];            

                $result=mysql_query("SELECT * FROM Salesperson where storeid = '$storeid'" ) or die("null");
                //$r=mysql_query("SELECT sid FROM Salesperson") or die("null");
                //$fields_num = mysql_num_fields($result);                
                

                ?>

                <div class="site_content">
                    <nav id="nav1">
                        <a class="current" href="managerS-employee-info.php">view all salesperson in our store</a>|
                        <a href="managerS-employee-perfomance.php">show sales performance</a>
                    </nav>
                    
                    <form action="managerS-employee-info.php" method="post">
                        <table id="emp-ta">
                            <tr>
                                <th>sid</th>
                                <th>sname</th>
                                <th>address</th>
                                <th>phone</th>
                                <th>email</th>
                                <th>storeid</th>
                                <th>since</th>
                                <th>salary</th>
                                <th>manipulation</th> 
                            </tr>
                            
                            <?php 
                                                            
                            // printing table rows                            

                            while($row = mysql_fetch_row($result))
                            {
                                
                            //$sids=mysql_fetch_row($r);                            

                                echo "<tr>";
                                // $row is array... foreach( .. ) puts every element
                                // of $row to $cell variable
                                foreach($row as $cell)
                                    
                                    echo "<td>$cell</td>";
                                //$sid=$cell["sid"];
                                //echo $sid;
                                //foreach($sids as $cell2)
                                    //$sid=$cell2;                            

                            //echo $sid;}
                                echo "<td><input type='submit' name='$sid' value='delete'/></td>";
                                echo "</tr>";

                                
                               // if ($_POST['$sid']){
                               //    $result=mysql_query("DELETE FROM Salesperson WHERE sid='$sid'") or die("null");
                               // }                            

                            }

                            mysql_free_result($result);
                                

                        ?>
                        </table>


                    </form>
                    
                </div>
<a class="back" href="mainindex.php">Back</a>
          </div>
        

      </div>


    </body>
</html>