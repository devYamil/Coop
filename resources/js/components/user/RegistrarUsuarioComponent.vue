<template>
    <div class="modal fade" id="registrar-usuario">
        <div class="modal-dialog">
            <div class="modal-content">
                <!--<pre v-html="User"></pre> -->
                <!-- Modal Header -->
                <div class="modal-header modal-header-registrar-usuario">
                    <h4 class="modal-title modal-title-registrar-usuario">Registrar Usuario</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <!-- Modal body -->
                <div class="modal-body">
                    <div class="col-md-12">
                        <!-- Form Start-->
                        <div class="contact_from">
                            <form @submit.prevent="registrarUsuario">
                                <!-- Message Input Area Start -->
                                <div class="contact_input_area">
                                    <div class="row">
                                        <!-- Single Input Area Start -->
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <input v-model="User.name" type="text" class="form-control" name="modal_name" id="modal_name" placeholder="Escribe tú nombre"  >
                                            </div>
                                        </div>
                                        <!-- Single Input Area Start -->
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <input v-model="User.email" type="email" class="form-control" name="modal_email" id="modal_email" placeholder="Escribe tú correo electrónico"  >
                                            </div>
                                        </div>
                                        <!-- Single Input Area Start -->
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <input v-model="User.password" type="password" class="form-control" name="modal_password" id="modal_password" placeholder="Escribe tú password"  >
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <input v-model="User.repeat_password" type="password" class="form-control" name="modal_repeat_password" id="modal_repeat_password" placeholder="Repite tú password"  >
                                            </div>
                                        </div>
                                        <!-- Single Input Area Start -->
                                        <div class="col-12">
                                            <button type="submit" class="btn submit-btn">Registrarse</button>
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
                    <button type="button" ref="closeMRU" class="btn btn-danger" data-dismiss="modal">CANCELAR</button>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        data(){
          return{
              User: {
                  name: "",
                  email: "",
                  password: "",
                  repeat_password: ""
              },
              spinner: false
          }
        },
        methods:{
            registrarUsuario: function () {
                this.resetForm();
                this.spinner = true;
                const config = {};
                const bodyParameter = {
                    name: this.User.name,
                    email: this.User.email,
                    password: this.User.password
                };

                axios
                .post('http://127.0.0.1:4500/api/registrar/', bodyParameter, config)
                .then( (res) => {
                    console.log('RESPONSE: ', res);
                    const token = res.data.token;
                    localStorage.setItem('_tkn', token);
                    this.spinner = false;
                    this.$toasted
                        .success('Usted acaba de registrarse correctamente!!')
                        .goAway(4000);
                    const elemModalRegisterUser = this.$refs.closeMRU;
                    elemModalRegisterUser.click();
                }).catch(error => {
                    const code = error.response.data.code;
                    if(code == 1000){
                        this.spinner = false;
                        this.$toasted
                            .error('El usuario esta en uso!!')
                            .goAway(4000);
                    }else{
                        this.spinner = false;
                        this.$toasted
                            .error('Ocurrio un error al registrarse!!')
                            .goAway(4000);
                    }
                });
            },
            resetForm: function () {
                console.log('llamando metodo');
            }
        },
        mounted() {
            console.log('Component mounted REGISTRAR USUARIO', this.User)
        }
    }
</script>
