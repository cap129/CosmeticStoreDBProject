Year Total:


    if(brand==0){
        if(category==0){
            select year,st.storeid, count(*) as number_of_order,sum(total) as amount_of_sale
            from order_total ot, salesperson s,store st
            where st.regionid="PA" and  /*-----一定要想办法获得storeid-------*/
            st.storeid = s.storeid and
            s.sid = ot.sid and
            year = 2013
            group by st.storeid
        }else{
            select year,st.storeid,  category,sum(sub_total) as amount_of_sale
            from order_detail od, order_total ot, product p, salesperson s, store st
            where p.pid = od.pid and
            od.orderid = ot.orderid and
            st.regionid="PA" and  
            st.storeid = s.storeid and
            s.sid = ot.sid and
            year=2013
            group by st.storeid, category
        }
    }else{
        if(category==0){
            select year,st.storeid,  brand,sum(sub_total) as amount_of_sale
            from order_detail od, order_total ot, product p, salesperson s, store st
            where p.pid = od.pid and
            od.orderid = ot.orderid and
            st.regionid="PA" and  
            st.storeid = s.storeid and
            s.sid = ot.sid and
            year=2013
            group by st.storeid, brand

        }else{
            select year,st.storeid,brand,category,sum(sub_total) as amount_of_sale
            from order_detail od, order_total ot, product p, salesperson s, store st
            where p.pid = od.pid and
            od.orderid = ot.orderid and
            st.regionid="PA" and  
            st.storeid = s.storeid and
            s.sid = ot.sid and
            year=2013
            group by st.storeid, brand,category

        }
    }

***********************************************************************************************
Month Total:

    if(month2==0){
        if(brand==0){
            if(category==0){
                select year,month,st.storeid, count(*) as number_of_order,sum(total) as amount_of_sale
                from order_total ot, salesperson s,store st
                where st.regionid="PA" and  /*-----一定要想办法获得storeid-------*/
                st.storeid = s.storeid and
                s.sid = ot.sid and
                year = 2013 and
                month = 7
                group by st.storeid
            }else{
                select year,month,st.storeid,  category,sum(sub_total) as amount_of_sale
                from order_detail od, order_total ot, product p, salesperson s, store st
                where p.pid = od.pid and
                od.orderid = ot.orderid and
                st.regionid="PA" and  
                st.storeid = s.storeid and
                s.sid = ot.sid and
                year=2013 and
                month = 7
                group by st.storeid, category
            }
        }else{
            if(category==0){
                select year,month,st.storeid,  brand,sum(sub_total) as amount_of_sale
                from order_detail od, order_total ot, product p, salesperson s, store st
                where p.pid = od.pid and
                od.orderid = ot.orderid and
                st.regionid="PA" and  
                st.storeid = s.storeid and
                s.sid = ot.sid and
                year=2013 and 
                month=7
                group by st.storeid, brand    

            }else{
                select year, month,st.storeid,brand,category,sum(sub_total) as amount_of_sale
                from order_detail od, order_total ot, product p, salesperson s, store st
                where p.pid = od.pid and
                od.orderid = ot.orderid and
                st.regionid="PA" and  
                st.storeid = s.storeid and
                s.sid = ot.sid and
                year=2013 and
                month = 7
                group by st.storeid, brand,category    

            }
        }

    }else{
        if(brand==0){
            if(category==0){
                select year,st.storeid, count(*) as number_of_order,sum(total) as amount_of_sale
                from order_total ot, salesperson s,store st
                where st.regionid="PA" and  /*-----一定要想办法获得storeid-------*/
                st.storeid = s.storeid and
                s.sid = ot.sid and
                year = 2013 and
                month between 4 and 7
                group by st.storeid
            }else{
                select year,st.storeid,  category,sum(sub_total) as amount_of_sale
                from order_detail od, order_total ot, product p, salesperson s, store st
                where p.pid = od.pid and
                od.orderid = ot.orderid and
                st.regionid="PA" and  
                st.storeid = s.storeid and
                s.sid = ot.sid and
                year=2013 and
                month between 4 and 7
                group by st.storeid, category
            }
        }else{
            if(category==0){
                select year,st.storeid,  brand,sum(sub_total) as amount_of_sale
                from order_detail od, order_total ot, product p, salesperson s, store st
                where p.pid = od.pid and
                od.orderid = ot.orderid and
                st.regionid="PA" and  
                st.storeid = s.storeid and
                s.sid = ot.sid and
                year=2013 and 
                month between 4 and 7
                group by st.storeid, brand    

            }else{
                select year,st.storeid,brand,category,sum(sub_total) as amount_of_sale
                from order_detail od, order_total ot, product p, salesperson s, store st
                where p.pid = od.pid and
                od.orderid = ot.orderid and
                st.regionid="PA" and  
                st.storeid = s.storeid and
                s.sid = ot.sid and
                year=2013 and
                month between 4 and 7
                group by st.storeid, brand,category    

            }
        }


    }

   