<?php require VDIR.'/header.php' ?>

<h1><?php echo @$title ?></h1>
<p><?php echo @$text ?></p>

<p><a href="<?php echo controller::url('default', 'test')?>">Test sayfası için tıklayın</a></p>
<p><a href="<?php echo controller::url('default', 'aaaa')?>">aaaa sayfası için tıklayın</a></p>

<p>deneme</p>
<?php require VDIR.'/footer.php' ?>
