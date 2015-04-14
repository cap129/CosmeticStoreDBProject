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
            
                <h1><strong>Beauty&nbsp;&nbsp; Me</strong></h1>
                <h2><strong>Online Database System</strong></h2>
                
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
                        <li class="current"><a href="salespersonC.php">Customer</a></li>
                        <li><a href="salespersonO.php">Order</a></li>
                        <li><a href="salespersonS.php">Search</a></li>
                    </ul>
                  </div>
                </div>
            

                <div class="site_content">

                    <div class="h3div"><h3>New Customer Information Registry</h3></div>
                    <div class="leftpart">
                        <h3>Basic Information</h3>
                        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
                            <table id="table1">
                                <tr><td>Name:</td><td><input type="text" name="name" size=30 class="inputbox"/></td></tr>
                                <tr><td>Street:</td><td><input type="text" name="street" size=30 class="inputbox"/></td></tr>
                                <tr><td>City:</td><td><input type="text" name="city" size=15 class="inputbox"/></td></tr>
                                <tr><td>State/Region:</td><td><input type="text" name="state" size=15 class="inputbox"/></td></tr>
                                <tr><td>ZIP:</td><td><input type="text" name="zip" size=12 class="inputbox"/></td></tr>
                                <tr><td>Country:</td><td><input type="text" name="country" size=15 class="inputbox"/></td></tr>
                                <tr><td>Phone:</td><td><input type="text" name="phone" size=12 class="inputbox"/></td></tr>
                                <tr><td>Email:</td><td><input type="text" name="email" size=30 class="inputbox"/></td></tr>
                            </table>
                            <h3>Private Information(Optional)</h3>
                            <table id="table2">
                                <tr>
                                    <td>Gender:</td>
                                    <td>
                                        <select name="gender">
                                            <option>Female</option>
                                            <option>Male</option>
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Birthday:</td>
                                    <td><input type="text" name="birthday" size=30 class="inputbox"/></td>
                                </tr>
                                <tr>
                                    <td>Income:</td>
                                    <td><input type="text" name="income" size=30 class="inputbox"/></td>
                                </tr>
                          </table>

                            <div class="inputdiv"><input type="submit" name="submit" value="Submit" alt="submit"/></div>
                        </form>
                    </div>
                    
                    <div class="rightpart">
                        <h3>Search Customer</h3>
                        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
                          <input type="text" name="searchkey" size=20 placeholder="Enter customer ID"/>
                          <div class="inputdiv"><input type="submit" name="search" value="Search" alt="search"/></div>
                        </form>
                    </div>

                    <div class="clear"></div>

                    <div class="resultpart">
                        <!--希望能在此看到customer的信息-->
                    


                    <?php
                    $database='DBMS';
                    $password='626391';
                    $username='can';
                    $con=mysql_connect('localhost', $username, $password) or die("error");
                    @mysql_select_db($database, $con) or die("un ");



                    if ($_POST['submit']) {
                        $cid=uniqid();
                        $name = $_POST["name"];
                        $street = $_POST["street"];
                        $city = $_POST["city"];
                        $state = $_POST["state"];
                        $zip = $_POST["zip"];
                        $country = $_POST["country"];
                        $phone = $_POST["phone"];
                        $email = $_POST["email"];
                        $gender = $_POST["gender"];
                        $birthday = $_POST["birthday"];
                        $income = $_POST["income"];                       


                        if($street==''){
                            echo "Street can't be null.";
                        }
                        else if($name==''){
                            echo "Name can't be null.";
                        }
                        else if($city==''){
                            echo "City can't be null.";
                        }
                        else if($state==''){
                            echo "State can't be null.";
                        }
                        else if($zip==''){
                            echo "ZIP can't be null.";
                        }
                        else if($country==''){
                            echo "Country can't be null.";
                        }
                        else if($phone==''){
                            echo "Phone can't be null.";
                        }
                        else if($email==''){
                            echo "Email can't be null.";
                        }
                        else{

                        $query=mysql_query("INSERT into Customer values ('$cid','$name','$street','$city','$state','$zip','$country','$phone','$email','$gender','$birthday','$income')") or die("null");
                        $query3=mysql_query("SELECT * from Customer where cid='$cid'") or die("null");

                        echo "<table id='new-cus1'>
                                <tr>
                                    <th>Cid</th>
                                    <th>Name</th>
                                    <th>Street</th>
                                    <th>City</th>
                                    <th>State</th>
                                    <th>Zip</th>
                                    <th>Country</th>
                                    <th>Phone</th>
                                    <th>Email</th>
                                    <th>Gender</th>
                                    <th>Birthday</th>
                                    <th>Income</th>         
                                </tr>
                                ";
                        
                        while($r2 = mysql_fetch_row($query3))
                                {
                                    echo "<tr>";
                                    foreach($r2 as $cell)
                                        echo "<td>$cell</td>";
                                    echo "</tr>";                                

                                }

                        echo "</table>";

                        }
                    }

                        if ($_POST['search']) {
                        $key = $_POST["searchkey"];
                        if($key==''){
                            echo "Please insert a customer ID.";
                        }
                        else{

                        echo "<table class='cus-result-table' id='new-cus2'>
                                <tr>
                                    <th>Cid</th>
                                    <th>Name</th>
                                    <th>Street</th>
                                    <th>City</th>
                                    <th>State</th>
                                    <th>Zip</th>
                                    <th>Country</th>
                                    <th>Phone</th>
                                    <th>Email</th>
                                    <th>Gender</th>
                                    <th>Birthday</th>
                                    <th>Income</th>         
                                </tr>
                                ";

                                $query2=mysql_query("SELECT * from Customer where cid='$key'") or die("null");
                                while($r2 = mysql_fetch_row($query2))
                                {
                                    echo "<tr>";
                                    foreach($r2 as $cell)
                                        echo "<td>$cell</td>";
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