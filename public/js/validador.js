function validateEmailAddress(email) {
    var re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return re.test(email);
}

$(".alert-danger").css('display', 'none');
$(".alert").css('margin-top', '15px');

function validate() {
    $("#result").text("");
    var emailaddress = $("#email").val();
    if (validateEmailAddress(emailaddress)) {
            $("#result").text(emailaddress + ", Email cadastrado com sucesso.");
            $("#result").css("color", "#fff");
            $("#result").css("border", "none");
            $("#result").css("background", "darkgreen");
            $(".alert-danger").css('display', 'inherit');
        setTimeout(() => {
            $("#result").css('display', 'none')
            $('#email').val("")
        }, 5000);
    } else {
        $("#result").text(emailaddress + ", Email inválido, por favor insira um email válido.");
        $('.alert-danger').css('display', 'inherit')
        setTimeout(() => {
            $("#result").css('display', 'none')
            $('#email').val("")
        }, 5000);
    }
    return false;
}

$("#validate").bind("click", validate);