<template>
    <section style="padding-top: 200px;" class="wellcome_area clearfix" id="inicio">
        <div class="container-fluid h-100" >


            <div class="row">
                <div class="col-md-3">
                    <div class="card" style="width: 100% !important; margin-top: 10px; z-index: 9;">
                        <div class="card-body">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                <a href="#" class="card-link">Card link</a>
                                <a href="#" class="card-link">Another link</a>
                            </div>
                        </div>
                    </div>
                    <div class="card" style="width: 100% !important; margin-top: 10px; z-index: 9;">
                        <div class="card-body">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                <a href="#" class="card-link">Card link</a>
                                <a href="#" class="card-link">Another link</a>
                            </div>
                        </div>
                    </div>
                    <div class="card" style="width: 100% !important; margin-top: 10px; z-index: 9;">
                        <div class="card-body">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                <a href="#" class="card-link">Card link</a>
                                <a href="#" class="card-link">Another link</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="row h-100 align-items-center">
                        <div class="card" style="width: 100% !important; margin-top: 10px; z-index: 9;">
                            <div class="card-body">
                                <!--<pre v-html="countFile"></pre>-->
                                <!--<pre v-html="posts"></pre>-->
                                <div class="card-header border-0">
                                    <div class="row">
                                        <div class="col-md-2 " style="padding-left: 42px;">
                                            <div class="card-custom-avatar">
                                                <img style="width: 75px; height: 75px;" class="rounded-circle" src="https://res.cloudinary.com/yamil/image/upload/v1552620086/kisspng-avatar-user-computer-icons-software-developer-5b327cc9cc15f7.872727801530035401836_unlzmx.png">
                                            </div>
                                        </div>
                                        <div class="col-md-10">
                                            <div class="get-start-area" style="display: inline-block !important;">
                                                <form @submit.prevent="validateForm" class="form-inline">
                                    <textarea v-model="Post.text" type="text" placeholder="Ingrese la actividad" class="form-control w-100">
                                    </textarea>
                                                    <div class="main-wrapper" style="width: 100%;">
                                                        <!-- DROPZONE -->
                                                        <vue-dropzone
                                                                v-show="showDropzone"
                                                                ref="myVueDropzone"
                                                                id="customdropzone"
                                                                :options="dropzoneOptions"
                                                                @vdropzone-success="dropzoneSuccess"
                                                                @vdropzone-complete="dropzoneComplete"
                                                                @vdropzone-queue-complete="dropzoneQueueComplete"
                                                                @vdropzone-file-added="dropzoneFileAdded"
                                                                @vdropzone-removed-file="dropzoneRemovedFile">
                                                        </vue-dropzone>
                                                        <button class="buttonPublicarAdjuntar">Publicar</button>
                                                        <button class="buttonPublicarAdjuntar" v-on:click="showDropzoneArea('foo')">Adjuntar</button>
                                                    </div>
                                                    <p v-show="requireTextPost" style="color: red;">Debe Ingresar algun texto o imagen</p>
                                                </form>
                                            </div>
                                        </div>
                                    </div>


                                </div>
                            </div>
                        </div>
                        <div class="card mb-3 mt-3" style="width: 100% !important; margin-top: 10px; z-index: 9;" v-for="post in posts">
                            <div class="card-body">
                                <div class="card-header border-0">
                                    <div class="card-custom-avatar">
                                        <img style="width: 75px; height: 75px;" class="rounded-circle" src="https://res.cloudinary.com/yamil/image/upload/v1552620086/kisspng-avatar-user-computer-icons-software-developer-5b327cc9cc15f7.872727801530035401836_unlzmx.png">
                                    </div>
                                    <div class="card-custom-title">
                                        <p class="card-title card-title-user">{{post.name}}</p>
                                        <p class="card-title card-title-date">{{post.publicado}}</p>
                                    </div>

                                </div>
                                <p class="card-text card-custom-text">
                                    {{post.text}}
                                </p>
                                <div class="container" v-if="post.resource.length > 0">
                                    <div class="row text-center text-lg-left" >
                                        <div class="col-lg-3 col-md-4 col-6" v-for="myresource in JSON.parse(post.resource)">
                                            <a href="#" class="d-block" @click="verRecurso('imagen')"  v-if="myresource.extension == 'jpeg' || myresource.extension == 'jpg' || myresource.extension == 'JPG' || myresource.extension == 'png'">
                                                <img class="img-fluid img-thumbnail" :src="'/uploads/' + myresource.new_name" alt="">
                                            </a>
                                            <a href="#" class="d-block" @click="verRecurso('imagen')" v-if="myresource.extension == 'pdf'">
                                                <img class="img-fluid img-thumbnail" :src="'/image_default/previewpdf.png'">
                                            </a>
                                            <video class="d-block" @click="verRecurso('video')" width="320" height="240" controls v-if="myresource.extension == 'mp4'">
                                                <source :src="'/uploads/' + myresource.new_name" type="video/mp4">
                                            </video>
                                        </div>
                                    </div>
                                </div>

                                <!--<section class="gallery-block compact-gallery" v-if="post.resource.length > 0" >
                                    <div class="container">
                                        <div class="row no-gutters">
                                            <div class="col-md-6 col-lg-4 item zoom-on-hover" v-for="myresource in JSON.parse(post.resource)">
                                                <div class="image-content"  v-if="myresource.extension == 'jpeg' || myresource.extension == 'jpg' || myresource.extension == 'JPG' || myresource.extension == 'png'">
                                                    <a class="lightbox" :href="'/uploads/' + myresource.new_name">
                                                        <img class="img-fluid image" style="width: 500px !important;" :src="'/uploads/' + myresource.new_name">
                                                    </a>
                                                </div>
                                                <div class="image-content"  v-if="myresource.extension == 'pdf'">
                                                    <a class="lightbox" :href="'/uploads/' + myresource.new_name">
                                                        <img class="img-fluid image" style="width: 500px !important;" :src="'/image_default/previewpdf.png'">
                                                    </a>
                                                </div>
                                                <div class="video-content" v-if="myresource.extension == 'mp4'">
                                                    <video width="320" height="240" controls>
                                                        <source :src="'/uploads/' + myresource.new_name" type="video/mp4">
                                                    </video>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </section>-->
                            </div>
                        </div>

                    </div>
                    <infinite-loading @infinite="infiniteHandler"></infinite-loading>
                </div>
                <div class="col-md-3">
                    <div class="card" style="width: 100% !important; margin-top: 10px; z-index: 9;">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="card-link">Card link</a>
                            <a href="#" class="card-link">Another link</a>
                        </div>
                    </div>
                    <div class="card" style="width: 100% !important; margin-top: 10px; z-index: 9;">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="card-link">Card link</a>
                            <a href="#" class="card-link">Another link</a>
                        </div>
                    </div>
                    <div class="card" style="width: 100% !important; margin-top: 10px; z-index: 9;">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="card-link">Card link</a>
                            <a href="#" class="card-link">Another link</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</template>
