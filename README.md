# Supplementary-CP3402

## Overview

This repository contains a WordPress child theme project based on the OceanWP theme. It includes the OceanWP parent theme and a custom child theme, along with a `docker-compose.yml` file to set up the development environment using Docker.

## Prerequisites

Before you begin, ensure you have the following installed on your machine:

- [Docker](https://www.docker.com/get-started)
- [Docker Compose](https://docs.docker.com/compose/install/)

## Project Structure

The project structure is as follows:

```
supplementary-CP3402/
│
├── themes/
│   ├── oceanwp/
│   └── oceanwp-child/
│
├── docker-compose.yml
│
└── README.md
```

## Installation and Setup

Follow these steps to install and run the project:

1. **Clone the Repository**

   ```sh
   git clone https://github.com/your-username/supplementary-CP3402.git
   cd supplementary-CP3402
   ```

2. **Build and Run the Docker Containers**

   ```sh
   docker-compose up -d
   ```

   This command will:

   - Pull the necessary Docker images (WordPress and MySQL).
   - Create and start the containers.
   - Set up the WordPress environment with the specified database credentials.
   - Mount the `themes` directory to the WordPress container.

3. **Access WordPress**

   Open your web browser and navigate to `http://localhost:8080`. You should see the WordPress installation screen. Follow the on-screen instructions to complete the installation.

4. **Activate the Child Theme**

   Once WordPress is installed:

   - Log in to the WordPress admin dashboard.
   - Go to `Appearance > Themes`.
   - Activate the `oceanwp-child` theme.

## Docker Compose Configuration

The `docker-compose.yml` file is configured as follows:

```yaml
services:
  wordpress:
    image: wordpress
    restart: always
    ports:
      - 8080:80
    environment:
      WORDPRESS_DB_HOST: db
      WORDPRESS_DB_USER: meshkiplii
      WORDPRESS_DB_PASSWORD: kiplimo96
      WORDPRESS_DB_NAME: oceanwp
    volumes:
      - ./themes:/var/www/html/wp-content/themes

  db:
    image: mysql:8.0
    restart: always
    environment:
      MYSQL_ROOT_PASSWORD: kiplimo96
      MYSQL_DATABASE: oceanwp
      MYSQL_USER: meshkiplii
      MYSQL_PASSWORD: kiplimo96
    volumes:
      - db:/var/lib/mysql

volumes:
  wordpress:
  db:
```

## Contributing

Contributions are welcome! Please follow these steps:

1. Fork the repository.
2. Create a new branch (`git checkout -b feature-branch`).
3. Make your changes and commit them (`git commit -am 'Add new feature'`).
4. Push to the branch (`git push origin feature-branch`).
5. Create a new Pull Request.

## License

This project is licensed under the MIT License. See the [LICENSE](LICENSE) file for details.

## Contact

For any questions or issues, please open an issue on the GitHub repository or contact the maintainer directly.

---

Happy coding!
