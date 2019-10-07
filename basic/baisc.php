<!DOCTYPE html>
<html lang="en-US">
<body>
<div ng-app="angularLatest">
  <!-- <p>Name : <input type="text" ng-model="name"></p>
  <h1>Hello {{name}}</h1> -->
  <div ng-controller="consoleControl as cnt">
  {{ cnt.msg }}
  {{ cnt.sess }}
	  {{ cnt.student.name }}
  
  </div>
</div>
</body>
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>
<script src="app.js"></script>
</html>