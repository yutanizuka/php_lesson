<?php
date_default_timezone_set('Asia/Tokyo');
$time = date('G');

$s = '';
if($s):
  echo '$sには文字が入っています。';
endif;

?>
<?php if($time < 17): ?>
  <p>* 営業時間外です</p>
<?php else: ?>
<p>ようこそ</p>
<?php endif; ?>

