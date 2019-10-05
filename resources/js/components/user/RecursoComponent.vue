<template>
    <div class="modal fade" id="recurso-modal">
        <div class="modal-dialog">
            <div class="modal-content">
                <!--<pre v-html="User"></pre> -->
                <!-- Modal Header -->
                <div class="modal-header modal-header-registrar-usuario">
                    <h4 class="modal-title modal-title-registrar-usuario">Media</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <!-- Modal body -->
                <div class="modal-body">
                    <div class="col-md-12">

                    </div>
                </div>
                <!-- Modal footer -->
                <div class="modal-footer">
                    <button type="button" ref="closeMIS" class="btn btn-primary" data-dismiss="modal">Cerrar</button>
                </div>
            </div>
        </div>
    </div>
</template>
<script>
    import EventBus from '../../event-bus'
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
                        EventBus.$emit('usuario-logueado', res.data.current_user);
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