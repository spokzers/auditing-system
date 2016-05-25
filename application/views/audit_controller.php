<script>
	
    var app = angular.module('myApp', []);
    app.config(['$httpProvider', function ($httpProvider) {
	  // Intercept POST requests, convert to standard form encoding
	  $httpProvider.defaults.headers.post["Content-Type"] = "application/x-www-form-urlencoded";
	  $httpProvider.defaults.transformRequest.unshift(function (data, headersGetter) {
	    var key, result = [];

	    if (typeof data === "string")
	      return data;

	    for (key in data) {
	      if (data.hasOwnProperty(key))
	        result.push(encodeURIComponent(key) + "=" + encodeURIComponent(data[key]));
	    }
	    return result.join("&");
	  });
	}]);

    app.controller('myCtrl', function($scope, $http) {
      
      $scope.dateParser = function(str){
          var compnents = str.split(" ");
          var day = compnents[0].trim();
          if(parseInt(day) < 10){
            day = "0"+day;
          }
          var month = compnents[1].split(",")[0].trim();
          var year = compnents[2].trim();
          months = {};
          months['January'] = "01";
          months['February'] = "02";
          months['March'] = "03";
          months['April'] = "04";
          months['May'] = "05";
          months['June'] = "06";
          months['July'] = "07";
          months['August'] = "08";
          months['September'] = "09";
          months['October'] = "10";
          months['November'] = "11";
          months['December'] = "12";

          date = year + "-" + months[month] + "-" + day;

          return date;
        }
          // $scope.schedule2 = function(){

          //  $scope.schedule(1); 
          // }

  	$scope.schedule = function sendDate(){
  		// console.log($scope.audit);
      $scope.audit.doa = $scope.dateParser($scope.audit.doa);
      $scope.audit.status = 1;
       // $scope.audit.launch = v;
  		$http({
  			url: '<?php echo base_url();?>index.php/audit/insert',
  			method: 'POST',
  			data: $scope.audit 
  		}).success(function(data, status, headers, config){
  			// alert(data);

        window.location = "<?php echo base_url()."index.php/audit"; ?>";
  		}).error(function(){
  			alert("Oops something went wrong");
  		});
  	}  
  
        
    });

     
</script>