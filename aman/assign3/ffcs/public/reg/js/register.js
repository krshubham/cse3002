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
 	$('#dsa').on("click", function () {
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
 	$('#iwp').on("click", function () {
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
 	$('#hum').on("click", function () {
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
 	$('#se').on("click", function () {
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
 	$('#ca').on("click", function () {
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
 	$('#eng').on("click", function () {
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
});	