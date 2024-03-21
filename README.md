# Portfolio created as part of Netmatters training

[Live Site HTML/CSS & JavaScript](https://deanyosla.github.io/NM-portfolio-task/)

## Portfolio PHP Assessment Update

This project has been updated to include PHP and MySQL database connection for a dynamic web experience.

### Local Setup and Project Viewing

Follow these steps to set up the project locally and view it:

1. **Clone the Repository:**

    ```bash
    git clone https://github.com/deanyosla/NM-portfolio-task.git
    ```

2. **Navigate to the Project Directory:**

    ```bash
    cd <your-project-name>
    ```

3. **Create .env File:**

    Create a `.env` file in the root of your project and set up your local environment variables such as database credentials.

    Example .env file:

    ```env
    DB_HOST=localhost
    DB_NAME=your_database_name
    DB_USER=your_database_user
    DB_PASSWORD=your_database_password
    ```

4. **Import the Database:**

    Import the provided MySQL dump or set up your database structure using the provided schema.
    I have used XAMPP along with phpmyadmin. 

5. **Start a Local Server:**

    Depending on your setup, you can use PHP's built-in server:

    ```bash
    php -S localhost:8000
    ```

    Or use your preferred local server environment.

6. **View the Project:**

    Open your web browser and navigate to [http://localhost:8000](http://localhost:8000) to view the project.

### Project Structure

- **`index.php`**: Main PHP file.
- **`code.php`**: Code snippets PHP file.
- **`scs.php`**: PHP file containing info about Netmatters, Treehouse and Scion Scheme. 
- **`about.php`**: PHP file containing info about me. 
- **`css/`**: Directory containing compiled stylesheet from Sass.
- **`scss/`**: Directory containing Sass partials and output Sass stylesheet. 
- **`js/`**: Directory containing JavaScript files.
- **`inc/`**: Directory containing PHP files and server-side logic.
- **`images/`**: Directory containing project images.
- **`schema.sql`**: MySQL database dump file.

Feel free to explore the project, and if you have any questions or issues, please don't hesitate to reach out.

---

**Note**: Update the placeholders like `your_database_name`, `your_database_user`, etc., with your actual database credentials.




