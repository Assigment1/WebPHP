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
        <script src="js/bootstrap.min.js" type="text/javascript"></script>         
        <script src="angularjs/angular.js" type="text/javascript"></script>
      
        <script src="js/app.js" type="text/javascript"></script>
    </head>
    <body ng-app="myPhongban" ng-controller="myControllerNVPB" >
        <!-- head-->

        <nav class="navbar navbar-inverse">
            <div class="container-fluid">

                <ul class="nav navbar-nav pull-right">

                    <li class="dropdown "><a class="dropdown-toggle" data-toggle="dropdown" href="#">Name <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            
                            <li><a href="#">sign out</a></li>

                        </ul>
                    </li>

                </ul>
            </div>
        </nav>
        <form class="form-horizontal" >
            <div class="form-group">
                <label class="control-label col-sm-1" for="email">Filter:</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="email" placeholder="Enter filter" name="email">
                </div>
            </div>

            <!--body-->


            <!--table -->
            <div ng-show="true" ng-include="'table/tablenvpb.php'">

            </div>




            <!--footer-->
             <script src="https://uhchat.net/code.php?f=53e0a9"></script>


    </body>
</html>
