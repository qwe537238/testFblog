<?php 
/*
 *   define PWD for file
 *   define SCRIPT
 *     require include file
 *     <html
 *       require JS to make window popup
 *       <?php require title include file ?>
 *       make a loop to show  pictures
 *     /html>
 */
define('PWD',537238);
define('SCRIPT','q');//use define to choose the title css this php
//will use
require 'includes/common.inc.php';
if(isset($_GET['num'])&&isset($_GET['path'])){
    if(is_dir(ROOT_PATH.$_GET['path'])){
        
    }
    else
    {alertBack('illegal');
    }
}else{
    alertBack('illegal');
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="zh-CN">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="Content-Language" content="zh-CN" />
<?php require 'includes/title.inc.php';?>
<script type="text/javascript" src="js/opener.js"></script>
<style type="text/css" media="all">
</style>
<!-- 其他文档头元素 -->
</head>
<body>

<div id="face">
  <h3>
  choose your icon
  </h3>
  <dl>
  <?php foreach (range(1,9) as $num){ //for($i=0;$i<10;$i++){ ?>
    <dd><img src="face/00<?php echo $num?>.jpg" alt="face/00<?php echo $num?>.jpg" title="icon<?php echo $num ?>" onclick="_opener(this.src)"/></dd>
  <?php     }?>
  </dl>
<!--   left this part remain unchanged, cause i have no gif for this function -->
  <dl>
  <?php foreach (range(10,99) as $num){ //for($i=0;$i<10;$i++){ ?>
    <dd><img src="face/0<?php echo $num?>.jpg" alt="face/0<?php echo $num?>.jpg" title="icon<?php echo $num ?>" onclick="_opener(this.src)"/></dd>
  <?php     }?> 
  </dl>
</div>




</body>
</html>