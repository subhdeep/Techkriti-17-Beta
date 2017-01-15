$(document).ready(function(){
var i=0;
var k=0;
var r=0;
var school="";
var group="";
var email="";
$('#pay').on('click',function()
{

window.location="https://www.townscript.com/e/techkriti--012413/booking?TOSC'16="+i+"&name="+group+"&emailid="+email;
});


$.ajax({                                      
      url: 'gen.php',   
      type: 'GET',              
      data: '',                    
      dataType: 'json',    
      success: function(data)
      {

 
                $.each(data, function(index, element) {
i=i+1;
school=element.school;
group=element.group;
email=element.email;
k=k+1;
addRow(i,element.name,element.classy,element.roll_num);
});
$('.abc').text("INSTITUTE NAME:  "+school);
}
});











function addRow(content,morecontent,mcontent,mmcontent)
{        
         if (!document.getElementsByTagName) return;
if(k==28|k==58||k==88||k==118)
{
    $(".mein").css("height", "auto");

r=r+1;
$( ".mein" ).append( "<table border='3' id='mytable1'><tbody style='display: block;margin-left: 1%;margin-right: 1%;'id='tbody'><tr><td>SNo</td><td>NAME</td><td>CLASS</td><td>ROLL NUMBER</td></tr></tbody></table>" );

}
         tabBody=document.getElementsByTagName("tbody").item(r);

         row=document.createElement("tr");
         cell1 = document.createElement("td");
         cell2 = document.createElement("td");
                  cell3 = document.createElement("td");
                  cell4 = document.createElement("td");
         textnode1=document.createTextNode(content);
         textnode2=document.createTextNode(morecontent);
         textnode3=document.createTextNode(mcontent);
         textnode4=document.createTextNode(mmcontent);
         cell1.appendChild(textnode1);
         cell2.appendChild(textnode2);
         cell3.appendChild(textnode3);
         cell4.appendChild(textnode4);
         row.appendChild(cell1);
         row.appendChild(cell2);
         row.appendChild(cell3);
         row.appendChild(cell4);
         tabBody.appendChild(row);




}
});
