var app = angular.module('myApp', ['ngRoute', 'ngAnimate']);

app.config(['$routeProvider',
  function ($routeProvider) {
        $routeProvider.
        when('/login', {
            title: 'Login',
            templateUrl: 'partials/login.html'
//            controller: 'loginCtrl'
        })
            .when('/logout', {
                title: 'Logout',
                templateUrl: 'partials/login.html',
                controller: 'logoutCtrl'
            })
            .when('/signup', {
                title: 'Signup',
                templateUrl: 'partials/signup.html'
//                controller: 'authCtrl'
            })
            .when('/main', {
                title: 'main',
                templateUrl: 'partials/main.html'
//                controller: 'authCtrl'
            })
            .when('/', {
                title: 'login',
                templateUrl: 'partials/login.html',
//                controller: 'authCtrl',
                role: '0'
            })
            .when('/add-entry', {
                title: 'add entry',
                templateUrl: 'partials/add-entry.html'
//                controller: 'authCtrl' 
            })
            .when('/hotspot', {
                title: 'hotspot',
                templateUrl: 'partials/hotspot.html'
//                controller: 'authCtrl' 
            })
            .when('/swapbox', {
                title: 'swapbox',
                templateUrl: 'partials/swapbox.html'
//                controller: 'authCtrl' 
            })            
            .when('/settings', {
                title: 'settings',
                templateUrl: 'partials/settings.html'
//                controller: 'authCtrl' 
            })
            .when('/reset', {
                title: 'reset password',
                templateUrl: 'partials/reset.html'
//                controller: 'authCtrl' 
            })
            .when('/spotify', {
                title: 'connect to spotify',
                templateUrl: 'partials/spotify.html'
//                controller: 'authCtrl' 
            })
            .when('/pin', {
                title: 'pin a song',
                templateUrl: 'partials/pin.html'
//                controller: 'authCtrl' 
            })
            .otherwise({
                redirectTo: '/login'
            });
  }]);
