function checkDisability()
            {
                var x =document.getElementById('etype').value;
                var y =document.getElementById('enroll_emptype');
                var z =document.getElementById('check');

               if(x === 'Other')
               {

                z.style.display = "block"; 
               document.getElementById('enroll_emptype').value= "";
                
               }


            else
            {
               
           z.style.display = "none"; 
           document.getElementById('enroll_emptype').value= x;
                
            }
        }

            function adreesSimilarity() 
{
   
    var chekBox=document.getElementById("myCheck");
    var pm1 =document.getElementById("pmadone").value;
    var pm2 =document.getElementById("pmadtwo").value;
    var pm3 =document.getElementById("pmadthree").value;
    var pm4 =document.getElementById("pmadfour").value;
    var pm5 =document.getElementById("pmadfive").value;
    var pm6 =document.getElementById("pmadsix").value;
    var cm1=document.getElementById("comadone");
    var cm2= document.getElementById("comadtwo");
    var cm3=document.getElementById("comadthree");
    var cm4=document.getElementById("comadfour");
    var cm5=document.getElementById("comadfive");
    var cm6=document.getElementById("comadsix");
    var clr=document.getElementById("color");
    if(chekBox.checked==true)
    {
    if(pm1=="" || pm2=="" || pm3=="" || pm4=="" || pm5=="" || pm6=="")
    {
        alert("Please fill all the required permanent  address field.");
        chekBox.checked=false;
    }
    else
    {
     cm1.value=pm1;
     cm2.value=pm2;
     cm3.value=pm3;
     cm4.value=pm4;
     cm5.value=pm5;
     cm6.value=pm6;
     clr.style.color="blue";
    }
    }
    else
    {
     cm1.value="";
     cm2.value="";
     cm3.value="";
     cm4.value="";
     cm5.value="";
     cm6.value="";
     clr.style.color="black";
    } 
}

