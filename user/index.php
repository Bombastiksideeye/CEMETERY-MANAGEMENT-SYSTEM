<?php
session_start();
if(!isset($_SESSION['logged'])){
header('location: ../');
}
?>
<!DOCTYPE html>
<html lang="en" data-theme="light" >
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Submit Form</title>
    <link href="https://cdn.jsdelivr.net/npm/daisyui@4.11.1/dist/full.min.css" rel="stylesheet" type="text/css" />
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://kit.fontawesome.com/ecd5e25db3.js" crossorigin="anonymous"></script>

    

</head>
<body class=" bg-green-200">
<?php
if(isset($_SESSION['reserb'])){
    echo $_SESSION['reserb'];
}
?>
   
    
<div class=" navbar bg-base-100 fixed z-50" style="border-bottom: solid 20px #a7f3d0;">
 


    <!-- Navbar Start -->
    <div class="navbar-start p-4 bg-white text-black">
        <div class="dropdown">
            <div tabindex="0" role="button" class="btn btn-ghost btn-circle">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h7" />
                </svg>
            </div>
            <ul tabindex="0" class="menu menu-sm dropdown-content mt-3 z-[1] p-2 shadow bg-base-100 rounded-box w-52">
                <li><a onclick="showModal('deceased-profile-modal')">Deceased Profile</a></li>
                <li><a onclick="showModal('payment-history-modal')">Payment History</a></li>
            </ul>
        </div>
    </div>



     <!-- Deceased Profile Modal -->
<div id="deceased-profile-modal" class="modal">
    <div class="modal-box max-w-7xl bg-green-100 p-4 rounded-lg shadow-lg">
        <h3 class="font-bold text-lg text-green-800 mb-4">Deceased Profile</h3>

        <table class="table w-full mb-4">
            <thead>
                <tr>
                    <th>Last Name</th>
                    <th>First Name</th>
                    <th>Middle Name</th>
                    <th>Date of Birth</th>
                    <th>Date of Death</th>
                    <th>Place of Birth</th>
                    <th>Place of Death</th>
                    <th>Cause of Death</th>
                    <th>Burial Date</th>
                </tr>
            </thead>
            <tbody>
        
                 <?php
                  include '../db.php';
                  if(isset($db->selectWithWhere('reservations', '*', 'user_id=' . $_SESSION['user_id'])[0])){
                  $bayot = $db->selectWithWhere('reservations', '*', 'user_id=' . $_SESSION['user_id']);
                  foreach($bayot as $b){
                    extract($b);
                  ?>
                <tr>
                <td><?php echo isset($last_name) ? $last_name : ''; ?></td>
                <td><?php echo isset($first_name) ? $first_name : ''; ?></td>
                <td><?php echo isset($middle_name) ? $middle_name : ''; ?></td>
                <td><?php echo isset($birth_date) ? $birth_date : ''; ?></td>
                <td><?php echo isset($death_date) ? $death_date : ''; ?></td>
                <td><?php echo isset($birth_place) ? $birth_place : ''; ?></td>
                <td><?php echo isset($death_place) ? $death_place : ''; ?></td>
                <td><?php echo isset($cause_of_death) ? $cause_of_death : ''; ?></td>
                <td><?php echo isset($burial_date) ? $burial_date : ''; ?></td>

                </tr>
                <?php  }} ?> 
            </tbody>
        </table>

        <div class="modal-action flex justify-end mr-5">
            <button type="button" class="btn btn-primary" onclick="closeModal('deceased-profile-modal')">Close</button>
        </div>
    </div>
</div>

    

    

   <!-- Payment History Modal -->
