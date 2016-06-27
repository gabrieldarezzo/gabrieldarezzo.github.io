angular.module('User', [])
	.config(['$routeProvider', function($routeProvider){
		$routeProvider
		.when('/users', {
			 templateUrl: 'views/users-list.html'
			,controller: 'UserController'
			,controllerAs: 'User'
		})		
		.when('/users/create/', {
			 // templateUrl: 'views/user-create.html'
			 templateUrl: 'views/user-form.html'
			,controller: 'UserCreateController'
			,controllerAs: 'User'
		})
		.when('/users/:id', {
			 // templateUrl: 'views/user-details.html'
			 templateUrl: 'views/user-form.html'
			,controller: 'UserDetailsController'
			// ,controllerAs: 'UserDetails'
			,controllerAs: 'User'
		});
	}])
	.service('UserService', UserService)
	.controller('UserController', ['UserService', UserController])
	.controller('UserCreateController', ['UserService', UserCreateController])
	.controller('UserDetailsController', UserDetailsController)
;






function UserService($http){
	
	//Checa se esta em Local ou no GitHub
	if(window.location.href.indexOf("localhost") > -1) {
		var base_url = 'http://localhost/be_mean/api/user/';
	} else {
		//REST InWork
		var base_url = 'http://bemean.inwork.com.br/user/';
	}
	
	
	//Força 'produção' mesmo na LOCAL (tentando resolver CORS)
	var base_url = 'http://bemean.inwork.com.br/user/';
	
	
	this.add = function(user){
		const method 	= 'POST';
		const request 	= {
			 url	: base_url
			,method : method
			,data	: user
		};
		
		return $http(request);
	};
	
	this.list = function(){
		const url 		= base_url;
		const method 	= 'GET';
		const request 	= {
			 url	: url
			,method : method
		};
		return $http(request);
	};
	
	this.listBy = function(id){
		const url 		= base_url  + id;
		const method 	= 'GET';
		const request 	= {
			 url	: url
			,method : method
		};
		
		return $http(request);
	};
	
	this.update = function(user){
		
		
		const url 		= base_url
		const method 	= 'PUT';
		const request 	= {
			 url	: url
			,method : method
			,data	: user
		};
		return $http(request);
	};
	
	this.remove = function(user_id){
		const url 		= base_url + user_id
		const method 	= 'DELETE';
		const request 	= {
			 url	: url
			,method : method
		};
		
		return $http(request);
	};

}

function UserCreateController(UserService){
	var vm = this;
	vm.finish = false;
	
	vm.submitForm = submitForm;
	function submitForm(user){
		
		UserService.add(user)
		.success(function(json){
			// vm.users = data;
			if(json.action){
				 alert('Cadastro Efetuado');
			}
		})
		.error(function(err){
			console.log('Erro: ', err);
		});
	}
}


function UserController(UserService){
	var vm = this;
	vm.users = [];
	vm.editing = false;
	vm.reverse = false;
	
	UserService.list()
	.success(function(data){
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
	
	vm.remove = remove;
	function remove(users){
		if(confirm('Deseja REALMENTE remover esse usuário?')){
			
			//Filter é coisa de mocinha .... nois faz no JS puro!
			
			
			i = users.length; 	//Utilizado para o splice
			while (i--) { 		//Utilizado para o splice
				
				//Executa no Loop apenas dos selecionados
				if(users[i].selecionado == true){
					//Faz a requisição HTTP
					UserService.remove(users[i].id)
					.success(function(data){
						// console.log(data);
						if(data.action){
							users.splice(i, 1); // Remove o elemento
						} else {
							console.log(data);
						}
					})
					.error(function(err){
						console.log('Erro: ', err);
					});
					
					
				}
			} //while
		} else {
			alert('UFA, ainda bem...');
		}
		
		//Refaz a view.
		vm.users = users;
	}
	

}
//Deixar o injector ativo caso ocorra a 'minificação'
// UserController.$inject = ['$routeParams', '$http'];


function UserDetailsController($routeParams, UserService){
	var vm = this;
	vm.routeParams = $routeParams;
	vm.titulo = "Edição de Usuário :" + $routeParams.id
	vm.editing = false;
	vm.reverse = false;
	
	vm.users = [];
	
	
	//##### TIREI Por que criamos o UserCreateController #####
	// console.log($routeParams.id );
	//Check if has id to avoid error, (If not method -> CREATE)	
	// if($routeParams.id != null){
	
		
		vm.editing = true;
		
		//Popula o form a informação
		UserService.listBy($routeParams.id)
		.success(function(data){
			
			// vm.user = data;  //deve ter outra maneira. mas assim funciona
			vm.form = data;
		})
		.error(function(err){
			console.log('Erro: ', err);
		});
		
	// }   
	//#####                                              #####
		
	vm.update = update;
	function update(user){
		
		console.log(user);
		
		UserService.update(user)
		.success(function(data){
			console.log(data);
			
		})
		.error(function(err){
			console.log('Erro: ', err);
		});
	}
	
}
// UserController.$inject = ['$routeParams', '$http'];