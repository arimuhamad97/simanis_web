angular.module('myApp.controllers')
    .controller('UserCtrl', ['$http', '$scope', '$window',
        function ($http, $scope, $window) {

            $scope.kecamatanArray = [];
            $scope.desaArray = [];

            $scope.filterData = {
                id_kabupaten: null,
                id_kecamatan: null,
                id_kelurahan: null
            };

            if ($window.user != null) {
                $scope.filterData.id_kabupaten = $window.user.id_kabupaten;
                $scope.filterData.id_kecamatan = $window.user.id_kecamatan;
                $scope.filterData.id_kelurahan = $window.user.id_kelurahan;
                $scope.kecamatanArray = $window.kecamatan;
                $scope.desaArray = $window.desa;
            }

            

            $scope.getKecamatan = function () {
                $http({
                    url: '/api/kabupaten/' + $scope.filterData.id_kabupaten + '/kecamatan',
                    method: 'GET'
                }).then(function (data) {
                    $scope.kecamatanArray = data.data;
                    $scope.desaArray = [];
                    $scope.filterData.id_kecamatan = null;
                });
            }

            $scope.getDesa = function () {
                $http({
                    url: '/api/kecamatan/' + $scope.filterData.id_kecamatan + '/kelurahan',
                    method: 'GET'
                }).then(function (data) {
                    console.log(data);
                    $scope.desaArray = data.data;
                    $scope.rwArray = [];
                    $scope.filterData.id_kelurahan = null;
                });
            }

        }])
