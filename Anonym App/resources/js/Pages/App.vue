<template>

  <Head title="App" />

   <div class="h-screen w-full bg-white relative flex overflow-hidden">

<!-- Sidebar -->
<aside class="h-full w-16 flex flex-col space-y-10 items-center justify-center relative bg-blue-950 text-white">
  <!-- Profile -->
  <!-- <div class="h-10 w-10 flex items-center justify-center rounded-lg cursor-pointer hover:text-gray-800 hover:bg-white  hover:duration-300 hover:ease-linear focus:bg-white"> -->
    <!-- <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd" /></svg> -->
    <!-- <h3 class="font-black text-2xl">?</h3> -->
  <!-- </div> -->

  <!-- Courses -->
  <!-- <div class="h-10 w-10 flex items-center justify-center rounded-lg cursor-pointer hover:text-gray-800 hover:bg-white  hover:duration-300 hover:ease-linear focus:bg-white"> -->
    <!-- <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" /></svg> -->
  <!-- </div> -->

  <!-- Theme -->
  <!-- <div class="h-10 w-10 flex items-center justify-center rounded-lg cursor-pointer hover:text-gray-800 hover:bg-white  hover:duration-300 hover:ease-linear focus:bg-white"> -->
    <!-- <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"> -->
      <!-- <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z" /> -->
    <!-- </svg> -->
    
    <!-- <h3 class="font-black text-2xl">🏠</h3> -->
  <!-- </div> -->

  <!-- Configuration -->
  <!-- <div class="h-10 w-10 flex items-center justify-center rounded-lg cursor-pointer hover:text-gray-800 hover:bg-white  hover:duration-300 hover:ease-linear focus:bg-white"> -->
    <!-- <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"> -->
      <!-- <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z" /> -->
      <!-- <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" /> -->
    <!-- </svg> -->
  <!-- </div> -->
</aside>



