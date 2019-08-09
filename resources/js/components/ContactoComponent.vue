<template>
    <div class="como-iniciar">
        <div class="container">
            <div class="row mt-4">
                <div class="col-12 col-md-4 como-iniciar__left shadow">
                    <ul class="como-iniciar__ul">
                        <li class="como-iniciar__circle como-iniciar__step  shadow item1">1</li>
                        <li class="como-iniciar__circle como-iniciar__step-out shadow item2">2</li>
                        <li class="como-iniciar__circle como-iniciar__step-out shadow item3">3</li>
                    </ul>
                    <div class="como-iniciar__text">
                        <div class="como-iniciar__text-title">¿CÓMO</div>
                        <div class="como-iniciar__text-subtitle">INICIAR?</div>
                        <div class="como-iniciar__text-description">
                            Queremos conocer tus objetivos y convertirnos en tus aliados. Llena los datos del formulario para empezar a trabajar juntos.
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-8 shadow como-iniciar__right">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-12 col-md-10">
                                <div class="step mt-5" v-if="step == 1">
                                    <form id="form-step1">
                                        <div class="form-group">
                                            <label>*Nombre</label>
                                            <input type="text" class="form-control" name="name" v-model="name">
                                        </div>
                                        <div class="form-group">
                                            <label>*Mail</label>
                                            <input type="email" class="form-control" name="mail" v-model="mail">
                                        </div>
                                        <div class="form-group">
                                            <label>Teléfono </label>
                                            <input type="text" class="form-control" name="phone" v-model="phone">
                                        </div>
                                    </form>
                                </div>

                                <div class="step mt-4" v-if="step == 2" data-aos="fade-right">
                                    <form id="form-step2">
                                        <div class="form-group">
                                            <label>¿Cómo prefieres que te contactemos?</label>
                                            <select name="" class="form-control" v-model="select1">
                                                <option value="Correo">Correo</option>
                                                <option value="Llamada">Llamada</option>
                                                <option value="Whatsapp">Whatsapp</option>
                                            </select>
                                        </div>

                                        <div class="form-group">
                                            <label>¿Has invertido previamente?</label>
                                            <select name="" class="form-control" v-model="select2">
                                                <option value="Sí, más de una vez">Sí, más de una vez</option>
                                                <option value="Sólo una vez">Sólo una vez </option>
                                                <option value="No">No</option>
                                            </select>
                                        </div>

                                        <div class="form-group">
                                            <label>¿Por qué te gustaría invertir?</label>
                                            <select name="" class="form-control" v-model="select3">
                                                <option value="Ganancias">Ganancias</option>
                                                <option value="Crecimiento">Crecimiento </option>
                                                <option value="Especulación">Especulación</option>
                                                <option value="No sé">No sé</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Tolerancia al riesgo</label>
                                            <select name="" class="form-control" v-model="select4">
                                                <option value="Conservadora">Conservadora</option>
                                                <option value="moderada">moderada </option>
                                                <option value="agresiva">agresiva</option>
                                                <option value="No sé">no sé</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>¿En cuánto tiempo esperas obtener ganancias de acuerdo a tu inversión?</label>
                                            <select name="" class="form-control" v-model="select5">
                                                <option value="6 meses (corto plazo)">6 meses (corto plazo)</option>
                                                <option value="entre 6 meses y 2 años (medio plazo)">entre 6 meses y 2 años (medio plazo) </option>
                                                <option value="después de 2 años (largo plazo)">después de 2 años (largo plazo)</option>
                                            </select>
                                        </div>
                                    </form>
                                </div>
                                <div class="step mt-5" v-if="step == 3" data-aos="fade-right">
                                    <form id="form-step3">
                                        <div class="form-group">
                                            <label>*Mensaje </label>
                                            <textarea class="form-control" name="message"  v-model="message" cols="30" rows="10"></textarea>
                                        </div>
                                    </form>
                                </div>

                            </div>
                            <!-- error -->
                            <div class="col-12 col-md-10" v-if="error">
                                <small class="text-danger">Los campos marcados con * son obligatorios</small>
                            </div>
                            <!-- /error -->
                        </div>
                    </div>
                    <div class="como-iniciar__right-buttons">
                        <button @click="fBack" class="btn btn-primary mr-3" v-if="step != 1"> <i class="fas fa-chevron-left"></i> Anterior </button>
                        <button @click="fStep" class="btn btn-primary"> Siguiente <i class="fas fa-chevron-right"></i> </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        name: "ContactoComponent",
        data: function() {
            return  {
                step: 1,
                name: '',
                mail:  '',
                phone: '',
                select1: 'Correo',
                select2: 'Sí, más de una vez',
                select3: 'Ganancias',
                select4: 'Conservadora',
                select5: '6 meses (corto plazo)',
                message: '',
                error: false
            }
        },
        created:function(){
            AOS.init();
        },
        methods:{
            fBack: function(){
              if (this.step>1){

                  this.step = this.step-1;
                  $(".step").removeClass("animated");
                  $(".step").removeClass("fadeInRight");
                  setTimeout(function() {
                      $(".step").addClass("animated");
                      $(".step").addClass("fadeInRight");

                  }, 100);
              }
            },
            fStep: function(){

                var vthis = this;
                switch (vthis.step) {
                    case 1:
                            vthis.fSteps('/step1', 2, 'form-step1');
                        break;
                    case 2:
                        $('.item2').addClass('como-iniciar__step-ok');
                        $('.item2').html('<i class="fas fa-check"></i>');
                        $('.item3').addClass('como-iniciar__step');
                        $('.item3').removeClass('como-iniciar__step-out');
                        vthis.step = 3;
                        break;
                    case 3:
                        vthis.fSteps('/step3', 2, 'form-step3');
                        break;
                }

            },
            fSteps: function (url, step, formId) {
                var vthis = this;
                let myForm   = document.getElementById(formId);
                let formData = new FormData(myForm);

                axios.post
                (url, formData)
                    .then(function (response) {
                        var result = response.data;
                        /*$('#spinner-contacto').hide();*/
                        /*document.getElementById('form-contacto').reset();*/
                        $('.item1').addClass('como-iniciar__step-ok');
                        $('.item1').html('<i class="fas fa-check"></i>');
                        $('.item2').addClass('como-iniciar__step');
                        $('.item2').removeClass('como-iniciar__step-out');
                        vthis.step = step;
                        vthis.error = false;


                    })
                    .catch(function (error) {

                        vthis.error = true;

                    })
            }

        }
    }
</script>

<style scoped>

</style>
