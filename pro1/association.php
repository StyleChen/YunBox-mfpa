<?php
    include "common/header.php";
?>
<link rel="stylesheet" href="css/assoca.min.css">
<div class="wrap">

    <aside class="col-md-3">
        <h3 class="h3-title text-center">协会简介</h3>
        <ul class="aside-ul text-center">
            <li class="aside-active"><a href="#"><i></i>协会简介</a></li>
            <li><a href="#"><i></i>协会历史</a></li>
            <li><a href="#"><i></i>协会组织结构</a></li>
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
        <h4 class="text-center">你当前的位置: <span>首页</span> — <span>协会</span> — <span>协会简介</span></h4>
        <h3 class="text-center">协会概要</h3>
        <p>国际口足画艺协会于1956年发起，1957年在瑞士正式成立，迄今已超过半世纪，目前有800多位会员，分布在世界各地，包罗不同种族、文化宗教、思想，每年有固定的会议、画展交流等活动。</p>
        <p>协会旨在帮助全世界的口足艺术家，通过自身努力，创作艺术作品，以自己的付出换取劳动的果实。展现出口足艺术家们热爱艺术与生命的精神</p>
        <p>目前，国内有刘京生、王永春、杨杰、林成娒、谢子铭、胡林、归晓峰、黄国富等一批优秀的口足书画家。</p>
        <img class="section-img" src="images/shuhai.jpg" alt="">
    </section>


</div>

<script>
    $(function () {
        $('.aside-ul li').click(function () {
            $(this).parent().children('li').removeClass('aside-active');
            $(this).addClass('aside-active');
        })
    })
</script>
<?php
    include "common/footer.php";
?>

