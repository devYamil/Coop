<template>
    <section style="padding-top: 200px;" class="wellcome_area clearfix" id="inicio">
        <div class="container h-100" >
            <div class="row h-100 align-items-center">
                <div class="card" style="width: 100% !important; margin-top: 10px;">
                    <div class="card-body">
                        <pre v-html="countFile"></pre>
                        <pre v-html="Post"></pre>
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
                <div class="card" style="width: 100% !important; margin-top: 10px;" v-for="post in posts">
                    <div class="card-body">
                        <div class="card-header border-0">
                            <div class="card-custom-avatar">
                                <img style="width: 75px; height: 75px;" class="rounded-circle" src="https://res.cloudinary.com/yamil/image/upload/v1529422392/file_1529422390_652f311e-bb8d-4abe-925e-7f39a1aeb123.jpg">
                            </div>
                            <div class="card-custom-title">
                                <p class="card-title card-title-user">aYamil Alejo Perez  TESTING</p>
                                <p class="card-title card-title-date">Publicado el 4 de diciembre</p>
                            </div>

                        </div>
                        <p class="card-text card-custom-text">
                            {{post.text}}
                        </p>
                        <a href="#" class="btn btn-primary">Button</a>
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
                    {
                        id: 1,
                        id_user: 2,
                        text: "t is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).",
                        resource: "IMAGEN.PHP"
                    }
                ],
                Post: {
                    id_user: 2,
                    text: '',
                    resource: '',
                    status: 2
                },
                dropzoneOptions: {
                    url: this.$hostname + this.$api_file,
                    method: 'POST',
                    acceptedFiles: "video/*,image/*",
                    timeout: null,
                    thumbnailWidth: 150,
                    maxFilesize: 10,
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
                    if (text.length>0){
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
                        console.log('RESPONSE: ', res);
                        this.posts.unshift(res.data.post);
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
                console.log('llamando metodo');
            },
            // EVENTS DROPZONE
            dropzoneSuccess(args) {
                const argsResponse = args[1];
                const url = argsResponse.url;
                const media_id = argsResponse.media_id;
                const tags = argsResponse.tags;
                const type = argsResponse.type;
                const width = argsResponse.width;
                const height = argsResponse.height;
                const bytes = argsResponse.bytes;
                const uploaded = argsResponse.uploaded;
                this.Post.resource.push(
                    {
                        url: url,
                        media_id: media_id,
                        type: type,
                        tags: tags,
                        bytes: bytes,
                        uploaded: uploaded,
                        width: width,
                        height: height
                    }
                );
                //console.log('DROPZONE EVENT SUCCESS::::', file);
            },
            dropzoneComplete(file) {
                console.log(file);
                console.log('DROPZONE EVENT COMPLETE', file);
            },
            dropzoneQueueComplete(){
                this.storePost();
                console.log('DROPZONE EVENT QUEUE COMPLET ALL ---->>>>>>>>>>>>>>>>>>');
            },
            dropzoneFileAdded(){
                console.log('DROPZONE EVENT FILE ADDED *****************');
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
                    this.posts = res.data;
                }).catch(error => {
                    this.$toasted
                        .error('Ocurrio un error al registrar el post!!')
                        .goAway(4000);
                });
            console.log('Component mounted  LIST POST.', this.$hostname)
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
