# MSU-IIT NMPC News

MSU-IIT National Multi-Purpose Cooperative News is a Laravel-based project that aims to provide an additional platform for sharing and reading news and events articles within the original website of the company (https://www.msuiitcoop.org/). This project utilizes the Laravel framework to handle backend functionality and provides a user-friendly interface for managing news articles. It also promotes user engagement by allowing the members of the cooperative to share their experiences and insights about those events through comments.

![Screenshot 1](/public/images/sample_screenshot.png)
![Screenshot 2](/public/images/sample_screenshot01.png)

## How to Setup

To set up this Laravel project on another user's computer, follow these steps:

1. Clone the repository to your local machine:
    ```bash
    git clone https://github.com/Dioteng/nmpc-news.git
    ```

2. Navigate to the project directory:
    ```bash
    cd nmpc-news
    ```

3. Install the project dependencies using Composer:
    ```bash
    composer install
    ```

4. Create a copy of the `.env.example` file and rename it to `.env`:
    ```bash
    cp .env.example .env
    ```

5. Generate a new application key:
    ```bash
    php artisan key:generate
    ```

6. Configure the database connection in the `.env` file. Update the following lines with your database credentials:
    ```dotenv
    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE=your_database_name
    DB_USERNAME=your_username
    DB_PASSWORD=your_password
    ```

7. Run the database migrations to create the necessary tables:
    ```bash
    php artisan migrate
    ```

8. Start the development server:
    ```bash
    php artisan serve
    ```

9. You can now access the NMPC News application by visiting `http://localhost:8000` in your web browser.

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

You may also try the [Laravel Bootcamp](https://bootcamp.laravel.com), where you will be guided through building a modern Laravel application from scratch.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains over 2000 video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
