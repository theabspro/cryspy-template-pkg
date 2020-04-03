app.component('home', {
    templateUrl: cryspy_template_home_template_url,
    controller: function($http, $location, HelperService, $scope, $routeParams, $rootScope, $location) {
        $scope.theme = theme;
    }
});