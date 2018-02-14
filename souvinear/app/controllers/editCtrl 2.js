app.controller('editCtrl', function($scope, $http) {
        $http.get("v1/concertList.php")
        .then(function (response) {$scope.entries = response.data.entries;});
    });