<?php
	$str = array(
		"博客类" => array(
			"https://www.csdn.net/"=>"CSDN",
			"https://www.cnblogs.com/" => "cnblogs",	
		),
		"视频教程" => array(
			"https://chuanke.baidu.com/"=>"chuanke",
			"https://ke.qq.com/"=>"tengxunketang",
			"https://www.icourse163.org"=>"chinamooc",
			"https://mooc.guokr.com/"=>"moocxueyuan",
			"https://www.imooc.com/"=>"imooc",
			"http://www.xuetangx.com/"=>"xuetang",
			"http://www.mooc.cn/"=>"moocchina",
			"http://study.163.com/"=>"wangyiyunketang",
			"http://www.51cto.com/"=>"51cto",
			"https://www.oschina.net/"=>"oschina"
		),
		"搜索引擎" => array(
			"https://cn.bing.com/" => "bing",
			"https://www.google.com.hk" => "google",
			"https://www.baidu.com" => "baidu",
		),
		"文档教程" => array(
			"http://www.runoob.com/" => "runoob",
			"http://www.w3school.com.cn/" => "w3school",
			"http://man.linuxde.net/" => "Linuxcommand",
			"https://www.shiyanlou.com/"=>"shiyanlou",
		),
		"资源下载" => array(
			"http://www.jb51.net/" => "jiaobenzhijia",
			"https://www.gitbook.com/" => "gitbook",
			"https://www.kancloud.cn/explore" => "kanyun"
		),
		"工具" => array(
			"http://www.github.com" => "github",
			"https://paste.ubuntu.com/" => "ubuntuPaste",
			"https://www.bejson.com/" => "convert"
		)
    );
	echo json_encode($str);
?>
