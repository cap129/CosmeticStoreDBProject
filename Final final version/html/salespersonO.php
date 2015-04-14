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
                <h2><strong>Online Database System</strong></h2>
                
                <nav class="codrops-demos">
                    <!--可以编一个logout-->
                    <!--希望可以在salesperson登录后显示其ID-->
                    <a class="current-demo" href="">Salesperson</a>
                </nav>

                <div class="support-note">
                    <span class="note-ie">Sorry, only modern browsers.</span>
                </div>
                
            </header>
            <?php
            session_start();
            date_default_timezone_set('America/New_York');//set the timezone
            $now=date("Y-m-d H:i:s");//returns current date
            $year=date("Y");
            $month=date("m");
            $day=date("d");
            $sid=$_SESSION["salesperson"];            

            ?>
      
            <div class="content">
                
                <div class="menuhead">
                    <div class="menubar">
                        <ul class="menu">
                            <li><a href="salespersonC.php">Customer</a></li>
                            <li class="current"><a href="salespersonO.php">Order</a></li>
                            <li><a href="salespersonS.php">Search</a></li>
                        </ul>
                    </div>
                </div>
            

                <div class="site_content">
                    
                    <div class="h3div"><h3>Order Detail</h3></div>
                    
                    <div class="middlediv">

                        <div class="tablediv">
                            
                            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">                       
                                <table class="headtable">
                                    <tr>
                                      <td>Date:<?php echo $now;?></td>
                                      <td>Salesperson:<?php echo $_SESSION["salesperson"];?></td>
                                      <!--这个set input 其实是把order_total 数据插入进去，留下total 字段空白-->
                                      <td>Customer:&nbsp;&nbsp;<input type="text" name="cid" placeholder="CID"/>&nbsp;&nbsp;&nbsp;</td>
                                    </tr>
                                </table>
                            
                                <table class="product-table">
                                    <tr>
                                        <th>Product List</th>
                                        <th>Quantity</th>
                                    </tr>
                                    <tr>
                                        <td class="td-left"><input type="checkbox" name="R011" value=0 />R011    REVLON AGE DEFYING Foundation</td>
                                        <td><input type="text" name="R011Q" placeholder="Quantity" size="20"/></td>
                                    </tr>                                    
                                    <tr>
                                        <td class="td-left"><input type="checkbox" name="R012" value=0 />R012    REVLON COLORSTAY Foundation</td>
                                        <td><input type="text" name="R012Q" placeholder="Quantity" size="20"/></td>
                                    </tr>
                                    <tr>
                                        <td class="td-left"><input type="checkbox" name="R013" value=0 />R013    REVLON PHOTOREADY Foundation</td>
                                        <td><input type="text" name="R013Q" placeholder="Quantity" size="20"/></td>
                                    </tr>
                                    <tr>
                                        <td class="td-left"><input type="checkbox" name="L011" value=0 />L011    Loreal Magic Nude Liquid Foundation</td>
                                        <td><input type="text" name="LO11Q" placeholder="Quantity" size="20"/></td>
                                    </tr>
                                    <tr>
                                        <td class="td-left"><input type="checkbox" name="L012" value=0 />L012    Loreal True Match Foundation</td>
                                        <td><input type="text" name="L012Q" placeholder="Quantity" size="20"/></td>
                                    </tr>
                                    <tr>
                                        <td class="td-left"><input type="checkbox" name="R021" value=0 />R021    REVLON COLORSTAY LIP Stick</td>
                                        <td><input type="text" name="R021Q" placeholder="Quantity" size="20"/></td>
                                    </tr>
                                    <tr>
                                        <td class="td-left"><input type="checkbox" name="R022" value=0 />R022    REVLON SUPER LUSTROUS LIPSTIC</td>
                                        <td><input type="text" name="R022Q" placeholder="Quantity" size="20"/></td>
                                    </tr>
                                    <tr>
                                        <td class="td-left"><input type="checkbox" name="R023" value=0 />R023    REVLON MOON DROPS LIPSTICK</td>
                                        <td><input type="text" name="R023Q" placeholder="Quantity" size="20"/></td>
                                    </tr>
                                    <tr>
                                        <td class="td-left"><input type="checkbox" name="L021" value=0 />L021    Loreal Colour Riche Lipstick</td>
                                        <td><input type="text" name="L021Q" placeholder="Quantity" size="20"/></td>
                                    </tr>
                                    <tr>
                                        <td class="td-left"><input type="checkbox" name="L022" value=0 />L022    Loreal Colour Caresse Lipstick</td>
                                        <td><input type="text" name="L022Q" placeholder="Quantity" size="20"/></td>
                                    </tr>
                                    <tr>
                                        <td class="td-left"><input type="checkbox" name="L023" value=0 />L023    Loreal Extraordinaire Lipstick</td>
                                        <td><input type="text" name="L023Q" placeholder="Quantity" size="20"/></td>
                                    </tr>

                                </table>
                                <input type="submit" name="submit" value="Submit" alt="submit"/>

                            </form> 
                        </div>
                    </div>


                    <div class="clear"></div>

                    <div class= "resultpart">
                    <?php 
                    
                    $database='DBMS';
                    $password='626391';
                    $username='can';

                    $con=mysql_connect('localhost', $username, $password) or die("error");
                    @mysql_select_db($database, $con) or die("un ");

                    $cid=$_POST['cid'];
                    $orderid=uniqid();
                            
                    if ($_POST['submit']) {

                     if($cid==''){
                            echo "The cid can't be empty!";
                        }
                        else{
                    $query6=mysql_query("INSERT INTO Order_total(orderid,cid,sid,day,month,year) VALUES ('$orderid','$cid','$sid','$day','$month','$year')") or die("Fail to insert;Cutomer not valid!");
}


                    if(isset($_POST['R011'])){
                        $pid="R011";
                        $quantity=$_POST['R011Q'];
                        if($quantity==''){
                            echo "The quantity can't be empty!";
                        }
                        else{
                         $query1=mysql_query("SELECT * FROM Product WHERE pid='$pid'") or die("null");
                        $row=mysql_fetch_array($query1);
                        //$pid=$row["pid"];
                        //$description=$row["pname"];
                        $inventory=(int)$row["inventory"];
                        /*$price=$row["price"];*/
                        $subtotal= 10*$quantity;
                        if($inventory>=$quantity) 
                        {
                        $query2=mysql_query("INSERT INTO  Order_detail VALUES ('$pid','$quantity', '$subtotal', '$orderid')") or die("Fail to ");
                        //改掉了，为什么不可以！！！！


                        $query3=mysql_query("UPDATE Product SET inventory=inventory-'$quantity' WHERE pid='$pid'");
                        }
                        else {
                           echo "Not enough products"  ;
                        }
                    }
                }

                    if(isset($_POST['R023'])){
                        $pid="R023";
                        $quantity=$_POST['R023Q'];
                         if($quantity==''){
                            echo "The quantity can't be empty!";
                        }
                        else{
                        $query1=mysql_query("SELECT * FROM Product WHERE pid='$pid'") or die("null");
                        $row=mysql_fetch_array($query1);
                        //$pid=$row["pid"];
                        //$description=$row["pname"];
                        $inventory=(int)$row["inventory"];
                        /*$price=$row["price"];*/
                        $subtotal= 10*$quantity;
                        if($inventory>=$quantity) 
                        {
                        $query2=mysql_query("INSERT INTO  Order_detail VALUES ('$pid','$quantity', '$subtotal', '$orderid')") or die("Fail to ");

                        $query3=mysql_query("UPDATE Product SET inventory=inventory-'$quantity' WHERE pid='$pid'");
                        }
                        else {
                           echo "Not enough products"  ;
                        }
                    }
                    }

                    if(isset($_POST['L021'])){
                        $pid="L021";
                        $quantity=$_POST['L021Q'];
                         if($quantity==''){
                            echo "The quantity can't be empty!";
                        }
                        else{
                        $query1=mysql_query("SELECT * FROM Product WHERE pid='$pid'") or die("null");
                        $row=mysql_fetch_array($query1);
                        //$pid=$row["pid"];
                        //$description=$row["pname"];
                        $inventory=(int)$row["inventory"];
                        /*$price=$row["price"];*/
                        $subtotal= 10*$quantity;
                        if($inventory>=$quantity) 
                        {
                        $query2=mysql_query("INSERT INTO Order_detail values ('$pid','$quantity','$subtotal','$orderid')") or die("Fail to insert;Cutomer not valid!");
                        $query3=mysql_query("UPDATE Product SET inventory=inventory-'$quantity' WHERE pid='$pid'");
                        }
                        else {
                          echo "Not enough products"  ;
                        }}
                    }

                    if(isset($_POST['L022'])){
                        $pid="L022";
                        $quantity=$_POST['L022Q'];
                         if($quantity==''){
                            echo "The quantity can't be empty!";
                        }
                        else{
                        $query1=mysql_query("SELECT * FROM Product WHERE pid='$pid'") or die("null");
                        $row=mysql_fetch_array($query1);
                        //$pid=$row["pid"];
                        //$description=$row["pname"];
                        $inventory=(int)$row["inventory"];
                        /*$price=$row["price"];*/
                        $subtotal= 10*$quantity;
                        if($inventory>=$quantity)  
                        {
                        $query2=mysql_query("INSERT INTO Order_detail values ('$pid','$quantity','$subtotal','$orderid')") or die("Fail to insert;Cutomer not valid!");
                        $query3=mysql_query("UPDATE Product SET inventory=inventory-'$quantity' WHERE pid='$pid'");
                        }
                        else {
                           echo "Not enough products"  ;
                        }}
                    }
                    
                    if(isset($_POST['L023'])){
                        $pid="L023";
                        $quantity=$_POST['L023Q'];
                         if($quantity==''){
                            echo "The quantity can't be empty!";
                        }
                        else{
                        $query1=mysql_query("SELECT * FROM Product WHERE pid='$pid'") or die("null");
                        $row=mysql_fetch_array($query1);
                        //$pid=$row["pid"];
                        //$description=$row["pname"];
                        $inventory=(int)$row["inventory"];
                        /*$price=$row["price"];*/
                        $subtotal= 10*$quantity;
                        if($inventory>=$quantity)  
                        {
                        $query2=mysql_query("INSERT INTO Order_detail values ('$pid','$quantity','$subtotal','$orderid')") or die("Fail to insert;Cutomer not valid!");
                        $query3=mysql_query("UPDATE Product SET inventory=inventory-'$quantity' WHERE pid='$pid'");
                         }
                         else {
                           echo "Not enough products"  ;
                         }}
                    }
                    
                    if(isset($_POST['R012'])){
                        $pid="R012";
                        $quantity=$_POST['R012Q'];
                         if($quantity==''){
                            echo "The quantity can't be empty!";
                        }
                        else{
                        $query1=mysql_query("SELECT * FROM Product WHERE pid='$pid'") or die("null");
                        $row=mysql_fetch_array($query1);
                        //$pid=$row["pid"];
                        //$description=$row["pname"];
                        $inventory=(int)$row["inventory"];
                        /*$price=$row["price"];*/
                        $subtotal= 10*$quantity;
                        if($inventory>=$quantity)  
                        {
                        $query2=mysql_query("INSERT INTO Order_detail values ('$pid','$quantity','$subtotal','$orderid')") or die("Fail to insert;Cutomer not valid!");
                        $query3=mysql_query("UPDATE Product SET inventory=inventory-'$quantity' WHERE pid='$pid'");
                         }
                         else {
                           echo "Not enough products"  ;
                         }}
                    }
                    
                    if(isset($_POST['R013'])){
                        $pid="R013";
                        $quantity=$_POST['R013Q'];
                         if($quantity==''){
                            echo "The quantity can't be empty!";
                        }
                        else{
                        $query1=mysql_query("SELECT * FROM Product WHERE pid='$pid'") or die("null");
                        $row=mysql_fetch_array($query1);
                        //$pid=$row["pid"];
                        //$description=$row["pname"];
                        $inventory=(int)$row["inventory"];
                        /*$price=$row["price"];*/
                        $subtotal= 10*$quantity;
                        if($inventory>=$quantity)  
                        {
                        $query2=mysql_query("INSERT INTO Order_detail values ('$pid','$quantity','$subtotal','$orderid')") or die("Fail to insert;Cutomer not valid!");
                        $query3=mysql_query("UPDATE Product SET inventory=inventory-'$quantity' WHERE pid='$pid'");
                         }
                         else {
                           echo "Not enough products"  ;
                         }}
                    }
                    
                    if(isset($_POST['L011'])){
                        $pid="L011";
                        $quantity=$_POST['L011Q'];
                         if($quantity==''){
                            echo "The quantity can't be empty!";
                        }
                        else{
                        $query1=mysql_query("SELECT * FROM Product WHERE pid='$pid'") or die("null");
                        $row=mysql_fetch_array($query1);
                        //$pid=$row["pid"];
                        //$description=$row["pname"];
                        $inventory=(int)$row["inventory"];
                        /*$price=$row["price"];*/
                        $subtotal= 10*$quantity;
                        if($inventory>=$quantity)  
                        {
                        $query2=mysql_query("INSERT INTO Order_detail values ('$pid','$quantity','$subtotal','$orderid')") or die("Fail to insert;Cutomer not valid!");
                        $query3=mysql_query("UPDATE Product SET inventory=inventory-'$quantity' WHERE pid='$pid'");
                         }
                         else {
                           echo "Not enough products"  ;
                         }}
                    }
                    
                    if(isset($_POST['L012'])){
                        $pid="L012";
                        $quantity=$_POST['L012Q'];
                         if($quantity==''){
                            echo "The quantity can't be empty!";
                        }
                        else{
                        $query1=mysql_query("SELECT * FROM Product WHERE pid='$pid'") or die("null");
                        $row=mysql_fetch_array($query1);
                        //$pid=$row["pid"];
                        //$description=$row["pname"];
                        $inventory=(int)$row["inventory"];
                        /*$price=$row["price"];*/
                        $subtotal= 10*$quantity;
                        if($inventory>=$quantity)  
                        {
                        $query2=mysql_query("INSERT INTO Order_detail values ('$pid','$quantity','$subtotal','$orderid')") or die("Fail to insert;Cutomer not valid!");
                        $query3=mysql_query("UPDATE Product SET inventory=inventory-'$quantity' WHERE pid='$pid'");
                         }
                         else {
                           echo "Not enough products"  ;
                         }}
                    }
                    
                    if(isset($_POST['R021'])){
                        $pid="R021";
                        $quantity=$_POST['R021Q'];
                         if($quantity==''){
                            echo "The quantity can't be empty!";
                        }
                        else{
                        $query1=mysql_query("SELECT * FROM Product WHERE pid='$pid'") or die("null");
                        $row=mysql_fetch_array($query1);
                        //$pid=$row["pid"];
                        //$description=$row["pname"];
                        $inventory=(int)$row["inventory"];
                        /*$price=$row["price"];*/
                        $subtotal= 10*$quantity;
                        if($inventory>=$quantity)  
                        {
                        $query2=mysql_query("INSERT INTO Order_detail values ('$pid','$quantity','$subtotal','$orderid')") or die("Fail to insert;Cutomer not valid!");
                        $query3=mysql_query("UPDATE Product SET inventory=inventory-'$quantity' WHERE pid='$pid'"); 
                         }
                         else {
                           echo "Not enough products"  ;
                         }}
                    }
                    
                    if(isset($_POST['R022'])){
                        $pid="R022";
                        $quantity=$_POST['R022Q'];
                         if($quantity==''){
                            echo "The quantity can't be empty!";
                        }
                        else{
                        $query1=mysql_query("SELECT * FROM Product WHERE pid='$pid'") or die("null");
                        $row=mysql_fetch_array($query1);
                        //$pid=$row["pid"];
                        //$description=$row["pname"];
                        $inventory=(int)$row["inventory"];
                        /*$price=$row["price"];*/
                        $subtotal= 10*$quantity;
                        if($inventory>=$quantity)  
                        {
                        $query2=mysql_query("INSERT INTO Order_detail values ('$pid','$quantity','$subtotal','$orderid')") or die("Fail to insert;Cutomer not valid!");
                        $query3=mysql_query("UPDATE Product SET inventory=inventory-'$quantity' WHERE pid='$pid'");
                         }
                         else {
                           echo "Not enough products"  ;
                         }}
                    }
                                         
                       
                    echo "<table class='cus-result-table'>
                                <caption>Order_detail</caption>
                                <tr>
                                    <th>pid</th>
                                    <th>pname</th>
                                    <th>quantity</th>
                                    <th>price</th>
                                    <th>subtotal</th>
                                    <th>orderid</th>  
                                </tr> ";

                    $query4=mysql_query("SELECT ot.pid,pname,quantity,price, sub_total,orderid FROM Order_detail ot, Product p WHERE ot.pid = p.pid and orderid='$orderid'") or die("null");
                    //$row=mysql_fetch_array($query4);
                    while($row = mysql_fetch_row($query4))
                    {
                                            

                        echo "<tr>";
                        // $row is array... foreach( .. ) puts every element
                        // of $row to $cell variable
                        foreach ($row as $cell) {
                            echo "<td>$cell</td>";
                        }
                        echo "</tr>";                    

                    }
                    echo "</table>";

                    $query5=mysql_query("SELECT sum(sub_total) FROM Order_detail WHERE orderid='$orderid'") or die("null");
                    $result4=mysql_fetch_array($query5);
                    $total=$result4["sum(sub_total)"];

                    $query7=mysql_query("UPDATE Order_total SET total = '$total' WHERE orderid='$orderid'") or die("Fail to insert;Cutomer not valid!");
                    
                    echo "<table class='cus-result-table'>
                                <caption>Order_total</caption>
                                <tr>
                                    <th>orderid</th>
                                    <th>cid</th>
                                    <th>sid</th>
                                    <th>day</day>
                                    <th>month</th>
                                    <th>year</th>
                                    <th>total</th>
                                </tr> ";
                    $query8 = mysql_query("SELECT * FROM Order_total WHERE orderid='$orderid'") or die("null");
                    
                    $row = mysql_fetch_row($query8);
                    echo "<tr>";
                        // $row is array... foreach( .. ) puts every element
                        // of $row to $cell variable
                        foreach ($row as $cell) {
                            echo "<td>$cell</td>";
                        }
                    echo "</tr>";
                    echo "</table>";
   
                    }    
                    ?> 

                    </div>
                    <a class="back" href="mainindex.php">Back</a>
        </div>
    </div>
  </div>
   
    <script src="../js/dbms.js"></script>
    </body>
</html>