Year Total:
	   

	   if(brand==0){
	        if(category==0){
	            if(product==0){
         	        select year, count(*) as number_of_order,sum(total) as amount_of_sale
         	        from order_total ot, salesperson s
         	        where s.storeid="PA001" and  /*-----一定要想办法获得storeid-------*/
         	        s.sid = ot.sid and
         	        year = 2013
         	    }else{
             	    select year, p.pid, pname,sum(sub_total) as amount_of_sale
        	        from order_detail od, order_total ot, product p, salesperson s
        	        where p.pid = od.pid and
        	        od.orderid = ot.orderid and
        	        s.storeid = "PA001" and
        	        s.sid = ot.sid and
        	        year=2013
        	        group by p.pid
         	    }
    	    }else{
    	        if(product==0){
        	        select year, category,sum(sub_total) as amount_of_sale
        	        from order_detail od, order_total ot, product p, salesperson s
        	        where p.pid = od.pid and
        	        od.orderid = ot.orderid and
        	        s.storeid = "PA001" and
        	        s.sid = ot.sid and
        	        year=2013
        	        group by category
    	        }else{
    	            select year, p.pid, pname,sum(sub_total) as amount_of_sale
        	        from order_detail od, order_total ot, product p, salesperson s
        	        where p.pid = od.pid and
        	        od.orderid = ot.orderid and
        	        s.storeid = "PA001" and
        	        s.sid = ot.sid and
        	        year=2013
        	        group by p.pid

    	        }
	        }
	    }else{
	        if(category==0){
	            if(product==0){
    	            select year, brand,sum(sub_total) as amount_of_sale
        	        from order_detail od, order_total ot, product p, salesperson s
        	        where p.pid = od.pid and
        	        od.orderid = ot.orderid and
        	        s.storeid = "PA001" and
        	        s.sid = ot.sid and
        	        year=2013
        	        group by brand
    	        }else{
    	            select year, p.pid, pname,sum(sub_total) as amount_of_sale
        	        from order_detail od, order_total ot, product p, salesperson s
        	        where p.pid = od.pid and
        	        od.orderid = ot.orderid and
        	        s.storeid = "PA001" and
        	        s.sid = ot.sid and
        	        year=2013
        	        group by p.pid
    	        }

	        }else{
	            if(product==0){

     	           	select year, brand, category, sum(sub_total) as amount_of_sale
         	        from order_detail od, order_total ot, product p, salesperson s
         	        where p.pid = od.pid and
         	        od.orderid = ot.orderid and
         	        s.storeid = "PA001" and
         	        s.sid = ot.sid and
         	        year=2013
         	        group by brand, category
    	        }else{
    	            select year, p.pid, pname,sum(sub_total) as amount_of_sale
        	        from order_detail od, order_total ot, product p, salesperson s
        	        where p.pid = od.pid and
        	        od.orderid = ot.orderid and
        	        s.storeid = "PA001" and
        	        s.sid = ot.sid and
        	        year=2013
        	        group by p.pid

    	        }

	        }
	    }

