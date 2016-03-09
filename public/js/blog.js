(function() {
    "use strict";

    // This should be the actual name of your module
    var app = angular.module("blog", []);

    // Find the token value from the page using jQuery
    var token = $("meta[name=csrf-token]").attr("content");
    
    // Set the token as an Angular constant
    app.constant("CSRF_TOKEN", token);
    
    // Configure $http to include both your token and a flag indicating the request is AJAX
    app.config(["$httpProvider", "CSRF_TOKEN", function($httpProvider, CSRF_TOKEN) {
        $httpProvider.defaults.headers.common["X-Csrf-Token"] = CSRF_TOKEN;
        $httpProvider.defaults.headers.common["X-Requested-With"] = "XMLHttpRequest";
    }]);

    app.controller("ManagePostsController", ["$http", "$log", "$scope", function($http, $log, $scope) {
        $scope.posts = [];

        $http.get('/posts/list').then(function(response) {
            $log.info("Request complete.");
            $log.info(response);
            $scope.posts = response.data;

        }, function(response) {
            $log.error("Request failed.");

            $log.debug(response);
        });

        $scope.deletePost = function(index) {

            $scope.posts.splice(index, 1);
            $http.delete('/posts/' + index).then(function(response) {
                $log.info("Post deleted.");
                $log.info(response);
                $scope.posts = response.data;
            }, function(response) {
                $log.error("Error deleting post.");

                $log.debug(response);
            });
        };

        $scope.open = function(index) {

            $scope.post = $scope.posts[index];
            $('#modal').modal('show');
        };

        $scope.editPost = function() {

            $http.put('/posts/' + $scope.post.id, {
                'title': $scope.post.title,
                'sub_title': $scope.post.sub_title,
                'body': $scope.post.body

            }).then(function(response) {
                $log.info("Post successfully edited.");
                $log.info(response);
                $('#modal').modal('hide');

            }, function(response) {
                $log.error("Error editing post.");
                $log.debug(response);
            });
        };

        $scope.formatDate = function(date) {
            var dateOut = new Date(date);
            return dateOut;
        }; 
    }]);

    app.controller("ManageUsersController", ["$http", "$log", "$scope", function($http, $log, $scope) {
        $scope.users = [];

        $http.get('/user/list').then(function(response) {
            $log.info("Request complete.");
            $log.info(response);
            $scope.users = response.data;

        }, function(response) {
            $log.error("Request failed.");

            $log.debug(response);
        });

        $scope.deleteUser = function(index) {

            $scope.users.splice(index, 1);
            $http.delete('/user/' + index).then(function(response) {
                $log.info("User deleted.");
                $log.info(response);
                $scope.users = response.data;
            }, function(response) {
                $log.error("Error deleting user.");

                $log.debug(response);
            });
        };

        $scope.open = function(index) {

            $scope.user = $scope.users[index];
            $('#modal').modal('show');
        };

        $scope.editUser = function() {

            $http.put('/user/' + $scope.user.id, {
                'first_name': $scope.user.first_name,
                'last_name': $scope.user.last_name,
                'username': $scope.user.username

            }).then(function(response) {
                $log.info("User successfully edited.");
                $log.info(response);
                $('#modal').modal('hide');

            }, function(response) {
                $log.error("Error editing user.");
                $log.debug(response);
            });
        };

        $scope.formatDate = function(date) {
            var dateOut = new Date(date);
            return dateOut;
        }; 
    }]);
})();