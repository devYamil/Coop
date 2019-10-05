<template>
    <!-- Menu Area Start -->

    <div class="col-12 col-lg-12">
        <div class="menu_area">
            <nav class="navbar navbar-expand-lg navbar-light">
                <!-- Logo -->
                <a class="navbar-brand titulo-inicio" href="/">{{federacion}}</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ca-navbar" aria-controls="ca-navbar" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <!--<pre v-html="cooperativas"></pre>
                 Menu Area -->
                <div class="collapse navbar-collapse" id="ca-navbar">
                    <ul class="navbar-nav ml-auto" id="nav">
                        <li class="nav-item active"><a class="nav-link" href="#inicio">Inicio</a></li>
                        <!--<li class="nav-item dropdown" href="#inicio">
                            <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#">Federaciones y Cooperativas <span class="caret"></span></a>
                            &lt;!&ndash; LISTADO DE COOPERATIVAS &ndash;&gt;
                            <ul class="dropdown-menu ui-list-cooperativas" >
                                <li v-for="cooperativa in cooperativas">
                                    <a class="li-cooperativas" :href="cooperativa.href">{{cooperativa.nombre}}</a>
                                </li>
                            </ul>
                        </li>-->
                        <li class="nav-item"><a class="nav-link" href="/actividades/3">Actividades</a></li>
                        <li class="nav-item"><a class="nav-link" href="#acerca_de">Acerca de Nosotros</a></li>
                        <li class="nav-item"><a class="nav-link" href="#features">Caracteristicas</a></li>
                        <li class="nav-item"><a class="nav-link" href="#screenshot">Fotos</a></li>
                        <!--<li class="nav-item"><a class="nav-link" href="#testimonials">Testimonials</a></li>-->
                        <li class="nav-item"><a class="nav-link" href="#team">Equipo</a></li>
                        <li class="nav-item"><a class="nav-link" href="#contact">Contacto</a></li>
                        <li class="nav-item dropdown" v-show="userLoggedShow">
                            <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#"><span class="username-init">{{user.name}}</span> <span class="caret"></span></a>
                            <ul class="dropdown-menu ui-list-cooperativas">
                                <li><a class="li-cooperativas" href="/cooperativa/1">Cambiar contraseña</a></li>
                                <li><a class="li-cooperativas" href="/cooperativa/1">Cerrar sesion</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </div>
</template>

<script>
    import EventBus from '../../event-bus'

    const config = {
        headers: {
            'Authorization': "bearer " + localStorage.getItem('_tkn')
        }
    };
    export default {
        name: "DropDownUserLoggedComponent",
        data(){
            return {
                cooperativas: [],
                userLoggedShow: false,
                user: {
                    name: 'Undefined'
                },
            }
        },
        created(){
            this.getListCooperatias();
            EventBus.$on('usuario-logueado', result => {
                console.log('DISPARANDO EL USUARIO LOGUEADO : ' , result.name);
                this.user.name = result.name;
                this.userLoggedShow = true;
            });
        },
        methods:{
            getListCooperatias(){
                var url = this.$hostname + this.$api_listar_cooperativas;
                axios.get(url, config)
                     .then( (response) => {

                            try {
                                let cooperativasData = response.data;
                                //console.log('MIS COOPERATIVAS : ' ,  cooperativasData);
                                cooperativasData = cooperativasData.cooperativas;
                                //this.cooperativas = this.cooperativas.concat(cooperativasData);
                                for (var cooperativaKey in cooperativasData)
                                {
                                    this.cooperativas.push(
                                        {
                                            id: cooperativasData[cooperativaKey].id,
                                            nombre: cooperativasData[cooperativaKey].nombre,
                                            href: '/actividades/' + cooperativasData[cooperativaKey].id
                                        })
                                }

                            }
                            catch (e) {
                                console.log('error ', e)
                            }

                        }).catch(error => {
                            this.$toasted
                                .error('Ocurrio un error al listar las cooperativas!!')
                                .goAway(4000);
                            console.log('ERROR LISTAR COOPERATIVAS: ' , error);
                        });
                }
        },
        mounted() {
            console.log("PROPS : ", this.federacion);
            // VERIFICAR SI TENEMOS USUARIO LOGUEADO PARA MOSTRAR O AL RECARGAR MOSTRAR EL DROPDOWN LIST

        },
        props: ['federacion', 'descripcion'],
    }
</script>

<style scoped>

</style>