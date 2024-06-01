/**
 * facebookembed Home version 1 controllers
 */
angular
    .module('starter')
    .controller('FacebookembedHomeController', function (Dialog, Loader, $sce, Application, Facebookembed, $scope, $state, $stateParams) {
        $scope.value_id = Facebookembed.value_id = $stateParams.value_id;
        $scope.payout = {};
        $scope.facebook_url = '';

 		$scope.loadContent = function () {
            $scope.is_loading = true;
	        Loader.show();
	        Facebookembed.findAll().success(function (data) {
	            $scope.page_title = data.page_title;
	            $scope.payout = data;
			    $scope.facebookPage = '<div class="elfsight-app-'+$scope.payout.settings.page_name+'" data-elfsight-app-lazy></div>';
				Loader.hide();
                $scope.is_loading = false;                            
	             
	        }).error(function (error) {
	            Loader.hide();
	            $scope.is_loading = false;  
	            Dialog.alert($translate.instant("Error", "facebookembed") ,error.message , "OK", -1, "facebookembed");         
	        }).finally(function () {          
	            $scope.$broadcast('scroll.infiniteScrollComplete');
	        });
        };
        
        $scope.loadContent();
 
});
