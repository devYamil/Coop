<template>
    <section class="footer-contact-area section_padding_100 clearfix" id="contact">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <!-- Heading Text  -->
                    <div class="section-heading">
                        <h2>¡Póngase en contacto con nosotros!</h2>
                        <div class="line-shape"></div>
                    </div>
                    <div class="footer-text">
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting</p>
                    </div>
                    <div class="address-text">
                        <p><span>Dirección:</span> Cochabamba-Bolivia Av. America S/N</p>
                    </div>
                    <div class="phone-text">
                        <p><span>Teléfono:</span> +591 65321668</p>
                    </div>
                    <div class="email-text">
                        <p><span>Correo Electrónico:</span> ymaildev@gmail.com</p>
                    </div>
                </div>
                <div class="col-md-6">
                    <!-- Form Start-->
                    <div class="contact_from">
                        <form action="#"
                              method="post"
                              novalidate="true">
                            <!-- Message Input Area Start -->
                            <div class="contact_input_area">
                                <div class="row">
                                    <!-- Single Input Area Start -->
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <input @keypress="hideAllInputs()" v-model="formulario.nombre" type="text" class="form-control" name="name" id="name" placeholder="Escribe tú nombre" required>
                                            <span v-if="errorNombreRequired" class="errores">Este campo es requerido</span>
                                        </div>
                                    </div>
                                    <!-- Single Input Area Start -->
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <input @keypress="hideAllInputs()" v-model="formulario.correo" type="email" class="form-control" name="email" id="email" placeholder="Escribe tú correo electrónico" required>
                                            <span v-if="errorCorreoRequired" class="errores">El campo correo es requerido!!</span>
                                            <span v-if="errorCorreoValidRequired" class="errores">El campo correo no es válido!!</span>
                                        </div>
                                    </div>
                                    <!-- Single Input Area Start -->
                                    <div class="col-12">
                                        <div class="form-group">
                                            <textarea @keypress="hideAllInputs()" v-model="formulario.mensaje" name="message" class="form-control" id="message" cols="30" rows="4" placeholder="Escribenos tu mensaje *" required></textarea>
                                            <span v-if="errorMensajeRequired" class="errores">El campo mensaje es requerido!!</span>
                                        </div>
                                    </div>
                                    <!-- Single Input Area Start -->
                                    <div class="col-12">
                                        <button type="button" v-on:click="checkForm()" class="btn submit-btn">Enviar ahora..!!</button>
                                    </div>
                                </div>
                            </div>
                            <!-- Message Input Area End -->
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</template>
<script>
    const config = {
        headers: {
            'Authorization': "bearer " + localStorage.getItem('_tkn')
        }
    };
    export default {
        data(){
            return {
                errorNombreRequired: false,
                errorCorreoRequired: false,
                errorCorreoValidRequired: false,
                errorMensajeRequired:false,
                formulario : {
                    nombre  : '',
                    correo  : '',
                    mensaje : ''
                },
                validationFormError : false,
            }
        },
        methods:{
            checkForm: function (e) {
                console.error("ESTE ES MI NOMBRE " , this.formulario.nombre);
                if (!this.formulario.nombre) {
                    this.errorNombreRequired = true;
                    this.validationFormError = true;
                }
                if (!this.formulario.correo) {
                    this.errorCorreoRequired = true;
                    this.validationFormError = true;
                } else if (!this.validEmail(this.formulario.correo)) {
                    this.errorCorreoValidRequired = true;
                    this.validationFormError = true;
                }

                if (!this.formulario.mensaje) {
                    this.errorMensajeRequired = true;
                    this.validationFormError = true;
                }


                if(this.validationFormError === false){
                    axios
                        .post(this.$hostname + this.$uri_correo_ponganse_contacto, this.formulario, config)
                        .then( (res) => {

                        }).catch(error => {

                        });
                }
            },
            validEmail: function (email) {
                var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
                return re.test(email);
            },
            hideAllInputs: function (){
                this.errorNombreRequired = false;
                this.errorCorreoRequired = false;
                this.errorCorreoValidRequired = false;
                this.errorMensajeRequired = false;
                this.validationFormError = false;

            },
        },
        mounted() {

        }
    }
</script>
<style>
    .errores{
        font-family: 'Poppins', sans-serif !important;
        color: #e33a02;
        font-size: 14px;
        padding-left: 18px;
        display: block;
    }
</style>