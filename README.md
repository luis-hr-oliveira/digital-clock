# Laravel Digital Clock

This project is a simple Laravel application that displays a real-time digital clock using HTML, CSS, and JavaScript. The clock updates every second, showing the current time in 24-hour format, and it is displayed beautifully in the center of the screen.

## Features

- Real-time digital clock
- 24-hour format
- Fully responsive design
- Minimalist, sleek UI

## Technologies Used

- **Laravel 10.x** - PHP framework for backend routing and project setup
- **Blade Templates** - Simple templating for the frontend
- **HTML, CSS, JavaScript** - For building and styling the digital clock

## Prerequisites

To run this project, you'll need:

- [PHP 8.x](https://www.php.net/)
- [Composer](https://getcomposer.org/) (PHP package manager)
- [Laravel](https://laravel.com/docs/10.x/installation)

## Getting Started

### 1. Clone the repository

```bash
git clone https://github.com/your-username/laravel-digital-clock.git
cd laravel-digital-clock
```

### 2. Install dependencies

Install the necessary Laravel dependencies using Composer:

```bash
composer install
```

### 3. Run the application

Start the development server with:

```bash
php artisan serve
```

The application will be available at `http://localhost:8000`.

## File Structure
- `resources/views/welcome.blade.php`: The Blade template containing the HTML, CSS, and JavaScript for the clock.

- `routes/web.php`: Contains the route that directs to the welcome view, which renders the digital clock.

## Contributing

Feel free to submit a pull request or open an issue if you'd like to contribute or encounter any issues.

## License

This project is licensed under the MIT License. See the [LICENSE](LICENSE) file for more details.

## Acknowledgements

- Laravel documentation: [https://laravel.com/docs](https://laravel.com/docs)
- JavaScript for date and time: [MDN Web Docs](https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Global_Objects/Date)
