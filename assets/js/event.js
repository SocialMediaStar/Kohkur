$('#createEventForm').validate({
    ignore: "",
    rules: {
        name: {
            required: true,
        },
        desc: {
            required: true,
        },
        sum: {
            required: true,
        },
        date: {
            required: true,
        }
    },
    messages: {},
    submitHandler: function (form) {
        formData = new FormData(form);
        group_id = $("input[name=group_id]").val();
        formData.append('group_id', group_id);
        formData.append('eventPicture', $('input[name=eventPicture]')[0].files[0]);

        $.ajax({
            type: 'POST',
            url: "ajax/event.php",
            dataType: "json",
            data: formData,
            cache:false,
            contentType: false,
            processData: false,
            success: function (data) {
                if (data.success == "1") {
                    $("#addEventModal").modal("hide");
                    LoadEvents();
                } else {
                    Swal.fire({
                        icon: 'error',
                        title: 'Oih midagi läks valesti',
                        text: data.msg,
                        showConfirmButton: false,
                        timer: 3000
                  })
                }
            },
            error: function (xhr, ajaxOptions, thrownError) {
                console.log(xhr);
            }
        });

    }
});

LoadEvents();
function LoadEvents() {
    group_id = $("input[name=group_id]").val();
    $.ajax({
        type: "POST",
        url: "ajax/event.php",
        dataType:"json",
        data: {"loadEvents" : "1","group_id" : group_id},
        success: function(data){
            if (data.success == "1") {
                $(".eventArea").html("");
                var template = Handlebars.templates['eventList'];
                $(".eventArea").append(template(data));    
            } else {
                Swal.fire({
                    icon: 'error',
                    title: 'Oih midagi läks valesti',
                    text: data.msg,
                    showConfirmButton: false,
                    timer: 3000
              })
            }
        }
    });
}
