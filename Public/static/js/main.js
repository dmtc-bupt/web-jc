(function () {
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