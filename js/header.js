

$(function(){


    var lib= $('.panel_header ul li a:eq(1)');
    var lic= $('.panel_header ul li a:eq(2)');
    var lid= $('.panel_header ul li a:eq(3)');
    var lie= $('.panel_header ul li a:eq(4)');
    var lif= $('.panel_header ul li a:eq(5)');

    var tbl0 = $('#menu_list_hide li table:eq(0)');
    var tbl1 = $('#menu_list_hide li table:eq(1)');
    var tbl2 = $('#menu_list_hide li table:eq(2)');
    var tbl3 = $('#menu_list_hide li table:eq(3)');
    var tbl4 = $('#menu_list_hide li table:eq(4)');

    lib.hover(
        function(){
            tbl0.show();
            tbl1.hide();
            tbl2.hide();
            tbl3.hide();
            tbl4.hide();
        }
    );

    lic.hover(
        function(){
            tbl1.show();
            tbl0.hide();
            tbl2.hide();
            tbl3.hide();
            tbl4.hide();
        }
    );

    lid.hover(
        function(){
            tbl2.show();
            tbl1.hide();
            tbl0.hide();
            tbl3.hide();
            tbl4.hide();
        }
    );

    lie.hover(
        function(){
            tbl3.show();
            tbl1.hide();
            tbl2.hide();
            tbl0.hide();
            tbl4.hide();
        }
    );

    lif.hover(
        function(){
            tbl4.show();
            tbl1.hide();
            tbl2.hide();
            tbl3.hide();
            tbl0.hide();
        }
    );

    var i;
    var tbl = new Array();
    tbl[0] = $('#menu_list_hide li table:eq(0)');
    tbl[1] = $('#menu_list_hide li table:eq(1)');
    tbl[2] = $('#menu_list_hide li table:eq(2)');
    tbl[3] = $('#menu_list_hide li table:eq(3)');
    tbl[4] = $('#menu_list_hide li table:eq(4)');


    for(i=0;i<=tbl.length;i++)
    {
        function hov(e){
            e.hover(
                function(){
                    $(this).show();

                },
                function(){
                    $(this).hide();
                }
            );
        }
        hov(tbl[i]);
    }


    var ttd0=$('ul#menu_list_hide li table#tab0 tr td a:eq(0)');
    var ttd1=$('ul#menu_list_hide li table#tab0 tr td a:eq(1)');
    var ttd2=$('ul#menu_list_hide li table#tab0 tr td a:eq(2)');
    var ttd3=$('ul#menu_list_hide li table#tab0 tr td a:eq(3)');
    var ttd4=$('ul#menu_list_hide li table#tab0 tr td a:eq(3)');

    ttd0.hover(
        function(){
            $(this).css({
                "color":"red"
            });
        },
        function(){
            $(this).css({
                "color":"black"
            });
        }
    );

});