<div class="w-full h-full flex flex-col justify-between">
  <!-- Header -->
  <header class="h-16 w-full flex items-center relative px-5 space-x-10 bg-blue-950">
    <!-- Informação -->

    <div class="flex justify-start">
        <div ><svg height="30px" width="30px" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 512.131 512.131" xml:space="preserve" fill="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <circle style="fill:#ffffff00;" cx="256.066" cy="256" r="256"></circle> <path style="fill:#ffffff;" d="M77.247,338.967c15.121-26.691,38.788-57.59,14.726-104.793 C43.982,61.929,220.039,37.473,244.758,105.056c40.234,16.041,39.182,104.004,18.539,150.024 c-0.92,18.934-15.778,34.712,18.013,83.624C191.77,353.693,139.571,348.565,77.247,338.967z"></path> <path style="fill:#d7a769;" d="M151.01,289.397c-1.578,29.321-11.965,38.393-26.428,46.151 c-7.363,6.443-59.431,10.387-78.628,34.317c-3.287,4.207-6.574,10.256-9.598,17.882c44.705,74.552,126.356,124.384,219.579,124.384 c5.785,0,11.439-0.132,17.093-0.526c0.526-5.654,1.578-9.861,3.287-11.834c4.339-4.733,11.308-48.649,11.308-48.649l4.339,58.511 c17.75-2.498,34.975-6.837,51.41-12.754c-5.522-44.705-14.595-103.347-26.954-124.121c-16.567-27.743-70.739-30.504-77.444-36.158 c-14.069-7.889-24.193-17.619-25.771-46.94c0,0-21.037,16.304-34.186,13.806c-13.148-2.498-28.006-13.806-28.006-13.806V289.397z"></path> <path style="fill:#E4E7ED;" d="M142.069,321.479c-4.47,6.311-10.519,10.256-17.356,13.937c-7.363,6.443-59.431,10.387-78.628,34.317 c-3.287,4.207-6.574,10.256-9.598,17.882C81.192,462.167,162.843,512,256.066,512c6.048,0,11.965-0.263,17.882-0.657 c0.526-6.048,1.315-10.387,2.498-11.702c4.076-4.47,11.308-48.649,11.308-48.649l3.813,58.511 c18.934-2.63,37.21-7.363,54.566-13.937c-7.758-46.283-19.854-106.502-29.715-123.201c-16.567-27.743-70.739-30.504-77.444-36.158 c-6.048-3.419-11.308-7.1-15.515-12.491l-39.051,74.683l-42.469-76.918H142.069z"></path> <path style="fill:#FFFFFF;" d="M196.24,504.9V376.045L178.49,410.1v89.935C184.275,501.876,190.192,503.585,196.24,504.9z"></path> <path style="fill:#e5a968;" d="M150.352,298.469c7.626,4.602,20.512,18.802,32.477,19.065c11.965,0.131,28.795-17.487,31.162-18.802 c-0.263-1.709-0.394-3.419-0.526-5.259l-0.263,0.132l0,0l0,0c-0.657,0.526-21.3,16.567-34.186,14.069 c-12.754-2.498-27.086-13.411-28.006-14.069l-0.263-0.132c-0.131,1.709-0.263,3.419-0.526,4.996H150.352z"></path> <path style="fill:#FED198;" d="M117.087,242.457c13.017,27.875,17.75,38.656,33.923,51.147c0,0,14.989,11.571,28.006,14.069 c13.148,2.498,34.186-14.069,34.186-14.069c16.173-12.491,20.906-23.404,33.923-51.147c3.156,1.709,6.574,3.945,9.072,1.052 c2.63-3.024,14.858-41.418,12.622-46.677c-2.235-5.128-6.706-1.578-7.626,0.526c-0.657,0.92-1.183,4.865-2.104,4.865 c-0.789,0-1.183-1.709-2.498-5.522c-3.682-10.519-11.439-21.432-14.463-56.933c-58.905,58.379-113.865,31.556-133.062,35.501 c-4.996,1.052-5.391,13.148-4.996,20.38c0,0.789,1.315,4.076,0.92,4.339c-0.657,0-2.63-3.156-2.893-3.419 c-19.065-12.36,5.391,46.282,5.917,46.808c2.63,3.024,5.917,0.657,9.072-1.052V242.457z"></path> <g> <path style="fill:#FFFFFF;" d="M142.069,321.479l42.469,76.918l-3.682,7.1c-6.443-9.204-19.723-40.234-22.352-40.103 c-24.193,0.131-51.016,13.411-40.629-5.259l18.013-32.082l6.048-6.574H142.069z"></path> <path style="fill:#FFFFFF;" d="M222.406,322.268l-26.297,53.777v8.284c1.315-0.789,14.2-21.3,15.252-21.3 c12.097-0.263,36.421,11.965,39.708,4.076c0.526-1.446-0.263-3.682-1.841-6.443l-17.75-29.19l-8.941-9.072L222.406,322.268z"></path> </g> <g> <path style="fill:#EDEDED;" d="M187.562,416.148c2.761,0,4.996,2.235,4.996,4.996s-2.235,4.996-4.996,4.996 s-4.996-2.235-4.996-4.996S184.801,416.148,187.562,416.148z"></path> <path style="fill:#EDEDED;" d="M187.562,430.743c2.761,0,4.996,2.235,4.996,4.996s-2.235,4.996-4.996,4.996 s-4.996-2.235-4.996-4.996S184.801,430.743,187.562,430.743z"></path> </g> <path style="fill:#83CF8F;" d="M301.559,238.381c0,0,11.965-36.027,12.36-66.137c-1.972-5.522-3.156-11.308-3.156-17.487v-27.875 c0-28.269,22.878-51.147,51.147-51.147h98.876c28.269,0,51.147,22.878,51.147,51.147v27.875c0,28.269-22.878,51.147-51.147,51.147 h-98.876c-4.076,0-8.021-0.526-11.834-1.446c-10.256,5.522-30.504,17.356-48.518,33.791V238.381z"></path> <path style="fill:#FFFFFF;" d="M485.506,108.606H343.108v-8.021h142.398V108.606z M418.58,175.137h-75.472v-8.021h75.472V175.137z M485.506,152.916H343.108v-8.021h142.398V152.916z M485.506,130.695H343.108v-8.021h142.398V130.695z"></path> </g></svg></div>
        <h1 class="text-white text-xl font-black">Anonym</h1>
    </div>
    
    <div class="flex justify-end items-center relative w-full">
        <div class="flex flex-shrink-0 items-center space-x-4 text-white">
      
      <!-- Texto -->
      <div class="flex flex-col items-end ">
        <!-- Nome -->
        <!-- <div class="text-md font-medium ">Unknow Unknow</div> -->
        <!-- Título -->
        <!-- <div class="text-sm font-regular">Student</div> -->
        <Link class="bg-sky-600 rounded-md text-white ml-2 w-full h-full p-2 font-bold" :href="route('create-question')">Post a Question</Link>
      </div>
      
      <!-- Foto -->
      <!-- <div class="h-10 w-10 rounded-full cursor-pointer bg-gray-200 border-2 border-blue-950"></div> -->
    </div>
    </div>
    
  </header>

  <!-- Main -->
  <main class="max-w-full h-full flex relative overflow-y-hidden">
    <!-- Container -->
    <div class="h-full w-full m-4 rounded-tl grid-flow-col auto-cols-max gap-4 overflow-y-scroll">
      <!-- Container -->
      <FeedComponent :posts = "data.questions" @show="show"/>
    </div>
  </main>
</div>
    <ShowComponent :show="postId" :toggle="toggle" @close-popup="hide" :post="post" :comments="com" />
    
    
</div>
</template>

<script setup>
import { Link, Head } from '@inertiajs/vue3';
import ShowComponent from './Show.vue';
import FeedComponent from './Feed.vue';
import {ref, watchEffect, onMounted} from 'vue'
import { dataStore } from '@/stores/index'


const data = dataStore()
const posts = ref([])
const postId = ref('')
const post = ref([])
const com = ref([])

const toggle = ref(false)
onMounted (()=> {
  fetch('api/posts')
    .then( res => res.json())
    .then(res => {
        // posts.value = res.data
        data.questions = res.data
    })
})
// watchEffect(() => {
//     fetch('api/posts')
//     .then( res => res.json())
//     .then(res => {
//         posts.value = res.data
//         data.questions = res.data
//     })
// })
const hide = () => {
  toggle.value = false
}
const show = (id) => {
    postId.value = id,
    toggle.value = !toggle.value


    fetch('api/posts/'+ id)
    .then( res => res.json())
    .then(res => {
        post.value = res.data
    })

    fetch(`api/posts/${id}/comments`)
    .then(comments => comments.json())
    .then(comments => {
      com.value = comments.data
    })
}
</script>