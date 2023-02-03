$('#createGroupForm').validate({
    ignore: "",
    rules: {
        name: {
            required: true,
        }
    },
    messages: {},
    submitHandler: function (form) {
        var formData = $('#createGroupForm').serializeArray();
        $.ajax({
            type: 'POST',
            url: "ajax/group.php",
            dataType: "json",
            data: formData,
            success: function (data) {
                if (data.success == "1") {
                    location.href = data.url;
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


function copyGroupURL() {
    // Get the text field
    var copyText = document.getElementById("groupURL");
  
    // Select the text field
    copyText.select();
    copyText.setSelectionRange(0, 99999); // For mobile devices
  
     // Copy the text inside the text field
    navigator.clipboard.writeText(copyText.value);

}

function loadGroupMembers() {
    group_id = $("input[name=group_id]").val();
    $.ajax({
        type: "POST",
        url: "ajax/group.php",
        dataType:"json",
        data: {"loadGroupMembers" : "1","group_id" : group_id},
        success: function(data){
            if (data.success == "1") {
                $(".groupMembersList").html("");
                var template = Handlebars.templates['groupMembers'];
                $(".groupMembersList").append(template(data));  
                $(".totalMembers").html(data.totalMembers);  
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
const tabEl  = document.querySelector('a[data-bs-target="#pills-members"]')
tabEl.addEventListener('shown.bs.tab', event => {
    event.target 
    event.relatedTarget 
    loadGroupMembers();
})