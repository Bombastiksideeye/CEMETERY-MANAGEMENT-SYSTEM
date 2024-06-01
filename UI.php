<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Submit Form</title>
    <link href="https://cdn.jsdelivr.net/npm/daisyui@4.11.1/dist/full.min.css" rel="stylesheet" type="text/css" />
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://kit.fontawesome.com/ecd5e25db3.js" crossorigin="anonymous"></script>
</head>
<body class=" bg-green-200">
<div class=" navbar bg-base-100 fixed z-50">
  <div class="navbar-start">
    <div class="dropdown">
      <div tabindex="0" role="button" class="btn btn-ghost btn-circle">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h7" /></svg>
      </div>
      <ul tabindex="0" class="menu menu-sm dropdown-content mt-3 z-[1] p-2 shadow bg-base-100 rounded-box w-52 ">
        <li><a>Deceased Profile</a></li>
        <li><a>Payment History</a></li>
        <li><a>My Account</a></li>
      </ul>
    </div>
  </div>
  <div class="navbar-center">
    
    <a class=" text-green-900 text-[30px] font-semibold font-serif">Compassion Memorial Gardens</a>
  </div>
  <div class="navbar-end mr-5 ">
 
    
<div class="dropdown dropdown-end">
    <button onclick="document.getElementById('logout_modal').showModal()" class="w-full pl-5 pr-5 pb-2 pt-2 bg-green-700 text-white rounded-lg hover:bg-green-800">Log out</button>
</div>


<dialog id="logout_modal" class="modal">
    <div class="modal-box w-11/12 max-w-sm bg-green-400 relative">
        <form method="dialog">
            <button class="btn btn-sm btn-circle btn-ghost absolute right-2 top-2">✕</button>
        </form>
        <div class="flex flex-col items-center p-6 bg-white m-auto my-5 border border-green-800 rounded-lg">
            <h2 class="text-xl font-bold mb-4">Log out of your account</h2>
            <div class="flex gap-4 mt-4">
            <a href="UI.php" class="rounded-md bg-green-800 text-white w-24 p-3 text-sm flex justify-center items-center">Cancel</a>
             <a href="index.php" class="rounded-md bg-green-800 text-white w-24 p-3 text-sm flex justify-center items-center">Log out</a>
            </div>
        </div>
    </div>
</dialog>

<style>
    .modal-box {
        animation: fadeIn 0.3s ease-out;
    }
    @keyframes fadeIn {
        from { opacity: 0; transform: translateY(-20px); }
        to { opacity: 1; transform: translateY(0); }
    }
</style>


  </div>
</div>


<div class="bg-gray-100 flex items-center justify-center h-screen">
    <div class="relative">
        <img src="images/pic1.jpg" alt="Picture" class="w-full h-auto">
        <h1 class="absolute inset-0 flex items-center justify-center text-5xl font-bold text-center text-green-600">Your Reservation, Our Priority</h1>

        <!-- You can open the modal using ID.showModal() method -->
        <button onclick="document.getElementById('register_modal').showModal()" class="btn wave-effect mb-60 absolute inset-0 flex items-center justify-center w-60 h-20 m-auto bg-green-700 text-white rounded-lg hover:bg-green-800">Reserve Now</button>

        <dialog id="register_modal" class="modal">
            <div class="modal-box w-11/12 max-w-2xl bg-green-400">
            <h1 class="text-gray-800 text-center font-bold text-[30px]">AVAILABLE NOW!</h1>
              <form method="dialog">
                        <button class="btn btn-sm btn-circle btn-ghost absolute right-2 top-2">✕</button>
                    </form>

                    <div class=" wrapper  p-10 flex items-center justify-center">
  <a href="#">
    <button class="container  bg-white p-6 rounded-lg shadow-lg">
        <div class="item ">
            <h3 class="text-xl font-bold text-green-700">
                <span class="text-gray-800">PREMIUM</span>
            </h3>
        </div>
        <div class="item mb-4">
            <p class="text-gray-600">
                <span class="text-gray-700">A cinematic experience with the best picture and audio quality.</span>
            </p>
        </div>
        <div class="item">
            <p class="text-lg font-semibold text-gray-900">
                <span class="text-green-600">₱549/month</span>
            </p>
        </div>
    </button>
