import { defineStore, acceptHMRUpdate } from "pinia";

export const dataStore = 
    defineStore('index',{
        id: 'Data',
        state: () => ({
            questions: [],
            myquestions: [],
            comments: []
        }),
        actions: {
            updateQuestion(input){
                this.myquestions.push({'title': input})
            }
        }
    })

    if (import.meta.hot) {
        import.meta.hot.accept(acceptHMRUpdate(dataStore, import.meta.hot))
    }
