<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    <meta name="renderer" content="webkit|ie-comp|ie-stand">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport"
          content="width=device-width,initial-scale=1,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no"/>
    <meta http-equiv="Cache-Control" content="no-siteapp"/>

    @include('admin.common._css')
    @yield('css')
{{--    <title>用户管理</title>--}}
</head>
<body>
@yield('cnt')


<!--请在下方写此页面业务相关的脚本-->
@include('admin.common._js')
@include('admin.common._datatable')
@yield('js')
</body>
</html>