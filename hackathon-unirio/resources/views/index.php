<!DOCTYPE html>
<html lang="en" ng-app="monitori">
<head>
  <meta charset="UTF-8">
  <base href="./">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="css/main.min.css">
  <link href="https://fonts.googleapis.com/css?family=Catamaran:900" rel="stylesheet">
  <title>Monitori - Rede de Monitoria</title>
</head>
<body>
  <div ng-include src="'views/menu.html'" ng-controller="MenuController"></div>
  <div ng-view></div>
<script src="js/angular.min.js"></script>
<script src="js/angular-route.min.js"></script>
<script src="js/app.js"></script>
<script src="js/scripts.min.js"></script>
<script src="js/controllers/login-controller.js"></script>
<script src="js/controllers/home-controller.js"></script>
<script src="js/controllers/menu-controller.js"></script>
<script src="js/controllers/meu-painel.js"></script>
<script src="js/controllers/oferecer-monitoria.js"></script>
<script src="js/controllers/buscar-monitoria.js"></script>
</body>
</html>
