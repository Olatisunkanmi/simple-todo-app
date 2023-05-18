<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <title>Login Php</title>
</head>

<body>
    <section class="vh-100" style="background-color: #eee;">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col col-lg-9 col-xl-7">
                    <div class="card rounded-3">
                        <div class="card-body p-4">

                            <h4 class="text-center my-3 pb-3">To Do App</h4>

                            <form class="row row-cols-lg-auto g-3 justify-content-center align-items-center mb-4 pb-2" action="index.php" method="post">
                                <div class="col-12">
                                    <div class="form-outline">
                                        <input type="text" id="form1" class="form-control" placeholder="Enter a task here..." name="user-input" />
                                    </div>
                                </div>

                                <div class="col-12">
                                    <button type="submit" class="btn btn-primary" name="submit">Save</button>
                                </div>

                                <!-- <div class="col-12">
                                    <button type="submit" class="btn btn-warning">Get tasks</button>
                                </div> -->
                            </form>

                            <table class="table mb-4">
                                <thead>
                                    <tr>
                                        <th scope="col">No.</th>
                                        <th scope="col">Todo item</th>
                                        <th scope="col">Status</th>
                                        <th scope="col">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    //define Tasks array to store user tasks
                                    $tasks = array();
                                    function show($text)
                                    {
                                        echo $text . '<br >';
                                    }

                                    if (empty($_POST['user-input'])) {
                                        echo "Tasks cannot be empty agains";
                                    } elseif (isset($_POST['submit'])) {
                                        // Assign user input to variable
                                        $userInput = $_POST['user-input'];
                                        show($userInput);

                                        //push new task into Task array
                                        array_push($tasks, $userInput);
                                    }

                                    // if (isset($_POST['finish-btn'])) {
                                    //     // Assign user input to variable
                                    //     // $finishedTask = $_POST['finish-btn'];
                                    //     // show($finishedTask);
                                    // }

                                    // //check when deletes button is clicked.
                                    // if (isset($_POST['delete-btn'])) {
                                    //     //remove the item from the array
                                    //     // $deleteItem = $_POST['delete-btn'];
                                    //     // unset($tasks[$deleteItem]);
                                    // }



                                    //set [index] to 1
                                    $i = 1;
                                    foreach ($tasks as $cur) {
                                        echo '<tr>';
                                        echo '<th scope="row">' . $i . '</th>';
                                        echo '<td>' . $cur . '</td>';
                                        echo '<td>In progress</td>';
                                        echo '<td>';
                                        echo '<form action="index.php" method="post">';
                                        echo '<button type="" class="btn btn-danger" name="delete-btn">Delete</button>';
                                        echo '</form>';
                                        //
                                        echo '<form action="" method="post">';
                                        echo '<button type="" class="btn btn-success ms-1" name="finish-btn">Finished</button>';
                                        echo '</form>';
                                        echo '</td>';
                                        echo '</tr>';
                                        $i++;
                                    }
                                    ?>
                                </tbody>
                            </table>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- <script>
        document.querySelector('form').addEventListener('submit', function(e) {
            e.preventDefault();
        });
    </script> -->

</body>

</html>
<?php
function getUserInput()
{
    $tasks = array();
    $userInput = $_POST['user-input'];
    array_push($tasks, $userInput);
    // $foods = array("apple", "orange", "banana", "coconut");

    foreach ($tasks as $cur) {
        echo $cur . '<br>';
    }
};

?>