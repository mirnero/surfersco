<template>
    <div class="bg-black h-full flex flex-col">
        <div class="bg-cover" style="background-image: url('/images/banner.jpg');">
            <!-- Header -->
            <header class="">
                <nav class="container mx-auto flex justify-between items-center p-4">
                    <a class="text-2xl font-bold font-montserrat" href="#">Surfers Co.</a>
                    <ul class="flex space-x-4">
                        <li><a class="hover:text-white" href="#">Boards</a></li>
                        <li><a class="hover:text-white" href="#">Accessories</a></li>
                        <li><a class="hover:text-white" href="#">Blog</a></li>
                        <li><a class="hover:text-white" href="#">Technology</a></li>
                        <li><a class="hover:text-white" href="#">Team</a></li>
                        <li><a class="hover:text-white" href="#">Dealers</a></li>
                    </ul>
                </nav>
            </header>

            <!-- Banner -->
            <section class="banner bg-cover bg-center text-center py-20">
                <div class="container mx-auto font-playfair">
                    <h1 class="text-5xl text-red text-it ">Ride every wave as if it's your last</h1>
                    <p class="p-2 text-2xl text-white">We love the motion of the ocean</p>
                </div>
            </section>

            <div class="relative w-full flex flex-col ">
                <div class="w-full h-1/2 gradient-border h-96">

                </div>
                <div class="w-full h-1/2 bg-white h-96">
                </div>
                <div
                    class="w-full absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 flex justify-center items-end">
                    <!-- <div class="container mx-auto flex flex-wrap bg-white ">
                        <div class="container mx-auto flex flex-wrap shadow-xl ">
                            <div class="w-full md:w-1/2 p-4">
                                <img src="/images/surfboard.jpg" alt="Surfboard" class="w-full">
                            </div>
                            <div class="w-full md:w-1/2 p-4">
                                <h2 class="text-xl font-montserrat font-bold">JR Surfboards The Donny Stoker
                                    Yellow/Green
                                    Rail Fade
                                </h2>
                                <div class="tabs">
                                    <ul class="flex border-b font-roboto">
                                        <li class="-mb-px mr-1" @click="setActiveTab('description')"
                                            :class="{ 'border-b-2 border-sky-700': isActiveTab('description') }">
                                            <a class="bg-white inline-block py-2 px-4  hover:text-sky-700 font-semibold cursor-pointer"
                                                :class="{ 'text-gray-400': !isActiveTab('description') }">DESCRIPTION</a>
                                        </li>
                                        <li class="mr-1" @click="setActiveTab('features')"
                                            :class="{ 'border-b-2 border-sky-700': isActiveTab('features') }">
                                            <a class="bg-white inline-block py-2 px-4  hover:text-sky-700 font-semibold cursor-pointer"
                                                :class="{ 'text-gray-400': !isActiveTab('features') }">FEATURES</a>
                                        </li>
                                        <li class="mr-1" @click="setActiveTab('dimensions')"
                                            :class="{ 'border-b-2 border-sky-700': isActiveTab('dimensions') }">
                                            <a class="bg-white inline-block py-2 px-4  hover:text-sky-700 font-semibold cursor-pointer"
                                                :class="{ 'text-gray-400': !isActiveTab('dimensions') }">DIMENSIONS</a>
                                        </li>
                                    </ul>
                                    <div class="content py-4">
                                        <div v-if="isActiveTab('description')" id="description">
                                            <p>Easy to ride, care free surfing craft that's fun for everyone, paddles
                                                well, super fast down the line and great for any level of surfing
                                                depending on who rides it. The Donny Stoker, a rework on design from
                                                stokeys first ever pro model. A super easy to surf and fun board. The
                                                Donny Stoker is a board for total freesurfing expression.
                                            </p>
                                        </div>
                                        <div v-if="isActiveTab('features')" id="features">
                                            <p>Innovative design, lightweight material, and superior
                                                stability
                                                for all skill levels.</p>
                                        </div>
                                        <div v-if="isActiveTab('dimensions')" id="dimensions">
                                            <p>Length: 6'2", Width: 20", Thickness: 2.5".</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="flex justify-start font-roboto font-bold">
                                    <div class="text-2xl my-auto">$499.99</div>
                                    <button class="bg-sky-500 text-white px-10 py-3 mx-12 ">BUY NOW</button>
                                </div>
                            </div>
                        </div>
                    </div> -->
                    <Slider/>
                </div>

            </div>

            <!-- About Us Section -->
            <section class="about">
                <div class="w-full flex flex-col ">
                    <div class="w-full flex h-52 bg-white justify-center items-end overflow-hidden">
                        <div
                            class="  bottom font-roboto text-center text-gray-200 font-extrabold text-9xl tracking-widest relative top-10">
                            ABOUT US
                        </div>
                    </div>
                    <div class="w-full flex h-52 bg-transparent">

                    </div>
                    <div class="w-full flex justify-around">
                        <div class="w-full text-center md:text-left  p-40 bg-white ">
                            <h2 class="text-xl font-roboto mb-4 text-center">WE ARE SURFERS CO.</h2>
                            <p class="text-gray-600 mb-8 font-playfair">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque consectetur tellus
                                vitae
                                tempor tristique. Integer ultrices luctus eros, a tincidunt ante eleifend id. Nam erat
                                purus, ultricies non pellentesque rutrum, blandit vitae metus. Nam eget metus aliquam,
                                tempor nulla at, bibendum eros. Morbi id erat vehicula, hendrerit dui et, ornare magna.
                                Duis
                                vulputate, orci sed bibendum sagittis, odio justo sodales nibh, eget luctus velit lorem
                                nec
                                elit.</p>
                            <a>Read more</a>
                        </div>
                        <!-- Right half: Video -->
                        <div class="relative w-full flex flex-col">
                            <div class="w-full h-1/2 bg-transparent">

                            </div>
                            <div class="w-full h-1/2 bg-white">
                            </div>
                            <div
                                class="flex flex-col w-full h-full  absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 shadow-2xl flex justify-center items-end">
                                <div class="h-20"></div>
                                <iframe
                                    class="h-full w-full mt-20 p-20"
                                    src="https://www.youtube.com/embed/WQ6Vdv_fyYc?si=4QDDZ8RVMj7FZ98-"
                                    title="YouTube video player" frameborder="0"
                                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                    referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                            </div>

                        </div>
                    </div>
                </div>
            </section>

            <div class="w-full flex justify-around bg-white p-20">
                <div class="w-full text-center md:text-left p-20 bg-transparent h-96 ">
                    <div class="overflow-hidden">
                        <h2
                            class="text-8xl text-center font-roboto text-gray-300 mb-4  tracking-widest relative top-10">
                            INSTAGRAM</h2>
                    </div>
                    <blockquote class="instagram-media" data-instgrm-captioned data-instgrm-permalink="https://www.instagram.com/p/Cizp4Kxo1-U/?utm_source=ig_embed&amp;utm_campaign=loading" data-instgrm-version="14" style=" background:#FFF; border:0; border-radius:3px; box-shadow:0 0 1px 0 rgba(0,0,0,0.5),0 1px 10px 0 rgba(0,0,0,0.15); margin: 1px; max-width:540px; min-width:326px; padding:0; width:99.375%; width:-webkit-calc(100% - 2px); width:calc(100% - 2px);"><div style="padding:16px;"> <a href="https://www.instagram.com/p/Cizp4Kxo1-U/?utm_source=ig_embed&amp;utm_campaign=loading" style=" background:#FFFFFF; line-height:0; padding:0 0; text-align:center; text-decoration:none; width:100%;" target="_blank"> <div style=" display: flex; flex-direction: row; align-items: center;"> <div style="background-color: #F4F4F4; border-radius: 50%; flex-grow: 0; height: 40px; margin-right: 14px; width: 40px;"></div> <div style="display: flex; flex-direction: column; flex-grow: 1; justify-content: center;"> <div style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; margin-bottom: 6px; width: 100px;"></div> <div style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; width: 60px;"></div></div></div><div style="padding: 19% 0;"></div> <div style="display:block; height:50px; margin:0 auto 12px; width:50px;"><svg width="50px" height="50px" viewBox="0 0 60 60" version="1.1" xmlns="https://www.w3.org/2000/svg" xmlns:xlink="https://www.w3.org/1999/xlink"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><g transform="translate(-511.000000, -20.000000)" fill="#000000"><g><path d="M556.869,30.41 C554.814,30.41 553.148,32.076 553.148,34.131 C553.148,36.186 554.814,37.852 556.869,37.852 C558.924,37.852 560.59,36.186 560.59,34.131 C560.59,32.076 558.924,30.41 556.869,30.41 M541,60.657 C535.114,60.657 530.342,55.887 530.342,50 C530.342,44.114 535.114,39.342 541,39.342 C546.887,39.342 551.658,44.114 551.658,50 C551.658,55.887 546.887,60.657 541,60.657 M541,33.886 C532.1,33.886 524.886,41.1 524.886,50 C524.886,58.899 532.1,66.113 541,66.113 C549.9,66.113 557.115,58.899 557.115,50 C557.115,41.1 549.9,33.886 541,33.886 M565.378,62.101 C565.244,65.022 564.756,66.606 564.346,67.663 C563.803,69.06 563.154,70.057 562.106,71.106 C561.058,72.155 560.06,72.803 558.662,73.347 C557.607,73.757 556.021,74.244 553.102,74.378 C549.944,74.521 548.997,74.552 541,74.552 C533.003,74.552 532.056,74.521 528.898,74.378 C525.979,74.244 524.393,73.757 523.338,73.347 C521.94,72.803 520.942,72.155 519.894,71.106 C518.846,70.057 518.197,69.06 517.654,67.663 C517.244,66.606 516.755,65.022 516.623,62.101 C516.479,58.943 516.448,57.996 516.448,50 C516.448,42.003 516.479,41.056 516.623,37.899 C516.755,34.978 517.244,33.391 517.654,32.338 C518.197,30.938 518.846,29.942 519.894,28.894 C520.942,27.846 521.94,27.196 523.338,26.654 C524.393,26.244 525.979,25.756 528.898,25.623 C532.057,25.479 533.004,25.448 541,25.448 C548.997,25.448 549.943,25.479 553.102,25.623 C556.021,25.756 557.607,26.244 558.662,26.654 C560.06,27.196 561.058,27.846 562.106,28.894 C563.154,29.942 563.803,30.938 564.346,32.338 C564.756,33.391 565.244,34.978 565.378,37.899 C565.522,41.056 565.552,42.003 565.552,50 C565.552,57.996 565.522,58.943 565.378,62.101 M570.82,37.631 C570.674,34.438 570.167,32.258 569.425,30.349 C568.659,28.377 567.633,26.702 565.965,25.035 C564.297,23.368 562.623,22.342 560.652,21.575 C558.743,20.834 556.562,20.326 553.369,20.18 C550.169,20.033 549.148,20 541,20 C532.853,20 531.831,20.033 528.631,20.18 C525.438,20.326 523.257,20.834 521.349,21.575 C519.376,22.342 517.703,23.368 516.035,25.035 C514.368,26.702 513.342,28.377 512.574,30.349 C511.834,32.258 511.326,34.438 511.181,37.631 C511.035,40.831 511,41.851 511,50 C511,58.147 511.035,59.17 511.181,62.369 C511.326,65.562 511.834,67.743 512.574,69.651 C513.342,71.625 514.368,73.296 516.035,74.965 C517.703,76.634 519.376,77.658 521.349,78.425 C523.257,79.167 525.438,79.673 528.631,79.82 C531.831,79.965 532.853,80.001 541,80.001 C549.148,80.001 550.169,79.965 553.369,79.82 C556.562,79.673 558.743,79.167 560.652,78.425 C562.623,77.658 564.297,76.634 565.965,74.965 C567.633,73.296 568.659,71.625 569.425,69.651 C570.167,67.743 570.674,65.562 570.82,62.369 C570.966,59.17 571,58.147 571,50 C571,41.851 570.966,40.831 570.82,37.631"></path></g></g></g></svg></div><div style="padding-top: 8px;"> <div style=" color:#3897f0; font-family:Arial,sans-serif; font-size:14px; font-style:normal; font-weight:550; line-height:18px;">Visualizza questo post su Instagram</div></div><div style="padding: 12.5% 0;"></div> <div style="display: flex; flex-direction: row; margin-bottom: 14px; align-items: center;"><div> <div style="background-color: #F4F4F4; border-radius: 50%; height: 12.5px; width: 12.5px; transform: translateX(0px) translateY(7px);"></div> <div style="background-color: #F4F4F4; height: 12.5px; transform: rotate(-45deg) translateX(3px) translateY(1px); width: 12.5px; flex-grow: 0; margin-right: 14px; margin-left: 2px;"></div> <div style="background-color: #F4F4F4; border-radius: 50%; height: 12.5px; width: 12.5px; transform: translateX(9px) translateY(-18px);"></div></div><div style="margin-left: 8px;"> <div style=" background-color: #F4F4F4; border-radius: 50%; flex-grow: 0; height: 20px; width: 20px;"></div> <div style=" width: 0; height: 0; border-top: 2px solid transparent; border-left: 6px solid #f4f4f4; border-bottom: 2px solid transparent; transform: translateX(16px) translateY(-4px) rotate(30deg)"></div></div><div style="margin-left: auto;"> <div style=" width: 0px; border-top: 8px solid #F4F4F4; border-right: 8px solid transparent; transform: translateY(16px);"></div> <div style=" background-color: #F4F4F4; flex-grow: 0; height: 12px; width: 16px; transform: translateY(-4px);"></div> <div style=" width: 0; height: 0; border-top: 8px solid #F4F4F4; border-left: 8px solid transparent; transform: translateY(-4px) translateX(8px);"></div></div></div> <div style="display: flex; flex-direction: column; flex-grow: 1; justify-content: center; margin-bottom: 24px;"> <div style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; margin-bottom: 6px; width: 224px;"></div> <div style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; width: 144px;"></div></div></a><p style=" color:#c9c8cd; font-family:Arial,sans-serif; font-size:14px; line-height:17px; margin-bottom:0; margin-top:8px; overflow:hidden; padding:8px 0 7px; text-align:center; text-overflow:ellipsis; white-space:nowrap;"><a href="https://www.instagram.com/p/Cizp4Kxo1-U/?utm_source=ig_embed&amp;utm_campaign=loading" style=" color:#c9c8cd; font-family:Arial,sans-serif; font-size:14px; font-style:normal; font-weight:normal; line-height:17px; text-decoration:none;" target="_blank">Un post condiviso da @surfer.co</a></p></div></blockquote>
                </div>
                <!-- Right half: Video -->
                <div class="relative w-full flex flex-col bg-transparent">

                    <div class="container mx-auto">
                        <contact-form></contact-form>
                    </div>

                </div>
            </div>

            <div class="bg-black w-full flex items">
                <div class="w-1/2">

                </div>
                <div class="w-1/2">
                    <div class="container mx-auto flex flex-wrap justify-start text-white space-x-20 p-20">
                        <ul class="space-y-4">
                            <li class="flex items-center">
                                <a href="#" class="hover:text-gray-400">About</a>
                            </li>
                            <li class="flex items-center">
                                <a href="#" class="hover:text-gray-400">Boards</a>
                            </li>
                            <li class="flex items-center">
                                <a href="#" class="hover:text-gray-400">Accessories</a>
                            </li>
                            <li class="flex items-center">
                                <a href="#" class="hover:text-gray-400">Blog</a>
                            </li>
                        </ul>
                        <ul class="space-y-4">
                            <li class="flex items-center">
                                <a href="#" class="hover:text-gray-400">Technology</a>
                            </li>
                            <li class="flex items-center">
                                <a href="#" class="hover:text-gray-400">Team</a>
                            </li>
                            <li class="flex items-center">
                                <a href="#" class="hover:text-gray-400">Dealers</a>
                            </li>
                            <li class="flex items-center">
                                <a href="#" class="hover:text-gray-400">Contact us</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import Slider from '../components/Slider.vue'

export default {
    components:{
        Slider
    },
    name: 'HomePage',
    data() {
        return {
            activeTab: 'description'
        };
    },
    // methods: {
    //     setActiveTab(tab) {
    //         this.activeTab = tab;
    //     },
    //     isActiveTab(tab) {
    //         return this.activeTab === tab;
    //     }
    // }
};
</script>


<style scoped>
/* Nessuno stile specifico per Home.vue */
</style>