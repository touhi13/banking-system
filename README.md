# Laravel Banking System

This is a banking system built with Laravel, which supports deposit and withdrawal operations for individual and business users.

## Installation

1. Clone the repository to your local machine:

   ```bash
   git clone <https://github.com/touhi13/banking-system.git>

2. Switch to the dev.1.0.0 branch:

    ```bash
    git checkout dev.1.0.0

3. Navigate to the project directory:

    ```bash
    cd banking-system

4. Install the dependencies using Composer:

    ```bash
    composer install

5. Copy the .env.example file to .env:

    ```bash
    cp .env.example .env

6. Generate the application key:

    ```bash
    php artisan key:generate

7. Create a new database for the application.

8. Update the .env file with your database credentials.

9. Run the database migrations:

    ```bash
    php artisan migrate

10. Install the frontend dependencies using npm:

    ```bash
    npm install

11. Compile the frontend assets:

    ```bash
    npm run dev

12. Start the development server:

    ```bash
    php artisan serve

13. Access the application in your browser at http://127.0.0.1:8000.

    * Use the provided routes to interact with the banking system:

        * Create a new user: POST /users
        * Login: POST /login
        * View transactions and balance: GET /
        * View deposited transactions: GET /deposit
        * Deposit funds: POST /deposit
        * View withdrawal transactions: GET /withdrawal
        * Withdraw funds: POST /withdrawal
    * Note: Adjust the base URL if you're running the application on a different port or domain.