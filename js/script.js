const { createApp } = Vue;
createApp({
    data() {
        return {
            title: 'Summer Adventures 2023',
            subtitle: 'Attrezzatura minima obbligatoria',
            todoList: [],
            apiUrl: 'api.php'
        }
    },
    methods: {
        getList() {
            axios.get(this.apiUrl).then((res) => {
                // console.log(res.data);
                this.todoList = res.data;
            })
        }
    },
    mounted() {
        this.getList();
    }
}).mount('#app');