<script>
    import vue2Dropzone from 'vue2-dropzone'
    import 'vue2-dropzone/dist/vue2Dropzone.min.css'
    import infiniteScroll from 'vue-infinite-scroll'
    const config = {
        headers: {
                'Authorization': "bearer " + localStorage.getItem('_tkn')
        }
    };
    export default {
        components: {
            vueDropzone: vue2Dropzone
        },
        data(){
            return {
                requireTextPost: false,
                showDropzone: false,
                posts: [],
                Post: {
                    id_user: 2,
                    text: '',
                    resource: [],
                    status: 2
                },
                dropzoneOptions: {
                    url: this.$hostname + this.$api_file,
                    method: 'POST',
                    acceptedFiles: "video/*,image/*,application/pdf",
                    timeout: null,
                    thumbnailWidth: 150,
                    maxFilesize: 40,
                    addRemoveLinks: true,
                    autoProcessQueue: false,
                    paramName: 'file',
                    headers: {'Authorization': "bearer " + localStorage.getItem('_tkn')}
                },
                countFile: 0,
                busy: false,
                page: 0,
                id_cooperativa: 0
            }
        },
        methods:{
            showDropzoneArea: function(){
                if(this.showDropzone == true){
                    this.showDropzone = false;
                }else{
                    this.showDropzone = true;
                }
            },
            validateForm: function (){
                let text = this.Post.text;
                if (text.length > 0)
                {
                    text = text.trim();
                    if (text.length>0 && this.countFile>0){
                        this.$refs.myVueDropzone.processQueue();
                    } else if (text.length>0){
                        this.storePost();
                    }else{
                        if (this.countFile>0){
                            this.$refs.myVueDropzone.processQueue();
                        } else {
                            this.requireTextPost = true;
                        }
                    }
                }else{
                    if (this.countFile>0){
                        this.$refs.myVueDropzone.processQueue();
                    } else {
                        this.requireTextPost = true;
                    }
                }
            },
            storePost: function () {
                const bodyParameter = {
                    id_user: this.Post.id_user,
                    text: this.Post.text,
                    resource: this.Post.resource,
                    status: this.Post.status,
                    id_cooperativa: this.id_cooperativa
                };

                axios
                    .post('http://127.0.0.1:4500/api/post/', bodyParameter, config)
                    .then( (res) => {
                        console.log('respuesta de mi post : ', res);
                        var response = res.data.post[0];
                        this.posts.unshift(
                            {
                                id: 1,
                                id_user: 1,
                                text: response.text,
                                resource: response.resource,
                                name: response.name,
                                publicado: response.publicado
                            });
                        this.spinner = false;
                        this.$toasted
                            .success('Publicacion creada correctamente!!')
                            .goAway(4000);
                    }).catch(error => {
                        this.$toasted
                            .error('Ocurrio un error al registrar el post!!')
                            .goAway(4000);
                    });
            },
            resetForm: function () {

            },
            // EVENTS DROPZONE
            dropzoneSuccess(file) {

            },
            dropzoneComplete(file) {
                var responsetext = JSON.parse(file.xhr.responseText);
                this.Post.resource.push(
                    {
                        name: responsetext.file.name,
                        new_name: responsetext.file.new_name,
                        extension: responsetext.file.extension
                    }
                )
            },
            dropzoneQueueComplete(file){
                this.storePost();
            },
            dropzoneFileAdded(){
                this.countFile++;
            },
            dropzoneRemovedFile(){
                this.countFile--;
            },
            loadMore: function() {
                this.busy = true;
                console.log('INGRESANDO AL LOAD MORE --->>>>');
                this.busy = false;
            },
            infiniteHandler($state){
                this.page++;
                console.log('ingresa al infinite loading');
                var url = 'http://127.0.0.1:4500/api/paginate-post?page='+ this.page + '&id_cooperativa='+this.id_cooperativa;
                axios
                    .get(url, config)
                    .then( (response) => {
                        let posts = response.data.data;

                        if(posts.length){
                            this.posts = this.posts.concat(posts)
                            $state.loaded();
                        }else{
                            $state.complete();
                        }

                    }).catch(error => {
                    this.$toasted
                        .error('Ocurrio un error al registrar el post!!')
                        .goAway(4000);
                    console.log('ERROR LISTAR POSTS: ' , error);
                });
            },
            verRecurso(tipo){

            }
        },
        mounted() {
            this.id_cooperativa = window.location.href.split('/').pop();
            /*axios
                .get('http://127.0.0.1:4500/api/first-page-posts', config)
                .then( (res) => {

                    var responsePosts = res.data.posts;
                    var response = responsePosts.data;
                    for (var mypost in response.reverse())
                    {
                        console.log('POST DATA RESPONSE---> ', response[mypost]);
                        // SANITIZE RESOURSE TO JSON TYPE

                        var resourse;
                        try{
                            resourse = JSON.parse(response[mypost].resource)
                        }catch (e) {
                            resourse = '';
                        }
                        var text;
                        if (response[mypost].text == null){
                            text = 'Sin mensaje';
                        }else{
                            text = response[mypost].text;
                        }
                        this.posts.unshift(
                        {
                            id: 1,
                            id_user: 1,
                            text: text,
                            resource: resourse
                        })
                    }
                }).catch(error => {
                    this.$toasted
                        .error('Ocurrio un error al registrar el post!!')
                        .goAway(4000);
                    console.log('ERROR LISTAR POSTS: ' , error);
                });*/
        }
    }
