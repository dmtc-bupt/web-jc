(function () {
    $(".dropdown").bind('mouseenter', function(){
        $this = $(this)
        console.log('$this', $this[0].clientWidth)
        $this.stop().animate({
            width: (110 * 2)+'px'
        })
    })
    $(".dropdown").bind('mouseleave', function(){
        $this = $(this)
        console.log('$this', $this)
        $this.stop().animate({
            width: '110px'
        })
    })
    $("#lab-sence .swiper-container .swiper-wrapper .swiper-slide>img").on('mouseenter', function(e){
        // $("#imgPreModal").addClass("in");
        var $this = $(this)
        var imgModal = $('#imgPreModal')
        imgModal.modal('show')
        console.log('e====',e)
        console.log('$this', $this)
        var srcImg = $this[0].currentSrc
        imgModal.find(".showPreImg")[0].src = srcImg
        // console.log('==================', $this)
    })
    // $("#lab-sence .swiper-container .swiper-wrapper .swiper-slide>img").on('mouseleave', function(){
    //     $this = $(this)
    //     $("#imgPreModal").removeClass("in");
    //     console.log('==================', $this)
    // })
    // $("#imgPreModal").on("show.bs.modal", function(event){
    //     console.log('=====================',event)
    //     var button = $(event.relatedTarget);
    //     console.log('button', button.data)
    //     var srcImg = button.data('whatever');
    //     console.log('srcImg', srcImg)
    //     var modal = $(this);
    //     modal.find(".showPreImg")[0].src = srcImg
    //     console.log('modal.find(".showPreImg")', modal.find(".showPreImg")[0])
    // })
}());