<div id="payment-history-modal" class="modal">
    <div class="modal-box max-w-4xl bg-green-100">
        <h3 class="font-bold text-lg text-green-800">Payment History</h3>
        <table class="table w-full mt-4">
            <thead>
                <tr>
                    <th>Lot Type</th>
                    <th>Area Size (Sq m)</th>
                    <th>Amount</th>
                    <th>Down Payment</th>
                    <th>Monthly Amortization (0% Interest)</th>
                    <th>Date Paid</th>
                </tr>
            </thead>
            <tbody>
            <?php
                  if(isset($db->selectWithWhere('reservations', '*', 'user_id=' . $_SESSION['user_id'])[0])){
                  $lage = $db->selectWithWhere('reservations', '*', 'user_id=' . $_SESSION['user_id']);
                  foreach($bayot as $h){
                    extract($h);
                  ?>
                <tr>
                    <td><?php echo isset($lot_type) ? $lot_type : 'N/A'; ?></td>
                    <td><?php echo isset($area_size) ? $area_size : 'N/A'; ?></td>
                    <td><?php echo isset($amount) ? $amount : 'N/A'; ?></td>
                    <td><?php echo isset($down_payment) ? $down_payment : 'N/A'; ?></td>
                    <td><?php echo isset($monthly_amortization) ? $monthly_amortization : 'N/A'; ?></td>
                    <td><?php echo isset($reservation_date) ? $reservation_date : 'N/A'; ?></td>
                </tr>
                <?php }} ?>
                <!-- Add more rows as needed -->
            </tbody>
        </table>
<div class="modal-action">
            <button type="button" class="btn" onclick="closeModal('payment-history-modal')">Close</button>
        </div>
    </div>
</div>

    <script>
 function updateDisplay(input) {
            const fieldName = input.name;
            const displayField = document.getElementById('display-' + fieldName);
            if (displayField) {
                displayField.textContent = input.value;
            }
        }

        function showModal(modalId) {
            document.getElementById(modalId).classList.add('modal-open');
        }

        function closeModal(modalId) {
            document.getElementById(modalId).classList.remove('modal-open');
        }
    </script>



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
            <a href="./" class="rounded-md bg-green-800 text-white w-24 p-3 text-sm flex justify-center items-center">Cancel</a>
             <a href="../logout.php" class="rounded-md bg-green-800 text-white w-24 p-3 text-sm flex justify-center items-center">Log out</a>
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



<div class="bg-gray-100 flex items-center justify-center h-screen ">
    <div class="relative">
    <img src="../images/pic1.jpg" alt="Picture" class="w-full h-auto filter brightness-[.3]">
