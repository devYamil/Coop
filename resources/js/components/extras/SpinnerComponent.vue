<template>
    <div class="root-spinner">
        <div id="startup-spinner">
            <svg class="spinner-container" width="65px" height="65px" viewBox="0 0 52 52">
                <circle class="path" cx="26px" cy="26px" r="20px" fill="none" stroke-width="4px"></circle>
            </svg>
        </div>
        <div class="text-spinner">Cargando...</div>
    </div>
</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted Spinner')
        }
    }
</script>
<style>
    .text-spinner{
        font-family: 'Montserrat', sans-serif;
        font-size: 12px;
    }
    #startup-spinner {
        width: 40px;
        height: 40px;
        position: relative;
        font-size: 12px;    left: 8px;
        background-color: #eeeeee;
        -moz-user-select: none;
        -webkit-user-select: none;
        display: flex;
        align-items: center;
        justify-content: center;
        display: -webkit-box;
        display: -webkit-flex;
        -webkit-align-items: center;
        -webkit-justify-content: center;

        -moz-border-radius: 20px;
        -webkit-border-radius: 20px;
        -khtml-border-radius: 20px;
        border-radius: 20px;
    }
    .spinner-container {
        -webkit-animation: rotate 2s linear infinite;
        animation: rotate 2s linear infinite;
        z-index: 2;
    }

    .spinner-container .path {
        stroke-dasharray: 1, 150;
        /* 1%, 101% circumference */

        stroke-dashoffset: 0;
        stroke: rgba(27, 154, 89, 0.7);
        stroke-linecap: round;
        -webkit-animation: dash 1.5s ease-in-out infinite;
        animation: dash 1.5s ease-in-out infinite;
    }

    @keyframes rotate {
        100% {
            transform: rotate(360deg);
        }
    }

    @-webkit-keyframes rotate {
        100% {
            -webkit-transform: rotate(360deg);
        }
    }

    @keyframes dash {
        0% {
            stroke-dasharray: 1, 150;
            /* 1%, 101% circumference */

            stroke-dashoffset: 0;
        }
        50% {
            stroke-dasharray: 90, 150;
            /* 70%, 101% circumference */

            stroke-dashoffset: -35;
            /* 25% circumference */
        }
        100% {
            stroke-dasharray: 90, 150;
            /* 70%, 101% circumference */

            stroke-dashoffset: -124;
            /* -99% circumference */
        }
    }

    @-webkit-keyframes dash {
        0% {
            stroke-dasharray: 1, 150;
            /* 1%, 101% circumference */

            stroke-dashoffset: 0;
        }
        50% {
            stroke-dasharray: 90, 150;
            /* 70%, 101% circumference */

            stroke-dashoffset: -35;
            /* 25% circumference */
        }
        100% {
            stroke-dasharray: 90, 150;
            /* 70%, 101% circumference */

            stroke-dashoffset: -124;
            /* -99% circumference */
        }
    }
</style>