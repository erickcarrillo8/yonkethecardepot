var app = angular.module("AppYonke",[]);

	app.controller("homeController", function($scope,$http){
		$scope.nuevosautos = [];
		$http.get("http://www.yonkethecardepot.com/api/nuevosautos.php")
		.success(function(data){
			console.log(data);
			$scope.nuevosautos = data;
		})
			.error(function(err){
		});

		$http.get("http://www.yonkethecardepot.com/api/visitas.php")
			.success(function(data){
				console.log(data);
				$scope.visitas = data; 
				

			})
			.error(function(err){

			});
		
	});



	app.controller("servicioController", function($scope,$http){
		$scope.servicios = [];
		$http.get('http://www.yonkethecardepot.com/api/servicios.php')
		.success(function(data){
			console.log(data);
			$scope.servicios = data;
		})
			.error(function(err){

			});

	});

	app.controller("garantiaController", function($scope,$http){
		$scope.garantias = [];
		$http.get('http://www.yonkethecardepot.com/api/garantias.php')
		.success(function(data){
			console.log(data);
			$scope.garantias = data;
		})
			.error(function(err){
			});

	});

	app.controller("inventarioController", function($scope,$http){
		$scope.autos = [];
		$http.get('http://www.yonkethecardepot.com/api/autos.php')
		.success(function(data){
			console.log(data);
			$scope.autos = data;

		})
			.error(function(err){

			});
	});
