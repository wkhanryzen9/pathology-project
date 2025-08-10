<h1>Pathology Management System (Laravel)</h1>

<p><strong>Generate professional blood test PDF reports</strong> — a lightweight Laravel app for pathology labs to manage patients, add tests (with lower/upper reference values), record results, and export printable PDF reports.</p>

<h2>Features</h2>
<ul>
  <li>Create & manage patient profiles and visit records</li>
  <li>Define tests with configurable lower & upper reference ranges</li>
  <li>Enter multiple test results per patient and auto-validate against ranges</li>
  <li>Generate downloadable/printable PDF reports (patient info, tests, results, ref ranges)</li>
  <li>User roles (lab technician, admin) and simple access control</li>
</ul>

<h2>Quick install</h2>
<pre><code>git clone &lt;repo-url&gt;
cd &lt;repo-folder&gt;
composer install
cp .env.example .env
php artisan key:generate
# configure DB in .env, then:
php artisan migrate --seed
php artisan storage:link
# (optional) frontend build:
npm install
npm run build
php artisan serve
</code></pre>

<h2>Usage</h2>
<ul>
  <li>Log in as a lab user → Add patient → Create visit → Add tests and results</li>
  <li>Click “Generate PDF” on a visit to download a formatted report (uses a PDF library)</li>
  <li>Customize test reference ranges in the Tests section to reflect your lab's standards</li>
</ul>

<h2>Tech stack</h2>
<ul>
  <li>Laravel (PHP)</li>
  <li>MySQL / MariaDB</li>
  <li>barryvdh/laravel-dompdf (or similar) for PDF generation</li>
  <li>Bootstrap / Tailwind CSS + optional Vue/React for frontend</li>
</ul>

<h2>Contributing</h2>
<p>Contributions, bug reports and feature requests are welcome — please open an issue or submit a PR.</p>

<h2>License & Contact</h2>
<p>MIT License. For questions or demo requests, contact: <em>youremail@example.com</em></p>


<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

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

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains thousands of video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the [Laravel Partners program](https://partners.laravel.com).

### Premium Partners

- **[Vehikl](https://vehikl.com/)**
- **[Tighten Co.](https://tighten.co)**
- **[WebReinvent](https://webreinvent.com/)**
- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
- **[64 Robots](https://64robots.com)**
- **[Curotec](https://www.curotec.com/services/technologies/laravel/)**
- **[Cyber-Duck](https://cyber-duck.co.uk)**
- **[DevSquad](https://devsquad.com/hire-laravel-developers)**
- **[Jump24](https://jump24.co.uk)**
- **[Redberry](https://redberry.international/laravel/)**
- **[Active Logic](https://activelogic.com)**
- **[byte5](https://byte5.de)**
- **[OP.GG](https://op.gg)**

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
