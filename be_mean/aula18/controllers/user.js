angular.module('User', [])
	.config(['$routeProvider', function($routeProvider){
		$routeProvider
		.when('/users', {
			 templateUrl: 'views/users-list.html'
			,controller: 'UserController'
			,controllerAs: 'User'
		})		
		.when('/users/create/', {
			 templateUrl: 'views/user-create.html'
			,controller: 'UserDetailsController'
			,controllerAs: 'UserDetails'
		})
		.when('/users/github/:username', {
			 templateUrl: 'views/users-github.html'
			,controller: 'UserGihubController'
			,controllerAs: 'UserGithub'
		})
		.when('/users/:id', {
			 templateUrl: 'views/user-details.html'
			,controller: 'UserDetailsController'
			,controllerAs: 'UserDetails'
		})
		
		;
	}])
	.controller('UserController', UserController)
	.controller('UserDetailsController', UserDetailsController)
	.controller('UserGihubController', UserGihubController)
;


function UserGihubController($http, $routeParams){
	// console.log($routeParams);
	var vm = this;
	vm.routeParams 	= $routeParams;
	
	
	const username 		= $routeParams.username;
	const URL 		= 'https://api.github.com/users/' + username;
	const METHOD 	= 'GET'
	
	

	$http({
		 url	: URL
		,method : METHOD
	}).success(function(data){
		console.log('Data: ', data);
		vm.user = data;
		
		
	})
	.error(function(err){
		console.log('Erro: ', err);
	});
	
	
}

function UserController($routeParams, $http){
	var vm = this;
	vm.routeParams = $routeParams;
	vm.titulo = "Be Mean Usuários"
	vm.editing = false;
	vm.reverse = false;
	
	
	vm.isColorRow = isColorRow;
	function isColorRow(isSelected){
		if(isSelected){
			return vm.tituloStyle = {
				 "color" : "#D0BB00"
				,"text-align" : "center"
			};
		} else {
			return {};
		}
	}
	
	/*
	vm.users = [
		 {name: 'Suissa'	,email:'suissa@yahoo.com.br'	,type: 'teacher',active:true}
		,{name: 'Gabriel'	,email:'gabriel@teste.com.br'	,type: 'student',active:false}
		,{name: 'Darezzo'	,email:'darezzogmail.com'		,type: 'teacher',active:false}	
		,{name: 'Roberto' 	,email:'roberto@test.com'		,type: 'student',active:true}
		,{name: 'Fifi' 		,email:'fifi@globo.com'			,type: 'student',active:true}
	];
	*/
	
	$http({
		 // url	: 'http://localhost/api/'
		 url	: 'http://localhost/be_mean/api/users'
		,method : 'GET'
	}).success(function(data){
		// console.log('Data: ', data);
		vm.users = data;
	})
	.error(function(err){
		console.log('Erro: ', err);
	});
	
	
	vm.orderByName = orderByName;
	function orderByName(){
		vm.predicate = 'name';
		vm.reverse = !vm.reverse;
	}
	
	
	vm.orderByEmail = orderByEmail;
	function orderByEmail(){
		vm.predicate = 'email';
		vm.reverse = !vm.reverse;
	}
	
	vm.add = add;
	function add(user){
		vm.users.push(user);
		vm.form = {};
	}
	

	
	vm.remove = remove;
	function remove(users){
		
		i = users.length;
		while (i--) {
			if(users[i].selecionado == true){
				//Faz a requisição HTTP de exclusão
				$http({
					 url	: 'http://localhost/be_mean/api/user/' + users[i].id
					,method : 'DELETE'
				}).success(function(data){
					vm.user = data;
					// console.log('Data: ', data);
				})
				.error(function(err){
					console.log('Erro: ', err);
				});
				
				
				users.splice(i, 1);
			}
		}
		
		
		
		vm.users = users;
	}
	
	vm.edit = edit;
	function edit(user, i){
		vm.form = angular.copy(user);
		vm.form.index = i;
		vm.editing = true;
	}
	
	vm.save = save;
	function save(user){
		console.log('xx', user);
		var users = vm.users.map(function(el, i){
			if(i === user.index){
				delete user.index;
				return user;
			}
			return el;
		});
		vm.users = users;
		vm.editing = false;
	}
}
//Deixar o injector ativo caso ocorra a 'minificação'
UserController.$inject = ['$routeParams', '$http'];


function UserDetailsController($routeParams, $http){
	// console.log($routeParams);
	var vm = this;
	vm.routeParams = $routeParams;
	vm.titulo = "Be Mean Usuários - > Detalhes"
	vm.editing = false;
	vm.reverse = false;
	
	vm.users = [];
	
	
	$http({
		 url	: 'http://localhost/be_mean/api/user/' + $routeParams.id
		,method : 'GET'
	}).success(function(data){
		vm.user = data;
		// console.log('Data: ', data);
	})
	.error(function(err){
		console.log('Erro: ', err);
	});
	
	vm.update = update;
	function update(user){
		// console.log(user);
		
		$http({
			 url	: 'http://localhost/be_mean/api/user/'
			,method : 'PUT'
			,data	: user
			//,params: user
		}).success(function(data){
			if(data.action){
				//vm.user = data;
			}
		})
		.error(function(err){
			console.log('Erro: ', err);
		});
	}
}
UserController.$inject = ['$routeParams', '$http'];