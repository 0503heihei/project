/**
 * Created by liuliang on 16/9/20.
 */

$("#l_tiaoye_next").each(function () {
    $(this).bind("click",function () {
        var page=$(this).attr('class');
        $.pjax({
            url: 'changePage.php?Page='+page,
            container: '#l_connect'
        })
    });
});

$("#l_tiaoye_before").each(function () {
    $(this).bind("click",function () {
        var page=$(this).attr('class');
        $.pjax({
            url: 'changePage.php?Page='+page,
            container: '#l_connect'
        })
    });
});
