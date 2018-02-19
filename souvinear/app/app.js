var app = angular.module('myApp', ['ngRoute', 'ngAnimate']);

app.config(['$routeProvider',
  function ($routeProvider) {
        $routeProvider.
        when('/login', {
            title: 'Login',
            templateUrl: 'partials/login.html',
            navBoolean: true
        })
            .when('/logout', {
                title: 'Logout',
                templateUrl: 'partials/login.html',
                controller: 'logoutCtrl',
                navBoolean: true
            })
            .when('/signup', {
                title: 'Signup',
                templateUrl: 'partials/signup.html',
                navBoolean: true
//                controller: 'authCtrl'
            })
            .when('/main', {
                title: 'main',
                templateUrl: 'partials/main.html',
                navBoolean: false
//                controller: 'authCtrl'
            })
            .when('/', {
                title: 'login',
                templateUrl: 'partials/login.html',
                navBoolean: true,
//                controller: 'authCtrl',
                role: '0'
            })
            .when('/add-entry', {
                title: 'add entry',
                templateUrl: 'partials/add-entry.html',
                navBoolean: true
//                controller: 'authCtrl' 
            })
            .when('/hotspot', {
                title: 'hotspot',
                templateUrl: 'partials/hotspot.html',
                navBoolean: false
//                controller: 'authCtrl' 
            })
            .when('/swapbox', {
                title: 'swapbox',
                templateUrl: 'partials/swapbox.html',
                navBoolean: false
//                controller: 'authCtrl' 
            })            
            .when('/settings', {
                title: 'settings',
                templateUrl: 'partials/settings.html',
                navBoolean: false
//                controller: 'authCtrl' 
            })
            .when('/reset', {
                title: 'reset password',
                templateUrl: 'partials/reset.html',
                navBoolean: true
//                controller: 'authCtrl' 
            })
            .when('/spotify', {
                title: 'connect to spotify',
                templateUrl: 'partials/spotify.html',
                navBoolean: false
//                controller: 'authCtrl' 
            })
            .when('/pin', {
                title: 'pin a song',
                templateUrl: 'partials/pin.html',
                navBoolean: true
//                controller: 'authCtrl' 
            })
            .otherwise({
                redirectTo: '/login'
            });
  }]);


  app.controller('MyCtrl', function ($scope, $route, $routeParams, $location) {
      
    var navBoolean = $scope.navBoolean;
    navBoolean = true;
    $scope.$route = $route;
    var hello = $location.path();
    $scope.$routeParams = $routeParams;

    console.log($location.path());
    console.log(hello);
    console.log(navBoolean);

    switch (hello){
        case '/login':
            $scope.navBoolean = true;
            console.log(navBoolean);
            break;
        case '/logout':
            $scope.navBoolean = true;
            console.log(navBoolean);
            break;
        case '/signup':
            $scope.navBoolean = true;
            console.log(navBoolean);
            break;
        case '/main':
            $scope.navBoolean = false;
            console.log(navBoolean);
            break; 
        case '/add-entry':
            $scope.navBoolean = true;
            console.log(navBoolean);
            break;
        case '/hotspot':
            $scope.navBoolean = false;
            console.log(navBoolean);
            break;
        case '/swapbox':
            $scope.navBoolean = false;
            console.log(navBoolean);
            break;
        case '/settings':
            $scope.navBoolean = false;
            console.log(navBoolean);
            // $scope.$digest();
            break;
        case '/reset':
            $scope.navBoolean = true;
            console.log(navBoolean);
            break;
        case '/spotify':
            $scope.navBoolean = true;
            console.log(navBoolean);
            // $scope.$digest();
            break;
        case '/pin':
            $scope.navBoolean = true;
            console.log(navBoolean);
            break;
        default:
        $scope.navBoolean = false;
            console.log('default' + navBoolean);
            break;
        } 
    });