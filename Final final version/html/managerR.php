<!DOCTYPE html>
<html lang="en">
    <head>
		<meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
		<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <title>Region Manager</title>
        <meta name="description" content="Custom Login Form Styling with CSS3" />
        <meta name="keywords" content="css3, login, form, custom, input, submit, button, html5, placeholder" />
        <meta name="author" content="Codrops" />
        <link rel="shortcut icon" href="../favicon.ico"> 
        <link rel="stylesheet" type="text/css" href="../css/style2.css" />
		<script src="../js/modernizr.custom.63321.js"></script>
		<!--[if lte IE 7]><style>.main{display:none;} .support-note .note-ie{display:block;}</style><![endif]-->
    </head>
    <body onload="myFunction()">
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
                    <a class="current-demo" id="abc" href="">
                        <?php 
                          session_start();
                          echo $_SESSION["rmanager"];
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
                        <li class="current"><a href=''>Sales</a></li>
                    </ul>
                  </div>
                </div>
            

                <div class="site_content">
                    
                    <div class="fieldsetdiv-2">
                        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
                            <fieldset class="manas-sales">
                                <legend>Year Total</legend>
                                Year
                                <select name="year1">
                                    <option>2013</option>
                                    <option>2014</option>
                                </select><br/>
                                Result Group by?
                                <input type="radio" checked/>Store
                                <!--已经实现了javascript, 如果是check,值是1，未check 值是0-->
                                <input type="checkbox" id="ck1" name="brand" value=0 onclick="changeValue(this)"/>Brand
                                <input type="checkbox" id="ck2" name="category" value=0 onclick="changeValue(this)"/>Category
                                <input type="submit" name="s1" value="submit"/>
                            </fieldset>
                        </form>

                        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
                            <fieldset class="manas-sales" id="fd1">
                                <legend>Month Total</legend>
                                Year
                                <select name="year2">
                                    <option>2013</option>
                                    <option>2014</option>
                                </select>
                                Month
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
                                and
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
                                Result Group by?
                                <input type="radio" checked/>Store
                                <input type="checkbox" id="ck3" name="brand" value=0 onclick="changeValue(this)"/>Brand
                                <input type="checkbox" id="ck4" name="category" value=0 onclick="changeValue(this)"/>Category
                                <input type="submit" name="s2" value="submit"/>
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

                    if ($_POST['s1']) {
                        
                    $year1=$_POST['year1'];                    

                    if(!isset($_POST['brand'])){
                            if(!isset($_POST['category'])){
                                $sql=  mysql_query("SELECT year,st.storeid, count(*) as number_of_order,sum(total) as amount_of_sale
                                from order_total ot, salesperson s,store st
                                where st.regionid='$rid' and  
                                st.storeid = s.storeid and
                                s.sid = ot.sid and
                                year = '$year1'
                                group by st.storeid");

                                                echo "<table class='cus-result-table'>
                                                <tr>
                                                  <th>year</th>
                                                  <th>storeid</th>
                                                  <th>number_of_order</th>
                                                  <th>amount_of_sale</th>    
                                                </tr>
                                           
                                                ";  
                            }else{
                                $sql=  mysql_query("SELECT year,st.storeid, category,sum(sub_total) as amount_of_sale
                                from order_detail od, order_total ot, product p, salesperson s, store st
                                where p.pid = od.pid and
                                od.orderid = ot.orderid and
                                st.regionid='$rid' and  
                                st.storeid = s.storeid and
                                s.sid = ot.sid and
                                year='$year1'
                                group by st.storeid, category");
                                                    echo "<table class='cus-result-table'>
                                                <tr>
                                                  <th>year</th>
                                                  <th>storeid</th>
                                                  <th>category</th>
                                                  <th>amount_of_sale</th>    
                                                </tr>
                                           
                                                ";  
                            }
                        }else{
                            if(!isset($_POST['category'])){
                                $sql=  mysql_query("SELECT year,st.storeid,  brand,sum(sub_total) as amount_of_sale
                                from order_detail od, order_total ot, product p, salesperson s, store st
                                where p.pid = od.pid and
                                od.orderid = ot.orderid and
                                st.regionid='$rid' and  
                                st.storeid = s.storeid and
                                s.sid = ot.sid and
                                year='$year1'
                                group by st.storeid, brand"); 
                                                    echo "<table class='cus-result-table'>
                                                <tr>
                                                  <th>year</th>
                                                  <th>storeid</th>
                                                  <th>brand</th>
                                                  <th>amount_of_sale</th>    
                                                </tr>
                                           
                                                ";                     

                            }else{
                                $sql=  mysql_query("SELECT year,st.storeid,brand,category,sum(sub_total) as amount_of_sale
                                from order_detail od, order_total ot, product p, salesperson s, store st
                                where p.pid = od.pid and
                                od.orderid = ot.orderid and
                                st.regionid='$rid' and  
                                st.storeid = s.storeid and
                                s.sid = ot.sid and
                                year='$year1'
                                group by st.storeid, brand,category");  
                                                    echo "<table class='cus-result-table'>
                                                <tr>
                                                  <th>year</th>
                                                  <th>storeid</th>
                                                  <th>brand</th>
                                                  <th>category</th>
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



                    if ($_POST['s2']) {
                        
                    $year2=$_POST['year2'];
                    $monthfrom=$_POST['monthfrom'];
                    $monthto=$_POST['monthto'];                    

                    if($_POST['monthto']=="-"){
                            if(!isset($_POST['brand'])){
                                if(!isset($_POST['category'])){
                                    $sql1=mysql_query("SELECT year,month,st.storeid, count(*) as number_of_order,sum(total) as amount_of_sale
                                    from order_total ot, salesperson s,store st
                                    where st.regionid='$rid' and  
                                    st.storeid = s.storeid and
                                    s.sid = ot.sid and
                                    year = '$year2' and
                                    month = '$monthfrom'
                                    group by st.storeid");
                                            echo "<table class='cus-result-table'>
                                                <tr>
                                                  <th>year</th>
                                                  <th>month</th>
                                                  <th>storeid</th>
                                                  <th>number_of_order</th>
                                                  <th>amount_of_sale</th>    
                                                </tr>
                                           
                                                ";   
                                }else{
                                    $sql1=mysql_query("SELECT year,month,st.storeid,  category,sum(sub_total) as amount_of_sale
                                    from order_detail od, order_total ot, product p, salesperson s, store st
                                    where p.pid = od.pid and
                                    od.orderid = ot.orderid and
                                    st.regionid='$rid' and  
                                    st.storeid = s.storeid and
                                    s.sid = ot.sid and
                                    year='$year2' and
                                    month = '$monthfrom'
                                    group by st.storeid, category");
                                            echo "<table class='cus-result-table'>
                                                <tr>
                                                  <th>year</th>
                                                  <th>month</th>
                                                  <th>storeid</th>
                                                  <th>category</th>
                                                  <th>amount_of_sale</th>    
                                                </tr>
                                           
                                                ";   

                                }
                            }else{
                                if(!isset($_POST['category'])){
                                    $sql1=mysql_query("SELECT year,month,st.storeid,  brand,sum(sub_total) as amount_of_sale
                                    from order_detail od, order_total ot, product p, salesperson s, store st
                                    where p.pid = od.pid and
                                    od.orderid = ot.orderid and
                                    st.regionid='$rid' and  
                                    st.storeid = s.storeid and
                                    s.sid = ot.sid and
                                    year='$year2' and 
                                    month='$monthfrom'
                                    group by st.storeid, brand");  
                                             echo "<table class='cus-result-table'>
                                                <tr>
                                                  <th>year</th>
                                                  <th>month</th>
                                                  <th>storeid</th>
                                                  <th>brand</th>
                                                  <th>amount_of_sale</th>    
                                                </tr>
                                           
                                                ";                       

                                }else{
                                    $sql1=mysql_query("SELECT year, month,st.storeid,brand,category,sum(sub_total) as amount_of_sale
                                    from order_detail od, order_total ot, product p, salesperson s, store st
                                    where p.pid = od.pid and
                                    od.orderid = ot.orderid and
                                    st.regionid='$rid' and  
                                    st.storeid = s.storeid and
                                    s.sid = ot.sid and
                                    year='$year2' and
                                    month = '$monthfrom'
                                    group by st.storeid, brand,category ");  
                                            echo "<table class='cus-result-table'>
                                                <tr>
                                                  <th>year</th>
                                                  <th>month</th>
                                                  <th>storeid</th>
                                                  <th>brand</th>
                                                  <th>categoryr</th>
                                                  <th>amount_of_sale</th>    
                                                </tr>
                                           
                                                ";                        

                                }
                            }

                           while($row=mysql_fetch_row($sql1))
                            {
                                echo"<tr>";
                                foreach($row as $cell)
                                    echo "<td>$cell</td>";
                                echo "</tr>";
                                
                            }
                            echo "</table>";
                            


                        }else{
                            if(!isset($_POST['brand'])){
                                if(!isset($_POST['category'])){
                                    $sql1=mysql_query("SELECT year,st.storeid, count(*) as number_of_order,sum(total) as amount_of_sale
                                    from order_total ot, salesperson s,store st
                                    where st.regionid='$rid' and  
                                    st.storeid = s.storeid and
                                    s.sid = ot.sid and
                                    year = '$year2' and
                                    month between '$monthfrom' and '$monthto'
                                    group by st.storeid");
                                            echo "<table class='cus-result-table'>
                                                <tr>
                                                  <th>year</th>
                                                  <th>storeid</th>
                                                  <th>number_of_order</th>
                                                  <th>amount_of_sale</th> 
                                                  <th>month period</th>    
                                                </tr>
                                           
                                                ";   


                                }else{
                                    $sql1=mysql_query("SELECT year,st.storeid,  category,sum(sub_total) as amount_of_sale
                                    from order_detail od, order_total ot, product p, salesperson s, store st
                                    where p.pid = od.pid and
                                    od.orderid = ot.orderid and
                                    st.regionid='$rid' and  
                                    st.storeid = s.storeid and
                                    s.sid = ot.sid and
                                    year='$year2' and
                                    month between '$monthfrom' and '$monthto'
                                    group by st.storeid, category");
                                            echo "<table class='cus-result-table'>
                                                <tr>
                                                  <th>year</th>
                                                  <th>storeid</th>
                                                  <th>category</th>
                                                  <th>amount_of_sale</th> 
                                                  <th>month period</th>    
                                                </tr>
                                           
                                                ";

                                }
                            }else{
                                if(!isset($_POST['category'])){
                                    $sql1=mysql_query("SELECT year,st.storeid, brand,sum(sub_total) as amount_of_sale
                                    from order_detail od, order_total ot, product p, salesperson s, store st
                                    where p.pid = od.pid and
                                    od.orderid = ot.orderid and
                                    st.regionid='$rid' and  
                                    st.storeid = s.storeid and
                                    s.sid = ot.sid and
                                    year='$year2' and 
                                    month between '$monthfrom' and '$monthto'
                                    group by st.storeid, brand   ");  
                                             echo "<table class='cus-result-table'>
                                                <tr>
                                                  <th>year</th>
                                                  <th>storeid</th>
                                                  <th>brand</th>
                                                  <th>amount_of_sale</th> 
                                                  <th>month period</th>    
                                                </tr>
                                           
                                                ";                   

                                }else{
                                    $sql1=mysql_query("SELECT year,st.storeid,brand,category,sum(sub_total) as amount_of_sale
                                    from order_detail od, order_total ot, product p, salesperson s, store st
                                    where p.pid = od.pid and
                                    od.orderid = ot.orderid and
                                    st.regionid='$rid' and  
                                    st.storeid = s.storeid and
                                    s.sid = ot.sid and
                                    year='$year2' and
                                    month between '$monthfrom' and '$monthto'
                                    group by st.storeid, brand,category ");   
                                            echo "<table class='cus-result-table'>
                                                <tr>
                                                  <th>year</th>
                                                  <th>storeid</th>
                                                  <th>brand</th>
                                                  <th>category</th>
                                                  <th>amount_of_sale</th> 
                                                  <th>month period</th>    
                                                </tr>
                                           
                                                ";                 

                                }
                            }

                            while($row=mysql_fetch_row($sql1))
                            {
                                echo"<tr>";
                                foreach($row as $cell)
                                    echo "<td>$cell</td>";
                                echo "<td>$monthfrom-$monthto</td>";
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

    <script src="../js/dbms.js"></script>
    </body>
</html>