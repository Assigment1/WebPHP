<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Login</title>
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="css/stype.css" rel="stylesheet" type="text/css"/>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
        <script src="js/bootstrap.min.js" type="text/javascript"></script>         
        <script src="angularjs/angular.js" type="text/javascript"></script>
        <script src="js/app.js" type="text/javascript"></script>

    </head>
    <body ng-app="myAdmin"  ng-controller="myControllerTab">
        <!-- head-->

        <nav class="navbar navbar-inverse">
            <div class="container-fluid">

                <ul class="nav navbar-nav pull-right">

                    <li class="dropdown "><a class="dropdown-toggle" data-toggle="dropdown" href="#">nguyen van a<span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="#">Edit</a></li>
                            <li><a href="Login.php">sign out</a></li>

                        </ul>
                    </li>

                </ul>
            </div>
        </nav>

        <!--body-->
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-7">
                    <ul class="nav nav-tabs">
                        <li id="list" class="active" ><a href="#" ng-click="click('list')"   id="showlist"><span class="glyphicon glyphicon-align-justify"></span> List View</a></li>
                        <li id="add"><a href="#" ng-click="click('add')"  id="showadd"><span class="glyphicon glyphicon-plus"></span> Add Person</a></li>
                    </ul>
                </div>
                <div class="col-sm-5">
                    <form class="form-inline">
                        <div class="form-group">
                            <label for="email">Filter:</label>
                            <input type="text" class="form-control" ng-model="txtSearch" id="seach" placeholder="seach name ...." id="myInput" onkeyup="myFunction()" >
                        </div>                    
                      
                    </form>
                </div>

            </div>


        </div>
        <br>
        <!--table -->
        <div ng-show="listselect" ng-include="'table/tableAdmin.php'">
            
        </div>
        <div ng-show="!listselect" ng-include="'table/addperson.php'">
            
        </div>
       
        <br><br>
        
        
        
        <!--footer-->
        <nav class="nav navbar-inverse navbar-fixed-bottom">
            <a><center>editor's Loi</center></a>
        </nav>




    </body>
</html>
