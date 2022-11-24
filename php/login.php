<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Testing @ Website</title>
    <link rel="stylesheet" href="../dist/output.css">
    <link rel="stylesheet" href="../dist/style.css">
    <link rel="stylesheet" href="../fa/v6/css/all.css">
    <link rel="stylesheet" href="../tailwind/v2.css">
</head>
<body class="bg-fuchsia-800 flex items-center justify-center min-h-screen text-gray-700">
    <section class=" bg-white rounded shadow-2xl w-[400px] max-w-[100%] overflow-hidden  ">
        <div class="bg-[#f7f7f7] py-[20px] px-[40px] flex items-center ">
            <i class="fa fa-user-lock fa-2x"></i>
            <h2 class="ml-2 text-3xl font-semibold">
                User Login
            </h2>
        </div>

        <form class="form" id="form">
            <div class="form-control">
                <i class="fa fa-envelope"></i>
                <label for="Email">Email</label>
                <input type="text" placeholder="Email" required>
            </div>

            <div class="form-control">
                <i class="fa fa-key"></i>
                <label for="Password">Password</label>
                <input type="text" placeholder="Password" required>
            </div>

            <div class="form-control">
                <i class="fa fa-check-circle"></i>
                <label for="Confirm Password">Confirm Password</label>
                <input type="text" placeholder="Confirm Password" required>
            </div>

           <div class=" flex">
            <div class="mb-4 flex-grow">
                    <input type="checkbox" name="agree" id="agree" required>
                    <label for="agree" class="mb-2 text-sm font-sans"> Remember me</label>
                </div>

                <div class="mb-4 ">
                    <a class=" hover:underline" href="#">Forgot Password</a>
                </div>
           </div>

            <button>submit</button>
            <div class="mb-4 mt-4 text-center">
                <a href="register.php" class="hover:underline">Don't have an account? Click to Register</a>
            </div>
        </form>
    </section>
</body>
</html>