

//jquery code for phonegap/apache cordova side
$(document).ready(function()

{
	$("#submitbtn").click(function(){

		var firstname = $("#firstname").val();
		var surname = $("#surname").val();
		var idnumber = $("#idnumber").val();
		var address = $("#address").val();
		var datastring = "firstname="+firstname+"&surname="+surname+"&idnumber="+idnumber+"&address="+address+"&submitbtn=";

		if($.trim(firstname).length>0 & $.trim(surname).length>0 & $.trim(idnumber).length>0 & $.trim(address).length>0){
           
           $.ajax({
           	type: "POST",
           	url:"http://ecr.co.zw/phpmyadmin/kycdb/insertsubReg.php",
           	crossDomain: true,
           	cache: false,
           	beforeSend: function(){ $("#submitbtn").val('Connecting...');},
           	success: function(data){
           		if(data=="success"){
           			alert("inserted");
           			$("#submitbtn").val('submit');
           		}else if(data=="error"){
           			alert("error");

           		}
           	}
           });


		}return false;

   });
 });