******************************************************************************************************
Month Total:


	if(month2==0){
	    if(brand==0){
	        if(category==0){
	            if(product==0){
    	            select year, month, count(*) as number_of_order,sum(total) as amount_of_sale
        	        from order_total ot, salesperson s
        	        where s.storeid="PA001" and  /*-----一定要想办法获得storeid-------*/
        	        s.sid = ot.sid and
        	        year = 2013 and
        	        month =7
        	    }else{
        	        select year,month, p.pid, pname,sum(sub_total) as amount_of_sale
        	        from order_detail od, order_total ot, product p, salesperson s
        	        where p.pid = od.pid and
        	        od.orderid = ot.orderid and
        	        s.storeid = "PA001" and
        	        s.sid = ot.sid and
        	        year=2013 and
        	        month =7
        	        group by p.pid
        	    }

	        }else{
	            if(product==0){
	                select year,month, category,sum(sub_total) as amount_of_sale
        	        from order_detail od, order_total ot, product p, salesperson s
        	        where p.pid = od.pid and
        	        od.orderid = ot.orderid and
        	        s.storeid = "PA001" and
        	        s.sid = ot.sid and
        	        year=2013 and
        	        month = 7
        	        group by category
	            }else{
	                select year,month, p.pid, pname,sum(sub_total) as amount_of_sale
        	        from order_detail od, order_total ot, product p, salesperson s
        	        where p.pid = od.pid and
        	        od.orderid = ot.orderid and
        	        s.storeid = "PA001" and
        	        s.sid = ot.sid and
        	        year=2013 and
        	        month =7
        	        group by p.pid
	            }
	        }
	    }else{
	        if(category==0){
	            if(product==0){
	                select year, month, brand,sum(sub_total) as amount_of_sale
        	        from order_detail od, order_total ot, product p, salesperson s
        	        where p.pid = od.pid and
        	        od.orderid = ot.orderid and
        	        s.storeid = "PA001" and
        	        s.sid = ot.sid and
        	        year=2013 and
        	        month = 7
        	        group by brand

	            }else{
	                select year,month, p.pid, pname,sum(sub_total) as amount_of_sale
        	        from order_detail od, order_total ot, product p, salesperson s
        	        where p.pid = od.pid and
        	        od.orderid = ot.orderid and
        	        s.storeid = "PA001" and
        	        s.sid = ot.sid and
        	        year=2013 and
        	        month =7
        	        group by p.pid
	            }

	        }else{
	           if(product==0){
	                select year, month, brand, category, sum(sub_total) as amount_of_sale
         	        from order_detail od, order_total ot, product p, salesperson s
         	        where p.pid = od.pid and
         	        od.orderid = ot.orderid and
         	        s.storeid = "PA001" and
         	        s.sid = ot.sid and
         	        year=2013 and
         	        month =7
         	        group by brand, category

	           }else{
	                select year,month, p.pid, pname,sum(sub_total) as amount_of_sale
        	        from order_detail od, order_total ot, product p, salesperson s
        	        where p.pid = od.pid and
        	        od.orderid = ot.orderid and
        	        s.storeid = "PA001" and
        	        s.sid = ot.sid and
        	        year=2013 and
        	        month =7
        	        group by p.pid
	           }
	        }
	    }
	}else{
	    if(brand==0){
	        if(category==0){
	            if(product==0){
	                select year, count(*) as number_of_order,sum(total) as amount_of_sale
        	        from order_total ot, salesperson s
        	        where s.storeid="PA001" and  /*-----一定要想办法获得storeid-------*/
        	        s.sid = ot.sid and
        	        year = 2013 and
        	        month between 4 and 7

	            }else{
	                select year, p.pid, pname,sum(sub_total) as amount_of_sale
        	        from order_detail od, order_total ot, product p, salesperson s
        	        where p.pid = od.pid and
        	        od.orderid = ot.orderid and
        	        s.storeid = "PA001" and
        	        s.sid = ot.sid and
        	        year=2013 and
        	        month between 4 and 7
        	        group by p.pid

	            }
	        }else{
	            if(product==0){
	                select year,category,sum(sub_total) as amount_of_sale
        	        from order_detail od, order_total ot, product p, salesperson s
        	        where p.pid = od.pid and
        	        od.orderid = ot.orderid and
        	        s.storeid = "PA001" and
        	        s.sid = ot.sid and
        	        year=2013 and
        	        month between 4 and 7
        	        group by category
	            }else{
	                select year, p.pid, pname,sum(sub_total) as amount_of_sale
        	        from order_detail od, order_total ot, product p, salesperson s
        	        where p.pid = od.pid and
        	        od.orderid = ot.orderid and
        	        s.storeid = "PA001" and
        	        s.sid = ot.sid and
        	        year=2013 and
        	        month between 4 and 7
        	        group by p.pid
	            }
	        }
	    }else{
	        if(category==0){
	            if(product==0){
	                select year, brand,sum(sub_total) as amount_of_sale
        	        from order_detail od, order_total ot, product p, salesperson s
        	        where p.pid = od.pid and
        	        od.orderid = ot.orderid and
        	        s.storeid = "PA001" and
        	        s.sid = ot.sid and
        	        year=2013 and
        	        month between 4 and 7
        	        group by brand

	            }else{
	                select year, p.pid, pname,sum(sub_total) as amount_of_sale
        	        from order_detail od, order_total ot, product p, salesperson s
        	        where p.pid = od.pid and
        	        od.orderid = ot.orderid and
        	        s.storeid = "PA001" and
        	        s.sid = ot.sid and
        	        year=2013 and
        	        month between 4 and 7
        	        group by p.pid

	            }
	        }else{
	            if(product==0){
	               	select year, brand, category, sum(sub_total) as amount_of_sale
         	        from order_detail od, order_total ot, product p, salesperson s
         	        where p.pid = od.pid and
         	        od.orderid = ot.orderid and
         	        s.storeid = "PA001" and
         	        s.sid = ot.sid and
         	        year=2013 and
         	        month between 4 and 7
         	        group by brand, category

	            }else{
	                select year, p.pid, pname,sum(sub_total) as amount_of_sale
        	        from order_detail od, order_total ot, product p, salesperson s
        	        where p.pid = od.pid and
        	        od.orderid = ot.orderid and
        	        s.storeid = "PA001" and
        	        s.sid = ot.sid and
        	        year=2013 and
        	        month between 4 and 7
        	        group by p.pid

	            }
	        }
	    }
	}

