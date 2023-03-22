const { createApp } = Vue

createApp({
	data() {
		return {
			title: 'Todo list',
			todos: [],
            newTask: "",
		}
	},
	methods: {
        addNewTask() {
            console.log(this.newTask)

            $data = {
				todo: this.newTodo,
			}

           axios
                .post('./server.php', $data, {
                        headers: {
                            'Content-Type': 'multipart/form-data',
                        },
                })
                .then((res) => {
                    this.todos = res.data
                    // console.log(res.data)

                    this.todos.push(this.newTask)
                    // console.log(res.data)

                    this.newTask = ""
                })
        },
		fetchTodoList() {
			axios
				.get('./server.php')
				.then((res) => {
					console.log(res.data)
					this.todos = res.data
				})
				.catch((err) => {
					console.log(err)
					this.todos = []
				})
		},
	},
	mounted() {
		this.fetchTodoList()
	},
}).mount('#app')