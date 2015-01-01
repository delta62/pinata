define(['angular', 'text!slider/tpl.html'], function(angular, tpl) {
  angular.module('pinata', [])
    .controller('sliderController', ['$scope', function($scope) {
      $scope.a = 1;
    }])
    .directive('imageSlider', function() {
      return {
        restrict: 'E',
        template: tpl
      };
    });
});
