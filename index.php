<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css"
        integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Libre+Baskerville:wght@400;700&display=swap" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/axios@1.1.2/dist/axios.min.js"></script>
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>

    <title>PHP ToDo List JSON</title>
</head>
<body>
    <div id="wrapper">
        <main>
            <div id="app">
                <div id="list_container" class="container">
                    <h1 class="text-center">{{ title }}</h1>
                    <h4 class="text-center pt-2">{{ subtitle }}</h4>
                    <div id="options" class="mx-auto">
                        <ul class="list-unstyled px-4" v-if="toDoList.length > 0">
                            <li class="small" v-for="(item, index) in toDoList" :key="index">
                                <div class="p-1 d-flex flex-row justify-content-between">
                                    <span><i class="fa-solid fa-chevron-right px-3"></i>{{ item.name }}</span>
                                </div>
                            </li>
                        </ul>
                        <h3 class="text-center" v-else>Your list is empty!</h3>
                    </div>
                    <div class="input-group pt-3 mx-auto">
                        <input type="text" class="form-control" placeholder="enter here your missing equipment" name="toDoItem" id="toDoItem" v-model="toDoItem" @keyup.enter="addItem()">
                        <button @click="addItem()" class="btn btn-outline-secondary" type="button">send</button>
                    </div>
                </div>
            </div>
        </main>
    </div>
    
    <script src="./js/script.js"></script>
</body>
</html>