<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
       
        <meta charset="UTF-8">
        <title></title>
        
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="css/stype.css" rel="stylesheet" type="text/css"/>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js"></script>
        <script src="js/bootstrap.min.js" type="text/javascript"></script>
        <script src="angularjs/angular.js" type="text/javascript"></script>
        <script src="js/app.js" type="text/javascript"></script>
    </head>
    <body>
        
        <div ng-app="myAngular" ng-controller="myAgur">
            <div  ng-include="'table/tableAdmin'"></div>
        </div>
            
    </body>
</html>