</a>
</div>

<div class=" wrapper  p-10 flex items-center justify-center">
  <a href="#">
    <button class="container bg-white p-6 rounded-lg shadow-lg">
        <div class="item ">
            <h3 class="text-xl font-bold text-green-700">
                <span class="text-gray-800">PREMIUM</span>
            </h3>
        </div>
        <div class="item mb-4">
            <p class="text-gray-600">
                <span class="text-gray-700">A cinematic experience with the best picture and audio quality.</span>
            </p>
        </div>
        <div class="item">
            <p class="text-lg font-semibold text-gray-900">
                <span class="text-green-600">₱549/month</span>
            </p>
        </div>
    </button>
</a>
</div>

<style>
    @keyframes wave {
        0%, 100% { transform: scale(1); opacity: 1; }
        50% { transform: scale(1.1); opacity: 0.7; }
    }
    .wave-effect {
        animation: wave 1.5s infinite;
    }
</style>

<div class=" flex items-center justify-center h-screen w-1/2 m-auto pt-20">
    <div class="container mx-auto p-4">
        <div class="bg-white shadow-lg rounded-lg overflow-hidden flex flex-col md:flex-row">
            <div class="w-full md:w-1/2 h-97">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3946.12723617833!2d123.79807487449418!3d8.487007697238479!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x32551fd8667c806f%3A0x3c755bfaf75e0fd0!2sCompassion%20memorial%20gardens!5e0!3m2!1sen!2sph!4v1717043175379!5m2!1sen!2sph" class="w-full h-full" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>

            
            <div class="w-full md:w-1/2 p-6">
                <h2 class="text-2xl font-bold mb-4 text-center">Contact Us</h2>
                <input type="text" class="w-full p-3 mb-4 border-2 border-gray-300 rounded-lg focus:outline-none focus:border-green-800" placeholder="Enter Your Name">
                <input type="text" class="w-full p-3 mb-4 border-2 border-gray-300 rounded-lg focus:outline-none focus:border-green-800" placeholder="Enter Your Email">
                <input type="text" class="w-full p-3 mb-4 border-2 border-gray-300 rounded-lg focus:outline-none focus:border-green-800" placeholder="Enter Your Phone">
                <textarea class="w-full p-3 mb-4 border-2 border-gray-300 rounded-lg focus:outline-none focus:border-green-800" placeholder="Message"></textarea>
                <button class="w-full p-3 bg-green-700 text-white rounded-lg hover:bg-green-800">Send</button>
            </div>
        </div>
    </div>
                </div>

                <div class="max-w-6xl mx-auto mt-10 pb-40">
    <h2 class="text-2xl font-bold text-center mb-5 text-green-800">PRICELIST</h2>
    <table class="min-w-full bg-white shadow-md rounded-lg overflow-hidden ">
        <thead class="bg-green-700 text-white ">
            <tr>
                <th class="py-3 px-4" rowspan="2">Types of Lots</th>
                <th class="py-3 px-4" rowspan="2">Lot Area Size (Sq m)</th>
                <th class="py-3 px-4" rowspan="2">Space May Inter as many as:</th>
                <th class="py-3 px-4" rowspan="2">Price</th>
                <th class="py-3 px-4" rowspan="2">Down Payment</th>
                <th class="py-3 px-4" colspan="5">Monthly Amortization 0% Interest</th>
            </tr>
            <tr class="bg-green-600 text-white">
                <th class="py-2 px-4">3 months</th>
                <th class="py-2 px-4">6 months</th>
                <th class="py-2 px-4">12 months</th>
                <th class="py-2 px-4">18 months</th>
                <th class="py-2 px-4">24 months</th>
            </tr>
        </thead>
        <tbody class="text-gray-700">

               
</body>
</html>

                