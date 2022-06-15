$(document).ready(function(){
    $("div[id='nav'] > div").click(function(){
        var idOfObject = $(this).attr('id');
        if(idOfObject == "nav-info"){
            $("#nav-info").attr('class', 'bg-primary text-white p-1 rounded');
            $("#nav-inv").attr('class', 'p-1 rounded');
            $("#nav-mbox").attr('class', 'p-1 rounded');
            $("#nav-his").attr('class', 'p-1 rounded');

            $("#info").show();
            $("div[id='inv']").hide();
            $("#mbox").hide();
            $("#his").hide();

            $("a.disabled").text("Thông tin Cá Nhân");
        }
        if(idOfObject == "nav-inv"){
            $("#nav-inv").attr('class', 'bg-primary text-white p-1 rounded');
            $("#nav-info").attr('class', 'p-1 rounded');
            $("#nav-mbox").attr('class', 'p-1 rounded');
            $("#nav-his").attr('class', 'p-1 rounded');

            $("#inv").show();
            $("div[id='inv']").show();
            $("#info").hide();
            $("#mbox").hide();
            $("#his").hide();
            $("a.disabled").text("Túi Đồ");
        }
        if(idOfObject == "nav-mbox"){
            $("#nav-mbox").attr('class', 'bg-primary text-white p-1 rounded');
            $("#nav-info").attr('class', 'p-1 rounded');
            $("#nav-inv").attr('class', 'p-1 rounded');
            $("#nav-his").attr('class', 'p-1 rounded');

            $("#mbox").show();
            $("div[id='inv']").hide();
            $("#info").hide();
            $("#his").hide();

            $("a.disabled").text("Hộp Thư");
        }
        if(idOfObject == "nav-his"){
            $("#nav-his").attr('class', 'bg-primary text-white p-1 rounded');
            $("#nav-info").attr('class', 'p-1 rounded');
            $("#nav-mbox").attr('class', 'p-1 rounded');
            $("#nav-inv").attr('class', 'p-1 rounded');

            $("#his").show();
            $("div[id='inv']").hide();
            $("#mbox").hide();
            $("#info").hide();

            $("a.disabled").text("Lịch sử Hoạt động");
        }
    });
});