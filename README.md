# To Do List

+ Simple to do list
+ Implemented using PHP and Mysql
+ 3 functions:
    + Update task
    + Finish or reopen the task
    + delete task
+ Open and run the project:
    + With docker:
    ```
    docker-compose build
    docker-compose up
    ```
    + With apache:
        + Move the archives to folder
        + Uncomment the lines 8 to 12 in "connect.php" and comment the line 13
        + Create the database
        ~~~mysql
        CREATE TABLE `task` (
            `task_id` int(11) NOT NULL AUTO_INCREMENT,
            `task` varchar(150) NOT NULL,
            `status` varchar(150) NOT NULL,
            PRIMARY KEY(`task_id`)
            ) ENGINE=InnoDB DEFAULT CHARSET=latin1;
        ~~~