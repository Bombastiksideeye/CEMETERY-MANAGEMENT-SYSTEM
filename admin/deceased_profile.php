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

<body class="bg-gray-100">

<div id="Deceased Profiles" class="container mx-auto mt-10 bg-green-200">
  <div class="flex justify-between py-4 items-center">
  <a href="AI.php">
        <img src="../images/logo1.png" class="h-20 ml-10" alt="main_logo">
      </a>
    <h2 class="text-2xl font-semibold mx-auto">Deceased Profiles</h2>
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
      <tbody id="profileTableBody">
        <tr class="hover:bg-gray-100">
          <?php 

          $users = $db->selectWithWhere("reservations");
          foreach($users as $u){        
          ?>
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
        <?php } ?>
      </tbody>
    </table>
  </div>
</div>





</body>
</html>



