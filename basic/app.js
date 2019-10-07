(function(){
var app = angular.module('angularLatest',[]);
 app.controller('consoleControl',function(){
	 this.sess="this is test";
	 this.msg ="Hello";
	 console.log("Hello Test");
  var student ={};
  student.name = "Ritesh";
  student.age ="29";
  this.student = student;
	 
 });		
})();
