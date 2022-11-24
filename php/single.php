<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>single post</title>
    <link rel="stylesheet" href="../dist/output.css">
    <link rel="stylesheet" href="../dist/style.css">
    <link rel="stylesheet" href="../fa/v6/css/all.css">
    <link rel="stylesheet" href="../tailwind/v2.css">


    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css"/>

    <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
</head>
<body class="bg-[#f6f6f6] ">
    <?php 
        include_once "../html/header.html";
    ?>


    <div class="page-wraper min-h-full">


    


                        <!-- recent post  -->
    <div class="content clearfix max-w-[90rem] mx-auto mt-[30px] mb-[30px] flex  flex-col md:flex-row">
        <!-- in the above we used clearfix class in css to clear the floats on  content class  -->
        <!-- so that the content will expand to contain the recent post and side bar -->
        <div class="main-content  w-full md:w-9/12 float-left">
            <div class="post-title">This is the title of the post</div>
        </div> 

        <div class="sidebar  w-full md:w-4/12 float-left h-[700px] md:h-[300px] p-[10px] ">

         


            <div class="section topics bg-white p-[20px] rounded mb-[20px]">
                <h2 class="section-title text-4xl  font-extrabold  mt-[10px] mb-[10px] mr-0 ml-0">Topics</h2>
                <ul>
                    <li><a href="#" class="block p-[20px] pr-0 pl-0  duration-300">Poems</a></li>
                    <li><a href="#" class="block p-[20px] pr-0 pl-0  duration-300">quotes</a></li>
                    <li><a href="#" class="block p-[20px] pr-0 pl-0  duration-300">fiction</a></li>
                    <li><a href="#" class="block p-[20px] pr-0 pl-0  duration-300">Biography</a></li>
                    <li><a href="#" class="block p-[20px] pr-0 pl-0  duration-300">Motivation</a></li>
                    <li><a href="#" class="block p-[20px] pr-0 pl-0  duration-300">Inspiration</a></li> 
                    <li><a href="#" class="block p-[20px] pr-0 pl-0  duration-300">Life Lessons</a></li>
                </ul>
            </div>
             
        </div>
    </div>


    </div>
    
    <!-- // footer -->
    <div class="footer  relative">
        <div class="footer-content grid md:grid-cols-3 grid-cols-1">
            <div class="footer-section about p-6 h-full">
                <h1 class="logo-text text-[#343a40fa] text-5xl p-3">News <span class="text-fuchsia-800 italic">gist</span></h1>
                <p>
                    Newsgist is a fictional blog conceived for the purpose of bringing the latest gist to your door step.
                    However, Lorem ipsum dolor sit, amet consectetur adipisicing elit. Consequatur, voluptatibus!.
                </p>
                <div class="contact mt-3">
                    <span><i class="fas fa-phone"> &nbsp; 123-456-789</i></span>
                    <span class="flex text-[1.1em] mb-[10px] py-3">
                        <i class="fas fa-envelope"> </i>
                        <p class="">&nbsp; uche@gmail.com</p>
                    </span>
                </div>
                <div class="social mb-5">
                    <a href="" class="social-links px-2 py-1  rounded mr-2 "><i class="fab fa-facebook"></i></a>
                    <a href="" class="social-links px-2 py-1  rounded mr-2 "><i class="fab fa-instagram"></i></a>
                    <a href="" class="social-links px-2 py-1  rounded mr-2 "><i class="fab fa-twitter"></i></a>
                    <a href="" class="social-links px-2 py-1  rounded mr-2 "><i class="fab fa-youtube"></i></a>
                </div>
            </div>
            <div class="footer-section links p-6 h-full">
                <h2 class="text-5xl p-3 font-extrabold">quick links</h2>
                <br>
                <ul>
                    <a href="#" class="block pl-0  duration-300">
                        <li>Events</li>
                    </a>
                    <a href="#" class="block pl-0  duration-300">
                        <li>Team</li>
                    </a>
                    <a href="#" class="block pl-0  duration-300">
                        <li>Mentores</li>
                    </a>
                    <a href="#" class="block pl-0  duration-300">
                        <li>Gallery</li>
                    </a>
                    <a href="#" class="block pl-0  duration-300">
                        <li>Terms and conditions</li>
                    </a>
                </ul>
            </div>
            <div class="footer-section contact-form p-6  h-full">
                <h2 class="text-5xl p-3 font-extrabold">Contact us</h2>
                <br>
                <form action="" method="POST">
                    <input type="email" name="email" class="text-input py-[.7rem] px-[.1rem] block w-full rounded text-[#444] contact-input" placeholder="Your email address...">
                    <textarea rows="4" name="message" id="" class="text-input py-[.7rem] px-[.1rem] block w-full rounded text-[#444] contact-input" placeholder="Your message..."></textarea>
                    <button type="submit" class="btn btn-big flex justify-center items-center  py-[.5rem] px-[1rem] text-white bg-fuchsia-800 read-more md:mb-0 mb-2 float-right">
                        <i class="fas fa-envelope"></i>
                        <p class="ml-2">send</p> 
                    </button>
                </form>
            </div>
        </div>

        <div class="footer-bottom  h-[50px] text-center absolute bottom-0 left-0 pt-[20px] w-full">
            &copy; coding.com | Designed by Admin
        </div>
    </div>
    




    
 

    <script src="../script/blog.js"></script>

        <script>
            const swiper = new Swiper('.swiper', {
            // Optional parameters
            // direction: 'vertical',
            loop: true,
        
            // If we need pagination
            pagination: {
            el: '.swiper-pagination',
            },
        
            // Navigation arrows
            navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
            },
        
            // And if we need scrollbar
            scrollbar: {
            el: '.swiper-scrollbar',
            },
            });

    </script>
</body>
</html>