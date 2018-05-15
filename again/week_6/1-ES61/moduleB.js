var obj2 = (function(){
	
	var name = "kerwin";
	var test = function(){
		console.log("test");
	}


	var obj= {
		name:"kerwin",
		age:100
	}

	//暴露
	return {
		name:name,
		test:test
	}

})()