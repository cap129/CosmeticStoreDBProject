Year Total:
    
    if(Region checked){
        if(Ascending){
            select st.regionid,year,count(*) as number_of_order, sum(total) as amount_of_sale
            from order_total ot, salesperson s, store st
            where  st.storeid=s.storeid and
            s.sid = ot.sid and
            year =2013 
            group by st.regionid
            order by 4 ASC
        }else{
            select st.regionid,year,count(*) as number_of_order, sum(total) as amount_of_sale
            from order_total ot, salesperson s, store st
            where  st.storeid=s.storeid and
            s.sid = ot.sid and
            year =2013 
            group by st.regionid
            order by 4 DESC
        }


    }else if(Store checked){
        if(Ascending){
            select s.storeid,year,count(*) as number_of_order, sum(total) as amount_of_sale
            from order_total ot, salesperson s
            where s.sid = ot.sid and
            year =2013 
            group by s.storeid
            order by 4 ASC
        }else{
            select s.storeid,year,count(*) as number_of_order, sum(total) as amount_of_sale
            from order_total ot, salesperson s
            where s.sid = ot.sid and
            year =2013 
            group by s.storeid
            order by 4 DESC
        }
    }else if(Product checked){
        if(Ascending){
            select p.pid,pname,year, sum(sub_total) as amount_of_sale
            from order_total ot, product p,order_detail od
            where  p.pid=od.pid and
            od.orderid=ot.orderid and
            year =2013 
            group by p.pid
            order by 4 
        }else{
            select p.pid,pname,year, sum(sub_total) as amount_of_sale
            from order_total ot, product p,order_detail od
            where  p.pid=od.pid and
            od.orderid=ot.orderid and
            year =2013 
            group by p.pid
            order by 4 DESC

        }
      

    }else if(brand checked){
        if(Ascending){
            select brand, year,sum(sub_total) as amount_of_sale
            from order_total ot, order_detail od, product p
            where  p.pid=od.pid and
            od.orderid = ot.orderid and
            year =2013 
            group by p.brand
            order by 3
        }else{
            select brand, year,sum(sub_total) as amount_of_sale
            from order_total ot, order_detail od, product p
            where  p.pid=od.pid and
            od.orderid = ot.orderid and
            year =2013 
            group by p.brand
            order by 3 DESC
        }

    }else{
        if(Ascending){
           	select category,year, sum(sub_total) as amount_of_sale
            from order_total ot, product p,order_detail od
            where  p.pid=od.pid and
            od.orderid=ot.orderid and
            year =2013 
            group by p.category
            order by 3 
        }else{
            select category,year, sum(sub_total) as amount_of_sale
            from order_total ot, product p,order_detail od
            where  p.pid=od.pid and
            od.orderid=ot.orderid and
            year =2013 
            group by p.category
            order by 3  DESC

        }

    }


 **************************************************************************************
 Employee

    if(Region unchecked){
        if(Ascending){
            select s.sid,sname, year, count(*) as number_of_order, sum(total) as amount_of_sale
            from order_total ot, salesperson s
            where s.sid = ot.sid and
            year =2013
            group by s.sid
            order by 4
        }else{
            select s.sid,sname, year, count(*) as number_of_order, sum(total) as amount_of_sale
            from order_total ot, salesperson s
            where s.sid = ot.sid and
            year =2013
            group by s.sid
            order by 4
        }
    }else{
            此处没有 order by!!!!!!!
            select s.sid,sname, year, count(*) as number_of_order, sum(total) as amount_of_sale
            from order_total ot, salesperson s,store st
            where s.storeid = st.storeid and
            s.sid = ot.sid and
            year =2013
            group by st.regionid, s.sid

       }

    }
