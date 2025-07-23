<!DOCTYPE html>
<html lang="en" class="transition-colors duration-300">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Employee Login</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <script>
    tailwind.config = {
      darkMode: 'class',
    };
  </script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />
</head>
<body class="bg-gray-100 dark:bg-gray-900 text-gray-800 dark:text-gray-200 flex items-center justify-center min-h-screen p-4">

  <div class="w-full max-w-sm bg-white dark:bg-gray-800 p-8 rounded-3xl shadow-2xl relative">

    <!-- Theme Toggle -->
    <button id="themeToggle" class="absolute top-3 right-3 bg-gray-300 dark:bg-gray-600 p-2 rounded-full">
      <svg id="sunIcon" class="w-5 h-5 text-yellow-500 dark:hidden" fill="none" stroke="currentColor" stroke-width="2"
           viewBox="0 0 24 24">
        <path stroke-linecap="round" stroke-linejoin="round"
              d="M12 3v1m0 16v1m8.66-8.66h-1M4.34 12H3m15.36 6.36l-.7-.7M6.34 6.34l-.7-.7m12.02 0l-.7.7M6.34 17.66l-.7.7M12 8a4 4 0 100 8 4 4 0 000-8z"/>
      </svg>
      <svg id="moonIcon" class="w-5 h-5 text-yellow-100 hidden dark:block" fill="none" stroke="currentColor" stroke-width="2"
           viewBox="0 0 24 24">
        <path stroke-linecap="round" stroke-linejoin="round"
              d="M21 12.79A9 9 0 1111.21 3 7 7 0 0021 12.79z"/>
      </svg>
    </button>

    <!-- Login Form -->
    <form action="#" method="POST" class="flex flex-col gap-6 mt-4">
      <h2 class="text-2xl font-bold text-center text-sky-600 dark:text-sky-400">Employee Login</h2>

      <input type="text" id="username" placeholder="Username" requird
             class="px-4 py-2 rounded-lg border border-gray-300 dark:border-gray-600 dark:bg-gray-700 dark:text-white focus:outline-sky-500" >

      <!-- Password with toggle icon -->
      <div class="relative">
        <input type="password" id="password" placeholder="Password"  requird
               class="w-full px-4 py-2 rounded-lg border border-gray-300 dark:border-gray-600 dark:bg-gray-700 dark:text-white focus:outline-sky-500 pr-10" >
        <span id="togglePassword" class="absolute inset-y-0 right-3 flex items-center cursor-pointer text-gray-500 dark:text-gray-300">
          <i class="fa-solid fa-eye" id="eyeIcon"></i>
        </span>
      </div>

      <button type="submit" name="submit"
              class="bg-sky-600 hover:bg-sky-700 text-white font-semibold py-2 rounded-lg transition duration-300">Login</button>
    </form>
  </div>

  <script>
    // Theme toggle
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

    // Show/hide password logic
    const passwordInput = document.getElementById('password');
    const togglePassword = document.getElementById('togglePassword');
    const eyeIcon = document.getElementById('eyeIcon');

    togglePassword.addEventListener('click', () => {
      const type = passwordInput.getAttribute('type') === 'password' ? 'text' : 'password';
      passwordInput.setAttribute('type', type);
      eyeIcon.classList.toggle('fa-eye');
      eyeIcon.classList.toggle('fa-eye-slash');
    });
  </script>

</body>
</html>
