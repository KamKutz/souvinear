app.controller('addCtrl', function ($scope, $http) {

$scope.formData = {};
    
$scope.add_concert = function () {

console.log($scope.formData);    

document.getElementById("message").textContent = "";

//var request = $http({
//    method: "POST",
//    url: "../angular/v1/concert_processing.php",
//    data: {
//        headliner: $scope.headliner,
//        supporting_act: $scope.supporting_act,
//        venue: $scope.venue,
//        concert_date: $scope.concert_date,
//        concert_time: $scope.concert_time,
//        entry: $scope.entry
//        
//    },
//    headers: { 'Content-Type': 'application/x-www-form-urlencoded' }
//});
    
//$http({
//    url: "../angular/v1/concert_processing.php",
//    method: "POST",
//    headers: {'Content-Type': 'application/x-www-form-urlencoded'},
//    data: $.param($scope.formData)
//}).success(function(data, status, headers, config, response) {
//    document.getElementById("message").textContent = "Concert entry saved.";
//
//}).error(function(data, status, headers, config) {
//
//});
    
$http({
    url: "../angular/v1/concert_processing.php",
    method: "POST",
    headers: {'Content-Type': 'application/x-www-form-urlencoded'},
    data: $.param($scope.formData)
}).success(function(data, status, headers, config, response) {
    document.getElementById("message").textContent = "Concert entry saved.";

}).error(function(data, status, headers, config) {

});

    

//console.log($scope.headliner);
/* checks whether the request is successful or not */
//request.then(function (data) {
//    document.getElementById("message").textContent = "Concert entry saved.";
//});
}
});