app.controller('addCtrl', function ($scope, $http) {

$scope.add_concert = function () {

document.getElementById("message").textContent = "";

var request = $http({
    method: "post",
    url: window.location.href + "/v1/concert_processing.php",
    data: {
        headliner: $scope.headliner,
        supporting_act: $scope.supporting_act,
        venue: $scope.venue,
        concert_date: $scope.concert_date,
        concert_time: $scope.concert_time,
        entry: $scope.entry
        
    },
    headers: { 'Content-Type': 'application/x-www-form-urlencoded' }
});

console.log($scope.headliner);
/* checks whether the request is successful or not */
request.success(function (data) {
    document.getElementById("message").textContent = "Concert entry saved.";
});
}
});