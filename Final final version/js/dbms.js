function changeSub(){
	var x = document.getElementById('select_ctg').value;
	if(x=="makeup"){
        document.getElementById('makeup_sub').style.display="block";
		document.getElementById('skincare_sub').style.display="none";

	}else{
		document.getElementById('makeup_sub').style.display="none";
		document.getElementById('skincare_sub').style.display="block";
	}

}



function addItem(){

    var f = document.createElement("form");
    f.setAttribute('method',"post");  //此处要改！！！
    f.setAttribute('action',"submit.php");    //此处要改！！！！

    var i = document.createElement("input"); //input element, text
    i.setAttribute('type',"text");
    i.setAttribute('name',"pid");
    i.setAttribute('size',20);
    f.appendChild(i);

    i = document.createElement("input"); //input element, text
    i.setAttribute('type',"text");
    i.setAttribute('name',"pname");
    i.setAttribute('size',20);  
    f.appendChild(i);

    i = document.createElement("input"); //input element, text
    i.setAttribute('type',"text");
    i.setAttribute('name',"quantity"); 
    i.setAttribute('size',20); 
    f.appendChild(i);

    i = document.createElement("input"); //input element, text
    i.setAttribute('type',"text");
    i.setAttribute('name',"price"); 
    i.setAttribute('size',20); 
    f.appendChild(i); 

    i = document.createElement("input"); //input element, text
    i.setAttribute('type',"text");
    i.setAttribute('name',"sub_total");  
    i.setAttribute('size',20); 
    f.appendChild(i);  

    var s = document.createElement("input"); //input element, Submit button
    s.setAttribute('type',"submit");
    s.setAttribute('value',"Insert");    
    f.appendChild(s);  

    document.getElementById('item-form-div').appendChild(f);

}



function changeValue(pa){
	var a = pa.value;
	if(a==0)
		pa.value=1;
	else
		pa.value=0;

}

function aaa(){
	var b = document.getElementById("ck1").value;
	document.getElementById("pppp").innerHTML = b;
}






