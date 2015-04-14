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
                        <li><a href='managerS-employee-info.php'>Employee</a></li>
                        <li class="current"><a href="managerS-sales.php">Sales</a></li>
                    </ul>
                  </div>
                </div>

                <div class="site_content">

                    <div class="fieldsetdiv">
                    
                    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">

                        <fieldset class="manas-sales" >
                            <legend>Year Total</legend>
                            Year
                            <select name="year">
                                <option>2013</option>
                                <option>2014</option>
                            </select><br/>
                            Result Group by?
                            <input type="checkbox" id="ck1" name="brand" value="yes" onclick="changeValue(this)"/>Brand
                            <input type="checkbox" id="ck2" name="category" value="yes" onclick="changeValue(this)"/>Category
                            <input type="checkbox" id="ck3" name="product" value="yes" onclick="changeValue(this)"/>Product
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
                            Month Between
                            <select name="month21">
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
                            <select name="month22">
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
                            <input type="checkbox" id="ck4" name="brand" value="yes" onclick="changeValue(this)"/>Brand
                            <input type="checkbox" id="ck5" name="category" value="yes" onclick="changeValue(this)"/>Category
                            <input type="checkbox" id="ck6" name="product" value="yes" onclick="changeValue(this)"/>Product
                            <input type="submit" name="s2" value="submit"/>
                        </fieldset>
                    </form>

                    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">

                        <fieldset class="manas-sales" id="fd2">
                            <legend>Day Total</legend>
                            Year
                            <select name="year3">
                                <option>2013</option>
                                <option>2014</option>
                            </select>
                            Month
                            <select name="month3">
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
                            Day
                            <select name="day">
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
                                <option>13</option>
                                <option>14</option>
                                <option>15</option>
                                <option>16</option>
                                <option>17</option>
                                <option>18</option>
                                <option>19</option>
                                <option>20</option>
                                <option>21</option>
                                <option>22</option>
                                <option>23</option>
                                <option>24</option>
                                <option>25</option>
                                <option>26</option>
                                <option>27</option>
                                <option>28</option>
                                <option>29</option>
                                <option>30</option>
                                <option>31</option>
                            </select><br/>
                            Result Group by?
                            <input type="checkbox" id="ck7" name="brand" value="yes" onclick="changeValue(this)"/>Brand
                            <input type="checkbox" id="ck8" name="category" value="yes" onclick="changeValue(this)"/>Category
                            <input type="checkbox" id="ck9" name="product" value="yes" onclick="changeValue(this)"/>Product
                            <input type="submit" name="s3" value="submit"/>
                        </fieldset>
                    </form>

                    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">

                        <fieldset class="manas-sales" id="fd3">
                            <legend>Product</legend>
                            <select name="product">
                                <option>R011    REVLON AGE DEFYING Foundation</option>
                                <option>R012    REVLON COLORSTAY Foundation</option>
                                <option>R013    REVLON PHOTOREADY Foundation</option>
                                <option>L011    Loreal Magic Nude Liquid Foundation</option>
                                <option>L012    Loreal True Match Foundation</option>
                                <option>R021    REVLON COLORSTAY LIP Stick</option>
                                <option>R022    REVLON SUPER LUSTROUS LIPSTIC</option>
                                <option>R023    REVLON MOON DROPS LIPSTICK</option>
                                <option>L021    Loreal Colour Riche Lipstick</option>
                                <option>L022    Loreal Colour Caresse Lipstick</option>
                                <option>L023    Loreal Extraordinaire Lipstick</option>
                            </select>
                            Year
                            <select name="year4">
                                <option>2013</option>
                                <option>2014</option>
                            </select>
                            Month
                            <select name="month4">
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
                            <input type="submit" name="s4" value="submit"/>
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

                    $storeid=$_SESSION["storemanager"];                    

                    if ($_POST['s1']) {
                        
                    $year=$_POST['year'];
                    $month=$_POST['month'];
                    if(!isset($_POST['brand'])){
                    	        if(!isset($_POST['category'])){
                    	            if(!isset($_POST['product'])){
                             	        $sql1=mysql_query("SELECT year, count(*) as number_of_order,sum(total) as amount_of_sale
                             	        from order_total ot, salesperson s
                             	        where s.storeid='$storeid' and
                             	        s.sid = ot.sid and
                             	        year = '$year'");
                                        echo "<table class='cus-result-table'>
                                                <tr>
                                                <th>year</th>
                                                <th>number_of_order</th>
                                                <th>amount_of_sale</th>
     
                                                </tr>
                                                ";   
                             	    }else{
                                 	    $sql1=mysql_query("SELECT year, p.pid, pname,sum(sub_total) as amount_of_sale
                            	        from order_detail od, order_total ot, product p, salesperson s
                            	        where p.pid = od.pid and
                            	        od.orderid = ot.orderid and
                            	        s.storeid = '$storeid' and
                            	        s.sid = ot.sid and
                            	        year='$year'
                            	        group by p.pid");
                                                echo "<table class='cus-result-table'>
                                                <tr>
                                                <th>year</th>
                                                <th>pid</th>
                                                <th>pname</th>
                                                <th>amount_of_sale</th>
                                                       
                                                </tr>
                                                ";   
                             	    }
                        	    }else{
                        	        if(!isset($_POST['product'])){
                            	        $sql1=mysql_query("SELECT year, category,sum(sub_total) as amount_of_sale
                            	        from order_detail od, order_total ot, product p, salesperson s
                            	        where p.pid = od.pid and
                            	        od.orderid = ot.orderid and
                            	        s.storeid = '$storeid' and
                            	        s.sid = ot.sid and
                            	        year='$year'
                            	        group by category");
                                                echo "<table class='cus-result-table'>
                                                <tr>
                                                <th>year</th>
                                                <th>category</th>
                                                <th>amount_of_sale</th>     
                                                </tr>
                                                ";   
                        	        }else{
                        	            $sql1=mysql_query("SELECT year, category,p.pid, pname,sum(sub_total) as amount_of_sale
                            	        from order_detail od, order_total ot, product p, salesperson s
                            	        where p.pid = od.pid and
                            	        od.orderid = ot.orderid and
                            	        s.storeid = '$storeid' and
                            	        s.sid = ot.sid and
                            	        year='$year'
                            	        group by category, p.pid");   
                                                echo "<table class='cus-result-table'>
                                                <tr>
                                                <th>year</th>
                                                <th>category</th>
                                                <th>pid</th>
                                                <th>pname</th>
                                                <th>amount_of_sale</th>     
                                                </tr>
                                                ";                    

                        	        }
                    	        }
                    }else{
                                if(!isset($_POST['category'])){
                                    if(!isset($_POST['product'])){
                                    $sql1=mysql_query("SELECT year, brand,sum(sub_total) as amount_of_sale
                           	        from order_detail od, order_total ot, product p, salesperson s
                           	        where p.pid = od.pid and
                           	        od.orderid = ot.orderid and
                           	        s.storeid = '$storeid' and
                           	        s.sid = ot.sid and
                           	        year='$year'
                                    group by brand");
                                               echo "<table class='cus-result-table'>
                                               <tr>
                                               <th>year</th>
                                               <th>brand</th>
                                               <th>amount_of_sale</th>
                                                   
                                                     
                                               </tr>
                                               ";   
                                    }else{
                                    $sql1=mysql_query("SELECT year, brand,p.pid, pname,sum(sub_total) as amount_of_sale
                           	        from order_detail od, order_total ot, product p, salesperson s
                           	        where p.pid = od.pid and
                           	        od.orderid = ot.orderid and
                           	        s.storeid = '$storeid' and
                           	        s.sid = ot.sid and
                           	        year='$year'
                           	        group by brand, p.pid");
                                               echo "<table class='cus-result-table'>
                                               <tr>
                                               <th>year</th>
                                               <th>brand</th>
                                               <th>pid</th>
                                               <th>pname</th>
                                               <th>amount_of_sale</th>        
     
                                               </tr>
                                               ";   
                                    }                            

                                }else{
                                    if(!isset($_POST['product'])){                            

                                    	$sql1=mysql_query("SELECT year, brand, category, sum(sub_total) as amount_of_sale
                            	        from order_detail od, order_total ot, product p, salesperson s
                            	        where p.pid = od.pid and
                            	        od.orderid = ot.orderid and
                            	        s.storeid = '$storeid' and
                            	        s.sid = ot.sid and
                            	        year='$year'
                            	        group by brand, category");
                                               echo "<table class='cus-result-table'>
                                               <tr>
                                               <th>year</th>
                                               <th>brand</th>
                                               <th>category</th>
                                               <th>amount_of_sale</th>
    
                                               </tr>
                                               ";   
                                    }else{
                                    $sql1=mysql_query("SELECT year,brand,category, p.pid, pname,sum(sub_total) as amount_of_sale
                           	        from order_detail od, order_total ot, product p, salesperson s
                           	        where p.pid = od.pid and
                           	        od.orderid = ot.orderid and
                           	        s.storeid = '$storeid' and
                           	        s.sid = ot.sid and
                           	        year='$year'
                           	        group by brand, category, p.pid");  
                                               echo "<table class='cus-result-table'>
                                               <tr>
                                               <th>year</th>
                                               <th>brand</th>
                                               <th>category</th>
                                               <th>pid</th>
                                               <th>pname</th>
                                               <th>amount_of_sale</th>
       
                                               </tr>
                                               ";                     

                        	        }                    

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
                    }                    
                    

                    if ($_POST['s2']) {
                        
                    $year2=$_POST['year2'];
                    $month21=$_POST['month21'];
                    $month22=$_POST['month22'];

                    if($_POST['month22']=="-"){
                    	    if(!isset($_POST['brand'])){
                    	        if(!isset($_POST['category'])){
                    	            if(!isset($_POST['product'])){
                        	            $sql2=  mysql_query("SELECT year, month, count(*) as number_of_order, sum(total) as amount_of_sale
                            	        from order_total ot, salesperson s
                            	        where s.storeid='$storeid' and  
                            	        s.sid = ot.sid and
                            	        year = '$year2' and
                            	        month ='$month21'");
                                               echo "<table class='cus-result-table'>
                                               <tr>
                                               <th>year</th>
                                               <th>month</th>
                                               <th>number_of_order</th>
                                               
                                               <th>amount_of_sale</th>
       
                                               </tr>
                                               ";       
        
                            	    }else{
                            	        $sql2=  mysql_query("SELECT year,month, p.pid, pname,sum(sub_total) as amount_of_sale
                            	        from order_detail od, order_total ot, product p, salesperson s
                            	        where p.pid = od.pid and
                            	        od.orderid = ot.orderid and
                            	        s.storeid = '$storeid' and
                            	        s.sid = ot.sid and
                            	        year='$year2' and
                            	        month ='$month21'
                            	        group by p.pid");
                                                echo "<table class='cus-result-table'>
                                                <tr>
                                                <th>year</th>
                                                <th>month</th>
                                                <th>pid</th>
                                                <th>pname</th>
                                                <th>amount_of_sale</th>
    
                                                </tr>
                                                ";    
                            	    }                    

                    	        }else{
                    	            if(!isset($_POST['product'])){
                    	                $sql2=  mysql_query("SELECT year, month, category, sum(sub_total) as amount_of_sale
                            	        from order_detail od, order_total ot, product p, salesperson s
                            	        where p.pid = od.pid and
                            	        od.orderid = ot.orderid and
                            	        s.storeid = '$storeid' and
                            	        s.sid = ot.sid and
                            	        year='$year2' and
                            	        month = '$month21'
                            	        group by category");
                                                echo "<table class='cus-result-table'>
                                                <tr>
                                                <th>year</th>
                                                <th>month</th>
                                                <th>category</th>
                                              
                                                <th>amount_of_sale</th>
   
                                                </tr>
                                                ";    
                    	            }else{
                    	                $sql2=  mysql_query("SELECT year,month, p.pid, pname,sum(sub_total) as amount_of_sale
                            	        from order_detail od, order_total ot, product p, salesperson s
                            	        where p.pid = od.pid and
                            	        od.orderid = ot.orderid and
                            	        s.storeid = '$storeid' and
                            	        s.sid = ot.sid and
                            	        year='$year2' and
                            	        month ='$month21'
                            	        group by p.pid");
                                                echo "<table class='cus-result-table'>
                                                <tr>
                                                <th>year</th>
                                                <th>month</th>
                                                <th>pid</th>
                                                <th>pname</th>
                                                <th>amount_of_sale</th>
                                                    
                                                      
                                                </tr>
                                                ";    
                    	            }
                    	        }
                    	    }else{
                    	        if(!isset($_POST['category'])){
                    	            if(!isset($_POST['product'])){
                    	                $sql2=  mysql_query("SELECT year, month, brand,sum(sub_total) as amount_of_sale
                            	        from order_detail od, order_total ot, product p, salesperson s
                            	        where p.pid = od.pid and
                            	        od.orderid = ot.orderid and
                            	        s.storeid = '$storeid' and
                            	        s.sid = ot.sid and
                            	        year='$year2' and
                            	        month = '$month21'
                            	        group by brand");  
                                                echo "<table class='cus-result-table'>
                                                <tr>
                                                <th>year</th>
                                                <th>month</th>
                                                <th>brand</th>
                                                <th>amount_of_sale</th>
    
                                                </tr>
                                                ";                      

                    	            }else{
                    	                $sql2=  mysql_query("SELECT year,month, p.pid, pname,sum(sub_total) as amount_of_sale
                            	        from order_detail od, order_total ot, product p, salesperson s
                            	        where p.pid = od.pid and
                            	        od.orderid = ot.orderid and
                            	        s.storeid = '$storeid' and
                            	        s.sid = ot.sid and
                            	        year='$year2' and
                            	        month ='$month21'
                            	        group by p.pid");
                                                echo "<table class='cus-result-table'>
                                                <tr>
                                                <th>year</th>
                                                <th>month</th>
                                                <th>pid</th>
                                                <th>pname</th>
                                                <th>amount_of_sale</th>     
                                                </tr>
                                                ";    
                    	            }                    

                    	        }else{
                    	           if(!isset($_POST['product'])){
                    	                $sql2=  mysql_query("SELECT year, month, brand, category, sum(sub_total) as amount_of_sale
                             	        from order_detail od, order_total ot, product p, salesperson s
                             	        where p.pid = od.pid and
                             	        od.orderid = ot.orderid and
                             	        s.storeid = '$storeid' and
                             	        s.sid = ot.sid and
                             	        year='$year2' and
                             	        month ='$month21'
                             	        group by brand, category");  
                                                echo "<table class='cus-result-table'>
                                                <tr>
                                                <th>year</th>
                                                <th>month</th>
                                                <th>brand</th>
                                                <th>category</th>
                                                <th>amount_of_sale</th>       
                                                </tr>
                                                ";                      

                    	           }else{
                    	                $sql2=  mysql_query("SELECT year,month, p.pid, pname,sum(sub_total) as amount_of_sale
                            	        from order_detail od, order_total ot, product p, salesperson s
                            	        where p.pid = od.pid and
                            	        od.orderid = ot.orderid and
                            	        s.storeid = '$storeid' and
                            	        s.sid = ot.sid and
                            	        year='$year2' and
                            	        month ='$month21'
                            	        group by p.pid");
                                                echo "<table class='cus-result-table'>
                                                <tr>
                                                <th>year</th>
                                                <th>month</th>
                                                <th>pid</th>
                                                <th>pname</th>
                                                <th>amount_of_sale</th>
   
                                                </tr>
                                                ";    
                    	           }
                    	        }
                    	    }
                    	}else{
                    	    if(!isset($_POST['brand'])){
                    	        if(!isset($_POST['category'])){
                    	            if(!isset($_POST['product'])){
                    	                $sql2=  mysql_query("SELECT year, count(*) as number_of_order,sum(total) as amount_of_sale
                            	        from order_total ot, salesperson s
                            	        where s.storeid='$storeid' and  
                            	        s.sid = ot.sid and
                            	        year = '$year2' and
                            	        month between '$month21' and '$month22'");  
                                                echo "<table class='cus-result-table'>
                                                <tr>
                                                <th>year</th>
                                                <th>number_of_order</th>
                                                <th>amount_of_sale</th>   
                                                </tr>
                                                ";                      

                    	            }else{
                    	                $sql2=  mysql_query("SELECT year, p.pid, pname,sum(sub_total) as amount_of_sale
                            	        from order_detail od, order_total ot, product p, salesperson s
                            	        where p.pid = od.pid and
                            	        od.orderid = ot.orderid and
                            	        s.storeid = '$storeid' and
                            	        s.sid = ot.sid and
                            	        year='$year2' and
                            	        month between '$month21' and '$month22'
                            	        group by p.pid");            
                                                echo "<table class='cus-result-table'>
                                                <tr>
                                                <th>year</th>
                                                <th>pid</th>
                                                <th>pname</th>
                                                <th>amount_of_sale</th>      
                                                </tr>
                                                ";            

                    	            }
                    	        }else{
                    	            if(!isset($_POST['product'])){
                    	                $sql2=  mysql_query("SELECT year,category,sum(sub_total) as amount_of_sale
                            	        from order_detail od, order_total ot, product p, salesperson s
                            	        where p.pid = od.pid and
                            	        od.orderid = ot.orderid and
                            	        s.storeid = '$storeid' and
                            	        s.sid = ot.sid and
                            	        year='$year2' and
                            	        month between '$month21' and '$month22'
                            	        group by category");
                                                echo "<table class='cus-result-table'>
                                                <tr>
                                                <th>year</th>
                                                <th>category</th>
                                                
                                                <th>amount_of_sale</th>
                                                    
                                                      
                                                </tr>
                                                ";    
                    	            }else{
                    	                $sql2=  mysql_query("SELECT year,category, p.pid, pname,sum(sub_total) as amount_of_sale
                            	        from order_detail od, order_total ot, product p, salesperson s
                            	        where p.pid = od.pid and
                            	        od.orderid = ot.orderid and
                            	        s.storeid = '$storeid' and
                            	        s.sid = ot.sid and
                            	        year='$year2' and
                            	        month between '$month21' and '$month22'
                            	        group by category,p.pid");
                                                echo "<table class='cus-result-table'>
                                                <tr>
                                                <th>year</th>
                                                <th>category</th>
                                                <th>pid</th>
                                                <th>pname</th>
                                                <th>amount_of_sale</th>     
                                                </tr>
                                                ";    
                    	            }
                    	        }

                    	    }else{
                    	        if(!isset($_POST['category'])){
                    	            if(!isset($_POST['product'])){
                    	                $sql2=  mysql_query("SELECT year, brand,sum(sub_total) as amount_of_sale
                            	        from order_detail od, order_total ot, product p, salesperson s
                            	        where p.pid = od.pid and
                            	        od.orderid = ot.orderid and
                            	        s.storeid = '$storeid' and
                            	        s.sid = ot.sid and
                            	        year='$year2' and
                            	        month between '$month21' and '$month22'
                            	        group by brand");  
                                                echo "<table class='cus-result-table'>
                                                <tr>
                                                <th>year</th>
                                                <th>brand</th>
                                                
                                                <th>amount_of_sale</th>
                                                    
                                                      
                                                </tr>
                                                ";                      

                    	            }else{
                    	                $sql2=  mysql_query("SELECT year,brand, p.pid, pname,sum(sub_total) as amount_of_sale
                            	        from order_detail od, order_total ot, product p, salesperson s
                            	        where p.pid = od.pid and
                            	        od.orderid = ot.orderid and
                            	        s.storeid = '$storeid' and
                            	        s.sid = ot.sid and
                            	        year='$year2' and
                            	        month between '$month21' and '$month22'
                            	        group by brand,p.pid");   
                                                echo "<table class='cus-result-table'>
                                                <tr>
                                                <th>year</th>
                                                <th>brand</th>
                                                <th>pid</th>
                                                <th>pname</th>
                                                <th>amount_of_sale</th>     
                                                </tr>
                                                ";                     

                    	            }
                    	        }else{
                    	            if(!isset($_POST['product'])){
                    	               	$sql2=  mysql_query("SELECT year, brand, category, sum(sub_total) as amount_of_sale
                             	        from order_detail od, order_total ot, product p, salesperson s
                             	        where p.pid = od.pid and
                             	        od.orderid = ot.orderid and
                             	        s.storeid = '$storeid' and
                             	        s.sid = ot.sid and
                             	        year='$year2' and
                             	        month between '$month21' and '$month22'
                             	        group by brand, category");   
                                                echo "<table class='cus-result-table'>
                                                <tr>
                                                <th>year</th>
                                                <th>brand</th>
                                                <th>category</th>
                                                <th>amount_of_sale</th>
      
                                                </tr>
                                                ";                     

                    	            }else{
                                          
                    	                $sql2=  mysql_query("SELECT year,brand,category, p.pid, pname,sum(sub_total) as amount_of_sale
                            	        from order_detail od, order_total ot, product p, salesperson s
                            	        where p.pid = od.pid and
                            	        od.orderid = ot.orderid and
                            	        s.storeid = '$storeid' and
                            	        s.sid = ot.sid and
                            	        year='$year2' and
                            	        month between '$month21' and '$month22'
                            	        group by brand,category,p.pid");      
                                                echo "<table class='cus-result-table'>
                                                <tr>
                                                <th>year</th>
                                                <th>brand</th>
                                                <th>category</th>
                                                <th>pid</th>
                                                <th>pname</th>
                                                <th>amount_of_sale</th>     
                                                </tr>
                                                ";                  

                    	            }
                    	        }
                    	    }
                    	}

                       
                    while($row=mysql_fetch_row($sql2))
                    {
                        echo"<tr>";
                        foreach($row as $cell)
                            echo "<td>$cell</td>";
                        echo "</tr>";
                        
                    }
                    echo "</table>";
                    }                    



                    if ($_POST['s3']) {
                        
                    $year3=$_POST['year3'];
                    $month3=$_POST['month3'];
                    $day=$_POST['day'];
                    if(!isset($_POST['brand'])){
                    	        if(!isset($_POST['category'])){
                    	            if(!isset($_POST['product'])){
                             	        $sql3=  mysql_query("select year, month, day, count(*) as number_of_order,sum(total) as amount_of_sale
                             	        from order_total ot, salesperson s
                             	        where s.storeid='$storeid' and  
                             	        s.sid = ot.sid and
                             	        year = '$year3' and
                             	        month = '$month3'  and
                             	        day = '$day'");     
                                                echo "<table class='cus-result-table'>
                                                <tr>
                                                <th>year</th>
                                                <th>month</th>
                                                <th>day</th>
                                                <th>number_of_order</th>

                                                <th>amount_of_sale</th>
                                                    
                                                      
                                                </tr>
                                                ";                  

                             	    }else{
                                 	    $sql3=  mysql_query("select year,month,day, p.pid, pname,sum(sub_total) as amount_of_sale
                            	        from order_detail od, order_total ot, product p, salesperson s
                            	        where p.pid = od.pid and
                            	        od.orderid = ot.orderid and
                            	        s.storeid = '$storeid' and
                            	        s.sid = ot.sid and
                            	        year='$year3'  and
                            	        month = '$month3'  and
                             	        day = '$day'
                            	        group by p.pid");
                                                echo "<table class='cus-result-table'>
                                                <tr>
                                                <th>year</th>
                                                <th>month</th>
                                                <th>day</th>
                                                <th>pid</th>
                                                <th>pname</th>
                                                <th>amount_of_sale</th> 
                                                </tr>
                                                ";   
                             	    }
                        	    }else{
                        	        if(!isset($_POST['product'])){
                            	        $sql3=  mysql_query("select year,month,day,category,sum(sub_total) as amount_of_sale
                            	        from order_detail od, order_total ot, product p, salesperson s
                            	        where p.pid = od.pid and
                            	        od.orderid = ot.orderid and
                            	        s.storeid = '$storeid' and
                            	        s.sid = ot.sid and
                            	        year='$year3'  and
                            	        month = '$month3'  and
                             	        day = '$day'
                            	        group by category");
                                                echo "<table class='cus-result-table'>
                                                <tr>
                                                <th>year</th>
                                                <th>month</th>
                                                <th>day</th>
                                                <th>category</th>

                                                <th>amount_of_sale</th>
                                                    
                                                      
                                                </tr>
                                                ";  
                        	        }else{
                        	            $sql3=  mysql_query("select year, p.pid, pname,sum(sub_total) as amount_of_sale
                            	        from order_detail od, order_total ot, product p, salesperson s
                            	        where p.pid = od.pid and
                            	        od.orderid = ot.orderid and
                            	        s.storeid = '$storeid' and
                            	        s.sid = ot.sid and
                            	        year='$year3'  and
                            	        month = '$month3'  and
                             	        day = '$day'
                            	        group by p.pid");      
                                                echo "<table class='cus-result-table'>
                                                <tr>
                                                <th>year</th>
                                                <th>pid</th>
                                                <th>pname</th>
                                                <th>amount_of_sale</th>
                                                    
                                                      
                                                </tr>
                                                ";                 

                        	        }
                    	        }
                    	    }else{
                    	        if(!isset($_POST['category'])){
                    	            if(!isset($_POST['product'])){
                        	            $sql3=  mysql_query("select year, month,day, brand,sum(sub_total) as amount_of_sale
                            	        from order_detail od, order_total ot, product p, salesperson s
                            	        where p.pid = od.pid and
                            	        od.orderid = ot.orderid and
                            	        s.storeid = '$storeid' and
                            	        s.sid = ot.sid and
                            	        year='$year3'  and
                            	        month = '$month3'  and
                             	        day = '$day'
                            	        group by brand");
                                                                                        echo "<table class='cus-result-table'>
                                                <tr>
                                                <th>year</th>
                                                <th>month</th>
                                                <th>day</th>
                                                <th>brand</th>

                                                <th>amount_of_sale</th>
                                                    
                                                      
                                                </tr>
                                                ";   
                        	        }else{
                        	            $sql3=  mysql_query("select year, month,day,p.pid, pname,sum(sub_total) as amount_of_sale
                            	        from order_detail od, order_total ot, product p, salesperson s
                            	        where p.pid = od.pid and
                            	        od.orderid = ot.orderid and
                            	        s.storeid = '$storeid' and
                            	        s.sid = ot.sid and
                            	        year='$year3'  and
                            	        month = '$month3'  and
                             	        day = '$day'
                            	        group by p.pid");
                                                                                        echo "<table class='cus-result-table'>
                                                <tr>
                                                <th>year</th>
                                                <th>month</th>
                                                <th>day</th>
                                                <th>pid</th>
                                                <th>pname</th>
                                                <th>amount_of_sale</th>
                                                    
                                                      
                                                </tr>
                                                ";   
                        	        }                    

                    	        }else{
                    	            if(!isset($_POST['product'])){                    

                         	           	$sql3=  mysql_query("select year, month,day,brand, category, sum(sub_total) as amount_of_sale
                             	        from order_detail od, order_total ot, product p, salesperson s
                             	        where p.pid = od.pid and
                             	        od.orderid = ot.orderid and
                             	        s.storeid = '$storeid' and
                             	        s.sid = ot.sid and
                            	        year='$year3'  and
                            	        month = '$month3  and
                             	        day = '$day'
                             	        group by brand, category");
                                                                                        echo "<table class='cus-result-table'>
                                                <tr>
                                                <th>year</th>
                                                <th>month</th>
                                                <th>day</th>
                                                <th>category</th>

                                                <th>amount_of_sale</th>
                                                    
                                                      
                                                </tr>
                                                ";   
                        	        }else{
                        	            $sql3=  mysql_query("select year,month,day, p.pid, pname,sum(sub_total) as amount_of_sale
                            	        from order_detail od, order_total ot, product p, salesperson s
                            	        where p.pid = od.pid and
                            	        od.orderid = ot.orderid and
                            	        s.storeid = '$storeid' and
                            	        s.sid = ot.sid and
                            	        year='$year3'  and
                            	        month = '$month3'  and
                             	        day = '$day'
                            	        group by p.pid");   
                                                                                        echo "<table class='cus-result-table'>
                                                <tr>
                                                <th>year</th>
                                                <th>month</th>
                                                <th>day</th>
                                                <th>pid</th>
                                                <th>pname</th>
                                                <th>amount_of_sale</th>
                                                    
                                                      
                                                </tr>
                                                ";                    

                        	        }                    

                    	        }
                    	   }
                      

                       
                    while($row=mysql_fetch_row($sql3))
                    {
                        echo"<tr>";
                        foreach($row as $cell)
                            echo "<td>$cell</td>";
                        echo "</tr>";
                        
                    }
                    echo "</table>";
                    }                    

                    if ($_POST['s4']) {
                    $pro=$_POST['product'];
                    $product=  substr($pro, 0, 4);
                    $year4=$_POST['year4'];
                    $month4=$_POST['month4'];
  
                    if($month4==='-'){
                        $sql4=mysql_query("select year, p.pid, pname,sum(sub_total) as amount_of_sale
                            	        from order_detail od, order_total ot, product p, salesperson s
                            	        where p.pid = od.pid and
                            	        od.orderid = ot.orderid and
                            	        s.storeid = '$storeid' and
                            	        s.sid = ot.sid and
                            	        year='$year4'  and
                             	        p.pid = '$product'");   
                                                echo "<table class='cus-result-table'>
                                                <tr>
                                                <th>year</th>
                                                
                                                <th>pid</th>
                                                <th>pname</th>
                                                <th>amount_of_sale</th>   
                                                </tr>
                                                ";                    

                    }
                    else{
                        $sql4=mysql_query("select year,month, p.pid, pname,sum(sub_total) as amount_of_sale
                            	        from order_detail od, order_total ot, product p, salesperson s
                            	        where p.pid = od.pid and
                            	        od.orderid = ot.orderid and
                            	        s.storeid = '$storeid' and
                            	        s.sid = ot.sid and
                            	        year='$year4'  and
                                        month='$month4' and
                             	        p.pid = '$product'");
                                                echo "<table class='cus-result-table'>
                                                <tr>
                                                <th>year</th>
                                                <th>month</th>
                                                <th>pid</th>
                                                <th>pname</th>
                                                <th>amount_of_sale</th>
                                                    
                                                      
                                                </tr>
                                                ";   
                        
                    }
                                            
                    
                    
                    

                    while($row=mysql_fetch_row($sql4))
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

        </div>

    <script src="../js/dbms.js"></script>
    </body>
</html>