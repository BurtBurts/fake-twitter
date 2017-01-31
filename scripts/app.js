let myApp = angular.module('app', ['ui.router']);

myApp.config(function($stateProvider) {
  let loginState = {
    name: 'login',
    url: '', //Cette page n'a pas d'URL elle est donc affichée par défaut au chargement de index.html
    templateUrl: 'login.html',
  }

  let feedState = {
    name: 'feed',
    url: '/feed',
    templateUrl: 'feed.html'
  }

  $stateProvider.state(loginState);
  $stateProvider.state(feedState);
});

myApp.controller ("mainController", function($scope, $http) {
  let url = $http.get('/sources/tweets.json'); //Récupère une source de données
  url.then(function(display) {
        $scope.tweets = display.data;
    })
});
