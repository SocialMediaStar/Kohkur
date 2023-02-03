$('#registerForm').validate({
    ignore: "",
    rules: {
        fname: {
            required: true,
        },
        lname: {
            required: true,
        },
        phone: {
            required: true,
        },
        email: {
            required: true,
            email: true,
        },
        password: {
            required: true
        },
        password2: {
            required:true,
            equalTo: "#floatingPassword2"
        }
    },
    messages: {},
    submitHandler: function (form) {
        hash = getUrlParameter('hash');
        if (!hash) {
            hash = '';
        }

        var formData = $('#registerForm').serializeArray();
        $.ajax({
            type: 'POST',
            url: "ajax/user.php?hash="+hash,
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


/*  ==========================================
    SHOW UPLOADED IMAGE
* ========================================== */
function readURL(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function (e) {
            $('#imageResult')
                .attr('src', e.target.result);
        };
        reader.readAsDataURL(input.files[0]);
    }
}

/*  ==========================================
    SHOW UPLOADED IMAGE NAME
* ========================================== */
$(document).on('change', '#upload', function(){
    var input = document.getElementById( 'upload' );
    var infoArea = document.getElementById( 'upload-label' );
    input.addEventListener( 'change', showFileName );
    readURL(input);
});

function showFileName( event ) {
  var input = event.srcElement;
  var fileName = input.files[0].name;
  infoArea.textContent = 'Pildi nimi: ' + fileName;
}


var getUrlParameter = function getUrlParameter(sParam) {
    var sPageURL = window.location.search.substring(1),
        sURLVariables = sPageURL.split('&'),
        sParameterName,
        i;

    for (i = 0; i < sURLVariables.length; i++) {
        sParameterName = sURLVariables[i].split('=');

        if (sParameterName[0] === sParam) {
            return sParameterName[1] === undefined ? true : decodeURIComponent(sParameterName[1]);
        }
    }
    return false;
};