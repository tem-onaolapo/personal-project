<template>

    <div class="w-96 h-60 rounded-2xl flex-shrink-0 flex-grow "  v-for="question in data.myquestions" :key="question.id" >
        
        <div class="bg-sky-600 hover:bg-sky-500 transition-colors p-8 cursor-pointer" @click="show(question.id)">
            <h3 class="text-lg font-bold text-center text-white">{{ question.title }}</h3>

                <div class="flex mt-8 justify-center">

                    <svg viewBox="0 0 1024 1024" class="icon" version="1.1" height="20px" width="20px" xmlns="http://www.w3.org/2000/svg" fill="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"><path d="M789.333333 832H234.666667l-128 128V234.666667c0-70.4 57.6-128 128-128h554.666666c70.4 0 128 57.6 128 128v469.333333c0 70.4-57.6 128-128 128z" fill="#ffffff"></path></g></svg>

                    <h3 class=" pl-3 text-sm font-bold text-center text-white align-bottom flex justify-center">{{ question.commentcount }}</h3>
                </div>
                
                
        </div>
                    
    </div>    

</template>