var app = angular.module("myApp", ["ngRoute"]);
app.config(function($routeProvider){
  $routeProvider.when("/", {
    controller: "MainController",
    templateUrl: "../templates/template-levus/views/home.html"
        })
    .when("/:id", {
    controller: "MovieController",
    templateUrl: "../templates/template-levus/views/movie.html"
        })
    .otherwise({
    redirectTo: "/"
  });
});