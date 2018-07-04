<?php

	$url = 'https://api.253.com/open/i/ocr/id-ocr';
	$params = [
		'appId' => 'xxx', // appId,登录万数平台查看
		'appKey' => 'xxx', // appKey,登录万数平台查看
		'image' => '', // 身份证照片，请确保身份证内容信息清晰可见。支持url或base64，图片大小不能大于2M，图片类型建议jpg格式，1M左右
		'imageType' => '', // 图片类型，枚举值：URL-图片路径；BASE64 –图片BASE64编码
		'ocrType' => '', // ocr类型，0表示身份证正面，1表示身份证反面
	];
	$ch = curl_init();
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
	curl_setopt($ch, CURLOPT_HEADER, 0);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($ch, CURLOPT_URL, $url);
	curl_setopt($ch, CURLOPT_POST, 1);
	curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($params));
	curl_setopt($ch, CURLOPT_TIMEOUT, 5);
	$result = curl_exec($ch);
	var_dump($result);
	exit;