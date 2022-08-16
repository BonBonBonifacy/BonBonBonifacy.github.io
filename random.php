<?php
//初始化随机数生成器种子，这行代码也可以删除
$seed = time();
//获取随机数
$num = mt_rand(0,11);
//拼接图片地址
$picpath = "https://cdn.jsdelivr.net/gh/BonBonBonifacy/BonBonBonifacy.github.io@pictures/"$num.".jpg";
//重定位到图片
die(header("Location: $picpath"));
?>
