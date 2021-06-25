<?php

function st($param) {
    return 'http://127.0.0.1:8000/' . $param;
}

function treeLevel(array $data, string $html = '---', int $pid = 0, int $level = 0) {
    static $arr = [];
    foreach ($data as $val) {
        if ($val['pid'] == $pid) {
            $val['html'] = str_repeat($html, $level);
            $val['level'] = $level + 1;
            $arr[] = $val;
            treeLevel($data, $html, $val['id'], $val['level']);;
        }
    }
    return $arr;
}

function subTree(array $data, int $pid = 0) {
    $arr = [];
    foreach ($data as $val) {
        if ($val['pid'] == $pid) {
            $val['sub'] = subTree($data, $val['id']);
            $arr[] = $val;
        }
    }
    return $arr;
}


/**
 * 发起请求
 * @param  strin $url url地址
 * @param  string|array $ret 请求体
 * @param  string $file 上传的文件绝对地址
 * @return [type]       [description]
 */
function http_request($url, $ret = '', $file = '') {
    if (!empty($file)) {  // 有文件上传
        # php5.5之前 '@'.$file;就可以进地文件上传
        # $ret['pic'] = '@'.$file;
        # php5.6之后用此方法
        $ret['media'] = new CURLFile($file);
    }
    // 初始化
    $ch = curl_init();
    // 相关设置
    # 设置请求的URL地址
    curl_setopt($ch, CURLOPT_URL, $url);
    # 请求头关闭
    curl_setopt($ch, CURLOPT_HEADER, 0);
    # 请求的得到的结果不直接输出，而是以字符串结果返回  必写
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    # 设置请求的超时时间 单位秒
    curl_setopt($ch, CURLOPT_TIMEOUT, 30);
    # 设置浏览器型号
    curl_setopt($ch, CURLOPT_USERAGENT, 'MSIE001');

    # 证书不检查
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);

    # 设置为post请求
    if ($ret) { # 如果 $ret不为假则是post提交
        # 开启post请求
        curl_setopt($ch, CURLOPT_POST, 1);
        # post请求的数据
        curl_setopt($ch, CURLOPT_POSTFIELDS, $ret);
    }
    // 发起请求
    $data = curl_exec($ch);
    // 有没有发生异常
    if (curl_errno($ch) > 0) {
        // 把错误发送给客户端
        echo curl_error($ch);
        $data = '';
    }
    // 关闭请求
    curl_close($ch);
    return $data;
}
