# ULAB Alumni Portal

The official ULAB Alumni Hub for students & graduates. Connect via the directory, find jobs, access mentorship, and get university news & events. Your lifelong network for career growth & community.

## ✨ Features

Based on the project files, the portal includes the following features:

  * **User Authentication:** Secure user registration, login, and logout functionality.
  * **Alumni Directory:** A searchable list of all registered alumni (`alumni_list.php`).
  * **User Dashboard:** A central hub for users to manage their information (`dashboard.php`).
  * **Profile Management:** Users can view and manage their own profiles (`my_profile.php`).
  * **Job Board:** View and post job opportunities (`jobs.php`, `add_jobs.php`).
  * **News & Announcements:** A section for university or alumni news (`news.php`, `add_news.php`).
  * **Notice Board:** A dedicated section for official notices (`notice.php`, `notice_add.php`).
  * **Messaging System:** A basic system for users to communicate (`messages.php`).
  * **Blood Donor List:** A unique feature to find blood donors within the community (`blood.php`).

## 🛠️ Tech Stack

  * **Backend:** PHP
  * **Frontend:** HTML, CSS
  * **Database:** MySQL

## 🚀 Getting Started

Follow these instructions to get a copy of the project up and running on your local machine for development and testing purposes.

### Prerequisites

You will need a local server environment with PHP and a MySQL database.

  * [XAMPP](https://www.apachefriends.org/index.html)
  * [WAMP](https://www.wampserver.com/en/)
  * [MAMP](https://www.mamp.info/en/mamp/)

### Installation

1.  **Clone the repository:**

    ```sh
    git clone https://github.com/abrartanim/ulab-alumni-portal.git
    ```

2.  **Navigate to the project directory:**

    ```sh
    cd ulab-alumni-portal
    ```

3.  **Setup the Database:**

      * Create a new database in your MySQL server (e.g., using `phpMyAdmin`).
      * Import the `ulab_alumni.sql` file into the newly created database. This will create the necessary tables and structure.

4.  **Configure Database Connection:**

      * Open the `config.php` file.
      * Update the database credentials (`$hostname`, `$username`, `$password`, `$dbname`) to match your local setup.

5.  **Run the Application:**

      * Move the entire project folder to the root directory of your local server (e.g., `htdocs` for XAMPP).
      * Open your web browser and navigate to `http://localhost/ulab-alumni-portal/`

## 📁 File Structure

```
├── app/                  # Application Logic (Future Use)
├── assets/               # CSS, JS, etc.
├── images/               # Static Images
├── config.php            # Database Configuration & Site Settings
├── ulab_alumni.sql       # Database Schema File
├── index.php             # Main Landing Page
├── login.php             # Login Page
├── registration.php      # Registration Page
├── dashboard.php         # User Dashboard
└── ...                   # Other PHP page files
```

## 📄 License

This project is licensed under the **MIT License**. See the `LICENSE` file for more details.
