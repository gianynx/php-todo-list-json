const { createApp } = Vue;
createApp({
    data() {
        return {
            title: 'Summer Adventures 2023',
            subtitle: 'Attrezzatura minima obbligatoria',
            toDoList: [],
            toDoItem: '',
            apiUrl: 'api.php'
        }
    },
    methods: {
        getList() {
            axios.get(this.apiUrl).then((res) => {
                // console.log(res.data);
                this.toDoList = res.data;
            })
        },
        addItem() {
            // console.log(this.toDoItem);
            const newItem = {
                name: this.toDoItem
            };
            axios.post(this.apiUrl, newItem, { headers: { 'Content-Type': 'multipart/form-data' } }).then((res) => {
                this.toDoItem = '';
                // console.log(res.data);
                this.toDoList = res.data;
            })
        }
    },
    mounted() {
        this.getList();
    }
}).mount('#app');