<h1 class="absolute inset-0 flex items-center justify-left text-5xl font-bold text-center ml-20 mt-20 text-white">Your Reservation,<br> Our Priority</h1>

        <!-- You can open the modal using ID.showModal() method -->
        <button onclick="document.getElementById('register_modal').showModal()" style="margin-left: 190px; margin-top: 550px;" class="btn wave-effect mb-40 absolute inset-0   w-40 h-15 m-auto bg-green-700 text-white rounded-2xl hover:bg-green-800">Reserve Now</button>

        <dialog id="register_modal" class="modal">
            <div class="modal-box w-11/12 max-w-6xl bg-green-400">
                <h1 class="text-gray-800 text-center font-bold text-[30px]">AVAILABLE NOW!</h1>
                <form method="dialog">
                    <button class="btn btn-sm btn-circle btn-ghost absolute right-2 top-2">✕</button>
                </form>

                <div class="overflow-x-auto">
                    <div class="flex items-center space-x-4 p-10 w-max">
                    <a onclick="payment_modal1.showModal()"> 
                            <button class="container bg-white p-6 rounded-lg shadow-lg w-64">
                                <div class="item">
                                    <img src="../images/p2.jpg" alt="Socialized Low Cost" class="w-full h-auto mb-4">
                                    <h3 class="text-xl font-bold text-green-700">
                                        <span class="text-gray-800">Socialized <br>(Low Cost)</span>
                                    </h3>
                                </div>
                                <div class="item mb-4">
                                    <p class="text-gray-600">
                                    <span class="text-gray-700">Lot Area Size (Sq m): no size</span><br><br>
                                        <span class="text-gray-700">1 fresh body</span>
                                    </p>
                                </div>
                                <div class="item">
                                    <p class="text-lg font-semibold text-gray-900">
                                        <span class="text-green-600">₱18,000.00</span>
                                    </p>
                                </div>
                            </button>
                        </a>
                        <a onclick="payment_modal2.showModal()">
                            <button class="container bg-white p-6 rounded-lg shadow-lg w-64">
                                <div class="item">
                                    <img src="../images/p3.jpg" alt="Socialized" class="w-full h-auto mb-4">
                                    <h3 class="text-xl font-bold text-green-700">
                                        <span class="text-gray-800">Socialized</span>
                                    </h3>
                                </div>
                                <div class="item mb-4">
                                    <p class="text-gray-600">
                                    <span class="text-gray-700">Lot Area Size (Sq m): 2.44</span><br><br>
                                        <span class="text-gray-700">1 fresh body with free tombstone</span>
                                    </p>
                                </div>
                                <div class="item">
                                    <p class="text-lg font-semibold text-gray-900">
                                        <span class="text-green-600">₱29,000.00</span>
                                    </p>
                                </div>
                            </button>
                        </a>
                        <a onclick="payment_modal3.showModal()">
                        
                            <button class="container bg-white p-6 rounded-lg shadow-lg w-64">
                                <div class="item">
                                    <img src="../images/p1.jpg" alt="Lawn Lot" class="w-full h-auto mb-4">
                                    <h3 class="text-xl font-bold text-green-700">
                                        <span class="text-gray-800">Lawn Lot</span>
                                    </h3>
                                </div>
                                <div class="item mb-4">
                                    <p class="text-gray-600">
                                    <span class="text-gray-700">Lot Area Size (Sq m): 2.44</span><br><br>
                                        <span class="text-gray-700">1 fresh body & 2 set of bones with free tombstone</span>
                                    </p>
                                </div>
                                <div class="item">
                                    <p class="text-lg font-semibold text-gray-900">
                                        <span class="text-green-600">₱39,000.00</span>
                                    </p>
                                </div>
                            </button>
                        </a>
                        <a onclick="payment_modal4.showModal()">
                        
                            <button class="container bg-white p-6 rounded-lg shadow-lg w-64">
                                <div class="item">
                                    <img src="../images/p1.jpg" alt="Upgraded" class="w-full h-auto mb-4">
                                    <h3 class="text-xl font-bold text-green-700">
                                        <span class="text-gray-800">Lawn Lot</span>
                                    </h3>
                                </div>
                                <div class="item mb-4">
                                    <p class="text-gray-600">
                                    <span class="text-gray-700"> Upgraded</span><br><br>
                                        <span class="text-gray-700">2 fresh body & 2 set of bones with free tombstone</span>
                                    </p>
                                </div>
                                <div class="item">
                                    <p class="text-lg font-semibold text-gray-900">
                                        <span class="text-green-600">₱57,000.00</span>
                                    </p>
                                </div>
                            </button>
                        </a>
                        <a onclick="payment_modal5.showModal()">
                        
                            <button class="container bg-white p-6 rounded-lg shadow-lg w-64">
                                <div class="item">
                                    <img src="../images/p1.jpg" alt="4-Lot Garden" class="w-full h-auto mb-4">
                                    <h3 class="text-xl font-bold text-green-700">
                                        <span class="text-gray-800">4-Lot Garden</span>
                                    </h3>
                                </div>
                                <div class="item mb-4">
                                    <p class="text-gray-600">
                                    <span class="text-gray-700">Lot Area Size (Sq m): 9.76</span><br><br>
                                    <span class="text-gray-700">7 fresh body & 8 set of bones with free tombstone</span>
                                    </p>
                                </div>
                                <div class="item">
                                    <p class="text-lg font-semibold text-gray-900">
                                        <span class="text-green-600">₱185,000.00</span>
                                    </p>
                                </div>
                               
                            </button>
                        </a>
                    </div>
                </div>
            </div>
        </dialog>
    </div>
</div>


<dialog id="payment_modal1" class="modal">
  <div class="modal-box">
    <div class="justify-center item-center flex mt-10 gap-4">
    <a href="dfapfull.php?lot_type=Socialized (Low Cost)&lot_area=no size&amount=₱18,000.00&down=P5,000.00&id=1" class="btn btn-success">Full Payment</a>
    <a href="dfap.php?lot_type=Socialized (Low Cost)&lot_area=no size&amount=₱18,000.00&down=P5,000.00&id=1" class="btn btn-outline-success">Monthly</a>
    </div>
    <div class="modal-action">
      <form method="dialog">
        <button class="btn">Close</button>
      </form>
    </div>
  </div>
