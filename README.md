# Timetable Management System

A web-based timetable and academic scheduling management system built with **Laravel 12**, **PHP 8.2+**, and **MySQL**. Designed with a clean, high-contrast **minimalist purple theme** and modern typography to deliver a clutter-free experience for managing academic resources and schedules.

---

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

---

## Features

- **Authentication & User Management**:
  - Secure registration and login powered by Laravel authentication.
  - Extended user attributes: Full Name, Email, Password, Phone Number, Age, and Residential Address.
  - Interactive password visibility toggle on authentication forms.
  - Password reset and email confirmation flows.

- **Student Records Management**:
  - View full roster of registered students.
  - Detailed student profile inspection (`show` view).
  - Create, update, and delete student accounts.

- **Course & Subject Management**:
  - Manage course codes (e.g., `CSC520`), subject names, and assigned faculty lecturers.
  - Full CRUD operations with detailed record inspection.

- **Class Group / Cohort Management**:
  - Organize students into distinct cohorts/classes (e.g., `CS240-5B`) and semester parts.
  - Full CRUD support with formatted status badges.

- **Lecture Hall & Venue Management**:
  - Track classrooms, auditoriums, and laboratory spaces with building locations (e.g., `Block B, Level 2`).
  - Full CRUD capabilities.

- **Timetable Scheduling**:
  - Coordinate class allocations across:
    - **Day of the week**
    - **Time slot** (`time_from` and `time_to`)
    - **Subject & Lecturer**
    - **Student Group / Cohort**
    - **Lecture Hall / Venue**
  - Master schedule overview table with unified action buttons (View, Edit, Delete).
  - Detailed single-entry view with linked relationships.

- **Minimalist & Modern UI**:
  - Clean purple aesthetic (`#6d28d9` / violet palette) combined with crisp slate neutrals (`#0f172a`, `#f8fafc`).
  - Styled with **Inter** typography, micro-shadows, and 1px crisp borders.
  - Fully responsive across desktop, tablet, and mobile displays.

---

## Project Credits

- **Project**: Timetable Management System
- **Framework**: Laravel 12 (PHP 8.2+)
