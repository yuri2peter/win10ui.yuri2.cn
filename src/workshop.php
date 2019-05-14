<!DOCTYPE html>
<html lang="cn">
<head>
    <meta charset="UTF-8">
    <title>WIN10-UI 创意工坊</title>
    <script src="https://unpkg.com/vue/dist/vue.js"></script>
    <script src="http://ajax.aspnetcdn.com/ajax/jQuery/jquery-2.2.4.min.js"></script>
    <link href="//netdna.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <script type="text/javascript" src="http://win10ui.yuri2.cn/src/component/layer-v3.0.3/layer/layer.js"></script>
    <style>
        .item{
            margin: 2em 1em;
            background-color: transparent;
            padding: 2em;
            transition: all 0.4s;
        }
        .item:hover{
            background-color: #e5e5e5;
        }
        .item .link-picture{
            display: block;
            width: 40%;
            float: left;
        }
        .item .picture{
            width:100%;
        }
        .item .title{
            font-size: 40px;
            font-weight:bold;
            color: #5d5d5d;
        }
        .item .box-desc{
            padding:0 3%;
            float: left;
            width: 50%;
        }
        .item .detail{
            text-align: right;
            line-height: 1.5em;
            font-size: 12px;
            margin: 2em 0;
        }
        .item .detail span{
            color: grey;
            margin-left: 2em;
        }
        .item .desc{
            word-break: break-all;
            text-indent:2em;
            line-height: 1.5em;
            overflow: hidden;
            max-height:9em;
            color: #5d5d5d;
        }
        .clear-float{
            clear: both;
        }
        @media screen and (max-width:768px){
            .item .link-picture{
                display: block;
                width: 100%;
            }
            .item .picture{

            }

            .item .box-desc{
                width: 100%;
            }
        }

        #copyright{
            font-size: 12px;
            color: grey;
            padding: 3px;
            background-color: white;
            cursor: none;
            text-align: right;
        }

        #title-main{
            font-size: 60px;
            font-weight:bold;
            color: #2F4056;
            text-align: center;
            margin-top: 1em;
        }
        #title-desc{
            font-size: 18px;
            /*font-weight:bold;*/
            color: darkgrey;
            text-align: center;
            margin-top: 0.5em;
            margin-bottom: 2em;
        }
        #btn-my-share{
            font-size: 22px;
            border-radius: 0.6em;
            background-color: #1E9FFF;
            color: white;
            margin: 0 auto;
            width: 12em;
            text-align: center;
            line-height: 2.5em;
            cursor: pointer;
            transition: all 0.4s ;
        }
        #btn-my-share:hover{
            background-color: #197bc5;
        }
    </style>
    <script>
        $(function () {
            $("#btn-my-share").click(function () {
                layer.alert("&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;请通过官方群@管理来分享你的作品，或发送邮件至yuri2peter@qq.com。" +
                    "<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;我们将在有生之年推出在线提交审核的机制，敬请期待（才不是因为懒一直不做呢）。")
            });
            var download='http://pan.baidu.com/s/1jHG3Rx0';
            var tips='网盘下载';
            var app=new Vue({
                el:'#app',
                data:{
                    items:[
                        {
                            title:'【插件】桌面图标分组',
                            version:'1.2',
                            author:'尤里2号',
                            date:'2018/01/23',
                            desc:'图标太多？分组+弹窗快速解决(感谢二群的“迷糊”同学发掘出了多级菜单的属性，v1.1生效)',
                            img:'http://win10ui.yuri2.cn/src/img/workshop/drawer.png',
                            tips:tips,
                            link:download,
                        },
                        {
                            title:'【动态壁纸】字符雨',
                            version:'1.0',
                            author:'素材来源于网络',
                            date:'2017/9/20',
                            desc:'电影《黑客帝国》中炫酷的字符雨效果',
                            img:'http://win10ui.yuri2.cn/src/img/workshop/live-wallpaper-character-rain.png',
                            tips:tips,
                            link:download,
                        },
                        {
                            title:'【动态壁纸】小行星',
                            version:'1.0',
                            author:'素材来源于网络',
                            date:'2017/9/20',
                            desc:'漂亮的星空+小行星动态壁纸',
                            img:'http://win10ui.yuri2.cn/src/img/workshop/live-wallpaper-planet.png',
                            tips:tips,
                            link:download,
                        },
                        {
                            title:'【主题】MAC苹果风格',
                            version:'1.0',
                            author:'青春゛沾染的忧伤〆',
                            date:'2017/8/31',
                            desc:'一款别致的mac风格主题包。看腻了Win10的界面吗？来试试我大苹果！',
                            img:'http://win10ui.yuri2.cn/src/img/workshop/mac-skin.jpg',
                            tips:tips,
                            link:download,
                        },
                        {
                            title:'【插件】动态选择壁纸',
                            version:'1.0',
                            author:'宝通&尤里2号',
                            date:'2017/9/19',
                            desc:'预览、切换、上传你的壁纸~    PS:请仔细阅读压缩包的README文档',
                            img:'http://win10ui.yuri2.cn/src/img/workshop/plugin-theme-pic-switcher.png',
                            tips:tips,
                            link:download,
                        },
                        {
                            title:'【插件】openUrl自动绑定',
                            version:'2.0',
                            author:'vG',
                            date:'2017/8/19',
                            desc:'win10_bind_open_windows.js 通过约定的标签属性，自动绑定openUrl函数，不需要js代码的参与，为DOM元素打开子窗口提供了更加优雅的方式，足以满足大部分的使用场景。[注意]v1.1.2.3之后WIN10-UI已经合并了此插件，无须单独引入。',
                            img:'http://win10ui.yuri2.cn/src/img/workshop/plugin-shortcut-open.png',
                            tips:tips,
                            link:download,
                        },
                        {
                            title:'【插件】禁用桌面图标自动隐藏',
                            version:'1.0',
                            author:'尤里2号',
                            date:'2017/09/14',
                            desc:'disable_shortcuts_hidden.js 支持禁用/开启桌面图标自动隐藏功能。一部分用户希望桌面图标不要自动隐藏，所以尤里写了这个小插件，让各位可以自行决定要不要隐藏~',
                            img:'http://win10ui.yuri2.cn/src/img/workshop/disable_shortcuts_hidden.png',
                            tips:tips,
                            link:download,
                        },
                        {
                            title:'【资源】WIN10系统图标大全',
                            version:'1.0',
                            author:'安震110',
                            date:'2017/09/07',
                            desc:'WIN10系统的原生图标300+大放送！',
                            img:'http://win10ui.yuri2.cn/src/img/workshop/os-icons.png',
                            tips:tips,
                            link:download,
                        },
                    ]
                }
            })
        })
    </script>
</head>
<body>
    <div id="title-main"><i class="fa fa-cogs"></i> WIN10-UI 创意工坊</div>
    <div id="title-desc">——WIN10-UI官方插件、主题包、扩展包分享平台——</div>
    <div id="btn-my-share">立即分享我的作品</div>
    <!--<hr/>-->
    <div id="app">
        <div class="item" v-for="item in items">
            <a :title="item.tips" class="link-picture" target="_blank" :href="item.link"><img class="picture" :src="item.img" /></a>
            <div class="box-desc">
                <div class="title">{{item.title}}</div>
                <div class="detail">
                    <span><i class="fa fa-flag"></i> {{item.version}}</span>
                    <span><i class="fa fa-user-secret"></i> {{item.author}}</span>
                    <span><i class="fa fa-calendar"></i> {{item.date}}</span>
                </div>
                <div class="desc">{{item.desc}}</div>
            </div>
            <div class="clear-float"></div>
        </div>
    </div>
    <div id="copyright">
        创意工坊发布的第三方作品版权归作品原作者所有，禁止未经原作者允许的转载、修改和再发布行为
    </div>
</body>
</html>