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
authentication, data visualization via progress bars.
Key Technologies Used
• PHP (server-side scripting) – The backend is written in PHP. All pages are PHP
files (index.php, home.php, and endpoint scripts for add/update/delete). PHP
handles form submissions and database interactions. (As noted, PHP is a widelyused server-side scripting language for creating dynamic web pages.)
• MySQL (database) – A MySQL (MariaDB) database habit_tracker_db stores
habit records in a tbl_tracker table. Each record has fields for date, day, and several
habit flags. The PHP code uses PDO to connect to MySQL (include
('../conn/conn.php')) and execute prepared statements for inserting, updating, and
deleting records. MySQL is a relational database system suited for storing
structured data like these habit logs.
• XAMPP – The app is designed to run on a local PHP/MySQL server environment
(e.g. XAMPP or similar). Indeed, the documentation advises “Install XAMPP” to
get Apache, PHP and MySQL on your machine. Once set up, the source code is
placed in htdocs, and the provided SQL is imported into phpMyAdmin.
• Bootstrap CSS – The front end uses Bootstrap 4 for responsive, styled
components. Layout classes (e.g. row, col-7, btn btn-dark, etc.) and Bootstrap’s
progress bar classes (.progress, .progress-bar) are used extensively. (Bootstrap is a
popular front-end framework providing prebuilt styling and grids.) For example,
each habit entry’s completion percentage is shown using <div
class="progress"><div class="progress-bar" ...></div></div>. This conveys
progress visually – Bootstrap’s progress bars “show a user how far along he/she is
in a process”.
• jQuery and DataTables – The app includes jQuery and the DataTables plugin.
jQuery simplifies client-side scripting, while DataTables enhances HTML tables
with features like sorting, pagination, and instant search. In the code, the habit table
has class .habit-table, and $('.habit-table').DataTable() initializes it. DataTables is
described as “a JavaScript HTML table enhancing library” that adds advanced
features (pagination, instant search, multi-column sorting) to a table. This makes
the table interactive and easier to navigate.
• Font Awesome – Font Awesome is loaded via CDN to provide icons (e.g. the
pencil and trash icons on the Update/Delete buttons). Font Awesome is an “icon
toolkit” that gives scalable vector icons for the UI.
• HTML, CSS, JavaScript – Standard web technologies are used throughout.
There’s custom CSS for fonts and layout (e.g. Google Fonts, background images),
and custom JavaScript for UI behavior (dark mode toggle, chatbot, modal
population, report generation). For example, a “dark-mode” CSS class is toggled on
the <body> to switch themes when the user clicks the moon button. The code also
uses localStorage in JavaScript to save focus sessions and mood logs on the client
side, which is a browser feature for persisting data.
• PHP Data Objects (PDO) – The PHP scripts use PDO to connect securely to the
database with prepared statements (e.g. $stmt = $conn->prepare("INSERT INTO
tbl_tracker ...")). PDO helps prevent SQL injection by parameterizing queries.
The combination of PHP/MySQL on the backend and Bootstrap/jQuery/DataTables on
the frontend is typical for this kind of web app. Indeed, the project description explicitly
lists “PHP, MySQL, Bootstrap, jQuery, DataTables, Font Awesome” as the technology
stack.
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
⚙️ How to Run the Project (Setup Guide)
1. Install XAMPP (to get Apache, PHP & MySQL)
2. Put the project folder inside the htdocs folder (XAMPP directory)
3. Open phpMyAdmin and create a database called habit_tracker_db
4. Import the provided .sql file to create the table
5. Open your browser and go to: http://localhost/habit-tracker/
6. Login using admin / admin and start tracking!

---------------------------------that;s the in development project----------------
