<!DOCTYPE html>
<html lang="en" class="transition-colors duration-300">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Payments</title>
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
