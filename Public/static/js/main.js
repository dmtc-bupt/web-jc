(function () {
    $(".dropdown").bind('mouseenter', function(){
        $this = $(this)
        console.log('$this', $this[0].clientWidth)
        $this.animate({
            width: ($this[0].clientWidth * 2)+'px'
        })
    })
    $(".dropdown").bind('mouseleave', function(){
        $this = $(this)
        console.log('$this', $this)
        $this.animate({
            width: ($this[0].clientWidth/2) + 'px'
        })
    })
    $("#imgPreModal").on("show.bs.modal", function(event){
        var button = $(event.relatedTarget);
        console.log('button', button.data)
        var srcImg = button.data('whatever');
        console.log('srcImg', srcImg)
        var modal = $(this);
        modal.find(".showPreImg")[0].src = srcImg
        console.log('modal.find(".showPreImg")', modal.find(".showPreImg")[0])
    })
}());