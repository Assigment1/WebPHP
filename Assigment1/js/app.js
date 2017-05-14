

var myAdmin = angular.module("myAdmin",[]);
myAdmin.controller("myControllerTab",function($scope){
    $scope.listselect = true;
   $scope.click = function (click) {
        if (click == 'list') {
            $scope.listselect = true;
            $('#list').addClass('active');
            $('#add').removeClass('active');
            
        } else {
            $scope.listselect = false;
            $('#add').addClass('active');
            $('#list').removeClass('active');
        }
    }
});

var myPhongban = angular.module("myPhongban",[]);
myPhongban.controller("myControllerNVPB",function($scope){
    
});

var myQlpb = angular.module("myQlpb",[]);
myQlpb.controller("myControllerQLPB",function($scope){
    
});

var myNvpns = angular.module("myNvpns",[]);
myNvpns.controller("myControllerNVPNS",function($scope){
    
});

var myQlpns = angular.module("myQlpns",[]);
myQlpns.controller("myControllerQLPNS",function($scope){
    
});

var myNvkt = angular.module("myNvkt",[]);
myNvkt.controller("myControllerNVKT",function($scope){
    
});