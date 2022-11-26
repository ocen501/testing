<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Section - Add Topics</title>
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
                <a href="create.html" class="btn py-[.5rem] px-[1rem] text-fuchsia-800 hover:bg-fuchsia-800 hover:text-white duration-1000  bottom-[10px] right-[10px] read-more bg-transparent">Add Topics</a>
                <a href="../posts/index.php" class="btn py-[.5rem] px-[1rem] text-fuchsia-800 hover:bg-fuchsia-800 hover:text-white duration-1000  bottom-[10px] right-[10px] read-more bg-transparent">Manage Topics</a>
            </div>
 

            <div class="content ml-[20px]">
                <h2 class="page-title font-extrabold text-3xl text-center mb-5">Add Topic</h2>

                <form action="create.php" method="post">
                    <div class="mb-4">
                        <label for="">Name</label>
                        <input type="text" name="name" id="" class="text-input py-[.7rem] px-[.1rem] block w-full rounded text-[#444]">
                        
                    </div>
                    <!-- here we are using a text editor known as ckay editor 5 -->
                    <!-- then to download and copy the CDN script link and paste on internal-javascript
                    then go to  documentation on the folder integration and click on configuration then copy the context and paste it in external-javascript -->

                    <div class="mb-4">
                        <label for="">Description</label>
                        <textarea name="Description" id="body" ></textarea>
                    </div>

                 

                    <div class="mb-4">
                        <button type="submit" class="btn py-[.5rem] px-[1rem] text-fuchsia-800 hover:bg-fuchsia-800 hover:text-white duration-1000  bottom-[10px] right-[10px] read-more bg-transparent">Add Topic</button>
                    </div>
                </form>
            </div>
        </div>
        <!--// Admin Content -->

    


  


    </div>
    
   
    




    
 
    <script src="https://cdn.ckeditor.com/ckeditor5/35.3.2/classic/ckeditor.js"></script>

    <script src="../../script/header.js"></script>

</body>
</html>