</dialog>


<dialog id="payment_modal2" class="modal">
  <div class="modal-box">
    <div class="justify-center item-center flex mt-10 gap-4">
    <a href="dfapfull.php?lot_type=Socialized&lot_area=Size (Sq m): 2.44&amount=₱29,000.00&down=P5,000.00&id=2" class="btn btn-success">Full Payment</a>
    <a href="dfap.php?lot_type=Socialized&lot_area=Size (Sq m): 2.44&amount=₱29,000.00&down=P5,000.00&id=2" class="btn btn-outline-success">Monthly</a>
    </div>
    <div class="modal-action">
      <form method="dialog">
        <button class="btn">Close</button>
      </form>
    </div>
  </div>
</dialog>



<dialog id="payment_modal3" class="modal">
  <div class="modal-box">
    <div class="justify-center item-center flex mt-10 gap-4">
    <a href="dfapfull.php?lot_type=Lawn Lot&lot_area=Size (Sq m): 2.44&amount=₱39,000.00&down=P5,000.00&id=3" class="btn btn-success">Full Payment</a>
    <a href="dfap.php?lot_type=Lawn Lot&lot_area=Size (Sq m): 2.44&amount=₱39,000.00&down=P5,000.00&id=3" class="btn btn-outline-success">Monthly</a>
    </div>
    <div class="modal-action">
      <form method="dialog">
        <button class="btn">Close</button>
      </form>
    </div>
  </div>
</dialog>



<dialog id="payment_modal4" class="modal">
  <div class="modal-box">
    <div class="justify-center item-center flex mt-10 gap-4">
    <a href="dfapfull.php?lot_type=Lawn Lot&lot_area=Upgraded&amount=₱57,000.00&down=P5,000.00&id=4" class="btn btn-success">Full Payment</a>
    <a href="dfap.php?lot_type=Lawn Lot&lot_area=Upgraded&amount=₱57,000.00&down=P5,000.00&id=4" class="btn btn-outline-success">Monthly</a>
    </div>
    <div class="modal-action">
      <form method="dialog">
        <button class="btn">Close</button>
      </form>
    </div>
  </div>
</dialog>

<dialog id="payment_modal5" class="modal">
  <div class="modal-box">
    <div class="justify-center item-center flex mt-10 gap-4">
    <a href="dfapfull.php?lot_type=4-Lot Garden&lot_area=Size (Sq m): 9.76&amount=₱185,000.00&down=P20,000.00&id=5" class="btn btn-success">Full Payment</a>
    <a href="dfap.php?lot_type=4-Lot Garden&lot_area=Size (Sq m): 9.76&amount=₱185,000.00&down=P20,000.00&id=5" class="btn btn-outline-success">Monthly</a>
    </div>
    <div class="modal-action">
      <form method="dialog">
        <button class="btn">Close</button>
      </form>
    </div>
  </div>
</dialog>








<style>
    .no-scrollbar::-webkit-scrollbar {
        display: none;
    }

    .no-scrollbar {
        -ms-overflow-style: none;  /* IE and Edge */
        scrollbar-width: none;  /* Firefox */
    }
