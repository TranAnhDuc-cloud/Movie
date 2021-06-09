$(".item").slice(0, 6).show(); //showing 3 div
                
$(".loadMore").on("click",function(){
    $(".item:hidden").slice(0, 3).show(); //showing 3 hidden div on click

    if($(".item:hidden").length ==0)
    {
        $(".loadMore").fadeOut(); //this will hide
        //button when length is 0
    }
})

$(".created_at").slice(0, 5).show(); //showing 3 div
                
$(".viewAll").on("click",function(){
    $(".created_at:hidden").slice(0, 5).show(); //showing 3 hidden div on click

    if($(".created_at:hidden").length ==0)
    {
        $(".viewAll").fadeOut(); //this will hide
        //button when length is 0
    }
})

$(".item-user").slice(0, 8).show(); //showing 3 div
                
$(".viewUser").on("click",function(){
    $(".item-user:hidden").slice(0, 12).show(); //showing 3 hidden div on click

    if($(".item-user:hidden").length ==0)
    {
        $(".viewUser").fadeOut(); //this will hide
        //button when length is 0
    }
})

