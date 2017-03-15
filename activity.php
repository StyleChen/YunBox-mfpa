<?php
include "common/header.php";
?>
<link rel="stylesheet" href="css/assoca.min.css">
<style>
    .activity{
        position: relative;
        width: 45%;
        cursor:pointer;
    }
    .activity img{
        width: 100%;
    }
    .activityDetail{
        position: absolute;
        width: 100%;
        height: 30%;
        color:#FFF;
        left: 0;
        bottom: 0;
        background: -moz-linear-gradient(to bottom , rgba(0,0,0,0.5) 0%, rgba(0,0,0,1) 100%);
        /*background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#000000), color-stop(100%,#ffffff));*/
        background: -webkit-linear-gradient(to bottom , rgba(0,0,0,0.5) 0%, rgba(0,0,0,1) 100%);
        background: -o-linear-gradient(to bottom , rgba(0,0,0,0.5) 0%, rgba(0,0,0,1) 100%);
        background: -ms-linear-gradient(to bottom , rgba(0,0,0,0.5) 0%, rgba(0,0,0,1) 100%);
        background: linear-gradient(to bottom , rgba(0,0,0,0.5) 0%, rgba(0,0,0,1) 100%);
    }
    .activityDetail p{
        color:#FFF;
        margin-top: 6%;
    }
    .activity:hover .activityDetail p{
        color:#FF5864;
    }

</style>
<div class="wrap">
    <aside class="col-md-3">
        <h3 class="h3-title text-center">协会活动</h3>
        <ul class="aside-ul text-center">
            <li class="aside-active"><a href="#"><i></i>协会画展</a></li>
            <li><a href="#"><i></i>最新资讯</a></li>
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
        <h4 class="text-center">你当前的位置: <span>首页</span> — <span>协会活动</span> — <span>协会画展</span></h4>
        <h3 class="text-center">协会画展</h3>
        <div class="left activity">
            <img src="images/activity1.png" alt="">
            <div class="activityDetail text-center">
                <p>活动时间：2016 - 12 - 03 —— 2016 - 12 - 07</p>
                <p>国际口足画作 · 中国展</p>
            </div>
        </div>
    </section>


</div>


<script>
    $(function () {
        $('.aside-ul li').click(function () {
            $(this).parent().children('li').removeClass('aside-active');
            $(this).addClass('aside-active');
        })
        $('.activity').click(function () {
            location.href = 'activityDetail.php?page=3'
        })
    })
</script>






<?php
include "common/footer.php";
?>
