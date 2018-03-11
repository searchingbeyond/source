<?php
	$str = array(
		"博客类" => array(
			"https://www.csdn.net/"=>"CSDN",
			"https://www.cnblogs.com/" => "博客园",	
		),
		"视频教程" => array(
			"https://chuanke.baidu.com/"=>"百度传课",
			"https://ke.qq.com/"=>"腾讯课堂",
			"https://www.icourse163.org"=>"中国大学MOOC",
			"https://mooc.guokr.com/"=>"mooc学院",
			"https://www.imooc.com/"=>"慕课网",
			"http://www.xuetangx.com/"=>"学堂在线",
			"http://www.mooc.cn/"=>"慕课中国",
			"http://study.163.com/"=>"网易云课堂",
			"http://www.51cto.com/"=>"51cto",
			"https://www.oschina.net/"=>"开源中国"
		),
		"搜索引擎" => array(
			"https://cn.bing.com/" => "必应",
			"https://www.google.com.hk" => "谷歌",
			"https://www.baidu.com" => "百度",
		),
		"文档教程" => array(
			"http://www.runoob.com/" => "菜鸟教程",
			"http://www.w3school.com.cn/" => "w3school",
			"http://man.linuxde.net/" => "Linux命令大全",
			"https://www.shiyanlou.com/"=>"实验楼",
		),
		"资源下载" => array(
			"http://www.jb51.net/" => "脚本之家",
			"https://www.gitbook.com/" => "gitbook",
			"https://www.kancloud.cn/explore" => "看云"
		),
		"工具" => array(
			"http://www.github.com" => "github",
			"https://paste.ubuntu.com/" => "ubuntuPaste",
			"https://www.bejson.com/" => "数据格式转换"
		)
    );
	echo json_encode($str);
?>
