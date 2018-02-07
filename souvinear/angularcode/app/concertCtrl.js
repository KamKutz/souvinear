app.controller('customersCtrl', function ($scope, $rootScope, $routeParams, $location, $http, Data) {
   $http.get(".php")
   .then(function (response) {$scope.entries = response.data.records;});
});