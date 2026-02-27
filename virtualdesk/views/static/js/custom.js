jQuery.validator.addMethod("text", function(value, element) {

  return this.optional(element) || /^[a-záéíóúñ\s]+$/i.test(value);

});


$("#form-login").validate({
  ignore: [],
  rules: {
    inputUser: {
      required: true,
      email: true
    },
    inputPass: {
      required: true
    }
  },
  messages: {
    inputUser: {
      required: "Ingresa tu email",
      email: "Ingresa un email válido"
    },
    inputPass: {
      required: "Ingresa tu contraseña"
    }
  },
  errorClass: "is-invalid",
  submitHandler: function(form){
    if(grecaptcha.getResponse() == "") {
      alert("Necesitas completar la casilla de verificación");
    }else{
      form.submit();
    }
  }
});

$("#form-addUser").validate({
  ignore: [],
  rules: {
    email: {
      required: true,
      email: true
    },
    con_usu: {
      required: true
    },
    name: {
      required: true
    },
    lastname: {
      required: true
    },
    region: {
      required: true
    },
    id_tu: {
      required: true
    }
  },
  messages: {
    email: {
      required: "Ingresa el correo electrónico",
      email: "Ingresa una dirección válida"
    },
    con_usu: {
      required: "Ingresa la contraseña"
    },
    name: {
      required: "Ingresa el nombre"
    },
    lastname: {
      required: "Ingresa los apellidos"
    },
    region: {
      required: "Ingresa la región"
    },
    id_tu: {
      required: "Selecciona el tipo de usuario"
    }
  },
  errorClass: "is-invalid",
  submitHandler: function(form){
    form.submit();
  }
});


$("#contact-form").validate({
    ignore: [],
    rules: {
        nombre: {
            required: true,
            text: true,
            minlength: 3
        },
        apm: {
            required: true,
            text: true,
            minlength: 3
        },
        empresa: {
            required: true,
            text: true
        },
        puesto: {
            required: true
        },
        telefono: {
            required: true,
            number: true,
            min: 1,
            minlength: 10,
            maxlength: 15
        },
        correo: {
            required: true,
            email: true
        },
        estado: {
            required: true
        },
        cp: {
            required: true,
            number: true,
            min: 1,
            minlength: 5,
            maxlength: 5
        }
    },
    messages: {
        nombre: {
            required: "Ingresa tu nombre",
            text: "Ingresa sólo texto",
            minlength: "Ingresa tu nombre completo"
        },
        apm: {



            required: "Ingresa tus apellidos",



            text: "Ingresa sólo texto",



            minlength: "Ingresa tus apellidos completos"



        },



        empresa: {



            required: "Ingresa la empresa a la que perteneces",



            text: "Ingresa sólo texto"



        },



        puesto: {



            required: "Selecciona un puesto"



        },



        telefono: {



            required: "Ingresa tu teléfono",



            number: "Ingresa un número válido",



            min: "Ingresa un número válido",



            minlength: "Ingresa un número válido",



            maxlength: "Ingresa un número válido"



        },



        correo: {



            required: "Ingresa tu email",



            email: "Ingresa una dirección válida"



        },



        estado: {



            required: "Selecciona una entidad"



        },cp: {



            required: "Ingresa tu código postal",



            number: "Ingresa un código válido",



            min: "Ingresa un código válido",



            minlength: "Ingresa un código válido",



            maxlength: "Ingresa un código válido"



        }



    },



    errorClass: "is-invalid",



    submitHandler: function(form){        



        if(grecaptcha.getResponse() == "") {



            alert("Necesitas completar la casilla de verificación");



        }else



        {



            $('#btn-enviar').attr('disabled', 'disabled');



            $('#btn-enviar').html('Enviando...');



            $.ajax({



                url: '/4better/registro/add',



                type: 'POST',



                dataType: 'json',



                data: {



                    nombre: $("#nombre").val(),



                    apm: $("#apm").val(),



                    empresa: $("#empresa").val(),



                    puesto: $("#puesto").val(),



                    estado: $("#estado").val(),



                    telefono: $("#telefono").val(),



                    correo: $("#correo").val(),



                    cp: $("#cp").val(),



                    recaptcha: grecaptcha.getResponse()



                },



                beforeSend: function(result){},



                success: function(result){



                    console.log(result);



                    if(result.status == 200) {



                        window.location.href = "/4better/gracias/";



                    }



                    else if(result.status == 201){



                        $('#btn-enviar').removeAttr('disabled');



                        $('#btn-enviar').html('Enviar');



                        $('#mensaje').html('<div class="alert alert-danger text-center" role="alert">La dirección de email ya se encuentra registrada.</div>');



                    }



                    else{



                        $('#btn-enviar').removeAttr('disabled');



                        $('#btn-enviar').html('Enviar');



                        $('#mensaje').html('<div class="alert alert-danger text-center" role="alert">El registro no se pudo llevar a cabo, por favor intenta de nuevo más tarde.</div>');



                    }



                }, error: function(e){}



            });



        }



    }



});