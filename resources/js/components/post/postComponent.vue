<template>
    <section style="padding-top: 200px;" class="wellcome_area clearfix" id="inicio">
        <div class="container h-100" >
            <div class="row h-100 align-items-center">
                <div class="card" style="width: 100% !important; margin-top: 10px; z-index: 9;">
                    <div class="card-body">
                        <pre v-html="countFile"></pre>
                        <!--<pre v-html="posts"></pre>-->
                        <div class="card-header border-0">
                            <div class="card-custom-avatar">
                                <img style="width: 75px; height: 75px;" class="rounded-circle" src="https://res.cloudinary.com/yamil/image/upload/v1529422392/file_1529422390_652f311e-bb8d-4abe-925e-7f39a1aeb123.jpg">
                            </div>
                            <div class="get-start-area" style="display: inline-block !important;">
                                <form @submit.prevent="validateForm" class="form-inline">
                                    <textarea v-model="Post.text" type="text" placeholder="Nombre de la cooperativa" class="form-control w-100">
                                    </textarea>
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
                                            @vdropzone-removed-file="dropzoneRemovedFile"
                                            >
                                    </vue-dropzone>
                                    <input type="submit" value="Publicar" class="submit">
                                    <p v-show="requireTextPost" style="color: red;">Debe Ingresar algun texto o imagen</p>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card" style="width: 100% !important; margin-top: 10px; z-index: 9;" v-for="post in posts">
                    <div class="card-body">
                        <div class="card-header border-0">
                            <div class="card-custom-avatar">
                                <img style="width: 75px; height: 75px;" class="rounded-circle" src="https://res.cloudinary.com/yamil/image/upload/v1529422392/file_1529422390_652f311e-bb8d-4abe-925e-7f39a1aeb123.jpg">
                            </div>
                            <div class="card-custom-title">
                                <p class="card-title card-title-user">Yamil Alejo Perez</p>
                                <p class="card-title card-title-date">Publicado el 4 de diciembre</p>
                            </div>

                        </div>
                        <p class="card-text card-custom-text">
                            {{post.text}}
                        </p>

                        <section class="gallery-block compact-gallery" v-if="post.resource.length > 0" >
                            <div class="container">
                                <div class="row no-gutters">
                                    <div class="col-md-6 col-lg-4 item zoom-on-hover" v-for="myresource in post.resource">
                                        <a class="lightbox" :href="'/uploads/' + myresource.new_name">
                                            <img class="img-fluid image" :src="'/uploads/' + myresource.new_name">
                                            <span class="description">
                                                <span class="description-heading">{{myresource.new_name}}</span>
                                                <span class="description-body">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc quam urna.Lorem ipsum dolor sit amet, consectetur adipiscing elit.</span>
                                            </span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
                </div>
            </div>
        </div>
    </section>
</template>
<script>
    import vue2Dropzone from 'vue2-dropzone'
    import 'vue2-dropzone/dist/vue2Dropzone.min.css'
    const config = {
        headers: {'Authorization': "bearer " + localStorage.getItem('_tkn')}
    };
    export default {
        components: {
            vueDropzone: vue2Dropzone
        },
        data(){
            return {
                requireTextPost: false,
                showDropzone: true,
                posts: [
                ],
                Post: {
                    id_user: 2,
                    text: '',
                    resource: [],
                    status: 2
                },
                dropzoneOptions: {
                    url: this.$hostname + this.$api_file,
                    method: 'POST',
                    acceptedFiles: "video/*,image/*",
                    timeout: null,
                    thumbnailWidth: 150,
                    maxFilesize: 40,
                    addRemoveLinks: true,
                    autoProcessQueue: false,
                    paramName: 'file',
                    headers: {'Authorization': "bearer " + localStorage.getItem('_tkn')}
                },
                countFile: 0
            }
        },
        methods:{
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
                    status: this.Post.status
                };

                axios
                    .post('http://127.0.0.1:4500/api/post/', bodyParameter, config)
                    .then( (res) => {
                        var response = res.data.post;
                        this.posts.unshift(
                            {
                                id: 1,
                                id_user: 1,
                                text: response.text,
                                resource: JSON.parse(response.resource)
                            })
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
            }
        },
        mounted() {
            axios
                .get('http://127.0.0.1:4500/api/post/', config)
                .then( (res) => {
                    console.log('RESULTADO MOUNTED : ', res);
                    var response = res.data;
                    for (var mypost in response)
                    {
                        this.posts.unshift(
                        {
                            id: 1,
                            id_user: 1,
                            text: response[mypost].text,
                            resource: JSON.parse(response[mypost].resource)
                        })
                    }
                }).catch(error => {
                    console.log('EERRROR: ', error);
                    this.$toasted
                        .error('Ocurrio un error al registrar el post!!')
                        .goAway(4000);
                });
            console.log('Component mounted  LIST POST.', this.$hostname)
            baguetteBox.run('.compact-gallery', { animation: 'slideIn'});
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
</style>
