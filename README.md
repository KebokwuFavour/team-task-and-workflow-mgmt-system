# Team Task and Workflow Management System

A modern Laravel-based task and workflow management system designed for teams to efficiently organize, track, and manage their projects and tasks.

A Laravel 12 application for team task and workflow management (Filament v4, Livewire v3).

## Overview

This system provides a robust platform for team collaboration with features including:
- Team management with member roles
- Project organization and tracking
- Task management with priorities and deadlines
- User authentication and authorization
- Real-time updates using Livewire
- Small, focused app to manage teams, projects, and tasks with roles, assignments, priorities and deadlines.

Core features
- Team & membership management
- Projects scoped to teams
- Task CRUD with priorities, status, due dates, and assignees
- Filament admin UI and Livewire-driven real-time interactions


## Tech Stack

- PHP 8.2
- Laravel 12
- Filament 4 (Admin Panel)
- Livewire 3
- MySQL/MariaDB
- Vite + TailwindCSS

## Requirements

- PHP >= 8.2
- Laravel 12
- Composer
- MySQL/MariaDB
- Node.js & NPM
- XAMPP/Local web server

## Installation

1. Clone the repository:
```bash
git clone https://github.com/yourusername/team-task-and-workflow-mgmt-system.git
cd team-task-and-workflow-mgmt-system

2. Install dependencies
   composer install
   npm install

3. Environment
   Copy `.env.example` to `.env` and update values for your environment. Do NOT store secrets in the repository.
   php artisan key:generate

4. Database & assets
   php artisan migrate --seed
   npm run dev         # development
   npm run build       # production

5. Run
   php artisan serve

Testing
- Run the test suite:
  php artisan test

Notable files
- .github/copilot-instructions.md — repository guidance
- boost.json — Boost integration config
- composer.json / composer.lock — dependency definitions
- database/factories/ — model factories
- database/seeders/DatabaseSeeder.php — entry seeder
- app/Filament/Resources/ — Filament resources (admin UI)

Notes / best practices
- Do not include real credentials or .env values in the README.md file
- If you add or change dependencies, update composer.json and document any extra install steps here.
- For frontend changes, run `npm run dev` or `npm run build` if the UI doesn't reflect updates.

Contributing
- Follow repository conventions and run the formatter: vendor/bin/pint
- Open pull requests for changes and include tests where applicable.

License
- MIT