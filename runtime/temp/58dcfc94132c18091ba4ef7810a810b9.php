<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:103:"/Volumes/HighSierraFile/HighSierraFile/www/new/tp2/public/../application/index/view/artlist/artlist.htm";i:1525782730;s:89:"/Volumes/HighSierraFile/HighSierraFile/www/new/tp2/application/index/view/public/head.htm";i:1525614327;s:91:"/Volumes/HighSierraFile/HighSierraFile/www/new/tp2/application/index/view/public/footer.htm";i:1522395187;}*/ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>童老师ThinkPHP5交流群：484519446</title>
<meta name="description" content="童老师ThinkPHP5交流群：484519446" />
<meta name="keywords" content="童老师ThinkPHP5交流群：484519446" />
<link href="http://tp2.com/public/static/index/style/bootstrap.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" media="all" href="http://tp2.com/public/static/index/style/style.css" />
    <script src="http://tp2.com/public/static/index/style/jquery-1.4.1.min.js" type="text/javascript"></script>
    <script src="http://tp2.com/public/static/index/style/jquery.error.js" type="text/javascript"></script>
    <script src="http://tp2.com/public/static/index/style/jtemplates.js" type="text/javascript"></script>
    <script src="http://tp2.com/public/static/index/style/jquery.form.js" type="text/javascript"></script>
    <script src="http://tp2.com/public/static/index/style/lazy.js" type="text/javascript"></script>
    <script type="text/javascript" src="http://tp2.com/public/static/index/style/wp-sns-share.js"></script>
    <script type="text/javascript" src="http://tp2.com/public/static/index/style/voterajax.js"></script>
    <script type="text/javascript" src="http://tp2.com/public/static/index/style/userregister.js"></script>
<script src="http://tp2.com/public/static/index/style/bootstrap.js"></script>
    <link rel="stylesheet" href="http://tp2.com/public/static/index/style/votestyles.css" type="text/css" />
    <link rel="stylesheet" href="http://tp2.com/public/static/index/style/voteitup.css" type="text/css" />
   <link rel="stylesheet" href="http://tp2.com/public/static/index/style/list.css" type="text/css" />
</head>
<body id="list_style_2" class="list_style_2">
 <script>
 function subForm()
 {

 formsearch.submit();
 //form1为form的id
 }
 </script>
<script type="text/javascript">
    function showMask() {
        $("#mask").css("height", $(document).height());
        $("#mask").css("width", $(document).width());
        $("#mask").show();
    }
</script>
<div id="mask" class="mask" onclick="CloseMask()"></div>
<div id="header_wrap">
    <div id="header">
        <div style="float: left; width: 310px;">
            <h1>
                <a href="/" title="宽屏大气文章类--41天鹰模板">宽屏大气文章类--41天鹰模板</a>
                <div class="" id="logo-sub-class">
                </div>
            </h1>
        </div>
        <div id="navi">

<ul id="jsddm">
  <li><a class="navi_home" href="/">首页</a></li>
  <?php if(is_array($navcates) || $navcates instanceof \think\Collection || $navcates instanceof \think\Paginator): $i = 0; $__LIST__ = $navcates;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$cate): $mod = ($i % 2 );++$i;?>
  <li><a href="http://tp2.com/public/index/<?php if($cate['type'] == 1): ?>artlist<?php elseif($cate['type'] == 2): elseif($cate['type'] == 3): ?>imglist<?php endif; ?>/index/cateid/<?php echo $cate['id']; ?>"><?php echo $cate['catename']; ?></a>
    <?php if($cate['second'] != ''): ?>
    <ul>
      <?php foreach($cate['second'] as $value){ ?>
      <li><a href="http://tp2.com/public/index/<?php if($value['type'] == 1): ?>artlist<?php elseif($value['type'] == 2): elseif($value['type'] == 3): ?>imglist<?php endif; ?>/index/cateid/<?php echo $value['id']; ?>"><?php echo $value['catename']; ?></a></li>
      <?php }?>
    </ul>
    <?php endif; ?>
  </li>
  <?php endforeach; endif; else: echo "" ;endif; ?>
</ul>

            <div style="clear: both;">
            </div>


        </div>
        <div style="float: right; width: 209px;">
            <div class="widget" style="height: 30px; padding-top: 20px;">
                <div style="float: left;">
      <form  name="formsearch" action="/plus/search.php"><input type="hidden" name="kwtype" value="0" />
