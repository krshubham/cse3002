$(document).ready(function(){
	$("#register").click(function(){
	  	var btnval = $(this).html();
		var fname = $("#fname").val();
		var lname = $("#lname").val();
	    var email = $("#email").val();
	    var mobile = $("#mobile").val();
	    //alert(mobile);
	    var status = 0;
	    status = validfName(fname);
	    status = validlName(lname);
	    status = validEmail(email);
	    status = validMobileNumber(mobile);
	    if(status)
		{		
			$.ajax({
			  type: 'POST',
			  url: 'signup.php',
			  data: {fname:fname,lname:lname,email:email,mobile:mobile},
			  success: function(data){
			  	checkStatus(data);
			  }
			});
			/*$.get("http://api.clickatell.com/http/sendmsg?user=aman_saha&password=mriam811&api_id=3626480&to=91"+mobile+"&text=hello", function(data){
				alert(data);	
		    });*/         /* Local host does not allow access*/
		}
	});
});

function validfName(name)
{
	if(name == "")
		{$("#fname_err").html("Please enter a name");return 0;}
	else if(!/^[A-Za-z\s]+$/.test(name))
		{$("#fname_err").html("Only letters and whitespaces allowed");return 0;}
	return 1;
}
function validlName(name)
{
	if(name == "")
		{$("#lname_err").html("Please enter a name");return 0;}
	else if(!/^[A-Za-z\s]+$/.test(name))
		{$("#lname_err").html("Only letters and whitespaces allowed");return 0;}
	return 1;
}

function validEmail(email) 
{
    var x = email;
    var atpos = x.indexOf("@");
    var dotpos = x.lastIndexOf(".");
    if (atpos<1 || dotpos<atpos+2 || dotpos+2>=x.length) 
    {
        $("#email_err").html("Please enter a valid email");
        return 0;
    }
    return 1;
}

function validMobileNumber(txtMobile) 
{
	if(txtMobile.length!=10)
	{
		$("#mobile_err").html("Please enter a 10-digit number");
		return 0;
	}
	else if(txtMobile =="")
	{
		$("#mobile_err").html("Please enter a mobile number");
		return 0;
	}
		return 1;
}
function checkStatus(status)
{
	window.alert(status);
	var data = $.trim(status);
	if(data=="Success Signup")
	{
		$("#err_msg").html(data);
	}
	else if(data=="Wrong Signup")
	{
		$("#err_msg").html(data);
	}
}