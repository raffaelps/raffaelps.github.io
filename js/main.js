angular.module('pessoal', [])
  .controller('defaultController', function($scope, $http) {
    
    $http.get('/itunes.php').
    success(function(data, status, headers, config) {
      $scope.apps = data.results;
    }).
    error(function(data, status, headers, config) {
      // called asynchronously if an error occurs
      // or server returns response with an error status.
    });
    
  });