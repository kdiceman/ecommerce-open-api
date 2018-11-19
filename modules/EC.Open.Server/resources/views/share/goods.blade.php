<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="cache-control" content="no-cache, no-store, must-revalidate" />
    <meta http-equiv="pragma" content="no-cache" />
    <meta http-equiv="expires" content="0" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="format-detection" content="telephone=no"/>
    <meta name="format-detection" content="email=no"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=no, shrink-to-fit=no">
    <link rel="stylesheet" href="//at.alicdn.com/t/font_285736_djlywh3u0us.css">
    <title>商品分享</title>
    <style>
        @font-face {
            font-family: 'MILANTING--GBK1-Light';
            font-weight: normal;
            font-style: normal;
        }
        body {
            font-family:"MILANTING--GBK1-Light" !important;
        }
        body,html{
            margin: 0;
            padding: 0;
        }
        #sharepage {
            background-color: #FFFFFF;
        }
        #sharepage .head {
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-align: center;
            -webkit-align-items: center;
            -ms-flex-align: center;
            align-items: center;
            -webkit-box-pack: justify;
            -webkit-justify-content: space-between;
            -ms-flex-pack: justify;
            justify-content: space-between;
            height: 42px;
            padding: 0 11px;
            background-color: #F3F5F7;
            -webkit-border-radius: 5px 0 5px 0;
            border-radius: 5px 0 5px 0;
        }
        #sharepage .head .left-box {
            font-size: 11px;
            color: #222222;
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-align: center;
            -webkit-align-items: center;
            -ms-flex-align: center;
            align-items: center;
        }
        #sharepage .head .left-box img {
            width: 22px;
            height: 22px;
            border-radius: 50%;
            margin-right: 7px;
        }
        #sharepage .head .right-box {
            font-size: 10px;
            color: rgba(34, 34, 34, 0.73);
        }
        #sharepage .head .right-box .iconfont {
            display: inline-block;
            padding-right: 5px;
        }
        #sharepage .content .center-box {
            padding: 0 6px;
            background-color: #F3F5F7;
        }
        #sharepage .content .center-box img {
            width: 100%;
            height: auto;
        }
        #sharepage .content .center-box .text {
            padding: 8px 0;
            text-align: center;
            color: #FF2741;
            font-size: 11px;
            line-height: 15px;
        }
        #sharepage .content .bottom-box {
            background-color: #FFFFFF;
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            padding: 24px 10px 17px 10px;
        }
        #sharepage .content .bottom-box .item {
            -webkit-box-flex: 1;
            -webkit-flex: 1;
            -ms-flex: 1;
            flex: 1;
        }
        #sharepage .content .bottom-box .left-item .title {
            font-size: 15px;
            color: #2E2D2D;
            line-height: 20px;
            padding-bottom: 16px;
        }
        #sharepage .content .bottom-box .left-item .origin-money {
            color: #9B9B9B;
            line-height: 14px;
            font-size: 10px;
            text-decoration: line-through;
        }
        #sharepage .content .bottom-box .left-item .sale-money {
            color: #E73237;
            font-size: 25px;
            line-height: 35px;
            padding-top: 10px;
        }
        #sharepage .content .bottom-box .rigth-item {
            text-align: center;
        }
        #sharepage .content .bottom-box .rigth-item img {
            display: inline-block;
            width: 107px;
            height: 105px;
        }
        #sharepage .content .bottom-box .rigth-item .txt {
            padding-top: 10px;
            color: #2E2D2D;
            font-size: 10px;
            line-height: 17px;
        }

    </style>
</head>
<body>
<div id="sharepage">
    <div class="head">
        <div class="left-box">
            @if($avatar)
                <img src="{{$avatar}}" alt="">
            @else
                <img src="https://img.alicdn.com/tps/TB1ld1GNFXXXXXLapXXXXXXXXXX-200-200.png" alt="">
            @endif
            <span>{{$nick_name}}</span>
        </div>
        <div class="right-box">
            <span class="iconfont icon-zan"></span>
            <span>力荐的时尚全能好货</span>
        </div>
    </div>
    <div class="content">
        <div class="center-box">
            <img src="{{$goods->img}}" alt="">
            <div class="text">米尔优选；为您挑选全球好货</div>
        </div>
        <div class="bottom-box">
            <div class="left-item item">
                <div class="title">{{$goods->name}}</div>
                <div class="origin-money">
                    原价
                    <span style="font-family: 'Microsoft Yahei, Tahoma, Arial, Helvetica, sans-serif'">￥</span>
                    {{$goods->market_price}}
                </div>
                <div class="sale-money">
                    <span style="font-family: 'Microsoft Yahei, Tahoma, Arial, Helvetica, sans-serif'">￥</span>
                    {{$goods->sell_price}}</div>
            </div>
            <div class="rigth-item item">
                <img src="{{$filename}}" alt="">
                <div class="txt">扫描或长按 识别二维码</div>
            </div>
        </div>
    </div>
</div>

</body>
</html>