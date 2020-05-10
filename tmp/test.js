window.onload = function(){
	
	var xhr = new XMLHttpRequest();
	xhr.open('GET', './test.php', true);
    //xhr.responseType = 'json';
    //xhr.setRequestHeader( 'Content-Type', 'application/x-www-form-urlencoded' );
	xhr.send();
	xhr.onreadystatechange = function(){
		if(xhr.readyState === 4){
			var datas = JSON.parse(xhr.responseText);
			console.log(datas);
		}
	};
};
console.log("AAA");