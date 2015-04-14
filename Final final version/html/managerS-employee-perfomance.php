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
            
                <h1><strong>Beauty&nbsp;&nbsp; Store</strong></h1>
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
            

                <div class="site_content">
                    <nav id="nav1">
                        <a href="managerS-employee-info.php">view all salesperson in our store</a>|
                        <a class="current" href="managerS-employee-perfomance.php">Show sales performance</a>
                    </nav>
                    
                    <div class="fieldsetdiv-1">
                        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
                            <fieldset id="fieldset-1">
                                <legend>Choose Exact Time</legend>
                                <select name="year">
                                    <option>2013</option>
                                    <option>2014</option>
                                </select>
                                <select name="month">
                                    <!--加这个其实是为了判断到底选没选月份-->
                                    <option>-</option>
                                    <option>01</option>
                                    <option>02</option>
                                    <option>03</option>
                                    <option>04</option>
                                    <option>05</option>
                                    <option>06</option>
                                    <option>07</option>
                                    <option>08</option>
                                    <option>09</option>
                                    <option>10</option>
                                    <option>11</option>
                                    <option>12</option>
                                </select>
                                <input type="submit" name="left" value="Search"/>   
                            </fieldset>
                        </form>
                     
                        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
                            <fieldset id="fieldset-2">
                                <legend>OR  &nbsp;&nbsp;&nbsp;&nbsp;Choose Time Period</legend>
                                Between
                                <select name="year2">
                                    <option>2013</option>
                                    <option>2014</option>
                                </select>

                                <select name="monthfrom">
                                    <option>-</option>
                                    <option>01</option>
                                    <option>02</option>
                                    <option>03</option>
                                    <option>04</option>
                                    <option>05</option>
                                    <option>06</option>
                                    <option>07</option>
                                    <option>08</option>
                                    <option>09</option>
                                    <option>10</option>
                                    <option>11</option>
                                    <option>12</option>
                                </select>
                                AND
                                <select name="monthto">
                                    <option>-</option>
                                    <option>01</option>
                                    <option>02</option>
                                    <option>03</option>
                                    <option>04</option>
                                    <option>05</option>
                                    <option>06</option>
                                    <option>07</option>
                                    <option>08</option>
                                    <option>09</option>
                                    <option>10</option>
                                    <option>11</option>
                                    <option>12</option>
                                </select><br/>
                                <input type="submit" name="right" value="Search"/>  

                            </fieldset>
                        </form>


                    </div>

                    
                    <div class="resultpart">

                   <?php
                    session_start();
                    $database='DBMS';
                    $password='626391';
                    $username='can';                    

                    $con=mysql_connect('localhost', $username, $password) or die("error");
                    @mysql_select_db($database, $con) or die("un ");                    

                    $storeid=$_SESSION["storemanager"];                    

                    if ($_POST['left']) {
                    $year=$_POST['year'];
                    $month=$_POST['month'];

                    if($month==='-'){
                        $sqlyear=mysql_query("SELECT s.sid,sname, year,count(*) as number_of_order, sum(total) as amount_of_sale
                                from order_total ot, salesperson s
                                where s.storeid='$storeid' and
                                s.sid = ot.sid and
                                year ='$year'
                                group by s.sid") or die("null");
                                echo "<table class='cus-result-table'>
                                                <tr>
                                                <th>sid</th>
                                                <th>sname</th>
                                                <th>year</th>
                                                <th>number_of_order</th>
                                                <th>amount_of_sale</th>      
                                                </tr>
                                                "; 
                    }
                    else{
                        $sqlyear=mysql_query("SELECT s.sid,sname, year,month, count(*) as number_of_order, sum(total) as amount_of_sale
                                from order_total ot, salesperson s
                                where s.storeid='$storeid' and
                                s.sid = ot.sid and
                                year ='$year' and 
                                month ='$month'
                                group by s.sid") or die("null");
                                echo "<table class='cus-result-table'>
                                              <tr>
                                              <th>sid</th>
                                              <th>sname</th>
                                              <th>year</th>
                                              <th>month</th>
                                              <th>number_of_order</th>
                                              <th>amount_of_sale</th>      
                                              </tr>
                                              "; 
                        
                    }

                    while($row=mysql_fetch_row($sqlyear))
                    {
                        echo"<tr>";
                        foreach($row as $cell)
                            echo "<td>$cell</td>";
                        echo "</tr>";
                        
                    }
                    echo "</table>";
                    }


                    if ($_POST['right']) {
                    $year2=$_POST['year2'];
                    $monthfrom=$_POST['monthfrom'];
                    $monthto=$_POST['monthto'];
                    echo "<table class='cus-result-table'>
                                                <tr>
                                                <th>sid</th>
                                                <th>sname</th>
                                                <th>year</th>

                                                <th>number_of_order</th>
                                                <th>amount_of_sale</th> 
                                                <th>month period</th>     
                                                </tr>
                                                ";                         

                    $sqlperiod=mysql_query("SELECT s.sid,sname, year,count(*) as number_of_order, sum(total) as amount_of_sale
                                from order_total ot, salesperson s
                                where s.storeid='$storeid' and
                                s.sid = ot.sid and
                                year ='$year2' and 
                                month between '$monthfrom' and '$monthto'
                                group by s.sid") or die("null");
                                            

                                            
                    
                    
                    

                    while($row=mysql_fetch_row($sqlperiod))
                    {
                        echo"<tr>";
                        foreach($row as $cell)
                            echo "<td>$cell</td>";
                        echo "<td>$monthfrom - $monthto</td>";
                        echo "</tr>";
                        
                    }
                    echo "</table>";
                    }
                    
                    ?> 
                    
                 
                    
                </div>
<a class="back" href="mainindex.php">Back</a>
          </div>
        

      </div>
    </div>


    </body>
</html