$(document).ready(function(){

    $.validator.addMethod("regex", function(value, element, regexp) {
        var re = new RegExp(regexp);
        return this.optional(element) || re.test(value);
    }, "El formato es inválido.");

    $("#form").validate({
        rules: {
            NroDni: {
                required: true,
                regex: /^\d{1,10}$/
            }
        },
        messages: {
            NroDni: {
                required: "Por favor ingrese el DNI",
                regex: "El DNI debe tener entre 1 y 10 dígitos numéricos"
            }
        },
        
    });


});