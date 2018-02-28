app.controller('editDisplayCtrl', function($scope, $http) {
    
    $scope.formData = {};
    
    $scope.getEditInfo = function() {
    
    var concert_info = JSON.stringify($scope.formData);
    
    console.log("This is the data from the form: " + concert_info);
    
    
//    $http.get("v1/edit-processing.php")
//        .then(function (response) {$scope.entries = response.data.entries;});
//    });

$http({
    url: "v1/editConcertList.php", 
    method: "GET",
    params: concert_info
 });
    }
});