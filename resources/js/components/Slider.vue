<template>
  <div class="container mx-auto flex flex-wrap bg-white ">
    <swiper
    :pagination="{
      type: 'fraction',
    }"
    :navigation="true"
    :modules="modules"
    class="mySwiper"
  >
    <swiper-slide v-for="board in boards">
      <div class="container mx-auto flex flex-wrap shadow-xl ">
      <div class="w-full md:w-1/2 p-4">
        <img :src="board.image" alt="Surfboard" class="w-full">
      </div>
      <div class="w-full md:w-1/2 p-4">
        <h2 class="text-xl font-montserrat font-bold">{{ board.title }}
        </h2>
        <div  class="tabs">
          <ul class="flex border-b font-roboto">
            <li v-for="tab in board.tabs" class="-mb-px mr-1" @click="setActiveTab(tab.label)"
              :class="{ 'border-b-2 border-sky-700': isActiveTab(tab.label) }">
              <a class="bg-white inline-block py-2 px-4  hover:text-sky-700 font-semibold cursor-pointer"
                :class="{ 'text-gray-400': !isActiveTab(tab.label) }">{{tab.label}}</a>
            </li>
          </ul>
          <div class="content py-4">
            <div v-for="tab in board.tabs"  v-show="isActiveTab(tab.label)" id="tab.label">
              <p>{{tab.content}}
              </p>
            </div>
          </div>
        </div>

        <div class="flex justify-start font-roboto font-bold">
          <div class="text-2xl my-auto">${{board.price}}</div>
          <button class="bg-sky-500 text-white px-10 py-3 mx-12 ">BUY NOW</button>
        </div>
      </div>
      </div>
    </swiper-slide>
  </swiper>
  </div>
</template>

<script>
  // Import Swiper Vue.js components
  import { Swiper, SwiperSlide } from 'swiper/vue';
  import { Pagination, Navigation } from 'swiper/modules';
  import 'swiper/css/pagination';
  import 'swiper/css/navigation';

  // Import Swiper styles
  import 'swiper/css';

export default {
  components: {
      Swiper,
      SwiperSlide,
    },
    setup() {
      return {
        modules: [Pagination, Navigation],
      };
    },
  data() {
    return {
      activeTab: 'DESCRIPTION',
      boards: [
        {
          'title': `JR Surfboards The Donny Stoker
          Yellow/Green
          Rail Fade`,
          'image': '/images/surfboard.jpg',
          'price': '499.99',
          'tabs': [
            {
              'label': 'DESCRIPTION',
              'content': `Easy to ride, care free surfing craft that's fun for everyone, paddles well, super fast down the line and great for any level of surfing depending on who rides it. The Donny Stoker, a rework on design from stokeys first ever pro model. A super easy to surf and fun board. The Donny Stoker is a board for total freesurfing expression.`,
            },
            {
              'label': 'FEATURES',
              'content': `Innovative design, lightweight material, and superior
                stability
                for all skill levels.`
            },
            {
              'label': 'DIMENSIONS',
              'content': `Length: 6'2", Width: 20", Thickness: 2.5`
            },
          ]
        },
        {
          'title': `Master Surfboards The Donny Stoker
          Yellow/Green
          Rail Fade`,
          'image': '/images/surfboard2.jpg',
          'price': '799.99',
          'tabs': [
            {
              'label': 'DESCRIPTION',
              'content': `Easy to ride, care free surfing craft that's fun for everyone, paddles well, super fast down the line and great for any level of surfing depending on who rides it. The Donny Stoker, a rework on design from stokeys first ever pro model. A super easy to surf and fun board. The Donny Stoker is a board for total freesurfing expression.`,
            },
            {
              'label': 'FEATURES',
              'content': `Innovative design, lightweight material, and superior
                stability
                for all skill levels.`
            },
            {
              'label': 'DIMENSIONS',
              'content': `Length: 6'2", Width: 20", Thickness: 2.5`
            },
          ]
        },
      ],
    };
  },
  methods: {
    setActiveTab(tabLabel) {
      this.activeTab = tabLabel;
    },
    isActiveTab(tabLabel) {
      return this.activeTab === tabLabel;
    }
  }
};
</script>

<style scoped>
/* Apply styles conditionally with the 'placeholder-style' class */
.placeholder-style::-webkit-datetime-edit-text,
.placeholder-style::-webkit-datetime-edit-month-field,
.placeholder-style::-webkit-datetime-edit-day-field,
.placeholder-style::-webkit-datetime-edit-year-field {
  color: transparent;
}

.placeholder-bold::placeholder {
  @apply font-bold;
}
</style>