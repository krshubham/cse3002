var total = Number(0);
var tshirt = document.getElementById('tshirt');
var mug = document.getElementById('mug');
var pencil = document.getElementById('pencil');
var sticker = document.getElementById('sticker');
var numtshirt = document.getElementById('quantity');
var quantity = Number(numtshirt.options[numtshirt.selectedIndex].value);
var c = document.getElementById('color');
var color = c.options[c.selectedIndex].text;
var s = document.getElementById('size');
var size = s.options[s.selectedIndex].text;
var area = document.getElementById('total');
var form = document.getElementById('form');


function validate(){
	if(mug.checked){
		total+=Number(4.99);
	}
	if(pencil.checked){
		total+=Number(2.99);
	}
	if(sticker.checked){
		total+=Number(1.99);
	}
	if(tshirt.checked){
		/*total+= Number(9.99)*Number((quantity));
		alert(Number(quantity));*/
	}
	area.innerHTML = 'Total: ' + '$' + total;
}