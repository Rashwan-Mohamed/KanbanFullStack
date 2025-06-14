
# KanbanFullStack

A full-stack Kanban board application.

## Features

- Task management with drag-and-drop
- Task, columns, boards creation, editing, and deletion
- User authentication and registration
- Real-time updates

## Tech Stack

- **Backend:** PHP, MySQL, GraphQL (webonyx)
- **Frontend:** React, JavaScript, TypeScript, Redux, Apollo Client, CSS
    - **Drag and Drop:** dnd kit core, dnd kit sortable preset
    - **Tour Guide:** react-joyride
    - **Routing:** react-router
    - **Toast Notifications:** react-toastify
    - **GraphQL Code Generation:** graphql-codegen (for query types and hooks)
- **Package Management:** Composer, npm

---

## Local Development Setup

### 1. Clone the Repository

```bash
git clone https://github.com/Rashwan-Mohamed/KanbanFullStack.git
cd KanbanFullStack
git fetch --all
git switch release
```

### 2. Backend Setup

- Copy the example config file and edit your credentials:

  ```bash
      return [
        'env' => 'local', 
        'database' => [
            'local' => [
                'host' => 'localhost',
                'port' => 3306,
                'dbname' => 'kanban',
                'charset' => 'utf8mb4',
                'password' => 'your_password',
                'user' => 'root'
            ],
        ],
    ];
  ```

- Edit `Backend/config/config.php` and set your local database credentials.

- Import the provided `database.sql` (schema only, no data) into your MySQL server:

  ```bash
  mysql -u your_username -p your_database < database.sql
  ```

- Install backend dependencies:

  ```bash
  cd Backend
  composer install
  ```

- Start the backend server:

  ```bash
  php -S localhost:8888 -t public
  ```

### 3. Frontend Setup

- Navigate to the frontend directory:

  ```bash
  cd ../kanban-front
  ```

- Create a `.env` file with the following content:

  ```dotenv
  VITE_API_BASE_URL=http://localhost:8888/graphql
  ```

- Install frontend dependencies:

  ```bash
  npm install
  ```

- Start the frontend server (default: http://localhost:5173):

  ```bash
  npm run dev
  ```

### 4. Access the App

Open [http://localhost:5173](http://localhost:5173) in your browser.

---

## Database Setup

- The `database.sql` file contains only the schema (no data).
- Import it to your MySQL server as shown above.

---

## Design Inspiration

The design of this project is inspired by [Frontend Mentor](https://www.frontendmentor.io/).


