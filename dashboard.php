<!DOCTYPE html>
<html lang="en" class="transition-colors duration-300">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Dashboard</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <script>
    tailwind.config = {
      darkMode: 'class',
    };
  </script>
  <style>
    .card-3d {
      box-shadow: 0 10px 25px rgba(0, 0, 0, 0.06),
                  0 20px 50px rgba(0, 0, 0, 0.03);
      transition: transform 0.3s ease, box-shadow 0.3s ease;
    }
    .card-3d:hover {
      transform: translateY(-5px);
      box-shadow: 0 20px 40px rgba(0, 0, 0, 0.08);
    }
  </style>
</head>
<body class="bg-gray-100 dark:bg-gray-900 text-gray-800 dark:text-gray-200 min-h-screen flex items-center justify-center p-4">

  
  <div class="w-full max-w-7xl bg-white dark:bg-gray-800 rounded-3xl shadow-2xl p-6 md:p-10 flex flex-col md:flex-row gap-8 card-3d transition-all duration-300">

   
    <aside class="w-full md:w-1/4 bg-sky-50 dark:bg-gray-700 rounded-2xl p-6 shadow-inner">
      <div class="flex justify-between items-center mb-8">
        <h2 class="text-2xl font-bold text-sky-600 dark:text-sky-400">Dashboard</h2>

        
        <button id="themeToggle" class="w-10 h-10 flex items-center justify-center bg-gray-200 dark:bg-gray-600 rounded-full transition duration-300">
          
          <svg id="sunIcon" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-yellow-500 dark:hidden" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
              d="M12 3v1m0 16v1m8.66-8.66h-1M4.34 12H3m15.36 6.36l-.7-.7M6.34 6.34l-.7-.7m12.02 0l-.7.7M6.34 17.66l-.7.7M12 8a4 4 0 100 8 4 4 0 000-8z" />
          </svg>

          
          <svg id="moonIcon" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-yellow-100 hidden dark:block" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
              d="M21 12.79A9 9 0 1111.21 3 7 7 0 0021 12.79z" />
          </svg>
        </button>
      </div>

      <nav class="space-y-4">
        <a href="dMenu/workspace.php" class="block px-4 py-2 rounded hover:bg-sky-100 dark:hover:bg-gray-600 font-medium">Workspace</a>
        <a href="dMenu/reportbug.php" class="block px-4 py-2 rounded hover:bg-sky-100 dark:hover:bg-gray-600 font-medium">Report Bug</a>
        <a href="dMenu/payments.php" class="block px-4 py-2 rounded hover:bg-sky-100 dark:hover:bg-gray-600 font-medium">Payments</a>
        <a href="dMenu/contactadmin.php" class="block px-4 py-2 rounded hover:bg-sky-100 dark:hover:bg-gray-600 font-medium">Contact Admin</a>
      </nav>
    </aside>

   
    <main class="flex-1 flex flex-col gap-6">
      
      <div class="flex justify-between items-center">
        <h1 class="text-3xl font-bold text-sky-700 dark:text-sky-300">Welcome Back [Name]👋</h1>
        <div class="flex items-center space-x-4">
          <input type="text" placeholder="Search..." class="px-4 py-2 rounded-lg border border-gray-300 dark:border-gray-600 dark:bg-gray-700 dark:text-white focus:outline-sky-400">
          <img src="https://i.pravatar.cc/40" alt="User Avatar" class="w-10 h-10 rounded-full shadow-md" />
        </div>
      </div>

      
      <section class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
        <div class="bg-white dark:bg-gray-700 rounded-2xl p-6 card-3d">
          <h2 class="text-xl font-semibold text-sky-600 dark:text-sky-400">Sales</h2>
          <p class="text-3xl font-bold mt-2">$4,500</p>
          <p class="text-sm text-gray-500 dark:text-gray-400 mt-1">+18% this month</p>
        </div>
        <div class="bg-white dark:bg-gray-700 rounded-2xl p-6 card-3d">
          <h2 class="text-xl font-semibold text-sky-600 dark:text-sky-400">Users</h2>
          <p class="text-3xl font-bold mt-2">1,200</p>
          <p class="text-sm text-gray-500 dark:text-gray-400 mt-1">+5% this week</p>
        </div>
        <div class="bg-white dark:bg-gray-700 rounded-2xl p-6 card-3d">
          <h2 class="text-xl font-semibold text-sky-600 dark:text-sky-400">Bounce Rate</h2>
          <p class="text-3xl font-bold mt-2">32%</p>
          <p class="text-sm text-gray-500 dark:text-gray-400 mt-1">-2% this week</p>
        </div>
      </section>
    </main>
  </div>

  
  <script>
    const toggle = document.getElementById('themeToggle');
    const html = document.documentElement;

    if (localStorage.getItem('theme') === 'dark') {
      html.classList.add('dark');
    }

    toggle.addEventListener('click', () => {
      html.classList.toggle('dark');
      const isDark = html.classList.contains('dark');
      localStorage.setItem('theme', isDark ? 'dark' : 'light');
    });
  </script>
</body>
</html>
