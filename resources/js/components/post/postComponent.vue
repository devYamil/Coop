<template>
    <section style="padding-top: 200px;" class="wellcome_area clearfix" id="inicio">
        <div class="container h-100" >
            <div class="row h-100 align-items-center">
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
                            Aenean pharetra lorem vitae erat dignissim tempor. Sed et odio vel turpis luctus tempus non sit amet massa. Nunc quis ipsum sit amet enim placerat aliquam non eu lorem. Fusce iaculis leo sed rhoncus dictum. Fusce nulla mi, scelerisque eget suscipit eu, luctus ut tellus. Donec dignissim, magna ac pharetra cursus, diam mauris faucibus tortor, laoreet consectetur odio risus gravida magna. Proin cursus placerat eros, sagittis consequat neque porttitor in. Morbi in semper mauris, vel placerat odio. Nulla interdum erat sed imperdiet imperdiet. Ut sed eros et metus ultricies bibendum eget ornare ex. Vestibulum tempus accumsan elit, in lobortis tortor auctor id. Vivamus semper, metus id mollis malesuada, enim eros efficitur mauris, ut iaculis massa lacus vel mi. Donec eu pulvinar risus. Vivamus ornare, enim mattis scelerisque sollicitudin, mi purus dictum nunc, eget faucibus nisl sem nec enim. Aenean ultrices felis eu tellus congue, a pellentesque neque pharetra. Sed justo enim, ornare ac lorem sit amet, convallis viverra dolor.
                            Suspendisse ullamcorper in mi sit amet aliquam. Etiam ut libero accumsan, auctor felis sit amet, congue magna. Phasellus orci velit, tempor at est ut, accumsan elementum magna. Mauris ornare pellentesque tellus, ac venenatis tortor semper id. Vivamus suscipit interdum massa at porttitor. Etiam non velit at nisl finibus congue. Cras fermentum quis magna non dapibus. Interdum et malesuada fames ac ante ipsum primis in faucibus. Curabitur metus est, consectetur in pretium eu, eleifend eget quam. Etiam velit turpis, bibendum vitae dolor nec, tristique aliquam ipsum.
                        </p>
                        <a href="#" class="btn btn-primary">Button</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
</template>

<script>
    export default {
        data(){
            return {
                posts: [
                    {
                        id: 1,
                        id_user: 2,
                        text: "t is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).",
                        resource: "IMAGEN.PHP"
                    },
                    {
                        id: 2,
                        id_user: 2,
                        text: "t is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).",
                        resource: "IMAGEN.PHP"
                    },
                    {
                        id: 3,
                        id_user: 2,
                        text: "t is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).",
                        resource: "IMAGEN.PHP"
                    },
                    {
                        id: 4,
                        id_user: 2,
                        text: "t is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).",
                        resource: "IMAGEN.PHP"
                    },
                    {
                        id: 5,
                        id_user: 2,
                        text: "t is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).",
                        resource: "IMAGEN.PHP"
                    },
                ]
            }
        },
        mounted() {
            console.log('Component mounted  LIST POST.')
        }
    }
</script>
