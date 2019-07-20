<template>
    <div>
    <div class="special_description_img">
        <img :src="imageSRC" alt="">
        <div data-toggle="modal" data-target="#modal-imagen-1" class="app-download-btn wow fadeInUp" data-wow-delay="0.2s">
            <!-- Google Store Btn -->
            <a href="#">
                <i class="fa fa-picture-o"></i>
                <p class="mb-0"><span>Disponible</span> Editar Imagen</p>
            </a>
        </div>
    </div>
    <!-- Modal -->
    <div id="modal-imagen-1" class="modal fade" role="dialog">
        <div class="modal-dialog modal-lg">
            <form @submit.prevent="validateForm" method="post" enctype="multipart/form-data">
                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header bg-primary">
                        <h4 style="color: #FFFFFF;" class="modal-title">Editar Imagen 1</h4>
                        <button type="button" class="close"  data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="contact_input_area">
                            <div class="row">
                                <!-- Single Input Area Start -->
                                <div class="col-md-12">
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
                                </div>
                                <!-- Single Input Area Start -->
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <input v-model="text" type="text" class="form-control" name="escribe_texto_de_imagenes" id="escribe_texto_de_imagenes" placeholder="Escribe un texto"  >
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-outline-primary" id="upload_contratos"  name="Lae_submit"><i class="ti-upload"> </i> Subir Archivo</button>
                        <button type="button"  id="salirBuscarEliminar" name="salirBuscarEliminar" class="btn btn-outline-primary"><i class="ti-shift-left"> </i> Salir</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
        </div>
</template>

<script>
    import vue2Dropzone from 'vue2-dropzone'
    import 'vue2-dropzone/dist/vue2Dropzone.min.css'
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
                text:'',
                imageSRC: '20190427_143133.jpg',
                countFile: 0,
                showDropzone: true,
                dropzoneOptions: {
                    url: this.$hostname + this.$api_editar_imagen,
                    method: 'POST',
                    acceptedFiles: "image/*",
                    timeout: null,
                    thumbnailWidth: 150,
                    maxFilesize: 40,
                    addRemoveLinks: true,
                    autoProcessQueue: false,
                    paramName: 'file',
                    headers: {'Authorization': "bearer " + localStorage.getItem('_tkn')}
                },
            }
        },
        mounted() {
            console.log('Component mounted.')
            console.log("*****************STORAGE PATH : " + this.storage_path);
        },
        props: ['storage_path'],
        methods:{
            validateForm: function (){
                let text = this.text;
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
            showDropzoneArea: function(){
                if(this.showDropzone == true){
                    this.showDropzone = false;
                }else{
                    this.showDropzone = true;
                }
            },
            // EVENTS DROPZONE
            dropzoneSuccess(file) {

            },
            dropzoneComplete(file) {
                var responsetext = JSON.parse(file.xhr.responseText);
                this.imageSRC = 'imagenes_cooperativa_editable/'+responsetext.file.new_name;


                alert("Se guardo la imagen con exito");
            },
            dropzoneQueueComplete(file){

            },
            dropzoneFileAdded(){
                this.countFile++;
            },
            dropzoneRemovedFile(){
                this.countFile--;
            },
        }
    }
</script>
