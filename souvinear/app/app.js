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
                title: 'Main',
                templateUrl: 'partials/main.html'
//                controller: 'authCtrl'
            })
            .when('/', {
                title: 'Login',
                templateUrl: 'partials/login.html',
//                controller: 'authCtrl',
                role: '0'
            })
            .when('/add-entry', {
                title: 'Add Entry',
                templateUrl: 'partials/add-entry.html'
//                controller: 'authCtrl' 
            })
            .otherwise({
                redirectTo: '/login'
            });
  }]);
