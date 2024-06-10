<?php include '../db.php';
session_start();
if(!isset($_SESSION['auth'])){
  header('location: ../');
}
?>
<!DOCTYPE html>
<html lang="en" data-theme="light">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Dashboard</title>
  <link href="https://cdn.jsdelivr.net/npm/daisyui@4.11.1/dist/full.min.css" rel="stylesheet" type="text/css" />
  <script src="https://cdn.tailwindcss.com"></script>
  <script src="https://kit.fontawesome.com/ecd5e25db3.js" crossorigin="anonymous"></script>
</head>

<body>
  <div class="bg-green-800 h-72 w-full absolute"></div>
  <aside class="bg-gray-100 border-0 fixed w-64 h-full">
    <div class="p-3 relative">
      <a>
        <img src="../images/logo1.png" class="h-50" alt="main_logo">
      </a>
    </div>
    <hr class="border-gray-200 mt-0 ">
    <div class="w-auto">
      <ul class="list-none pt-10">
        <li class="my-2">
          <a class="flex items-center px-4 py-3 text-gray-700 hover:bg-gray-200 rounded-md" href="#Dashboard">
            <span class="ml-3">Dashboard</span>
          </a>
        </li>
        <li class="my-2">
          <a class="flex items-center px-4 py-3 text-gray-700 hover:bg-gray-200 rounded-md" href="#Deceased Profiles">
            <span class="ml-3">Deceased Profiles</span>
          </a>
        </li>
        <li class="my-2">
          <a class="flex items-center px-4 py-3 text-gray-700 hover:bg-gray-200 rounded-md" href="#User Profiles">
            <i class="ni ni-circle-08 text-blue-500 text-sm mr-2"></i>
            <span class="ml-1">User Profiles</span>
          </a>
        </li>
        <li class="my-2">
          <a class="flex items-center px-4 py-3 text-gray-700 hover:bg-gray-200 rounded-md" href="#Concerns">
            <i class="ni ni-headphones text-red-500 text-sm mr-2"></i>
            <span class="ml-1">Concerns</span>
          </a>
        </li>
        <li class="my-2">
          <a class="flex items-center px-4 py-3 text-gray-700 hover:bg-gray-200 rounded-md" href="#Reservation Records">
            <i class="ni ni-calendar-grid-58 text-blue-500 text-sm mr-2"></i>
            <span class="ml-1">Reservations</span>
          </a>
        </li>
        <li class="my-2">
          <a class="flex items-center px-4 py-3 text-gray-700 hover:bg-gray-200 rounded-md" href="#Payment Records">
            <i class="ni ni-credit-card text-green-500 text-sm mr-2"></i>
            <span class="ml-1">Payments</span>
          </a>
        </li>
      </ul>
    </div>
   
  </aside>
  <main class="relative ml-64 p-6">
    <!-- Navbar -->
    <nav id="Dashboard" class="bg-white rounded-xl shadow px-6 py-3">
      <div class="flex justify-between items-center">
        <nav>
          <ol class="flex text-sm text-gray-500">
            <li class="ml-2 text-black text-[25px] font-bold">Compassion Memorial Gardens</li>
          </ol>
        </nav>
        <div class="flex items-center space-x-4">
         
          <div class="flex items-center space-x-3">
            <button onclick="document.getElementById('logout_modal').showModal()" class="w-full pl-5 pr-5 pb-2 pt-2 bg-green-700 text-white rounded-lg hover:bg-green-800">Log out</button>
          </div>
        </div>
      </div>
    </nav>





    <dialog id="logout_modal" class="modal">
      <div class="modal-box w-11/12 max-w-sm bg-green-400 relative">
        <form method="dialog">
          <button class="btn btn-sm btn-circle btn-ghost absolute right-2 top-2">✕</button>
        </form>
        <div class="flex flex-col items-center p-6 bg-white m-auto my-5 border border-green-800 rounded-lg">
          <h2 class="text-xl font-bold mb-4">Log out of your account</h2>
          <div class="flex gap-4 mt-4">
            <a href="AI.php" class="rounded-md bg-green-800 text-white w-24 p-3 text-sm flex justify-center items-center">Cancel</a>
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
        from {
          opacity: 0;
          transform: translateY(-20px);
        }

        to {
          opacity: 1;
          transform: translateY(0);
        }
      }
    </style>


      <?php
      $Deceased = $db->countRows('reservations');
      $User = $db->countRows('users');
      $Concerns = $db->countRows('contactmessages');
       ?>
    <!-- End Navbar -->
    <div class="grid grid-cols-1 md:grid-cols-5 gap-4 pt-5">
      <div class="bg-white text-black rounded-xl shadow p-4 text-center transform hover:scale-105 transition-transform hover:bg-gray-100">
        <i class="fas fa-user-slash text-3xl mb-2"></i>
        <div class="text-3xl font-bold text-blue-500"><?php echo $Deceased?></div>
        <h2 class="font-bold text-xl mb-2">Deceased Profiles</h2>
        <p class="text-gray-400">Explore profiles of deceased individuals.</p>
      </div>
      <div class="bg-white text-black rounded-xl shadow p-4 text-center transform hover:scale-105 transition-transform hover:bg-gray-100">
        <i class="fas fa-users text-3xl mb-2"></i>
        <div class="text-3xl font-bold text-blue-500"><?php echo $User?></div>
        <h2 class="font-bold text-xl mb-2">User Profiles</h2>
        <p class="text-gray-400">View and manage user profiles.</p>
      </div>
      <div class="bg-white text-black rounded-xl shadow p-4 text-center transform hover:scale-105 transition-transform hover:bg-gray-100">
        <i class="fas fa-exclamation-circle text-3xl mb-2"></i>
        <div class="text-3xl font-bold text-blue-500"><?php echo $Concerns?></div>
        <h2 class="font-bold text-xl mb-2">Concerns</h2>
        <p class="text-gray-400">Handle concerns and issues.</p>
      </div>
      <div class="bg-white text-black rounded-xl shadow p-4 text-center transform hover:scale-105 transition-transform hover:bg-gray-100">
        <i class="fas fa-calendar-alt text-3xl mb-2"></i>
        <div class="text-3xl font-bold text-blue-500"><?php echo $Deceased?></div>
        <h2 class="font-bold text-xl mb-2">Reservations</h2>
        <p class="text-gray-400">Manage reservations for events or services.</p>
      </div>
      <div class="bg-white text-black rounded-xl shadow p-4 text-center transform hover:scale-105 transition-transform hover:bg-gray-100">
        <i class="fas fa-dollar-sign text-3xl mb-2"></i>
        <div class="text-3xl font-bold text-blue-500"><?php echo $Deceased?></div>
        <h2 class="font-bold text-xl mb-2">Payments</h2>
        <p class="text-gray-400">Track and process payments.</p>
      </div>
    </div>

    <div id="Deceased Profiles" class="container mx-auto mt-10">
      <div class="flex justify-between mb-4 items-center">
        <h2 class="text-2xl font-semibold">Deceased Profiles</h2>
        <div class="flex space-x-5 items-center">
          <a href="deceased_profile.php" class="bg-green-800 text-white py-2 px-4 rounded">SEE ALL</a>
        </div>
      </div>

      <div class="bg-white shadow-md rounded">
        <table class="min-w-full bg-white">
          <thead>
            <tr>
              <th class="w-1/12 py-2 px-4 bg-gray-200 text-left">LAST NAME</th>
              <th class="w-1/12 py-2 px-4 bg-gray-200 text-left">FIRST NAME</th>
              <th class="w-1/12 py-2 px-4 bg-gray-200 text-left">MIDDLE NAME</th>
              <th class="w-1/12 py-2 px-4 bg-gray-200 text-left">DATE OF BIRTH</th>
              <th class="w-1/12 py-2 px-4 bg-gray-200 text-left">DATE OF DEATH</th>
              <th class="w-1/12 py-2 px-4 bg-gray-200 text-left">PLACE OF BIRTH</th>
              <th class="w-1/12 py-2 px-4 bg-gray-200 text-left">PLACE OF DEATH</th>
              <th class="w-1/12 py-2 px-4 bg-gray-200 text-left">CAUSE OF DEATH</th>
              <th class="w-1/12 py-2 px-4 bg-gray-200 text-left">BURIAL DATE</th>
            </tr>
          </thead>
          <tbody>
            <?php 
            $u = $db->selectWithWhere("reservations")[0];
            $profile = $db->selectWithWhere("users")[0];
            
            $reservations = $db->selectWithWhere("reservations")[0];
            ?>
            <tr class="hover:bg-gray-100">
              <td class="border-t py-2 px-4"><?php echo $u['last_name']?></td>
              <td class="border-t py-2 px-4"><?php echo $u['first_name']?></td>
              <td class="border-t py-2 px-4"><?php echo $u['middle_name']?></td>
              <td class="border-t py-2 px-4"><?php echo $u['birth_date']?></td>
              <td class="border-t py-2 px-4"><?php echo $u['death_date']?></td>
              <td class="border-t py-2 px-4"><?php echo $u['birth_place']?></td>
              <td class="border-t py-2 px-4"><?php echo $u['death_place']?></td>
              <td class="border-t py-2 px-4"><?php echo $u['cause_of_death']?></td>
              <td class="border-t py-2 px-4"><?php echo $u['burial_date']?></td>
            </tr>
            <!-- More rows as needed -->
          </tbody>
        </table>
      </div>
    </div>


    <div id="User Profiles" class="container mx-auto mt-10">
      <div class="flex justify-between items-center mb-4">
        <h2 class="text-2xl font-semibold">User Profiles</h2>
        <div class="flex space-x-5 items-center">
          <a href="user_profile.php" class="bg-green-800 text-white py-2 px-4 rounded">SEE ALL</a>
        </div>
      </div>
      <div class="bg-white shadow-md rounded">
        <table class="min-w-full bg-white">
          <thead>
            <tr>
              <th class="py-2 px-4 bg-gray-200 text-left">Email</th>
              <th class="py-2 px-4 bg-gray-200 text-left">Username</th>
              <th class="py-2 px-4 bg-gray-200 text-left">Password</th>
              <th class="py-2 px-4 bg-gray-200 text-left">First Name</th>
              <th class="py-2 px-4 bg-gray-200 text-left">Middle Name</th>
              <th class="py-2 px-4 bg-gray-200 text-left">Last Name</th>
              <th class="py-2 px-4 bg-gray-200 text-left">Address</th>
              <th class="py-2 px-4 bg-gray-200 text-left">Gender</th>
              <th class="py-2 px-4 bg-gray-200 text-left">Status</th>
              <th class="py-2 px-4 bg-gray-200 text-left">Birth Date</th>
              <th class="py-2 px-4 bg-gray-200 text-left">Age</th>
            </tr>
          </thead>
          <tbody>
            <tr class="hover:bg-gray-100">
              <td class="border-t py-2 px-4"><?php echo $profile['email']?></td>
              <td class="border-t py-2 px-4"><?php echo $profile['username']?></td>
              <td class="border-t py-2 px-4"><?php echo $profile['password']?></td>
              <td class="border-t py-2 px-4"><?php echo $profile['first_name']?></td>
              <td class="border-t py-2 px-4"><?php echo $profile['middle_name']?></td>
              <td class="border-t py-2 px-4"><?php echo $profile['last_name']?></td>
              <td class="border-t py-2 px-4"><?php echo $profile['address']?></td>
              <td class="border-t py-2 px-4"><?php echo $profile['gender']?></td>
              <td class="border-t py-2 px-4"><?php echo $profile['status']?></td>
              <td class="border-t py-2 px-4"><?php echo $profile['birth_date']?></td>
              <td class="border-t py-2 px-4"><?php echo $profile['age']?></td>
            </tr>
            <!-- More rows as needed -->
          </tbody>
        </table>
      </div>
    </div>

    <div id="Concerns" class="container mx-auto mt-10">
      <div class="flex justify-between items-center mb-4">
        <h2 class="text-2xl font-semibold">Concerns</h2>
        <div class="flex space-x-5 items-center">
          <a href="concerns.php" class="bg-green-800 text-white py-2 px-4 rounded">SEE ALL</a>
        </div>
      </div>
      <div class="bg-white shadow-md rounded">
        <table class="min-w-full bg-white">
          <thead>
            <tr>
              <th class="py-2 px-4 bg-gray-200 text-left">Name</th>
              <th class="py-2 px-4 bg-gray-200 text-left">Email</th>
              <th class="py-2 px-4 bg-gray-200 text-left">Phone</th>
              <th class="py-2 px-4 bg-gray-200 text-left">Message</th>
              <th class="py-2 px-4 bg-gray-200 text-left">Date Received</th>
            </tr>
          </thead>
          <tbody>
           
            <?php
            if(!empty($db->selectWithWhere("contactmessages")[0])){
            $concern = $db->selectWithWhere("contactmessages")[0];
            ?>
            <tr class="hover:bg-gray-100">
              <td class="border-t py-2 px-4"><?php echo $concern['name'] ? : ''?></td>
              <td class="border-t py-2 px-4"><?php echo $concern['email'] ? : ''?></td>
              <td class="border-t py-2 px-4"><?php echo $concern['phone'] ? : '' ?></td>
              <td class="border-t py-2 px-4"><?php echo $concern['message'] ? : '' ?></td>
              <td class="border-t py-2 px-4"><?php echo $concern['sent_date'] ? : '' ?></td>
            </tr>
            <?php } ?>
            <!-- More rows as needed -->
          </tbody>
        </table>
      </div>
    </div>


    <div id="Reservation Records" class="container mx-auto mt-10">
      <div class="flex justify-between items-center mb-4">
        <h2 class="text-2xl font-semibold">Reservation Records</h2>
        <div class="flex space-x-5 items-center">
          <a href="reservation.php" class="bg-green-800 text-white py-2 px-4 rounded">SEE ALL</a>
        </div>
      </div>
      <div class="bg-white shadow-md rounded">
        <table class="min-w-full bg-white">
          <thead>
            <tr>
              <th class="py-2 px-4 bg-gray-200 text-left">Username</th>
              <th class="py-2 px-4 bg-gray-200 text-left">Name of Deceased</th>
              <th class="py-2 px-4 bg-gray-200 text-left">Lot Type</th>
              <th class="py-2 px-4 bg-gray-200 text-left">Amount</th>
              <th class="py-2 px-4 bg-gray-200 text-left">Reservation Date</th>
            </tr>
          </thead>
          <tbody>
            <tr class="hover:bg-gray-100">
              <td class="border-t py-2 px-4"><?php echo $profile['username']?></td>
              <td class="border-t py-2 px-4"><?php echo $reservations['first_name'] . " " . $reservations['middle_name'] . " " . $reservations['last_name'] ?></td>
              <td class="border-t py-2 px-4"><?php echo $reservations['lot_type']?></td>
              <td class="border-t py-2 px-4"><?php echo $reservations['amount']?></td>
              <td class="border-t py-2 px-4"><?php echo $reservations['reservation_date']?></td>

            </tr>
            <!-- More rows as needed -->
          </tbody>
        </table>
      </div>
    </div>


    <div id="Payment Records" class="container mx-auto mt-10">
      <div class="flex justify-between items-center mb-4">
        <h2 class="text-2xl font-semibold">Payment Records</h2>
        <div class="flex space-x-5 items-center">
          <a href="payment.php" class="bg-green-800 text-white py-2 px-4 rounded">SEE ALL</a>
        </div>
      </div>
      <div class="bg-white shadow-md rounded">
        <table class="min-w-full bg-white">
          <thead>
            <tr>
              <th class="py-2 px-4 bg-gray-200 text-left">Name</th>
              <th class="py-2 px-4 bg-gray-200 text-left">Name of Deceased</th>
              <th class="py-2 px-4 bg-gray-200 text-left">Lot Type</th>
              <th class="py-2 px-4 bg-gray-200 text-left">Amount</th>
              <th class="py-2 px-4 bg-gray-200 text-left">Reservation Date</th>
              <th class="py-2 px-4 bg-gray-200 text-left">Area Size (Sq m)</th>
              <th class="py-2 px-4 bg-gray-200 text-left">Down Payment</th>
              <th class="py-2 px-4 bg-gray-200 text-left">Monthly Amortization (0% Interest)</th>
              <th class="py-2 px-4 bg-gray-200 text-left">Date Paid</th>
            </tr>
          </thead>
          <tbody>
            <tr class="hover:bg-gray-100">
              <td class="border-t py-2 px-4"><?php echo $profile['username']?></td>
              <td class="border-t py-2 px-4"><?php echo $reservations['first_name'] . " " . $reservations['middle_name'] . " " . $reservations['last_name'] ?></td>
              <td class="border-t py-2 px-4"><?php echo $reservations['lot_type']?></td>
              <td class="border-t py-2 px-4"><?php echo $reservations['amount']?></td>
              <td class="border-t py-2 px-4"><?php echo $reservations['reservation_date']?></td>
              <td class="border-t py-2 px-4"><?php echo $reservations['area_size']?></td>
              <td class="border-t py-2 px-4"><?php echo $reservations['down_payment']?></td>
              <td class="border-t py-2 px-4"><?php echo $reservations['monthly_amortization']?></td>
              <td class="border-t py-2 px-4"><?php echo $reservations['reservation_date']?></td>
             
            <!-- More rows as needed -->
          </tbody>
        </table>
      </div>
    </div>


  </main>
</body>

</html>