</script>
<style>
    #customdropzone {
        background-color: #b2dfdb;
        font-family: 'Arial', sans-serif;
        letter-spacing: 0.2px;
        color: #777;
        transition: background-color .2s linear;
        padding: 2px;
    }

    #customdropzone .dz-preview {
        width: 160px;
        display: inline-block;
        margin: 4px;
        background-color: #b2dfdb;
        min-height: 100px;
    }
    #customdropzone .dz-preview .dz-image {
        width: 80px;
        height: 80px;
        margin-left: 40px;
        margin-bottom: 10px;
    }
    #customdropzone .dz-preview .dz-image > div {
        width: inherit;
        height: inherit;
        border-radius: 50%;
        background-size: contain;
    }
    #customdropzone .dz-preview .dz-image > img {
        width: 100%;
    }

    #customdropzone .dz-preview .dz-details {
        color: white;
        transition: opacity .2s linear;
        text-align: center;
    }
    #customdropzone .dz-success-mark, .dz-error-mark, .dz-remove {
        display: none;
    }






    @import url(https://fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic);
    * {
        font-family: "Roboto", Arial, sans-serif;
    }


    .main-wrapper {
        border-radius: 4px;
        background-color: white;
        padding: 20px;
        box-shadow: 0 3px 6px rgba(0, 0, 0, 0.16), 0 3px 6px rgba(0, 0, 0, 0.23);
        position: relative;
    }

    i.material-icons {
        font-size: 1.5rem;
        color: white;
        position: relative;
        border-radius: 50%;
        padding: 5px;
        margin: 3px;
        box-shadow: 0 1px 3px rgba(0, 0, 0, 0.12), 0 1px 2px rgba(0, 0, 0, 0.24);
        transition: color 0.2s ease, background-color 0.2s ease, transform 0.3s ease;
    }

    i.material-icons:after {
        content: "";
        width: 100%;
        height: 100%;
        border: solid 2px;
        transform: scale(0.8);
        position: absolute;
        top: 0px;
        left: 0px;
        border-radius: 50%;
        transition: all 0.3s ease;
    }

    i.material-icons:hover:after {
        transform: scale(1);
        box-shadow: 10px 0 20px rgba(0, 0, 0, 0.19), 6px 0 6px rgba(0, 0, 0, 0.23);
    }

    i.material-icons:nth-of-type(4) {
        background-color: #88b999;
    }

    i.material-icons:nth-of-type(4):hover {
        color: #88b999;
    }

    i.material-icons:nth-of-type(4):after {
        border-color: #88b999;
    }

    i.material-icons:nth-of-type(5) {
        background-color: #88b2b9;
    }

    i.material-icons:nth-of-type(5):hover {
        color: #88b2b9;
    }

    i.material-icons:nth-of-type(5):after {
        border-color: #88b2b9;
    }

    i.material-icons:nth-of-type(6) {
        background-color: #8897b9;
    }

    i.material-icons:nth-of-type(6):hover {
        color: #8897b9;
    }

    i.material-icons:nth-of-type(6):after {
        border-color: #8897b9;
    }

    i.material-icons:nth-of-type(7) {
        background-color: #af88b9;
    }

    i.material-icons:nth-of-type(7):hover {
        color: #af88b9;
    }

    i.material-icons:nth-of-type(7):after {
        border-color: #af88b9;
    }

    i.material-icons:nth-of-type(8) {
        background-color: #d59acb;
    }

    i.material-icons:nth-of-type(8):hover {
        color: #d59acb;
    }

    i.material-icons:nth-of-type(8):after {
        border-color: #d59acb;
    }

    i.material-icons:nth-of-type(1) {
        background-color: #cd8484;
    }

    i.material-icons:nth-of-type(1):hover {
        color: #cd8484;
    }

    i.material-icons:nth-of-type(1):after {
        border-color: #cd8484;
    }

    i.material-icons:nth-of-type(2) {
        background-color: #ec9f83;
    }

    i.material-icons:nth-of-type(2):hover {
        color: #ec9f83;
    }

    i.material-icons:nth-of-type(2):after {
        border-color: #ec9f83;
    }

    i.material-icons:nth-of-type(3) {
        background-color: #cdb274;
    }

    i.material-icons:nth-of-type(3):hover {
        color: #cdb274;
    }

    i.material-icons:nth-of-type(3):after {
        border-color: #cdb274;
    }

    i.material-icons:hover {
        background-color: transparent;
        transform: rotate(90deg);
        cursor: pointer;
        box-shadow: none;
    }

    p {
        color: #999;
        font-weight: 300;
        margin-top: 20px;
    }

    @media (min-width:601px) {
        i.material-icons {
            padding:10px;
            margin:5px;
            font-size:2rem;
        }
    }

    @media (min-width:993px) {
        i.material-icons {
            padding:10px;
            margin:5px;
            font-size:2rem;
        }
        i.material-icons:after {
            border-width:3px;
            top:0px;
            left:0px;
        }
    }
</style>
