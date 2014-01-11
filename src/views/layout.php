<!DOCTYPE html>
<html>
<head>
  <title></title>
  <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css" rel="stylesheet">
  <style>
    td {
      vertical-align: middle !important;
    }
  </style>
</head>
<body>
  <div id="application">
  </div>

  <?php echo isset($content) ? $content : '' ?>
  <script src="/packages/layla/module/js/libs/jquery-1.10.2.js"></script>
  <script src="/packages/layla/module/js/libs/handlebars-1.1.2.js"></script>
  <script src="/packages/layla/module/js/libs/ember-1.3.0.js"></script>
  <script src="/packages/layla/module/js/templates.js"></script>
  <script src="/packages/layla/module/js/app.js"></script>
</body>
</html>
