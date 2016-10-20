var mslots = ['A1','B1','C1','D1','E1','F1','G1','TE1','TC1','TD1'];
var eslots = ['A2','B2','C2','D2','E2','F2','G2','TE2','TC2','TD2'];
var dbms_faculty = ['Tulasi Prasad','Pradeep K V'];
var iwp_faculty = ['Rajiv vincent','Sandhya P'];
var ethics_faculty = ['Sridhar V G','Nirmal Thyagu'];
var dbms_slot = '';

function check(event){
	alert('Register the teachers')
		/*var e = document.getElementById("dbms");
		var strUser = e.options[e.selectedIndex].text;
		alert(strUser);*/
		event.preventDefault();
		var dbms_check = document.getElementById('dbms_check');
		var dbms_select = document.getElementById('dbms_select');
		var dbms_fac = document.getElementById('dbms_fac');
		//alert(dbms_check.checked);
		if(dbms_check.checked){
			if(dbms_select.options[dbms_select.selectedIndex].text === 'select'){
				alert('Error');
				return false;
			}
			else{
				for (var i = mslots.length - 1; i >= 0; i--) {
					if(mslots[i] === dbms_select.options[dbms_select.selectedIndex].text){
						if (mslots[i].indexOf('1') !== -1){
							dbms_slot = 'morning';
							break;
						}
					}
					else{
						dbms_slot = 'evening';
					}
				}
				//alert(dbms_slot);
				if(dbms_slot === 'morning'){
					var opt = document.createElement("option");
					opt.innerHTML = dbms_faculty[0];
   						//then append it to the select element
   						dbms_fac.appendChild(opt);
   					}
   					else{
   						var opt = document.createElement("option");
   						opt.innerHTML = dbms_faculty[1];
   						//then append it to the select element
   						dbms_fac.appendChild(opt);
   					}
   				}
   			}
   			var iwp_check = document.getElementById('iwp_check');
   			var iwp_select = document.getElementById('iwp_select');
   			var iwp_fac = document.getElementById('iwp_fac');
		//alert(dbms_check.checked);
		if(iwp_check.checked){
			//alert('yes');
			if(iwp_select.options[iwp_select.selectedIndex].text === 'select'){
				alert('Error');
				return false;
			}
			else{
				for (var i = mslots.length - 1; i >= 0; i--) {
					if(mslots[i] === iwp_select.options[iwp_select.selectedIndex].text){
						if (mslots[i].indexOf('1') !== -1){
							iwp_slot = 'morning';
							break;
						}
					}
					else{
						iwp_slot = 'evening';
					}
				}
				//alert(iwp_slot);
				if(iwp_slot === 'morning'){
					alert('in morning');
					var opt = document.createElement("option");
					opt.innerHTML = iwp_faculty[0];
   						//then append it to the select element
   						iwp_fac.appendChild(opt);
   					}
   					else{
   						var opt = document.createElement("option");
   						opt.innerHTML = iwp_faculty[1];
   						//then append it to the select element
   						iwp_fac.appendChild(opt);
   					}
   				}
   				if(iwp_check.checked){
			//alert('yes');
			if(ethics_select.options[ethics_select.selectedIndex].text === 'select'){
				alert('Error');
				return false;
			}
			else{
				for (var i = mslots.length - 1; i >= 0; i--) {
					if(mslots[i] === ethics_select.options[ethics_select.selectedIndex].text){
						if (mslots[i].indexOf('1') !== -1){
							ethics_slot = 'morning';
							break;
						}
					}
					else{
						ethics_slot = 'evening';
					}
				}
				//alert(ethics_slot);
				if(ethics_slot === 'morning'){
					alert('in morning');
					var opt = document.createElement("option");
					opt.innerHTML = ethics_faculty[0];
   						//then append it to the select element
   						ethics_fac.appendChild(opt);
   					}
   					else{
   						var opt = document.createElement("option");
   						opt.innerHTML = ethics_faculty[1];
   						//then append it to the select element
   						ethics_fac.appendChild(opt);
   					}
   				}
   			}
   			

   		}
}