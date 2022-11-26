<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Section - Manage Topics</title>
    <link rel="stylesheet" href="../../dist/output.css">
    <link rel="stylesheet" href="../../dist/style.css">
    <link rel="stylesheet" href="../../dist/admin.css">
    <link rel="stylesheet" href="../../fa/v6/css/all.css">
    <link rel="stylesheet" href="../../tailwind/v2.css">


    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css"/>

    <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
</head>
<body class="bg-[#f6f6f6] ">
    <?php 
        include_once "../../html/admin-header.html";
    ?>

            <!-- Admin page-wrapper -->
    <div class="admin-wraper min-h-full">

        <!-- left sidebar -->
        <div class="left-sidebar h-full ">
            <ul class="text-white">
                <li><a href="../posts/index.php" class="p-3 block hover:bg-gray-800 duration-300">Manage Posts</a></li>
                <li><a href="../users/index.php" class="p-3 block hover:bg-gray-800 duration-300">Manage Users</a></li>
                <li><a href="index.php" class="p-3 block hover:bg-gray-800 duration-300">Manage Topics</a></li>
            </ul>
            
        </div>  
        <!-- // left sidebar -->

        <!-- Admin Content -->
        <div class="admin-content h-full pt-10 px-24 pb-24 overflow-y-scroll">
            <div class="button-group mb-4">
                <a href="create.php" class="btn py-[.5rem] px-[1rem] text-fuchsia-800 hover:bg-fuchsia-800 hover:text-white duration-1000  bottom-[10px] right-[10px] read-more bg-transparent">Add Topic</a>
                <a href="index.php" class="btn py-[.5rem] px-[1rem] text-fuchsia-800 hover:bg-fuchsia-800 hover:text-white duration-1000  bottom-[10px] right-[10px] read-more bg-transparent">Manage Topics</a>
            </div>


            <div class="content ml-[20px]">
                <h2 class="page-title font-extrabold text-3xl text-center mb-5">Manage Topics</h2>

                <table class="w-full border-collapse ">
                    <thead>
                        <th>SN</th>
                        <th>Name</th>
                        <th colspan="2">Action</th>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Poetry</td>
                            <td><a href="#" class="edit text-green-500 hover:underline">edit</a></td>
                            <td><a href="#" class="delete text-red-500 hover:underline">delete</a></td>

                        </tr>

                        <tr>
                            <td>2</td>
                            <td>life corrections</td>
                            <td><a href="#" class="edit text-green-500 hover:underline">edit</a></td>
                            <td><a href="#" class="delete text-red-500 hover:underline">delete</a></td>

                        </tr> 
                    </tbody>
                </table>
            </div>
        </div>
        <!--// Admin Content -->

    


  


    </div>
    
   
    




    
 

    <script src="../../script/header.js"></script>

</body>
</html>