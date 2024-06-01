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


               
</body>
</html>

                