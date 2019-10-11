<template>
    <div class="como-iniciar">
        <div class="container">
            <div class="row mt-0 mt-md-4 align-items-center ">
                <div class="col-12 col-md-12  col-lg-4 como-iniciar__left shadow">
                    <ul class="como-iniciar__ul">
                        <li class="como-iniciar__circle como-iniciar__step  shadow item1">1</li>
                        <li class="como-iniciar__circle como-iniciar__step-out shadow item2">2</li>
                        <li class="como-iniciar__circle como-iniciar__step-out shadow item3">3</li>
                    </ul>
                    <div class="como-iniciar__text">
                        <div class="como-iniciar__text-title">{{ section1_title }}</div>
                        <div class="como-iniciar__text-subtitle">{{ section1_title2 }}</div>
                        <div class="como-iniciar__text-description">
                            {{ section1_description }}
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-12 col-lg-8 shadow-md shadow-lg como-iniciar__right">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-12 col-md-10 col-lg-10">
                                <div class="step mt-5" v-if="step == 1">
                                    <form id="form-step1" autocomplete="off">
                                        <div class="form-group">
                                            <label>*{{ in_1 }}</label>
                                            <input type="text" class="form-control" name="name" v-model="name">
                                        </div>
                                        <div class="form-group">
                                            <label>*{{ in_2 }}</label>
                                            <input type="email" class="form-control" name="mail" v-model="mail">
                                        </div>
                                        <div class="form-group">
                                            <label>{{ in_3 }} </label>
                                            <input type="text" class="form-control" name="phone" v-model="phone">
                                        </div>
                                    </form>
                                    <!-- spinner-->
                                    <div class="w-100"></div>
                                    <div class="col-12 text-center mt-5" v-if="isSpiner">
                                        <i class="fas fa-spinner fa-spin text-muted" ></i>
                                    </div>
                                    
                                    <div class="w-100 pb-1"></div>   

                                    <!-- error -->
                                        <div class="col-12 col-md-10" v-if="error">
                                            <small class="text-danger">{{ legend_error }}</small>
                                        </div>
                                    <!-- /error -->  
                                    <div class="w-100 pb-4"></div>             
                                    <div class="row mt-5">
                                            <div class="col-12">
                                                <div class="como-iniciar__right-buttons mt-5">
                                                    <button @click="fBack" class="btn btn-primary mr-3 mt-5" v-if="step != 1"> <i class="fas fa-chevron-left"></i> {{ btnprevious }} </button>
                                                    <button @click="fStep" class="btn btn-primary mt-5" v-if="step != 3"> {{ btnnext }} <i class="fas fa-chevron-right"></i> </button>
                                                    <button @click="fStep" class="btn btn-primary mt-5" v-if="step == 3"> {{ btnsend }} <i class="fas fa-chevron-right"></i> </button>
                                                </div>
                                            </div>
                                    </div>
                                </div>

                                <div class="step mt-5 mt-md-4" v-if="step == 2" data-aos="fade-right">
                                    <form id="form-step2">
                                        <div class="form-group">
                                            <label>{{ blbl2 }}</label>
                                            <select name="" class="form-control" v-model="select1">
                                                <option :value=" blbl2_1 ">{{ blbl2_1 }}</option>
                                                <option :value=" blbl2_2 ">{{ blbl2_2 }}</option>
                                                <option :value=" blbl2_3 ">{{ blbl2_3 }}</option>
                                            </select>
                                        </div>

                                        <div class="form-group">
                                            <label>{{ blbl3 }}</label>
                                            <select name="" class="form-control" v-model="select2">
                                                <option :value="blbl3_1">{{ blbl3_1 }}</option>
                                                <option :value="blbl3_2">{{ blbl3_2 }} </option>
                                                <option :value="blbl3_3">{{ blbl3_3 }}</option>
                                            </select>
                                        </div>

                                        <div class="form-group">
                                            <label>{{ blbl4 }}</label>
                                            <select name="" class="form-control" v-model="select3">
                                                <option :value="blbl4_1">{{ blbl4_1 }}</option>
                                                <option :value="blbl4_2">{{ blbl4_2 }} </option>
                                                <option :value="blbl4_3">{{ blbl4_3 }}</option>
                                                <option :value="blbl4_4">{{ blbl4_4 }}</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>{{ blbl5 }}</label>
                                            <select name="" class="form-control" v-model="select4">
                                                <option :value="blbl5_1">{{ blbl5_1 }}</option>
                                                <option :value="blbl5_2">{{ blbl5_2 }} </option>
                                                <option :value="blbl5_3">{{ blbl5_3 }}</option>
                                                <option :value="blbl5_4">{{ blbl5_4 }}</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>{{ blbl6 }}</label>
                                            <select name="" class="form-control" v-model="select5">
                                                <option :value="blbl6_1">{{ blbl6_1 }}</option>
                                                <option :value="blbl6_2">{{ blbl6_2 }} </option>
                                                <option :value="blbl6_3">{{ blbl6_3 }}</option>
                                            </select>
                                        </div>
                                    </form>
                                     <!-- spinner-->
                                    <div class="w-100"></div>
                                    <div class="col-12 text-center mt-5" v-if="isSpiner">
                                        <i class="fas fa-spinner fa-spin text-muted" ></i>
                                    </div>
                                    
                                    <div class="w-100 pb-4"></div>   

                                    <!-- error -->
                                        <div class="col-12 col-md-10" v-if="error">
                                            <small class="text-danger">{{ legend_error }}</small>
                                        </div>
                                    <!-- /error -->  
                                    <div class="w-100 pb-4 pb-md-1"></div>             
                                    <div class="row mt-5">
                                            <div class="col-12">
                                                <div class="como-iniciar__right-buttons mt-5">
                                                    <button @click="fBack" class="btn btn-primary mr-3 mt-5" v-if="step != 1"> <i class="fas fa-chevron-left"></i> {{ btnprevious }} </button>
                                                    <button @click="fStep" class="btn btn-primary mt-5" v-if="step != 3"> {{ btnnext }} <i class="fas fa-chevron-right"></i> </button>
                                                    <button @click="fStep" class="btn btn-primary mt-5" v-if="step == 3"> {{ btnsend }} <i class="fas fa-chevron-right"></i> </button>
                                                </div>
                                            </div>
                                    </div>
                                </div>
                                <div class="step mt-5" v-if="step == 3" data-aos="fade-right">
                                    <form id="form-step3">
                                        <div class="form-group">
                                            <label>*{{  blbl7 }} </label>
                                            <textarea class="form-control input-area" name="message"  v-model="message" cols="30" rows="10"></textarea>
                                        </div>
                                    </form>
                                     <!-- spinner-->
                                    <div class="w-100"></div>
                                    <div class="col-12 text-center mt-5" v-if="isSpiner">
                                        <i class="fas fa-spinner fa-spin text-muted" ></i>
                                    </div>
                                    
                                    <div class="w-100 pb-4"></div>   

                                    <!-- error -->
                                        <div class="col-12 col-md-10" v-if="error">
                                            <small class="text-danger">{{ legend_error }}</small>
                                        </div>
                                    <!-- /error -->  
                                    <div class="w-100 pb-4 pb-md-1"></div>             
                                    <div class="row mt-5">
                                            <div class="col-12">
                                                <div class="como-iniciar__right-buttons mt-5">
                                                    <button @click="fBack" class="btn btn-primary mr-3 mt-5" v-if="step != 1"> <i class="fas fa-chevron-left"></i> {{ btnprevious }} </button>
                                                    <button @click="fStep" class="btn btn-primary mt-5" v-if="step != 3"> {{ btnnext }} <i class="fas fa-chevron-right"></i> </button>
                                                    <button @click="fStep" class="btn btn-primary mt-5" v-if="step == 3"> {{ btnsend }} <i class="fas fa-chevron-right"></i> </button>
                                                </div>
                                            </div>
                                    </div>
                                </div>

                            </div>
                           
                          
                            <div class="d-block d-md-none w-100 py-4"></div>
                            
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </div>
</template>

