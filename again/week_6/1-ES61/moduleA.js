var obj1 = (function(){
	
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

// 闭包的应用 -> 模块化开发

//匿名自执行函数







