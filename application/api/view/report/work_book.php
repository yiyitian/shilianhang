<!DOCTYPE html>
<html style="background-color: rgb(255, 255, 255); font-size: 48px;">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="wap-font-scale" content="no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width,initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <title>工作计划书</title>
    <meta name="apple-mobile-web-app-capable" content="no">
    <link rel="stylesheet" type="text/css" href="/public/api/css/MultiPicker.css">
    <link rel="stylesheet" href="/public/api/css/pandastar.css">
    <link rel="stylesheet" href="/public/api/css/top.css">
    <link rel="stylesheet" href="https://www.layuicdn.com/layui-v2.5.6/css/layui.css">
    <script type="text/javascript" src="/public/api/login_js/jquery.min.js"></script>
    <script type="text/javascript" src="/public/index/layer_mobile/layer.js"></script>

    <link type="text/css" rel="stylesheet" href="/public/api/css/style.css">
</head>
<body class="">
<div class="body-container">
    <div class="header">
        <div class="box">
            <div class="L"><a onClick="javascript:history.back(-1)" class="goback"><i class="go-left"></i></a></div>
            <div class="C"><p>计划书列表</p></div>
            {notempty name="setTime"}
            <div class="R" style="position: absolute;right: 10px;top: 0;color: #fff;line-height: 39px;" id="add"><p>创建计划书</p></div>
            {/notempty}
        </div>
    </div>
    <section class="aui-flexView">
        <div class="lecture-art" style="padding-top:50px;">
            <table width="94.5%" border="0" cellspacing="0" cellpadding="0" id="grid">
                {notempty name="list"}
                    <tr style="background-color: rgb(245, 245, 245);">
                        <td  style="text-align:center;font-weight:bold;font-size:14px;background: #ded7d4">起始时间</td>
                        <td  style="text-align:center;font-weight:bold;font-size:14px;background: #ded7d4">人员</td>
                        <td  style="text-align:center;font-weight:bold;font-size:14px;background: #ded7d4">详情</td>
                    </tr>
                {/notempty}
                {volist name="list" id="vo" empty="<div style='width:100%;text-align:center'><img style='width:80%' src='/public/api/images/none.png'></div>"}
                <tr style="background-color: rgb(245, 245, 245);">
                    <td  style="text-align:center">{$vo.times|default="无"}</td>
                    <td  style="text-align:center">{$vo.uname|default="无"}</td>
                    <td  style="text-align:center"><a href="CreateWorkBook/id/{$vo.id}">查看</a></td>
                </tr>
                {/volist}
            </table>
        </div>
    </section>

    <div>


    </div>

</div>

</body>
</html>
<script>
    $('#add').click(function()
    {
        location.href="CreateWorkBook";
    })
</script>
