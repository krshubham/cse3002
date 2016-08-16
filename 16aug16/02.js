function submit(){
	var name = document.getElementById('username').value;
	if(name.length>=7 && name.length<=8){
		var code = '';
		code += name[0].toUpperCase();
		var vowels = ['a','e','i','o','u'];
		var vc = 0;
		for(var i in vowels){
			for(var j in name){
				if(vowels[i] === name[j]){
					vc++;
				}				
			}
		}
		code+=vc;
		code+=name[name.length-1];
		var special = ['!','@','#','$','%','^','&'];
		code+= special[Math.floor(Math.random() * 7)] ;
		code+= parseInt(name.length)-parseInt(vc)
		var area = document.getElementById('code');
		area.innerHTML = '<span class="label label-success">Coupon code:' + code + '</div>';
	}
	else{
		var area = document.getElementById('code');
		area.innerHTML = '<span class="label label-danger">Coupon code: Not possible </span><br /><br /><h3>username must be 7-8 characters long</h3>';

	}
}