<template>
    <div v-if="toggle" class="absolute bg-black opacity-70 inset-0 z-0 " @click="$emit('close-popup')">
    </div>
        <div v-if="toggle" class="w-full max-w-7xl  absolute inset-0 z-0 mx-auto my-auto rounded-xl shadow-lg bg-white opacity-100 h-full pt-8 pl-8 pr-8 pb-28">
          <div>
            <!-- <div class="text-center pb-3 flex-auto justify-center leading-6">
              <div class="flex w-full justify-end">
                  <a @click="$emit('close-popup')" class="cursor-pointer justify-end flex w-fit bg-red-500 text-white p-2 rounded-md font-bold">Close</a>
              </div>
            </div> -->
            <div class="bg-sky-600 w-full h-20 rounded-xl">
              <h2 class="text-lg font-bold text-center text-white p-4">{{ post.title }}</h2>
              <!-- {{ show }}
              <h3 v-for="comment in comments" :key="comment.id">{{comment.comment}}</h3> -->
            </div>
            <div class=" w-full mt-4 rounded-tl grid-flow-col auto-cols-max gap-4 overflow-y-scroll pb-8" style="height: 70vh;">
                  <!-- Container -->
              <div class="w-full flex flex-wrap gap-4">
                <div class="w-fit h-fit  flex-grow  cursor-pointer"  v-for="(comment, index) in comments" :key="comment.id">
                    <h3 class="rounded-2xl bg-sky-300 transition-colors p-8 text-lg font-bold text-center text-sky-600" @click="DeleteComment(comment, index)">{{ comment.comment }}</h3>
                    
                </div>
              </div>
            </div>
            <!-- <div class="pt-2 pb-2 flex">
              <textarea type="text" class="border-sky-600 border-solid border-2 rounded-xl w-full h-16 p-2" v-model="newInput" @keyup.ctrl.enter="addComment" required></textarea>
              <button class="bg-sky-600 rounded-md text-white ml-2 w-1/6" @click="addComment">Add Comment</button>
            </div> -->
            <div class="flex justify-center">
              <h3 class="text-red-600 text-lg">To delete a comment, click on it</h3>
            </div>

          </div>
        </div>
        
    <!-- </div> -->
</template>

<script setup>
  import { dataStore } from '@/stores/index'
  const data = dataStore()
  import { watch, ref } from "vue"
    const emit = defineEmits(['close-popup', 'newcomment'])
  
    const props = defineProps({
      show: {
        
      },
      toggle: {
        type: Boolean,
        default: false,
      },
      post: {
        type: Object
      },
      comments: {
        
      }
    })
    const newInput = ref('');


    const addComment  = () => {
      if(!newInput.value ==''){
      axios.post(`/api/posts/${props.post.id}/comments`, {
                comment: newInput.value,
                is_admin: true,
              }).then(() =>(
                props.comments.push({
                comment: newInput.value
                }),
                  // console.log(props.comments.length),
                  // this.$emit('newcomment',{
                  //   'commentslenght': props.comments.length
                  // }),
                  newInput.value = ''
                  ))

      }
      else{
        alert('Kindly input your comment!')
      }

    }

    const DeleteComment = (comment, index) => {
      if (confirm('You are about to delete a comment, are you sure?')) {
        let id = comment.id
            axios.delete(`/api/comments/${id}`, {
                comment: id
            }).then(()=>(
                props.comments.splice(index, 1)
            ))   
        }
    }
    
    // for(const comment in props.comments){
    //     console.log(props.comments[comment].comment)
    //   }`/api/`+ postid`/comments/`+ id

</script>