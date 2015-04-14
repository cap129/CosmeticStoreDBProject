<!DOCTYPE html>
<html lang="en">
    <head>
		<meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
		<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <title>Customer</title>
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
                    <a class="current-demo" href="customer.php">Customer</a>
                </nav>

                <div class="support-note">
                    <span class="note-ie">Sorry, only modern browsers.</span>
                </div>
                
            </header>

      
            <div class="content">
                <div class="menuhead">
                  <div class="menubar">
                    <ul class="menu">
                        <!--<li><a href="salesperson.html">Customer</a></li>
                        <li><a href="salesperson1.html">Order</a></li>-->
                        <li class="current"><a href="customer.php">Search</a></li>
                    </ul>
                  </div>
                </div>
            

                <div class="site_content">
                    <div class="h3div"><h3>Search Product You need</h3></div>
                    
                    <div class="leftpart">
                        
                        <div id="formdiv1">
                            <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">                                               
                                <p class="tip"><strong>According to Category</strong></p><br/>
                                <p class="cap">Step1: Choose Category</p>
                                  

                                <div class="selectdiv">
                                    <select id="select_ctg" onchange="changeSub()" name="ctg">
                                        <option value="makeup">Makeup</option>
                                        <option value="skincare">Skincare</option>
                                    </select>
                                </div>
                                
                                
                                <p class="cap">Step2: Choose Subcategory</p>
                                
                                <!--Subcategory: Makeup-->
                                <div class="selectdiv" id="makeup_sub">
                                    <select id="select_subctg1" name="makeup_sub">
                                        <option value="foundation">Foundation</option>
                                        <option value="lipstick">Lipstick</option>
                                        
                                    </select>
                                </div>
                            
                                <!--Subcategory: Skincare-->
                                <div class="selectdiv" id="skincare_sub">
                                    <select id="select_subctg2" name="skincare_sub">
                                        <option value="moisturizer">Moisturizer</option>
                                        
                                    </select>
                                </div>  

                               
                                <div class="inputdiv">
                                    <input type="submit" name="functionsearch" value="Search" alt="functionsearch"/>
                                </div>
                            </form>

                        </div>

                        <div id="formdiv2">
                            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
                                <p>OR</p>
                                <p class="tip"><strong>According to Brand</strong></p><br/></br>
                                <div class="selectdiv">
                                    <select name="brand">
                                        <option value="revlon">Revlon</option>
                                        <option value="loreal">Loreal</option>
                                    </select>
                                </div>        

                                
                                <div class="inputdiv">
                                    <input type="submit" name="brandsearch" value="Search" alt="brandsearch"/>
                                </div>
                            </form>  
                        </div>

                    </div>

                    <div class="rightpart">
                        <p class="tip"><strong>Input the key word of Product</strong></p><br/><br/>
                         
                        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">                    
                            <div class="selectdiv">
                                <input type="text" name="searchkey" placeholder="key word" size=20/>
                                <input type="submit" name="keysearch" value="submit" alt="keysearch"/>
                            </div>
                        </form>                 
                    
                    </div>

                    <div class="clear"></div>
                    
                    <div class= "resultpart">
                    <?php
                    $database='DBMS';
                    $password='626391';
                    $username='can';                    

                    $con=mysql_connect('localhost', $username, $password) or die("error");
                    @mysql_select_db($database, $con) or die("un ");                    
                    

                    if ($_POST['functionsearch']) {
                        $function=$_POST['ctg'];
                        if($function=="makeup")
                            $cat=$_POST['makeup_sub'];
                        else if($function=="skincare")
                            $cat=$_POST['skincare_sub'];
                        echo    "<table class ='cus-result-table'>
                                    <tr>
                                        <th>pid</th>
                                        <th>pname</th>
                                        <th>price</th>
                                        <th>brand</th>
                                        <th>category</th>
                                    </tr>";                    
                        

                        $query1=mysql_query("SELECT pid, pname, price, brand,category FROM Product WHERE Category='$cat'") or die("null");                    
                    

                        while($row=mysql_fetch_row($query1))
                        {
                            echo"<tr>";
                            foreach($row as $cell)
                                echo "<td>$cell</td>";
                            echo "</tr>";
                            
                        }
                        echo "</table>";
                    }                    
                    

                    if ($_POST['brandsearch']) {
                        $brand=$_POST['brand'];
                        echo    "<table class='cus-result-table'>
                                    <tr>
                                        <th>pid</th>
                                        <th>pname</th>
                                        <th>price</th>
                                        <th>brand</th>
                                        <th>category</th>                         
                                    </tr>";                
                        $query1=mysql_query("SELECT pid, pname, price, brand,category FROM Product WHERE brand='$brand'") or die("null");
                        while($row=mysql_fetch_row($query1))
                        {
                            echo"<tr>";
                            foreach($row as $cell)
                                echo "<td>$cell</td>";
                            echo "</tr>";
                            
                        }
                        echo "</table>";
                        }                    

                    if($_POST['keysearch']){
                        $searchkey = $_POST["searchkey"];
                        if($searchkey==''){
                            echo "Please insert a key word.";
                        }
                        else{
                        echo    "<table class='cus-result-table'>
                                    <tr>
                                        <th>pid</th>
                                        <th>pname</th>
                                        <th>price</th>
                                        <th>brand</th>
                                        <th>category</th>          
                                    </tr>";
                    $query2=mysql_query("select pid, pname, price, brand,category from Product where pname LIKE '%".$searchkey ."%'") or die("null");                    

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

    <script src="../js/dbms.js"></script>
    </body>
</html>