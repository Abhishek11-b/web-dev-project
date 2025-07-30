# web-dev-project
This repository showcases a collection of my web development projects, each demonstrating various technologies and design approaches.
Author-Abhishek.B
**Neural lock**
Project Overview
Daily Habit Tracker web application. It starts with a PHP-based login page (using
hardcoded admin credentials) and, upon successful login, redirects to a dashboard where
users can add, view, update, and delete daily habits. The dashboard interface (built with
Bootstrap) lets users log multiple habits (e.g. exercise, prayer, reading, vitamins, etc.) per
day. Each row in the habit table shows the date, day, yes/no values for each habit, and a
progress bar indicating the percentage of habits completed. JavaScript/jQuery powers UI
features such as modals (for adding/updating entries), a “dark mode” toggle, and a simple
chatbot-like panel. The app also includes buttons to generate or download a “Focus
Report” by summarizing today’s completed habits and time tracked (using data stored in
localStorage). Overall, this is a PHP/MySQL CRUD application with a modern front end.
Key features described in the code and documentation include: secure login
authentication, data visualization via progress bars.\\

Code Structure and Features

🔑 Login System
• You open the app and see a login page.
• Enter Username: admin and Password: admin to get in.
• If you type the wrong details, you’ll get an error.
• (This is a basic login; not secure enough for real websites.)

📅 Dashboard Page
• After logging in, you go to the home page.
• You can add your daily habits (like exercise, prayer, reading, etc.).
• You can also edit or delete old entries.
• All your entries are shown in a table with:
o Date and day
o Yes/No for each habit
o A progress bar that shows how many habits you completed that day

✍️ Add & Update Habits
• Use the Add Tracker button to enter today’s habits.
• If you want to change something, click the pencil icon.
• A form will pop up where you can edit the details.
• To delete, click the trash icon.

📃 Habit Table
• The app shows all your habit entries in a nice table.
• It tells you how many of the 7 habits you completed each day.
• A progress bar shows your daily progress visually (e.g., 5/7 = 71%).
• You can search, sort, and navigate pages in the table easily.

📊 DataTables Plugin
• This makes the habit table searchable, sortable, and easy to read.
• Even if you have 100+ entries, it’s still easy to use.

📈 Focus Report (JavaScript Feature)
• Buttons like "Show My Focus Report" and "Download Report" show your
progress.
• They use localStorage (browser memory) to get:
o Today’s completed habits
o Time spent focusing
o Mood entries
• You can view it or download a .txt file with the report.

🌐 User Interface Features
• ✨ Colorful welcome banner: "Welcome back, BUDDY! "
• Dark Mode switch to change theme (light/dark)
• Chatbot demo pops up (not functional yet)
• Uses cool styles from Bootstrap, Google Fonts, FontAwesome icons

**⚖️ Future Improvements**
• Add user accounts with registration and password protection.
• Improve security (use sessions and password hashing).
• Add graphs to show weekly/monthly progress.
• Use AJAX to save data without reloading the page.
• Make chatbot smart using real AI.
• Make it look good on phones (mobile responsive).
• Use PHP frameworks like Laravel to make it more powerful.

**⚙️ How to Run the Project (Setup Guide)
1. Install XAMPP (to get Apache, PHP & MySQL)
2. Put the project folder inside the htdocs folder (XAMPP directory)
3. Open phpMyAdmin and create a database called habit_tracker_db
4. Import the provided .sql file to create the table
5. Open your browser and go to: http://localhost/habit-tracker/
6. Login using admin / admin and start tracking!

**

---------------------------------thats the PROJECT in development ----------------
