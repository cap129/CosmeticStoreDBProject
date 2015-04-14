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
                        <li><a href="managerCEO-employee.php">Employee</a></li>
                        <li class="current"><a href="managerCEO-sales.php">Sales</a></li>
                    </ul>
                  </div>
                </div>
            

                <div class="site_content">
                    
                    <div class="fieldsetdiv-2">          
                        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
                            <fieldset class="manas-sales" id="ceo-fieldset">
                                 <legend>Year Total</legend>
                                Year
                                <select name="year">
                                    <option>2013</option>
                                    <option>2014</option>
                                </select><br/>
                                Result Group by?
                                <input type="radio" id="ck1" name="region" value="region" />Region
                                <input type="radio" id="ck2" name="region" value="store" />Store
                                <input type="radio" id="ck3" name="region" value="product" />Product                               
                                <input type="radio" id="ck4" name="region" value="brand" />Brand
                                <input type="radio" id="ck5" name="region" value="category" />Category<br/><br/>
                                Result Index?
                                <input type="radio" name="order" value="asc" />Ascending
                                <input type="radio" name="order" value="desc" />Descending<br/>
                                <input type="submit" id="ceoinput" name="submit" value="submit"/>
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

                    if ($_POST['submit']) {
                        
                    $year=$_POST['year'];                    

                    if($_POST['region']=="region"){
                            if($_POST['order']="asc"){
                                $sql=  mysql_query("SELECT st.regionid,year,count(*) as number_of_order, sum(total) as amount_of_sale
                                from order_total ot, salesperson s, store st
                                where  st.storeid=s.storeid and
                                s.sid = ot.sid and
                                year ='$year' 
                                group by st.regionid
                                order by 4 ASC");
                                                echo "<table class='cus-result-table'>
                                                <tr>
                                                  <th>regionid</th>
                                                 
                                                  <th>year</th>
                                                  <th>number_of_order</th>
                                                  <th>amount_of_sale</th>    
                                                </tr>
                                           
                                                ";   
                            }else{
                                $sql=mysql_query("SELECT st.regionid,year,count(*) as number_of_order, sum(total) as amount_of_sale
                                from order_total ot, salesperson s, store st
                                where  st.storeid=s.storeid and
                                s.sid = ot.sid and
                                year ='$year' 
                                group by st.regionid
                                order by 4 DESC");
                                                echo "<table class='cus-result-table'>
                                                <tr>
                                                  <th>regionid</th>
                                                  
                                                  <th>year</th>
                                                  <th>number_of_order</th>
                                                  <th>amount_of_sale</th>    
                                                </tr>
                                           
                                                ";   
                            }                    
                    

                        }else if($_POST['region']=="store"){
                            if($_POST['order']=="asc"){
                                $sql=  mysql_query("SELECT s.storeid,year,count(*) as number_of_order, sum(total) as amount_of_sale
                                from order_total ot, salesperson s
                                where s.sid = ot.sid and
                                year ='$year' 
                                group by s.storeid
                                order by 5 ASC");
                                                echo "<table class='cus-result-table'>
                                                <tr>
                                                  <th>storeid</th>
                                                  
                                                  <th>year</th>
                                                  <th>number_of_order</th>
                                                  <th>amount_of_sale</th>    
                                                </tr>
                                           
                                                ";   
                            }else{
                                $sql=  mysql_query("SELECT s.storeid,year,count(*) as number_of_order, sum(total) as amount_of_sale
                                from order_total ot, salesperson s
                                where s.sid = ot.sid and
                                year ='$year' 
                                group by s.storeid
                                order by 4 DESC");
                                                echo "<table class='cus-result-table'>
                                                <tr>
                                                  <th>storeid</th>
                                                  
                                                  <th>year</th>
                                                  <th>number_of_order</th>
                                                  <th>amount_of_sale</th>    
                                                </tr>
                                           
                                                ";   
                            }
                        }else if($_POST['region']=="product"){
                            if($_POST['order']=="asc"){
                                $sql=  mysql_query("SELECT p.pid,pname,year, sum(sub_total) as amount_of_sale
                                from order_total ot, product p,order_detail od
                                where  p.pid=od.pid and
                                od.orderid=ot.orderid and
                                year ='$year' 
                                group by p.pid
                                order by 4 ");
                                                echo "<table class='cus-result-table'>
                                                <tr>
                                                  <th>pid</th>
                                                  <th>pname</th>
                                                  <th>year</th>
                                                  
                                                  <th>amount_of_sale</th>    
                                                </tr>
                                           
                                                ";   
                            }else{
                                $sql=  mysql_query("SELECT p.pid,pname,year, sum(sub_total) as amount_of_sale
                                from order_total ot, product p,order_detail od
                                where  p.pid=od.pid and
                                od.orderid=ot.orderid and
                                year ='$year' 
                                group by p.pid
                                order by 4 DESC");    
                                                echo "<table class='cus-result-table'>
                                                <tr>
                                                  <th>pid</th>
                                                  <th>pname</th>
                                                  <th>year</th>
                                                  
                                                  <th>amount_of_sale</th>    
                                                </tr>
                                           
                                                ";                   

                            }
                                              

                        }else if($_POST['region']=="brand"){
                            if($_POST['order']=="asc"){
                                $sql=  mysql_query("SELECT brand, year,sum(sub_total) as amount_of_sale
                                from order_total ot, order_detail od, product p
                                where  p.pid=od.pid and
                                od.orderid = ot.orderid and
                                year ='$year' 
                                group by p.brand
                                order by 3");
                                                echo "<table class='cus-result-table'>
                                                <tr>
                                                  <th>brand</th>
                                                  
                                                  <th>year</th>
                                                  
                                                  <th>amount_of_sale</th>    
                                                </tr>
                                           
                                                ";   
                            }else{
                                $sql=  mysql_query("SELECT brand, year,sum(sub_total) as amount_of_sale
                                from order_total ot, order_detail od, product p
                                where  p.pid=od.pid and
                                od.orderid = ot.orderid and
                                year ='$year' 
                                group by p.brand
                                order by 3 DESC");
                                                echo "<table class='cus-result-table'>
                                                <tr>
                                                  <th>brand</th>
                                                  
                                                  <th>year</th>
                                                  
                                                  <th>amount_of_sale</th>    
                                                </tr>
                                           
                                                ";   
                            }                    

                        }else{
                            if($_POST['order']=="asc"){
                                $sql=  mysql_query("SELECT category,year, sum(sub_total) as amount_of_sale
                                from order_total ot, product p,order_detail od
                                where  p.pid=od.pid and
                                od.orderid=ot.orderid and
                                year ='$year' 
                                group by p.category
                                order by 3 ");
                                                echo "<table class='cus-result-table'>
                                                <tr>
                                                  <th>category</th>
                                                  
                                                  <th>year</th>
                                                  
                                                  <th>amount_of_sale</th>    
                                                </tr>
                                           
                                                ";   
                            }else{
                                $sql=  mysql_query("SELECT category,year, sum(sub_total) as amount_of_sale
                                from order_total ot, product p,order_detail od
                                where  p.pid=od.pid and
                                od.orderid=ot.orderid and
                                year ='$year' 
                                group by p.category
                                order by 3  DESC");   
                                                echo "<table class='cus-result-table'>
                                                <tr>
                                                  <th>category</th>
                                                  
                                                  <th>year</th>
                                                  
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
                    }
                    ?>
                  </div>
                <a class="back" href="mainindex.php">Back</a>
            </div>
    
    </body>
</html>