<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html >

	<head>
		<meta charset="UTF-8">
		<link rel="stylesheet" href="/thinkphp3.2.3/Public/css/bootstrap.min.css" />
		<link rel="stylesheet" href="/thinkphp3.2.3/Public/css/reset.css" />
		<link rel="stylesheet" href="/thinkphp3.2.3/Public/css/background.css" />
		<script src="/thinkphp3.2.3/Public/js/jquery.min.js"></script>
		<script src="/thinkphp3.2.3/Public/js/angular.min.js"></script>
		<script src="/thinkphp3.2.3/Public/js/table.js"></script>
		<script src="/thinkphp3.2.3/Public/js/bootstrap.min.js"></script>
		<script src="/thinkphp3.2.3/Public/js/background.js"></script>
		<title></title>
	</head>

	<body data-ng-app="backApp" ng-controller="backCtrl">

		<div class="page-content">

			<div class="title">
				<p>
					<span class="glyphicon glyphicon-home"></span>
					<a href="index.html">主页</a>
					<i>&gt;</i>
					<a href="#">商品管理</a>
				</p>
			</div>
<div class="page-header">
    <h1>商品操作
        <small>增删改查</small>
    </h1>
</div>

<div class="row" ng-if="flag">
   <!--ng-class="{true:' deldata', false: ''}[$index==selectedItem]"-->
    <div class="col-sm-6 col-md-3" data-ng-repeat="x in categorie track by $index"  >
        <div class="thumbnail">
            <img ng-src="/thinkphp3.2.3/Public/{{x.prdimgsrc}}">
            <div class="caption">
                <h3 class="redcol">{{x.prdprice}}</h3>
                <p class="uheight">{{x.prdname1}}<i>{{x.prdfont1}}</i>{{x.prdi}}<i>{{x.prdfont2}}</i>{{x.prdname2}}</p>
                <p>{{x.prdpingjia}}</p>
                <p>{{x.prddianpu}}</p>
                <p>
                <button type="button" class="btn btn-info btn-sm">
  			    <span class="glyphicon glyphicon-pencil"></span>
 			        编辑
 				</button>
 				<button type="button" class="btn btn-danger btn-sm fuckyou" data-ng-click="deldata($index)">
   			    <span class="glyphicon glyphicon-remove"></span>
 			        删除
				</button>
                </p>
            </div>
        </div>
    </div>
   
</div>
</div>
	</body>

</html>