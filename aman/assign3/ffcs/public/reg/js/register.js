$(document).ready(function(){
	$('#dbms').on("click", function () {
		var subject = $(this).attr('id');  
		if($(this).html()=="Register"){
			$(this).html("Unregister");
		    $.ajax({
			  type: 'POST',
			  url: 'register.php',
			  data: {subject: subject,register:1},
			  success: function(data){
			  	window.alert(data);
			  	//checkStatus(data);
				}
			});
		}
		else
		{
			$(this).html("Register");
		    $.ajax({
			  type: 'POST',
			  url: 'register.php',
			  data: {subject: subject,register:0},
			  success: function(data){
			  	window.alert(data);
			  	//checkStatus(data);
				}
			});
		}
 	});
 	/*$('#dsa').on("click", function () {  
		$(this).html("Registered");
	    $.ajax({
		  type: 'POST',
		  url: 'register.php',
		  data: {subject:"dsa"},
		  success: function(data){
		  	window.alert(data);
		  	//checkStatus(data);
			}
		});
 	});
 	$('#hum').on("click", function () {  
		$(this).html("Registered");
	    $.ajax({
		  type: 'POST',
		  url: 'register.php',
		  data: {subject:"hum"},
		  success: function(data){
		  	window.alert(data);
		  	//checkStatus(data);
			}
		});
 	});
 	$('#eng').on("click", function () {  
		$(this).html("Registered");
	    $.ajax({
		  type: 'POST',
		  url: 'register.php',
		  data: {subject:"eng"},
		  success: function(data){
		  	window.alert(data);
		  	//checkStatus(data);
			}
		});
 	});
 	$('#iwp').on("click", function () {  
		$(this).html("Registered");
	    $.ajax({
		  type: 'POST',
		  url: 'register.php',
		  data: {subject:"iwp"},
		  success: function(data){
		  	window.alert(data);
		  	//checkStatus(data);
			}
		});
 	});
 	$('#ca').on("click", function () {  
		$(this).html("Registered");
	    $.ajax({
		  type: 'POST',
		  url: 'register.php',
		  data: {subject:"ca"},
		  success: function(data){
		  	window.alert(data);
		  	//checkStatus(data);
			}
		});
 	});
 	$('#se').on("click", function () {  
		$(this).html("Registered");
	    $.ajax({
		  type: 'POST',
		  url: 'register.php',
		  data: {subject:"se"},
		  success: function(data){
		  	window.alert(data);
		  	//checkStatus(data);
			}
		});
 	});*/
});	