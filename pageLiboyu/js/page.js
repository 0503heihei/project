/**
 * Created by dllo on 16/9/19.
 */

$(function () {
    $(".pagination li").each(function () {
        $(this).bind("click",function () {
            var page=$(this).attr('class');
            $.pjax({
                url: 'changePage.php?page='+page,
                container: '.wrap'
            })
        });
    });
    $(".nav-left li").each(function () {
        $(this).bind("click",function () {
            var page=$(this).attr('class');
            $.pjax({
                url: 'changePage.php?page='+page,
                container: '.wrap'
            })
        });
    });
    $(".list-wrap>ul>li").each(function () {
        $(this).bind("click",function () {
            var page=$(this).attr('class');
            $.pjax({
                url: 'changePage.php?page='+page,
                container: '.wrap'
            })
        });
    });

    $(".nav-left2>li>a").each(function () {
        $(this).bind("click",function () {
            var page=$(this).attr('class');
            $.pjax({
                url: 'changePage.php?page='+page,
                container: '.wrap'
            })
        })
    });
    $("#nav-bottom>li>a").each(function () {
        $(this).bind("click",function () {
            var page=$(this).attr('class');
            $.pjax({
                url: 'changePage.php?page='+page,
                container: '.wrap'
            })
        })
    });
    $("#dropdown>a").each(function () {
        $(this).bind("click",function () {
            var page=$(this).attr('id');
            $.pjax({
                url: 'changePage.php?page='+page,
                container: '.wrap'
            })
        })
    });
    
    //logo-share
    $(".icons>li").eq(5).on("click",function () {
        $(".share-logo li").show();
    });
    $(".share-logo").on("click",function () {
        $(".share-logo li").hide();
    });
    $(".icons>li").eq(0).on("mouseenter",function () {
        $(".share-many").show();
    });
    $(".share-many").on("mouseleave",function () {
        $(".share-many").hide();
    });

});
function signout() {
    window.location.assign("shouye_api.php");
}