</style>



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
            <form class="w-full md:w-1/2 p-6" method="POST" action="insert.php">
                <h2 class="text-2xl font-bold mb-4 text-center">Contact Us</h2>
                <input dia type="text" name="coname" class="w-full p-3 mb-4 border-2 border-gray-300 rounded-lg focus:outline-none focus:border-green-800" placeholder="Enter Your Name">
                <input type="email" name="conemail" class="w-full p-3 mb-4 border-2 border-gray-300 rounded-lg focus:outline-none focus:border-green-800" placeholder="Enter Your Email">
                <input type="number" name="conphone" class="w-full p-3 mb-4 border-2 border-gray-300 rounded-lg focus:outline-none focus:border-green-800" placeholder="Enter Your Phone">
                <textarea name="conmessage" class="w-full p-3 mb-4 border-2 border-gray-300 rounded-lg focus:outline-none focus:border-green-800" placeholder="Message"></textarea>
                <button class="w-full p-3 bg-green-700 text-white rounded-lg hover:bg-green-800">Send</button>
            </form>
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
            <tr>
                <td class="border px-4 py-2">Socialized (Low Cost)</td>
                <td class="border px-4 py-2"></td>
                <td class="border px-4 py-2">1 fresh body</td>
                <td class="border px-4 py-2">P18,000.00</td>
                <td class="border px-4 py-2">P5,000.00</td>
                <td class="border px-4 py-2">P4,333.33</td>
                <td class="border px-4 py-2">P2,166.66</td>
                <td class="border px-4 py-2">P1,083.33</td>
                <td class="border px-4 py-2"></td>
                <td class="border px-4 py-2"></td>
            </tr>
            <tr>
                <td class="border px-4 py-2">Socialized</td>
                <td class="border px-4 py-2">2.44</td>
                <td class="border px-4 py-2">1 fresh body with free tombstone</td>
                <td class="border px-4 py-2">P29,000.00</td>
                <td class="border px-4 py-2">P5,000.00</td>
                <td class="border px-4 py-2">P8,000.00</td>
                <td class="border px-4 py-2">P4,000.00</td>
                <td class="border px-4 py-2">P2,000.00</td>
                <td class="border px-4 py-2">P1,333.33</td>
                <td class="border px-4 py-2">P1,000.00</td>
            </tr>
            <tr>
                <td class="border px-4 py-2"rowspan="2">Lawn Lot</td>
                <td class="border px-4 py-2">2.44</td>
                <td class="border px-4 py-2">1 fresh body & 2 set of bones with free tombstone</td>
                <td class="border px-4 py-2">P39,000.00</td>
                <td class="border px-4 py-2">P5,000.00</td>
                <td class="border px-4 py-2">P11,333.33</td>
                <td class="border px-4 py-2">P5,666.66</td>
                <td class="border px-4 py-2">P2,833.33</td>
                <td class="border px-4 py-2">P1,888.88</td>
                <td class="border px-4 py-2">P1,416.66</td>
            </tr>
            <tr>
                <td class="border px-4 py-2">Upgraded</td>
                <td class="border px-4 py-2">2 fresh body & 2 set of bones with free tombstone</td>
                <td class="border px-4 py-2">P57,000.00</td>
                <td class="border px-4 py-2">P5,000</td>
                <td class="border px-4 py-2">P17,333</td>
                <td class="border px-4 py-2">P8,666.66</td>
                <td class="border px-4 py-2">P4,333</td>
                <td class="border px-4 py-2">P2,889</td>
                <td class="border px-4 py-2">P2,167</td>
            </tr>
            <tr>
                <td class="border px-4 py-2">4-Lot Garden</td>
                <td class="border px-4 py-2">9.76</td>
                <td class="border px-4 py-2">7 fresh body & 8 set of bones with free tombstone</td>
                <td class="border px-4 py-2">P185,000.00</td>
                <td class="border px-4 py-2">P20,000.00</td>
                <td class="border px-4 py-2">P55,000.00</td>
                <td class="border px-4 py-2">P27,500.00</td>
                <td class="border px-4 py-2">P13,750.00</td>
                <td class="border px-4 py-2">P9,166.00</td>
                <td class="border px-4 py-2">P6,875.00</td>
                
            </tr>
            <tr>
                <td class="text-center" colspan="10"><b>Internment Fee:</b> P 20,000.00, it includes the lower device, chairs, vault, tent, sound system, carpet, and others.</td>
            </tr>
        </tbody>
    </table>
</div>



         

