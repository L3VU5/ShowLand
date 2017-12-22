app.factory("movies", ["$http", function($http){
	return $http.get("http://api.tvmaze.com/shows")
	.success(function(data){
			 return data;
			 })
	.error(function(data){
			 alert("nie udało się pobrać danych " + data);
	});
}]);