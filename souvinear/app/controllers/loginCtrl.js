app.controller('loginCtrl', function ($scope, $http) {

$scope.check_credentials = function () {

document.getElementById("message").textContent = "";

var request = $http({
    method: "post",
    url: window.location.href + "/v1/login_processing.php",
    data: {
        username: $scope.username,
        pass: $scope.password
    },
    headers: { 'Content-Type': 'application/x-www-form-urlencoded' }
});

/* checks whether the request is successful or not */
request.success(function (data) {
    document.getElementById("message").textContent = "You have login successfully with ID "+data;
});
}
});