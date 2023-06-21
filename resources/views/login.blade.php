@extends ('layout.layout')
<section class="home">

<ol style="margin-left: 5rem; margin-right:5rem" class="list-group list-group-numbered">
<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css">
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
  <div class="flex items-center justify-center h-screen">
    <div class="w-96">
      <h2 style="color: red" class="text-2xl text-center mb-8 ">Login</h2>
      <form action="/login" method="post">
        @csrf
        <div class="mb-6">
          <input type="email" name="email" id="email" class="w-full px-4 py-3 rounded-md bg-gray-800 text-white placeholder-gray-500 focus:outline-none focus:ring focus:ring-green-500" placeholder="Email" required>
        </div>
        <div class="mb-6">
          <input type="password" name="password" id="password" class="w-full px-4 py-3 rounded-md bg-gray-800 text-white placeholder-gray-500 focus:outline-none focus:ring focus:ring-green-500" placeholder="Password" required>
        </div>
        <button type="submit" class="w-full bg-green-500 hover:bg-green-600 text-white font-bold py-3 rounded-md transition duration-300">Login</button>
      </form>
    </div>
  </div>
  <style>
    
  </style>
</body>
</html>
</ol>
</section>