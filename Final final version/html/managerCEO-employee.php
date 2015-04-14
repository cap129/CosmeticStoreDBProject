<!DOCTYPE html>
<html lang="en">
    <head>
		<meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
		<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <title>CEO</title>
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
                    <a class="current-demo" href="">CEO</a>
                </nav>

                <div class="support-note">
                    <span class="note-ie">Sorry, only modern browsers.</span>
                </div>
                
            </header>

      
            <div class="content">
                <div class="menuhead">
                  <div class="menubar">
                    <ul class="menu">
                        <li  class="current"><a href="managerCEO-employee.php">Employee</a></li>
                        <li><a href="managerCEO-sales.php">Sales</a></li>
                    </ul>
                  </div>
                </div>
            

                <div class="site_content">
                    
                    <div class="fieldsetdiv-2">
                        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
                            <fieldset class="manas-sales" id="ceo-fieldset">
                                <legend>View Salesperson Performance</legend>
                                Year
                                <select name="year">
                                    <option>2013</option>
                                    <option>2014</option>
                                </select><br/>
                                Result Group by?
                                <input type="checkbox" id="ck1" name="region" value=0 onlick="changeValue(this)" />Region<br/>
                                Result Index by?
                                <input type="radio" name="order" value="asc"  />Ascending
                                <input type="radio" name="order" value="desc" />Descending
                                <input type="submit" name="s" value="submit"/>
                            </fieldset>
                        </form>
                    </div> 
                    
                    <?php
                    session_start();
                    $database='DBMS';
                    $password='626391';
                    $username='can';                    

                    $con=mysql_connect('localhost', $username, $password) or die("error");
                    @mysql_select_db($database, $con) or die("un ");                    

                    $rid=$_SESSION["rmanager"];                    

                    if ($_POST['s']) {
                        
                    $year=$_POST['year'];                    

                    if(!isset($_POST['region'])){
                            if($_POST['asc']=="asc"){
                                $sql=mysql_query("SELECT s.sid,sname, year, count(*) as number_of_order, sum(total) as amount_of_sale
                                from order_total ot, salesperson s
                                where s.sid = ot.sid and
                                year ='$year'
                                group by s.sid
                                order by 5");
                                            echo "<table class='cus-result-table'>
                                                <tr>
                                                  <th>sid</th>
                                                  <th>sname</th>
                                                  <th>year</th>
                                                  <th>number_of_order</th>
                                                  <th>amount_of_sale</th>    
                                                </tr>
                                           
                                                ";   

                            }else{
                                $sql=mysql_query("SELECT s.sid,sname, year, count(*) as number_of_order, sum(total) as amount_of_sale
                                from order_total ot, salesperson s
                                where s.sid = ot.sid and
                                year ='$year'
                                group by s.sid
                                order by 5 desc");
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

                        }else{
                                
                                $sql=mysql_query("SELECT st.regionid,s.sid,sname, year, count(*) as number_of_order, sum(total) as amount_of_sale
                                from order_total ot, salesperson s,store st
                                where s.storeid = st.storeid and
                                s.sid = ot.sid and
                                year ='$year'
                                group by st.regionid, s.sid
                                order by 6");  
                                            echo "<table class='cus-result-table'>
                                                <tr>
                                                  <th>regionid</th>
                                                  <th>sid</th>
                                                  <th>sname</th>
                                                  <th>year</th>
                                                  <th>number_of_order</th>
                                                  <th>amount_of_sale</th>    
                                                </tr>
                                           
                                                ";                     

                           }                    

                        }                    
                                         

                       
                    while($row=mysql_fetch_row($sql))
                    {
                        echo"<tr>";
                        foreach($row as $cell)
                            echo "<td>$cell</td>";
                        echo "</tr>";
                        
                    }
                    echo "</table>";                    

                    ?>
                    
                </div>
<a class="back" href="mainindex.php">Back</a>
            </div>
    <script src="../js/dbms.js"></script>
    </body>
</html>