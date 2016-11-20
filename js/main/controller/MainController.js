app.controller('MainController', MainController);

function MainController($scope, MainService){

    init();
    function init(){
      console.log('ok 200');
      hrefAPI();
      $scope.showBtn = function(name){
        $scope.type=name; 
      };
      $scope.suf = function(){
        $scope.href = MainService.suf($scope.href);
      };
    }
  
    function hrefAPI(){
      MainService.json('model/main/href-api.php').then(function(data){
        
        data = MainService.suf(data);
        
        console.log(data);
        $scope.href =data;
      });
    }
}