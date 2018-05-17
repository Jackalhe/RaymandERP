jQuery(document).ready(function ($) {
    $(document).on('click','.btn_save_alert',function(event){
        event.preventDefault();
        var $this=$(this);
        var file_id= $this.data('title');
        // alert(file_id);
        $.ajax({
            url:'/General/report',
            type : 'post',
            dataType : 'json',
            data : {
                file_id: file_id
            },
            success: function (response) {
                // alert(response.message);
                // swal(response.message, {
                //     dangerMode: true,
                //     buttons: true
                // });
                swal(response.message, "You clicked the button!", "success");
            },
            erorr: function () {

            }
        });
    })
});