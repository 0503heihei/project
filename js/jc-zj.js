/**
 * Created by dllo on 16/9/19.
 */

var a = ["塔塔 TATA","侯烨","裘莎莎","魏萌","小Q","淘淘","朱志摩"];
var b = ["葡星男孩－外星学霸<br>高IQ低EQ的傲娇男孩, 腰间携带高级智能武器<br>性格：有担当、理想主义、易冲动、自恋、伪高冷<br>追求：成为星际探险家<br>弱点：不善于面对突发事件","人类男孩-地球学渣<br>高EQ的闷骚男孩，面冷心热的模型高手<br>性格：模型控、重情义、有感染力、张扬不羁<br>追求：保护塔塔<br>弱点：患有乳糖不耐症","人类女孩-伪淑女学霸<br>学习成绩极佳的富家千金<br>性格：热血侠气、善良、行动派、易冲动<br>追求：代表葡萄附小，参加科技大赛并获得名次<br>弱点：被人吐槽后，会变成暴走状态","候烨妈妈-工作狂医生<br>工作中很严谨，生活中很呆萌<br>性格：直爽热情<br>追求：治愈每一位病患<br>弱点：以自我为中心","葡星生物-塔塔宠物<br>能被任意拉伸变形，生命力极强的吃货<br>性格：呆萌、忠诚<br>追求：保护主人塔塔，永不断粮<br>弱点：吃栗子后全身过敏，遇到盐会脱水变干变扁","地球赤狐-朱志摩宠物<br>智商有时爆表，有时弱智，来自东北的傲娇赤狐<br>性格：机智、腹黑、逗比<br>追求：重回东北老家<br>弱点：智商掉线时变笨蛋","人类男孩-超级英雄的狂热粉<br>热血少年、民间科学家<br>性格：耿直、中二、信念坚定<br>追求：成为超级英雄<br>弱点：做事一根筋，不善交友，体力差"]
$(".head-list a").each(function (i,ele) {
    $(this).on("click",function () {
        $(".p-big img").attr("src","img/p3_16"+i+".png");
        $(".down-con h2").text(a[i]);
        $(".ip_name_content p").html(b[i]);
    })
})

$(".video_btn").on("click",function () {
    $(".mark").show();
    $(".video_pop").show().animate({
        top: "50%",
        opacity: 1
    })
})

$(".video_close_btn").on("click",function () {
    $(".mark").hide();
    $(".video_pop").hide();
})

$(".index_footer_weidu").mouseenter(function() {
    $(".erweima").show();
})
$(".index_footer_weidu").mouseleave(function() {
    $(".erweima").hide();
})

$(".menu a").each(function (i, ele) {
    $(this).mouseenter(function () {
        $(".menu-txt p").eq(i).show();
    })
    $(this).mouseleave(function () {
        $(".menu-txt p").hide();
    })
})

$(".member-2 li").each(function (i,ele) {
    $(this).mouseenter(function () {
        $(".fanpai").eq(i).animate({
            top: "-420px"
        })
    })
    $(this).mouseleave(function () {
        $(".fanpai").eq(i).animate({
            top: 0
        })
    })
})

$(".zj_con-5 a").on("click",function () {
    $(this).hide();
    $(".list").animate({
        height: "1638px"
    })
})