<div class="max-w-5xl mx-auto ">
  <div class="collapse-container  pb-40">

    <div class="collapse collapse-plus bg-base-200 my-2 rounded-lg shadow-md">
      <input type="radio" name="my-accordion-3" id="accordion-2" /> 
      <div class="collapse-title text-xl font-medium">
        <label for="accordion-2" class="cursor-pointer block p-4">How can I view the cemetery map?</label>
      </div>
      <div class="collapse-content p-4"> 
        <p>After logging in, you can view the cemetery map by navigating to the 'View Map' section. This map provides a detailed layout of the cemetery, including plots and key landmarks.</p>
      </div>
    </div>

    <div class="collapse collapse-plus bg-base-200 my-2 rounded-lg shadow-md">
      <input type="radio" name="my-accordion-3" id="accordion-3" /> 
      <div class="collapse-title text-xl font-medium">
        <label for="accordion-3" class="cursor-pointer block p-4">How do I make a reservation for a plot?</label>
      </div>
      <div class="collapse-content p-4"> 
        <p>To make a reservation, log in to your account and go to the 'Reservation' section. Select the desired plot and fill in the necessary details. After submitting, you will receive a confirmation and payment details.</p>
      </div>
    </div>

    <div class="collapse collapse-plus bg-base-200 my-2 rounded-lg shadow-md">
      <input type="radio" name="my-accordion-3" id="accordion-4" /> 
      <div class="collapse-title text-xl font-medium">
        <label for="accordion-4" class="cursor-pointer block p-4">How can I update my profile information?</label>
      </div>
      <div class="collapse-content p-4"> 
        <p>To update your profile information, log in to your account and navigate to the 'My Account' section. Here, you can update your personal details, contact information, and change your password.</p>
      </div>
    </div>

    <div class="collapse collapse-plus bg-base-200 my-2 rounded-lg shadow-md">
      <input type="radio" name="my-accordion-3" id="accordion-5" /> 
      <div class="collapse-title text-xl font-medium">
        <label for="accordion-5" class="cursor-pointer block p-4">How do I view the profile of a deceased person?</label>
      </div>
      <div class="collapse-content p-4"> 
        <p>To view the profile of a deceased person, go to the 'Deceased Profile' section and enter the name or plot number. This will provide you with the relevant details and history of the individual.</p>
      </div>
    </div>

    <div class="collapse collapse-plus bg-base-200 my-2 rounded-lg shadow-md">
      <input type="radio" name="my-accordion-3" id="accordion-6" /> 
      <div class="collapse-title text-xl font-medium">
        <label for="accordion-6" class="cursor-pointer block p-4">How can I check my payment history?</label>
      </div>
      <div class="collapse-content p-4"> 
        <p>To check your payment history, log in and navigate to the 'Payments History' section. This will display a detailed list of all your transactions, including dates and amounts.</p>
      </div>
    </div>

 

</div>
</div>
<script>
  document.querySelectorAll('input[name="my-accordion-3"]').forEach((radio) => {
    radio.addEventListener('click', function() {
      if (this.dataset.toggled === "true") {
        this.checked = false;
        this.dataset.toggled = "false";
      } else {
        document.querySelectorAll('input[name="my-accordion-3"]').forEach((otherRadio) => {
          otherRadio.dataset.toggled = "false";
        });
        this.dataset.toggled = "true";
      }
    });
  });
</script>





<footer class="bg-green-700 text-white py-6 mt-10">
        <div class="max-w-5xl mx-auto px-4">
            <div class="flex flex-col sm:flex-row justify-center items-center space-y-4 sm:space-y-0 sm:space-x-8">
                <a href="https://www.facebook.com/p/Compassion-Memorial-Gardens-Oroquieta-City-100057269898716/" target="_blank" class="hover:text-gray-300 flex items-center space-x-2">
                    <i class="fab fa-facebook-f" style="color: #000000; font-size: 24px;"></i>
                    <span>Compassion Memorial Gardens - Oroquieta City</span>
                </a>
                <a href="https://www.instagram.com/explore/locations/786115044832299/compassion-memorial-gardens---oroquieta-city/" target="_blank" class="hover:text-gray-300 flex items-center space-x-2">
                <i class="fa-brands fa-square-instagram" style="color: #000000;"></i>
                    <span>Compassion Memorial Gardens - Oroquieta City</span>
                </a>
                <a href="tel:+11234567890" target="_blank" class="hover:text-gray-300 flex items-center space-x-2">
                    <i class="fas fa-phone" style="color: #000000;"></i>
                    <span>Contact Number: 0905 131 3005</span>
                </a>
                <a href="https://mail.google.com/mail/u/0/#search/compassionmemorial%40gmail.com?compose=new" target="_blank" class="hover:text-gray-300 flex items-center space-x-2">
                    <i class="fas fa-envelope" style="color: #000000;"></i>
                    <span>Email: compassionmemorial@gmail.com</span>
                </a>
            </div>
        </div>
    </footer>








</body>
</html>