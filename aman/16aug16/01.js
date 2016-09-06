var total = Number(0);
var tshirt = document.getElementById('tshirt');
var mug = document.getElementById('mug');
var pencil = document.getElementById('pencil');
var sticker = document.getElementById('sticker');
var c = document.getElementById('color');
var s = document.getElementById('size');
var size = s.options[s.selectedIndex].text;
var area = document.getElementById('total');
var form = document.getElementById('form');


function validate(){
	var total = 0;
	var min = 0;
	var maximum = document.getElementById('max');
	var minimum = document.getElementById('min');
	var max = Number(0);
	var x = document.getElementById("quantity").value;
	var coupon = document.getElementById('coupon').value;
	if(mug.checked){
		total+=Number(4.99);
		if(Number(4.99)>max)
			max = Number(4.99);
		else if(Number(4.99)<min)
			{min = Number(4.99);}
	}
	if(pencil.checked){
		total+=Number(2.99);
		if(Number(2.99)>max)
			max = Number(2.99);
		else if(Number(2.99)<min)
			{min = Number(2.99);}
	}
	if(sticker.checked){
		total+=Number(1.99);
		if(Number(1.99)>max)
			max = Number(1.99);
		else if(Number(1.99)<min)
			{min = Number(1.99);}
	}
	if(tshirt.checked){
		total+= Number(9.99)*Number(x);
		max = Number(9.99)*Number(x);
	}
	if(coupon.length != ''){
		var disc = document.getElementById('10pdisc');
		price = total - 0.10*total;
		if(price>10){
			price = price - 0.10*price;
		}
		disc.innerHTML = 'Total(with discount) ' + '$' + price;
	}
	maximum.innerHTML = 'maximum price: ' + max;
	area.innerHTML = 'Total(without discount): ' + '$' + total;

	var checking = {
		'pencil' : ['pencil', pencil.checked],
		'tshirt' : ['tshirt', tshirt.checked],
		'mug' : ['mug', mug.checked],
		'sticker' : [ 'sticker', sticker.checked]	
	}
	var arr = [];
	for(var i in checking){
		if(checking[i][1] === false){
			arr.push(checking[i][0]);
		}
	}
	var un = document.getElementById('un');
	if(arr.length>0){
		un.innerHTML = 'Unselected: ' + arr;
	}
	else{
		un.innerHTML = 'All selected';
	}	
}
