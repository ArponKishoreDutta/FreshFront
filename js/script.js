document.addEventListener('DOMContentLoaded', () => {
   // Dark Mode Theme Toggle Logic
   const themeToggleBtn = document.querySelector('#theme-toggle-btn');
   
   const updateThemeIcon = (isDark) => {
      if (themeToggleBtn) {
         const icon = themeToggleBtn.querySelector('i') || themeToggleBtn;
         if (isDark) {
            icon.classList.remove('fa-moon');
            icon.classList.add('fa-sun');
         } else {
            icon.classList.remove('fa-sun');
            icon.classList.add('fa-moon');
         }
      }
   };

   // Check saved theme
   const currentTheme = localStorage.getItem('theme');
   if (currentTheme === 'dark') {
      document.documentElement.classList.add('dark-theme');
      updateThemeIcon(true);
   } else {
      updateThemeIcon(false);
   }

   if (themeToggleBtn) {
      themeToggleBtn.addEventListener('click', () => {
         const isDark = document.documentElement.classList.toggle('dark-theme');
         localStorage.setItem('theme', isDark ? 'dark' : 'light');
         updateThemeIcon(isDark);
      });
   }

   // Mobile Navbar & Profile Dropdown Controls
   const navbar = document.querySelector('.header .flex .navbar');
   const menuBtn = document.querySelector('#menu-btn');
   const profile = document.querySelector('.header .flex .profile');
   const userBtn = document.querySelector('#user-btn');

   if (menuBtn && navbar) {
      menuBtn.onclick = (e) => {
         e.stopPropagation();
         navbar.classList.toggle('active');
         if (profile) profile.classList.remove('active');
      };
   }

   if (userBtn && profile) {
      userBtn.onclick = (e) => {
         e.stopPropagation();
         profile.classList.toggle('active');
         if (navbar) navbar.classList.remove('active');
      };
   }

   window.onscroll = () => {
      if (profile) profile.classList.remove('active');
      if (navbar) navbar.classList.remove('active');
   };

   document.addEventListener('click', (e) => {
      if (profile && !profile.contains(e.target) && e.target !== userBtn) {
         profile.classList.remove('active');
      }
      if (navbar && !navbar.contains(e.target) && e.target !== menuBtn) {
         navbar.classList.remove('active');
      }
   });
});