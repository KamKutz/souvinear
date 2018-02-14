var app = angular.module('myApp', []);
    app.controller('authCtrl', function($scope, $http) {
        $http.get("login-processing.php")
        .then(function (response) {$scope.user = response.data.user;});
    });