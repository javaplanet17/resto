function showalert(value){
	var box = document.createElement('div');
	var background = document.createElement('div');
	box.className = value;
	box.setAttribute("id",value);
	//box.innerHTML = "<h2 id='stupid' class='searchdumb'>Search food</h2><br> <form method='post' action='index'> <input class='searchinput' type='name' name='foodname' placeholder='Search food'> <input class='searchbutton' type='submit' name='submit' value='search'> </form>";
	
	background.className = "alertbackground";
	background.setAttribute("id","alertbackground");
	background.setAttribute("onclick","removealert('searchbox');");
	document.body.appendChild(background);
	document.body.appendChild(box);
	getcontent('alert/cart.html','#alertcartbox','#searchbox');
}

function removealert(value){
	document.getElementById('searchbox').remove();
	document.getElementById("alertbackground").remove();
}