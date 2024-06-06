<!DOCTYPE html>
<html lang="en" data-theme="light">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Submit Form</title>
    <link href="https://cdn.jsdelivr.net/npm/daisyui@4.11.1/dist/full.min.css" rel="stylesheet" type="text/css" />
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://kit.fontawesome.com/ecd5e25db3.js" crossorigin="anonymous"></script>

</head>
<body>
<div class="main w-96 p-10 rounded-md flex items-center flex-col bg-white m-auto my-5 border border-green-800">

<img style="width: 200px;" class=" ml-5 justify-center" src="images/logo.png">

    <h3 class="text-center font-bold text-lg text-green-800 pt-5">Reservation Form</h3><br>
    <form>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
            <label class="block">
                <span class="text-gray-700">Last Name</span>
                <input type="text" name="lastname" class="mt-1 block w-full rounded-md gap-2 p-2 mt-2 w-full text-sm border border-green-800" placeholder="Last Name">
            </label>
            <label class="block">
                <span class="text-gray-700">First Name</span>
                <input type="text" name="firstname" class="mt-1 block w-full rounded-md gap-2 p-2 mt-2 w-full text-sm border border-green-800" placeholder="First Name">
            </label>
            <label class="block">
                <span class="text-gray-700">Middle Name</span>
                <input type="text" name="middlename" class="mt-1 block w-full rounded-md gap-2 p-2 mt-2 w-full text-sm border border-green-800" placeholder="Middle Name">
            </label>
            <label class="block col-span-2">
                <span class="text-gray-700">Date of Birth</span>
                <input type="date" name="birthdate" class="mt-1 block w-full rounded-md gap-2 p-2 mt-2 w-full text-sm border border-green-800">
            </label>
</body>
</html>
