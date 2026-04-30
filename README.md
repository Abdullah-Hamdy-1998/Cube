# Cube

Cube is a Laravel 9 warehouse and shipment management application. It tracks items, suppliers, customers, stock movement, user permissions, activity logs, and soft-deleted records from a single authenticated dashboard.

## What the project does

- Manage items with stored quantity and weight.
- Manage suppliers and customers linked to shipments.
- Create import and export shipments.
- Update inventory totals automatically when shipments are created.
- Review recent activity from the home dashboard and full reports page.
- Control access with module-based permissions.
- Restore or permanently delete soft-deleted users, items, suppliers, customers, and shipment types.

## Stack

- PHP 8
- Laravel 9
- MySQL
- Laravel Fortify and Sanctum for authentication support
- Bootstrap 5, Sass, Laravel Mix, and SweetAlert2 on the frontend

## Main modules

- Dashboard
- Users and permissions
- Items
- Suppliers
- Customers
- Shipment types
- Shipments
- Inventory
- Reports
- Trash
- Settings

## Local setup

1. Install PHP and Node.js dependencies.

	```bash
	composer install
	npm install
	```

2. Create your environment file and update the database credentials.

	```bash
	copy .env.example .env
	```

	The default environment template expects a MySQL database named `cube`.

3. Generate the application key.

	```bash
	php artisan key:generate
	```

4. Run the database migrations and seeders.

	```bash
	php artisan migrate --seed
	```

5. Build frontend assets.

	```bash
	npm run dev
	```

6. Start the local server.

	```bash
	php artisan serve
	```

## Seeded admin account

After running the seeders, you can sign in with:

- Email: `admin@cube.com`
- Password: `password`

Change this account immediately outside local development.

## Inventory behavior

- `Import` shipments increase item quantity and weight.
- `Export` shipments decrease item quantity and weight.

The default shipment types are seeded automatically.

## Useful commands

```bash
php artisan test
npm run dev
npm run watch
npm run prod
```

## Notes

- Most web routes are protected by authentication and policy gates.
- The application uses soft deletes for several core records, with a dedicated trash area for recovery and permanent removal.
