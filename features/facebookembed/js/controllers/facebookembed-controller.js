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
                $scope.facebookPage = '<iframe class="resp-iframe" src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2F'+$scope.payout.settings.page_name+'%2F&tabs='+$scope.payout.settings.tabs+'&width='+$scope.payout.settings.width+'&height='+$scope.payout.settings.height+'&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId" width="'+$scope.payout.settings.width+'" height="'+$scope.payout.settings.height+'" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allow="encrypted-media"></iframe>';
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