<input name="q" type="text" style="background-color: #000000;padding-left: 10px; font-size: 12px;font-family: 'Microsoft Yahei'; color: #999999;height: 29px; width: 160px; border: solid 1px #666666; line-height: 28px;" id="go" value="在这里搜索..." onfocus="if(this.value=='在这里搜索...'){this.value='';}"  onblur="if(this.value==''){this.value='在这里搜索...';}" />
        </form>
                        </div>
                <div style="float: left;">
                    <img src="http://tp2.com/public/static/index/images/search-new.png" id="imgSearch" style="cursor: pointer; margin: 0px;
                        padding: 0px;" onclick="subForm()"  /></div>
                <div style="clear: both;">
                </div>
            </div>
        </div>

    </div>
</div>


    <div id="wrapper">


    <div id="xh_container">
        <div id="xh_content">

        <div class="path"><a href='#'>主页</a> > <a href='/lookbike/'>单车分类</a> > </div><div class="clear"></div>
            <div class="xh_area_h_3" style="margin-top: 40px;">

                        <?php if(is_array($article) || $article instanceof \think\Collection || $article instanceof \think\Paginator): $i = 0; $__LIST__ = $article;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$art): $mod = ($i % 2 );++$i;?>
                        <div class="xh_post_h_3 ofh">
                            <div class="xh">
                                <a target="_blank" href="<?php echo url('index/article/index',array('artid' => $art['id'])); ?>" title="<?php echo $art['title']; ?>">
                                    <img src="http://<?php echo $_SERVER['HTTP_HOST'].'/'.$art['thumb']; ?>" alt="<?php echo $art['title']; ?>" height="240" width="400"></a></div>
                            <div class="r ofh">
                                <h2 class="xh_post_h_3_title ofh" style="height:60px;">
                                    <a target="_blank" href="<?php echo url('index/article/index',array('artid' => $art['id'])); ?>" title="<?php echo $art['title']; ?>"><?php echo $art['title']; ?></a>
                                </h2>
                                <span class="time"><?php echo date("Y年m月d日",$art['time']); ?></span>
                                <div class="xh_post_h_3_entry ofh" style="color:#555;height:80px; overflow:hidden;">
                                  <?php echo $art['desc']; ?>
                                </div>
                                <div class="b">
                                    <a href="<?php echo url('index/article/index',array('artid' => $art['id'])); ?>" class="xh_readmore" rel="nofollow">read
                                        more</a> <span title="<?php echo $art['great']; ?>人赞" class="xh_love"><span class="textcontainer"><span><?php echo $art['great']; ?></span></span> </span> <span title="<?php echo $art['click']; ?>人浏览" class="xh_views">
                                                    <?php echo $art['click']; ?></span>
                                </div>
                            </div>
                        </div>
                        <?php endforeach; endif; else: echo "" ;endif; ?>



                <div id="pagination"><div class="wp-pagenavi">
                <?php echo $article->render(); ?>
                </div></div>
            </div>
        </div>
        <div id="xh_sidebar">
<!-- 右侧 -->

         <div class="widget">

<div style="background: url('./style/img/hots_bg.png') no-repeat scroll 0 0 transparent;width:250px;height:52px;margin-bottom:15px;">
</div>
<ul id="ulHot">

