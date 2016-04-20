var app = angular.module("AppYonke",[]);

	app.controller("homeController", function($scope,$http){
		$scope.nuevosautos = [];
		$http.get("http://localhost/yonkethecardepot/api/nuevosautos.php")
		.success(function(data){
			console.log(data);
			$scope.nuevosautos = data;
		})
			.error(function(err){
		});

		$http.get("http://localhost/yonkethecardepot/api/visitas.php")
			.success(function(data){
				console.log(data);
				$scope.visitas = data; 
				

			})
			.error(function(err){

			});
		
	});



	app.controller("servicioController", function($scope,$http){
		$scope.servicios = [];
		$http.get('http://localhost/yonkethecardepot/api/servicios.php')
		.success(function(data){
			console.log(data);
			$scope.servicios = data;
		})
			.error(function(err){

			});

	});

	app.controller("garantiaController", function($scope,$http){
		$scope.garantias = [];
		$http.get('http://localhost/yonkethecardepot/api/garantias.php')
		.success(function(data){
			console.log(data);
			$scope.garantias = data;
		})
			.error(function(err){
			});

	});
