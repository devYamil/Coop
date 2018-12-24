<template>
    <div class="modal fade" id="iniciar-sesion">
        <div class="modal-dialog">
            <div class="modal-content">
                <!--<pre v-html="User"></pre> -->
                <!-- Modal Header -->
                <div class="modal-header modal-header-registrar-usuario">
                    <h4 class="modal-title modal-title-registrar-usuario">Iniciar Usuario</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <!-- Modal body -->
                <div class="modal-body">
                    <div class="col-md-12">
                        <!-- Form Start-->
                        <div class="contact_from">
                            <form @submit.prevent="iniciarSesion">
                                <!-- Message Input Area Start -->
                                <div class="contact_input_area">
                                    <div class="row">
                                        <!-- Single Input Area Start -->
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <input v-model="User.email" type="email" class="form-control" name="modal_email" id="modal_is_email" placeholder="Escribe tú correo electrónico"  >
                                            </div>
                                        </div>
                                        <!-- Single Input Area Start -->
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <input v-model="User.password" type="password" class="form-control" name="modal_password" id="modal_is_password" placeholder="Escribe tú password"  >
                                            </div>
                                        </div>
                                        <!-- Single Input Area Start -->
                                        <div class="col-12">
                                            <button type="submit" class="btn submit-btn">Iniciar Sesion</button>
                                        </div>
                                    </div>
                                </div>
                                <!-- Message Input Area End -->
                            </form>
                        </div>
                    </div>
                    <spinner-component v-show="spinner"></spinner-component>
                </div>
                <!-- Modal footer -->
                <div class="modal-footer">
                    <button type="button" ref="closeMIS" class="btn btn-danger" data-dismiss="modal">CANCELAR</button>
                </div>
            </div>
        </div>
    </div>
</template>
<script>
    export default {
        data(){
          return {
              User: {
                  email:'',
                  password:''
              },
              spinner: false
          }
        },
        methods:{
            iniciarSesion: function () {
                const config = {};
                const bodyParameter = {
                    email: this.User.email,
                    password: this.User.password
                };
                axios
                    .post('http://127.0.0.1:4500/api/autenticar/', bodyParameter, config)
                    .then( (res) => {
                        console.log('RESPONSE: ', res);
                        const token = res.data.token;
                        localStorage.setItem('_tkn', token);
                        this.spinner = false;
                        this.$toasted
                            .success('Usted acaba de iniciar sesion!!')
                            .goAway(4000);
                        const elemModalRegisterUser = this.$refs.closeMIS;
                        elemModalRegisterUser.click();
                    }).catch(error => {
                        this.spinner = false;
                        this.$toasted
                            .error('Crendenciales invalidas!!')
                            .goAway(4000);
                    });
                }
        },
        mounted() {
            console.log('Component mounted INICIAR SESION', this.User)
        }
    }
</script>
<style>

</style>