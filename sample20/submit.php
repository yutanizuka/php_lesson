<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <?php if(!empty($_REQUEST['my_name'])): ?>
  <p>お名前：<?php echo htmlspecialchars($_REQUEST['my_name'], ENT_QUOTES); ?></p>
  <?php endif; ?>
</body>
</html>