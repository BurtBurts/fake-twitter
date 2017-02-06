let myApp = angular.module('app', ['ui.router']);

myApp.config(function($stateProvider) {
  let loginState = {
    name: 'login',
    url: '', //Cette page n'a pas d'URL elle est donc affichée par défaut au chargement de index.html
    templateUrl: 'templates/login.html',
  }

  let feedState = {
    name: 'feed',
    url: '/feed',
    templateUrl: 'templates/feed.html'
  }

  $stateProvider.state(loginState);
  $stateProvider.state(feedState);
});

myApp.controller ("mainController", function($scope, $http) {
  let source = $http.get('http://localhost:8081/tweets.php'); //Récupère une source de données
  source.then(function(display) {
        $scope.tweets = display.data;
    })
});