<li style="border-bottom:dashed 1px #ccc;height:70px; margin-bottom:15px;">
<div style="float:left;width:85px;height:55px; overflow:hidden;"><a href="/lookbike/roadbicycle/110.html" target="_blank"><img src="http://tp2.com/public/static/index/images/68.png" width="83" title="环西冠军克里斯霍纳的个性化定制座驾 Trek Madone公路车" /></a></div>
<div style="float:right;width:145px;height:52px; overflow:hidden;"><a href="/lookbike/roadbicycle/110.html" target="_blank" title="环西冠军克里斯霍纳的个性化定制座驾 Trek Madone公路车">环西冠军克里斯霍纳的个性化定制座驾 Trek Ma</a></div>
</li>
<li style="border-bottom:dashed 1px #ccc;height:70px; margin-bottom:15px;">
<div style="float:left;width:85px;height:55px; overflow:hidden;"><a href="/lookbike/small/184.html" target="_blank"><img src="http://tp2.com/public/static/index/images/146.jpg" width="83" title="英式折叠车Brompton Junction 上海旗舰店" /></a></div>
<div style="float:right;width:145px;height:52px; overflow:hidden;"><a href="/lookbike/small/184.html" target="_blank" title="英式折叠车Brompton Junction 上海旗舰店">英式折叠车Brompton Junction 上海旗舰店</a></div>
</li>
<li style="border-bottom:dashed 1px #ccc;height:70px; margin-bottom:15px;">
<div style="float:left;width:85px;height:55px; overflow:hidden;"><a href="/lookbike/vintagebicycle/57.html" target="_blank"><img src="http://tp2.com/public/static/index/images/17.jpg" width="83" title="延时胶片摄影：上海复古骑行大会" /></a></div>
<div style="float:right;width:145px;height:52px; overflow:hidden;"><a href="/lookbike/vintagebicycle/57.html" target="_blank" title="延时胶片摄影：上海复古骑行大会">延时胶片摄影：上海复古骑行大会</a></div>
</li>
<li style="border-bottom:dashed 1px #ccc;height:70px; margin-bottom:15px;">
<div style="float:left;width:85px;height:55px; overflow:hidden;"><a href="/lookbike/small/199.html" target="_blank"><img src="http://tp2.com/public/static/index/images/159.jpg" width="83" title="Brompton小布2012女王纪念版" /></a></div>
<div style="float:right;width:145px;height:52px; overflow:hidden;"><a href="/lookbike/small/199.html" target="_blank" title="Brompton小布2012女王纪念版">Brompton小布2012女王纪念版</a></div>
</li>
<li style="border-bottom:dashed 1px #ccc;height:70px; margin-bottom:15px;">
<div style="float:left;width:85px;height:55px; overflow:hidden;"><a href="/lookbike/bmx/213.html" target="_blank"><img src="http://tp2.com/public/static/index/images/181.png" width="83" title="街头气息十足 Stussy 2013 秋冬系列新品LOOKBOOK" /></a></div>
<div style="float:right;width:145px;height:52px; overflow:hidden;"><a href="/lookbike/bmx/213.html" target="_blank" title="街头气息十足 Stussy 2013 秋冬系列新品LOOKBOOK">街头气息十足 Stussy 2013 秋冬系列新品LOOKB</a></div>
</li>



</ul>
                </div>

            <div class="widget portrait">
    <div>
        <div class="textwidget">
            <a href="/tougao.html"><img src="./style/img/tg.jpg" alt="鎶曠ǹ"></a><br><br>
<script type="text/javascript">BAIDU_CLB_fillSlot("870073");</script>
<script type="text/javascript">BAIDU_CLB_fillSlot("870080");</script>
<script type="text/javascript">BAIDU_CLB_fillSlot("870081");</script>
        </div>
    </div>
</div>

        </div>
        <div class="clear">
        </div>
    </div>
    <div class="boxBor"></div>

    <div class="boxBor" onclick="IBoxBor()" style="cursor:pointer;"></div>
    <script type="text/javascript">
        $(function () {
            var imgHoverSetTimeOut = null;
            $('.xh_265x265 img').hover(function () {
                var oPosition = $(this).offset();
                var oThis = $(this);
                $(".boxBor").css({
                    left: oPosition.left,
                    top: oPosition.top,
                    width: oThis.width(),
                    height: oThis.height()
                });
                $(".boxBor").show();
                var urlText = $(this).parent().attr("href");
                $("#hdBoxbor").val(urlText);
            }, function () {
                imgHoverSetTimeOut = setTimeout(function () { $(".boxBor").hide(); }, 500);
            });
            $(".boxBor").hover(
                function () {
                    clearTimeout(imgHoverSetTimeOut);
                }
                , function () {
                    $(".boxBor").hide();
                }
            );
        });
        function IBoxBor() {
            window.open($("#hdBoxbor").val());
        }
        function goanewurl() {
            window.open($("#hdUrlFocus").val());
        }
</script>

    </div>

<div id="footer_wrap">
    <div id="footer">
        <div class="footer_navi">
            <ul id="menu-%e5%b0%be%e9%83%a8%e5%af%bc%e8%88%aa" class="menu">
                <li id="menu-item-156" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-156">
                    <a href="/aboutus.html">关于我们</a></li>
                <li id="menu-item-157" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-157">
                    <a href="/news/">行业资讯</a></li>
                <li id="menu-item-158" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-158">
                    <a href="/tougao.html">我要投稿</a></li>
            </ul>
        </div>
        <div class="footer_info">
            <span class="legal">Copyright &#169; 2016-2020 qq群：484519446 版权所有&#160;&#160;&#160;<a href="#">
                琼ICP备******号</a>&#160;&#160;&#160;

        </div>
    </div>
</div>

<div style="display: none;" id="scroll">
</div>
<script type="text/javascript" src="http://tp2.com/public/static/index/style/z700bike_global.js"></script>

</body>
</html>
