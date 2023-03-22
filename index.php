<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TODOLIST</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.27.2/axios.min.js" integrity="sha512-odNmoc1XJy5x1TMVMdC7EMs3IVdItLPlCeL5vSUPN2llYKMJ2eByTTAIiiuqLg+GdNr9hF6z81p27DArRFKT7A==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
    <script src="https://kit.fontawesome.com/c5d4023dee.js" crossorigin="anonymous"></script>
</head>
<body>

    <div id="app">

        <main>
            <section class="my-5 bg-primary py-5">
                <div class="container text-center py-5">
                    <h1>
                        {{ title }}
                    </h1>
                </div>
                <div class="containner w-50 m-auto">
                <div class="input-group mb-3">
                    <input @keyup.enter="addNewTask" name="todo" v-model="newTask" placeholder="Aggiungi Task..." type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                </div>
                    <ol class="list-group list-group">
                        <li v-for="todo in todos" :key="todo" class="list-group-item d-flex justify-content-between align-items-start">
                            <div class="ms-2 me-auto">
                                <div class="fw-bold"> {{ todo }} </div>
                            </div>
                            <span class="badge bg-primary rounded-pill"> <i class="fa-solid fa-trash-can"></i> </span>
                        </li>
                    </ol>
                </div>
            </section>
        </main>

    </div>
    
    <script src="./app.js"></script>
</body>
</html>