<script>
        export default {
            name: "ContactoComponent",
            props: ['section1_title', 'section1_title2', 'section1_description',
                    'in_1', 'in_2', 'in_3',
                    'blbl2', 'blbl2_1', 'blbl2_2','blbl2_3',
                    'blbl3', 'blbl3_1', 'blbl3_2','blbl3_3',
                    'blbl4', 'blbl4_1', 'blbl4_2','blbl4_3','blbl4_4',
                    'blbl5', 'blbl5_1', 'blbl5_2','blbl5_3','blbl5_4',
                    'blbl6', 'blbl6_1', 'blbl6_2','blbl6_3',
                    'blbl7',
                    'btnnext' , 'btnprevious' , 'btnsend',
                    'legend_error'
                    ],
            data: function() {
                return  {
                    step: 1,
                    name: '',
                    mail:  '',
                    phone: '',
                    select1: this.blbl2_1,
                    select2: this.blbl3_1,
                    select3: this.blbl4_1,
                    select4: this.blbl5_1,
                    select5: this.blbl6_1,
                    message: '',
                    error: false,
                    isSpiner: false
                }
            },
            created:function(){
                AOS.init();
            },
            methods:{
                    fBack: function(){

                      if (this.step>1){

                          this.step = this.step-1;
                          console.log(this.step);
                          if(this.step == 1){
                              $('.item1').removeClass('como-iniciar__step-ok');
                              $('.item1').html('1');
                              $('.item1').addClass('como-iniciar__step');

                              $('.item2').removeClass('como-iniciar__step');
                              $('.item2').addClass('como-iniciar__step-out');
                          }

                          if(this.step == 2){
                              $('.item2').removeClass('como-iniciar__step-ok');
                              $('.item2').html('2');
                              $('.item2').addClass('como-iniciar__step');

                              $('.item3').removeClass('como-iniciar__step');
                              $('.item3').addClass('como-iniciar__step-out');
                          }

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
                            vthis.fSteps('/step3', 3, 'form-step3');
                            break;
                    }

                },
                fSteps: function (url, step, formId) {
                    var vthis = this;
                    let myForm   = document.getElementById(formId);
                    let formData = new FormData(myForm);
                    vthis.isSpiner = true;
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
                            if(vthis.step == 3){
                                vthis.fContact();
                            }else{
                                vthis.step = step;
                                vthis.error = false;
                                vthis.isSpiner = false;
                            }



                        })
                        .catch(function (error) {
                            console.log(error);
                            vthis.isSpiner = false;
                            vthis.error = true;

                        })
                },

                fContact: function () {
                    var vthis = this;
                    vthis.isSpiner = true;
                    axios.post
                    ('/sendContact', {
                        name: vthis.name, mail: vthis.mail, phone: vthis.phone, message: vthis.message,
                        select1: vthis.select1, select2: vthis.select2, select3: vthis.select3,
                        select4: vthis.select4, select5: vthis.select5
                    })
                        .then(function (response) {

                            var result = response.data;
                            vthis.isSpiner = false;
                            window.location = '/gracias';

                        })
                        .catch(function (error) {
                            vthis.isSpiner = false;
                            vthis.error = true;

                        })
                }

            }
        }
</script>

<style scoped>

</style>
