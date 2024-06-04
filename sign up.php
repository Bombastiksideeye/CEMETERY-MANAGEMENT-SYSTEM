<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Submit Form</title>
    <link href="https://cdn.jsdelivr.net/npm/daisyui@4.11.1/dist/full.min.css" rel="stylesheet" type="text/css" />
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class=" pt-10">
  
    <div class="main w-96  p-2 flex items-center flex-col bg-white m-auto my-5 border border-green-800 ">
      
    <img style="width: 200px;" class=" ml-5" src="images/logo.png">


    <label class="input input-bordered flex items-center gap-2 p-2 mt-8 w-3/4 text-sm border-green-800">
  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="currentColor" class="w-4 h-4 opacity-70"><path d="M2.5 3A1.5 1.5 0 0 0 1 4.5v.793c.026.009.051.02.076.032L7.674 8.51c.206.1.446.1.652 0l6.598-3.185A.755.755 0 0 1 15 5.293V4.5A1.5 1.5 0 0 0 13.5 3h-11Z" /><path d="M15 6.954 8.978 9.86a2.25 2.25 0 0 1-1.956 0L1 6.954V11.5A1.5 1.5 0 0 0 2.5 13h11a1.5 1.5 0 0 0 1.5-1.5V6.954Z" /></svg>
  <input type="text" class="grow" placeholder="Email" />
</label>
        
        <label class="input input-bordered flex items-center gap-2 p-2 mt-8 w-3/4 text-sm border-green-800">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="currentColor" class="w-4 h-4 opacity-70"><path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6ZM12.735 14c.618 0 1.093-.561.872-1.139a6.002 6.002 0 0 0-11.215 0c-.22.578.254 1.139.872 1.139h9.47Z" /></svg>
        <input type="text" class="grow" placeholder="Username" />
      </label>

      <label class="input input-bordered flex items-center gap-2 p-2 mt-8 w-3/4 text-sm border-green-800">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="currentColor" class="w-4 h-4 opacity-70"><path fill-rule="evenodd" d="M14 6a4 4 0 0 1-4.899 3.899l-1.955 1.955a.5.5 0 0 1-.353.146H5v1.5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1-.5-.5v-2.293a.5.5 0 0 1 .146-.353l3.955-3.955A4 4 0 1 1 14 6Zm-4-2a.75.75 0 0 0 0 1.5.5.5 0 0 1 .5.5.75.75 0 0 0 1.5 0 2 2 0 0 0-2-2Z" clip-rule="evenodd" /></svg>
        <input type="password" class="grow" placeholder="Password" />
      </label>

      <label class="input input-bordered flex items-center gap-2 p-2 mt-8 w-3/4 text-sm border-green-800">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="currentColor" class="w-4 h-4 opacity-70 "><path fill-rule="evenodd" d="M14 6a4 4 0 0 1-4.899 3.899l-1.955 1.955a.5.5 0 0 1-.353.146H5v1.5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1-.5-.5v-2.293a.5.5 0 0 1 .146-.353l3.955-3.955A4 4 0 1 1 14 6Zm-4-2a.75.75 0 0 0 0 1.5.5.5 0 0 1 .5.5.75.75 0 0 0 1.5 0 2 2 0 0 0-2-2Z" clip-rule="evenodd" /></svg>
        <input type="password" class="grow" placeholder="Confirm Password" />
      </label>


      <p class="text-md font-semibold mt-4">PERSONAL INFORMATION:</p>

<label class="input input-bordered flex items-center gap-2 p-2 mt-8 w-3/4 text-sm border-green-800">
    <input type="text" name="firstname" class="grow" placeholder="First Name" />
</label>

<label class="input input-bordered flex items-center gap-2 p-2 mt-8 w-3/4 text-sm border-green-800">
    <input type="text" name="middlename" class="grow" placeholder="Middle Name" />
</label>

<label class="input input-bordered flex items-center gap-2 p-2 mt-8 w-3/4 text-sm border-green-800">
    <input type="text" name="lastname" class="grow" placeholder="Last Name" />
</label>

<label class="input input-bordered flex items-center gap-2 p-2 mt-8 w-3/4 text-sm border-green-800">
    <input type="text" name="address" class="grow" placeholder="Address" />
</label>

<div class="p-2 mt-8 w-3/4 ">
    <label for="gender" class="block text-sm mb-2">Gender:</label>
    <select id="gender" name="gender" class="dropdown w-full border border-green-800 bg-white rounded-md p-2 text-sm">
        <option value="male">Male</option>
        <option value="female">Female</option>
    </select>
</div>

<div class="p-2 mt-8 w-3/4">
    <label for="status" class="block text-sm mb-2">Status:</label>
    <select id="status" name="status" class="dropdown w-full border border-green-800 bg-white rounded-md p-2 text-sm">
        <option value="single">Single</option>
        <option value="married">Married</option>
        <option value="widowed">Widowed</option>
        <option value="divorced">Divorced</option>
        <option value="separated">Separated</option>
        <option value="unknown">Unknown</option>
    </select>
</div>

<label class="input input-bordered flex items-center gap-2 p-2 mt-8 w-3/4 text-sm border-green-800">
    <input type="date" name="birthdate" class="grow" placeholder="Birthdate" />
</label>

<label class="input input-bordered flex items-center gap-2 p-2 mt-8 w-3/4 text-sm border-green-800">
    <input type="number" id="age" name="age" class="grow" placeholder="Age" readonly />
</label>


      <button type="submit" class="rounded-md bg-green-800  text-white w-3/4 p-3 mt-8 mb-8 w-3/4 text-sm">Create Account</button>
   
    </div>
    <div class="w-96 flex justify-center items-center p-6 bg-white m-auto my-5 border border-green-800">
        <span class="text-sm ">Already have an account?</span><a href="log in.php" class=" text-green-900 text-sm  font-semibold">Log in</a>
    </div>
    
</body>
</html>