function submit(){
	var name = document.getElementById('username').value;
	if(name.length>=7 && name.length<=8){
		code = name[0].toUpperCase();
	}
	else{
		alert('not passed');
	}
}