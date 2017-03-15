<?php
    include "common/header.php";
?>
<link rel="stylesheet" href="css/assoca.min.css">
<style>
    .painter{
        /*display: -webkit-flex;
        display: flex;
        flex-flow:row wrap;
        justify-content:space-between;*/
    }
    .col-md-9{
        padding: 0;
    }
    .painter dl{
        width: 207px;
        padding:5px 10px 10px;
        border:1px solid #999;
        -webkit-border-radius:5px;
        -moz-border-radius:5px;
        border-radius:5px;
        color:#999;
        overflow: hidden;
        /*flex-grow:1;*/
        float: left;
        margin-left: 10px;
        margin-bottom: 10px;
        cursor:pointer;
    }
    .painter dl:hover dd{
        color:#FF5864;
    }
    .painter dt{
        height: 90px;
        margin-bottom: 5px;
        overflow: hidden;
    }
    .painter dt img{
        width: 90px;
    }
    .painter dt img:hover{
        -webkit-transform: scale(1.3);
        -moz-transform: scale(1.3);
        -ms-transform: scale(1.3);
        -o-transform: scale(1.3);
        transform: scale(1.3);
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
        <h4 class="text-center">你当前的位置: <span>首页</span> — <span>画家简介</span> — <span>画家列表</span></h4>
        <h3 class="text-center">画家列表</h3>
        <div class="painter text-center">
            <dl>
                <dt><img class="left" src="images/hulin1.JPG" alt=""><img class="right" src="images/hulin2.JPG" alt=""></dt>
                <dd>胡林</dd>
            </dl>
            <dl>
                <dt><img class="left" src="images/hulin1.JPG" alt=""><img class="right" src="images/hulin2.JPG" alt=""></dt>
                <dd>胡林</dd>
            </dl>
            <dl>
                <dt><img class="left" src="images/hulin1.JPG" alt=""><img class="right" src="images/hulin2.JPG" alt=""></dt>
                <dd>胡林</dd>
            </dl>
            <dl>
                <dt><img class="left" src="images/hulin1.JPG" alt=""><img class="right" src="images/hulin2.JPG" alt=""></dt>
                <dd>胡林</dd>
            </dl>
            <dl>
                <dt><img class="left" src="images/hulin1.JPG" alt=""><img class="right" src="images/hulin2.JPG" alt=""></dt>
                <dd>胡林</dd>
            </dl>
            <dl>
                <dt><img class="left" src="images/hulin1.JPG" alt=""><img class="right" src="images/hulin2.JPG" alt=""></dt>
                <dd>胡林</dd>
            </dl>
        </div>
    </section>


</div>


<script>
    $(function () {
        $('.aside-ul li').click(function () {
            $(this).parent().children('li').removeClass('aside-active');
            $(this).addClass('aside-active');
        })
        $('dl').click(function () {
            location.href = 'painterDetail.php?page=2'
        })
    })
</script>






<?php
    include "common/footer.php";
?>