**********************************************************************************************
Day Total:
    	if(brand==0){
	        if(category==0){
	            if(product==0){
         	        select year, month, day, count(*) as number_of_order,sum(total) as amount_of_sale
         	        from order_total ot, salesperson s
         	        where s.storeid="PA001" and  /*-----一定要想办法获得storeid-------*/
         	        s.sid = ot.sid and
         	        year = 2013 and
         	        month = 7  and
         	        day = 1

         	    }else{
             	    select year,month,day, p.pid, pname,sum(sub_total) as amount_of_sale
        	        from order_detail od, order_total ot, product p, salesperson s
        	        where p.pid = od.pid and
        	        od.orderid = ot.orderid and
        	        s.storeid = "PA001" and
        	        s.sid = ot.sid and
        	        year=2013  and
        	        month = 7  and
         	        day = 1
        	        group by p.pid
         	    }
    	    }else{
    	        if(product==0){
        	        select year,month,day,category,sum(sub_total) as amount_of_sale
        	        from order_detail od, order_total ot, product p, salesperson s
        	        where p.pid = od.pid and
        	        od.orderid = ot.orderid and
        	        s.storeid = "PA001" and
        	        s.sid = ot.sid and
        	        year=2013  and
        	        month = 7  and
         	        day = 1
        	        group by category
    	        }else{
    	            select year, p.pid, pname,sum(sub_total) as amount_of_sale
        	        from order_detail od, order_total ot, product p, salesperson s
        	        where p.pid = od.pid and
        	        od.orderid = ot.orderid and
        	        s.storeid = "PA001" and
        	        s.sid = ot.sid and
        	        year=2013  and
        	        month = 7  and
         	        day = 1
        	        group by p.pid

    	        }
	        }
	    }else{
	        if(category==0){
	            if(product==0){
    	            select year, month,day, brand,sum(sub_total) as amount_of_sale
        	        from order_detail od, order_total ot, product p, salesperson s
        	        where p.pid = od.pid and
        	        od.orderid = ot.orderid and
        	        s.storeid = "PA001" and
        	        s.sid = ot.sid and
        	        year=2013  and
        	        month = 7  and
         	        day = 1
        	        group by brand
    	        }else{
    	            select year, month,day,p.pid, pname,sum(sub_total) as amount_of_sale
        	        from order_detail od, order_total ot, product p, salesperson s
        	        where p.pid = od.pid and
        	        od.orderid = ot.orderid and
        	        s.storeid = "PA001" and
        	        s.sid = ot.sid and
        	        year=2013  and
        	        month = 7  and
         	        day = 1
        	        group by p.pid
    	        }

	        }else{
	            if(product==0){

     	           	select year, month,day,brand, category, sum(sub_total) as amount_of_sale
         	        from order_detail od, order_total ot, product p, salesperson s
         	        where p.pid = od.pid and
         	        od.orderid = ot.orderid and
         	        s.storeid = "PA001" and
         	        s.sid = ot.sid and
        	        year=2013  and
        	        month = 7  and
         	        day = 1
         	        group by brand, category
    	        }else{
    	            select year,month,day, p.pid, pname,sum(sub_total) as amount_of_sale
        	        from order_detail od, order_total ot, product p, salesperson s
        	        where p.pid = od.pid and
        	        od.orderid = ot.orderid and
        	        s.storeid = "PA001" and
        	        s.sid = ot.sid and
        	        year=2013  and
        	        month = 7  and
         	        day = 1
        	        group by p.pid

    	        }

	        }
	   }



************************************************************************************************
salesperson   
   第一个fieldset 没有选择月, 即年度员工
            select s.sid,sname, year, count(*) as number_of_order, sum(total) as amount_of_sale
            from order_total ot, salesperson s
            where s.storeid="PA001" and
            s.sid = ot.sid and
            year =2013
            group by s.sid
           选择了月
            select s.sid,sname, year,month, count(*) as number_of_order, sum(total) as amount_of_sale
            from order_total ot, salesperson s
            where s.storeid="PA001" and
            s.sid = ot.sid and
            year =2013 and 
            month =7
            group by s.sid

    第二个fieldset 即一段时间员工表现
            select s.sid,sname, year,count(*) as number_of_order, sum(total) as amount_of_sale
            from order_total ot, salesperson s
            where s.storeid="PA001" and
            s.sid = ot.sid and
            year =2013 and 
            month between 4 and 7
            group by s.sid







