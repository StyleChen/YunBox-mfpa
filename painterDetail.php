<?php
include "common/header.php";
?>
<link rel="stylesheet" href="css/assoca.min.css">
<style>
    dt{
        margin-right: 20px;
    }
    dd h4{
        margin-top: 0;
        margin-bottom: 30px;
        color:#333;
        font-weight:bold;
    }
    dd p{
        color:#999;
    }
    .flex img{
        width: 22%;
        margin:0 10px 20px;
        vertical-align: top;
    }
    .flex h4{
        color:#333;
        font-weight:600;
    }
</style>
<div class="wrap">
    <aside class="col-md-3">
        <h3 class="h3-title text-center">画家简介</h3>
        <ul class="aside-ul text-center">
            <li class="aside-active"><a href="#"><i></i>画家列表</a></li>
            <li><a href="#"><i></i>画家画廊</a></li>
            <li><a href="#"><i></i>感谢信</a></li>
        </ul>
        <h3 class="text-center">商品推荐</h3>
        <dl class="text-center">
            <dt><img src="images/old1.jpg" alt=""></dt>
            <dd><p>￥500</p><p>国画</p></dd>
        </dl>
        <dl class="text-center">
            <dt><img src="images/old1.jpg" alt=""></dt>
            <dd><p>￥500</p><p>国画</p></dd>
        </dl>

    </aside>

    <section class="col-md-9">
        <h4 class="text-center">你当前的位置: <span>首页</span> — <span>画家简介</span> — <span>画家列表</span> — <span>胡林</span></h4>
        <h3 class="text-center">画家详情</h3>
        <div>
            <dl>
                <dt class="left"><img src="images/hulin1.JPG" alt=""></dt>
                <dd class="left">
                    <h4>胡林</h4>
                    <p>暂无</p>
                </dd>
            </dl>
            <div class="flex">
                <h4>作品</h4>
                <img src="images/hulin2.JPG" alt="">
                <img src="images/hulin3.JPG" alt="">
                <img src="images/hulin4.JPG" alt="">
                <img src="images/hulin5.JPG" alt="">
            </div>
        </div>

    </section>
    <script>
        $('.aside-ul li').click(function () {
            $(this).parent().children('li').removeClass('aside-active');
            $(this).addClass('aside-active');
        })
    </script>

</div>












<?php
include "common/footer.php";
?>
