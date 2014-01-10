'use strict'

angular.module('App', []);

function FetchCtrl($scope, $http){
  $scope.url = 'http://api.espn.com/v1/sports/news/headlines?&apikey=';
  $scope.key = '9s6xu3a3qg4u54p2224m6uk2';
  $scope.method = 'GET';

  $scope.fetch = function() {
    $scope.code = null;
    $scope.response = null;

    $http({method: $scope.method, url: $scope.url + $scope.key}).
      success(function(data, status) {
        $scope.status = status;
        $scope.data = data;
      }).
      error(function(data, status) {
        $scope.data = data || "Request failed";
        $scope.status = status;
    });
  };
  $scope.fetch();
}
      
