let myApp = angular.module('appTwitter', ['ui.router']);

myApp.config(function($stateProvider) {
  let loginState = {
    name: 'login',
    url: '',
    templateUrl: '/templates/login.html'
  }

  let feedState = {
    name: 'feed',
    url: '/feed',
    templateUrl: '/templates/feed.html'
  }


  $stateProvider.state(loginState);
  $stateProvider.state(feedState);

});


myApp.controller('feedController', function($scope, $http) {

    $http.get('http://localhost:8888/tweets.php').then(function(display) {
      $scope.tweets = display.data;
    });

});
