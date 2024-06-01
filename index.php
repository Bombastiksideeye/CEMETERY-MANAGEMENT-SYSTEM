<!-- form.html -->
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
<div class=" navbar bg-base-100 bg-transparent  fixed z-50">
  <div class="navbar-start">
    <a href="index.php">
  <img src="images/logo.png" alt="Logo" class="w-24 mb-4">
</a>
  </div>
</div>
  


<div class="bg-gray-100 flex items-center justify-center h-screen">
    <div class="relative">
        <img src="images/pic1.jpg" alt="Picture" class="w-full h-auto">
        <h1 class="absolute inset-0 flex items-center justify-center text-5xl font-bold text-center text-green-600">Your Reservation, Our Priority</h1>

        <!-- You can open the modal using ID.showModal() method -->
        <button onclick="document.getElementById('register_modal').showModal()" class="btn wave-effect mb-60 absolute inset-0 flex items-center justify-center w-60 h-20 m-auto bg-green-700 text-white rounded-lg hover:bg-green-800">Reserve Now</button>

        <dialog id="register_modal" class="modal">
            <div class="modal-box w-11/12 max-w-xl bg-green-400">
                <div class="main w-96 p-6 flex items-center flex-col bg-white m-auto my-5 border border-green-800 rounded-lg">
                    <form method="dialog">
                        <button class="btn btn-sm btn-circle btn-ghost absolute right-2 top-2">✕</button>
                    </form>

                    <img src="images/logo.jpg" alt="Logo" class="w-24 mb-4">
                    <h2 class="text-xl font-bold mb-4">REGISTER NOW</h2>
                    <h4 class="text-sm text-gray-700 mb-4">Welcome to Compassion Memorial Gardens!</h4>

                    <label class="input input-bordered flex items-center gap-2 p-2 mt-2 w-full text-sm border-green-800">
                        <input type="email" name="email" class="grow" placeholder="Email Address" />
                    </label>

                    <label class="input input-bordered flex items-center gap-2 p-2 mt-2 w-full text-sm border-green-800">
                        <input type="text" name="username" class="grow" placeholder="Username" />
                    </label>

                    <label class="input input-bordered flex items-center gap-2 p-2 mt-2 w-full text-sm border-green-800">
                        <input type="password" name="password" class="grow" placeholder="Password" />
                    </label>

                    <label class="input input-bordered flex items-center gap-2 p-2 mt-2 w-full text-sm border-green-800">
                        <input type="password" name="confirm_password" class="grow" placeholder="Confirm Password" />
                    </label>

                    <p class="text-md font-semibold mt-4">PERSONAL INFORMATION:</p>

                    <label class="input input-bordered flex items-center gap-2 p-2 mt-2 w-full text-sm border-green-800">
                        <input type="text" name="firstname" class="grow" placeholder="First Name" />
                    </label>

                    <label class="input input-bordered flex items-center gap-2 p-2 mt-2 w-full text-sm border-green-800">
                        <input type="text" name="middlename" class="grow" placeholder="Middle Name" />
                    </label>

                    <label class="input input-bordered flex items-center gap-2 p-2 mt-2 w-full text-sm border-green-800">
                        <input type="text" name="lastname" class="grow" placeholder="Last Name" />
                    </label>

                    <label class="input input-bordered flex items-center gap-2 p-2 mt-2 w-full text-sm border-green-800">
                        <input type="text" name="address" class="grow" placeholder="Address" />
                    </label>

                    <div class="w-full mt-2">
                        <label for="gender" class="block text-sm mb-2">Gender:</label>
                        <select id="gender" name="gender" class="dropdown w-full border-green-800 p-2 text-sm">
                            <option value="male">Male</option>
                            <option value="female">Female</option>
                        </select>
                    </div>

                    <div class="w-full mt-2">
                        <label for="status" class="block text-sm mb-2">Status:</label>
                        <select id="status" name="status" class="dropdown w-full border-green-800 p-2 text-sm">
                            <option value="single">Single</option>
                            <option value="married">Married</option>
                            <option value="widowed">Widowed</option>
                            <option value="divorced">Divorced</option>
                            <option value="separated">Separated</option>
                            <option value="unknown">Unknown</option>
                        </select>
                    </div>

                    <label class="input input-bordered flex items-center gap-2 p-2 mt-2 w-full text-sm border-green-800">
                        <input type="date" name="birthdate" class="grow" placeholder="Birthdate" />
                    </label>

                    <label class="input input-bordered flex items-center gap-2 p-2 mt-2 w-full text-sm border-green-800">
                        <input type="number" id="age" name="age" class="grow" placeholder="Age" readonly />
                    </label>

                    <button type="submit" class="rounded-md bg-green-800 text-white w-full p-3 mt-6 mb-4 text-sm">Create Account</button>

                    <p class="text-sm text-center">Already have an account? <a onclick="document.getElementById('login_modal').showModal()" class="text-green-900 font-semibold cursor-pointer">Log in</a></p>
                </div>
            </div>
        </dialog>

        <dialog id="login_modal" class="modal">
            <div class="modal-box w-11/12 max-w-xl bg-green-400 relative">
                <form method="dialog">
                    <button class="btn btn-sm btn-circle btn-ghost absolute right-2 top-2">✕</button>
                </form>
                <div class="mt-10">
                    <div class="main w-96 p-2 flex items-center flex-col bg-white m-auto mb-5 border border-green-800">
                        <img style="width: 200px;" class="ml-5" src="images/logo.png">
                        <label class="input input-bordered flex items-center gap-2 p-2 mt-8 w-3/4 text-sm border-green-800">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="currentColor" class="w-4 h-4 opacity-70">
                                <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6ZM12.735 14c.618 0 1.093-.561.872-1.139a6.002 6.002 0 0 0-11.215 0c-.22.578.254 1.139.872 1.139h9.47Z" />
                            </svg>
                            <input type="text" class="grow" placeholder="Username" />
                        </label>
                        <label class="input input-bordered flex items-center gap-2 p-2 mt-8 w-3/4 text-sm border-green-800">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="currentColor" class="w-4 h-4 opacity-70">
                                <path fill-rule="evenodd" d="M14 6a4 4 0 0 1-4.899 3.899l-1.955 1.955a.5.5 0 0 1-.353.146H5v1.5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1-.5-.5v-2.293a.5.5 0 0 1 .146-.353l3.955-3.955A4 4 0 1 1 14 6Zm-4-2a.75.75 0 0 0 0 1.5.5.5 0 0 1 .5.5.75.75 0 0 0 1.5 0 2 2 0 0 0-2-2Z" clip-rule="evenodd" />
                            </svg>
                            <input type="password" class="grow" placeholder="Password" />
                        </label>
                        <button type="submit" class="rounded-md bg-green-800 text-white w-3/4 p-3 mt-8 mb-8 text-sm"><a href="UI.php">Log in</a></button>
                    </div>
                </div>
            </div>
        </dialog>
    </div>
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







</body>
</html>