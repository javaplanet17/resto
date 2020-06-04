const cartlist = [];
const cartprice = [];
const cartquantity = [];

function getcontent(url, from, to){
	var cached=sessionStorage[url];
	    if(!from){from="body";} // default to grabbing body tag
	    if(to && to.split){to=document.querySelector(to);} // a string TO turns into an element
	    if(!to){to=document.querySelector(from);} // default re-using the source elm as the target elm
	    if(cached){return to.innerHTML=cached;} // cache responses for instant re-use re-use

	    var XHRt = new XMLHttpRequest; // new ajax
	    XHRt.responseType='document';  // ajax2 context and onload() event
	    XHRt.onload= function() { 
	    	sessionStorage[url]=to.innerHTML= XHRt.response.querySelector(from).innerHTML;
	    	//document.getElementById('carttitle').innerHTML = 'another person';
	    };
	    XHRt.open("GET", url, true);
	    XHRt.send();
	    return XHRt;
}

function getcontent21(url, from, to,values){
    // var cached=sessionStorage[url];
	   //  if(!from){from="body";} // default to grabbing body tag
	   //  if(to && to.split){to=document.querySelector(to);} // a string TO turns into an element
	   //  if(!to){to=document.querySelector(from);} // default re-using the source elm as the target elm
	   //  if(cached){return to.innerHTML=cached;} // cache responses for instant re-use re-use

	   //  var XHRt = new XMLHttpRequest; // new ajax
	   //  XHRt.responseType='document';  // ajax2 context and onload() event
	   //  XHRt.onload= function() { 

	   //  	sessionStorage[url]=to.innerHTML= XHRt.response.querySelector(from).innerHTML;
	   //  	document.getElementById('carttitle').innerHTML = values;
	   //  	sessionStorage[url] = toSelector.innerHTML;
	   //  };
	   //  XHRt.open("GET", url, true);
	   //  XHRt.send();
	   //  return XHRt;


}

function getcontent2(url, fromSelector, toSelector,values) { 
	var cached = sessionStorage[url]; 
	if (cached) { 
		return toSelector.innerHTML = cached; 
	} 
	fromSelector = fromSelector || 'body'; 
	toSelector = toSelector && document.querySelector(toSelector) || document.querySelector(fromSelector); 

	var XHRt = new XMLHttpRequest(); XHRt.open("GET", url, true); 
	XHRt.responseType = 'text'; 
	XHRt.onload = function() { 
		if (XHRt.readyState === XHRt.DONE && XHRt.status === 200) { 
			toSelector.innerHTML = XHRt.responseText; 
			document.getElementById('carttitle').innerHTML = values; 
			document.getElementById('deletebutton').setAttribute('onclick',"updatecartitems("+values+",'delete');");
			sessionStorage[url] = toSelector.innerHTML; // Now it will work after loading from session storage. 
		} 
	}; 
	XHRt.send(); 
	return XHRt;
}

function searchresult(){
	alert('searchresult');
}

function delivery(){
	var type = document.getElementById('ordertype');
	type.innerHTML = "";
	getcontent('deliveryto.html','#delivery','#ordertype');
}

function pickup(){
	var type = document.getElementById('ordertype');
	type.innerHTML = "";
	getcontent('pickup.html','#pickup','#ordertype');
	
}

function updatecartitems(value,action){
	if(action=='add'){
		cartlist.push(value);
		cartprice.push(value);
		cartquantity.push(value);
	}else{
		const index = cartlist.indexOf(value);
		if(index !== -1){
			cartlist.splice(index,1);
		}
		
	}
	console.log(cartlist);
	var box = document.getElementById('cartboxes'); 
	// reset list
	box.innerHTML = "";
	// add to the list 
	for(var i=0;i<cartlist.length;i++){
		box.innerHTML += getcontent2('cartbox.html','#cartbox','#cartboxes',value);
		//console.log('dasdasd');
	}
}

function deleteitem(value){
	alert('deleting'+value);
	// id cartboxes
	// removing cartboxes
	var box = document.getElementById(value);
	box.remove()
}

function additem(value){
	//alert('adding');
	// id cartboxes
	// adding to cartboxes
	var box = document.getElementById('cartboxes'); 
	//box.insertAdjacentHTML('beforerend',"<li>hi</li>");
	box.innerHTML += getcontent2('cartbox.html','#cartbox','#cartboxes',value);
}

function changerestaurantlocation(){

}

function changerestaurant(){

}

function changeaddress(){

}