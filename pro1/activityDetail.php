<?php
include "common/header.php";
?>
<link rel="stylesheet" href="css/assoca.min.css">
<style>
    .activity img{
        width: 45%;
        margin:0 2%;
    }
    .activity p{
        line-height: 3rem;
        font-size:18px;
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
            <p>
                丹青争艳，翰墨飘香……当一幅幅精美的艺术作品呈现在大家面前，真的很难让人相信，它们竟出自一群失去手臂的残疾人之“手”。
            </p>
            <p>
                昨天是国际残疾人日，由国际口足画艺协会主办，中华儿女美术馆和国际口足画艺文创空间联合承办的“国际口足画作·中国展”在厦门中华儿女美术馆盛大开幕。由国际口足画艺协会收集珍藏的来自全球十几个国家的近百幅口足画作精品，第一次与厦门市民见面
            </p>
            <p>
                上午9点开始，近400名市民在十几平方米的画卷上涂鸦签到。紧接着，11名口足画家嘴“握”画笔，瞬间勾勒出一幅美好绚丽的《百花齐放图》。随后，音乐响起，来自厦门市特殊教育学校艺术团的同学们带来了精彩的文艺演出，她们如绽放的花朵翩翩起舞。“国际口足画艺协会的画家们，每一笔、每一划都凝聚着超过常人数倍的努力，虽然不能用手作画，但依然以极大的生命热忱，绘出万千世界。”台湾著名画家谢坤山，16岁时因工伤事故失去了一条腿、两只手,后来又失去了一只眼睛，但口足画让他找回新的人生。
            </p>
            <p>
                活动现场，中华儿女美术馆动静皆宜。一楼多个“空间”热闹非凡：“体验空间”让市民们现场感受口足画家用嘴、用脚作画的震撼，也亲身体验了一次“口足”作画；“历史空间”有热情洋溢的义工精彩讲解，参观市民对口足画协会60年的发展频频点赞；“文创空间”不仅展示了美轮美奂的画作和匠心独具的文创衍生品，更展现了口足画艺快乐的缘起和执着的感动。
            </p>
            <p>
                据悉，国际口足画艺协会成立60年来，已培养出78个国家和地区的800多名残疾人成为口足画家。他们通过绘画不仅仅实现了经济独立，更获得了生命的尊严，成就了回报社会的最初梦想。
            </p>
            <img src="images/activity1.png" alt="">
            <img src="images/activityD1.jpg" alt="">
            <img src="images/activityD2.jpg" alt="">
            <img src="images/activityD4.jpg" alt="">
            <img src="images/activityD5.jpg" alt="">
        </div>
    </section>


</div>


<script>
    $('.aside-ul li').click(function () {
        $(this).parent().children('li').removeClass('aside-active');
        $(this).addClass('aside-active');
    })
</script>






<?php
include "common/footer.php";
?>
