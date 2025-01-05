# Supplementary-CP3402

## Overview

This repository contains a WordPress child theme project based on the OceanWP theme. It includes the OceanWP parent theme and a custom child theme in the `themes` folder, along with a `docker-compose.yml` file to set up the development environment using Docker.

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
│   ├── oceanwp/          # OceanWP parent theme
│   └── oceanwp-child/    # Custom child theme based on OceanWP
│
├── docker-compose.yml    # Docker Compose configuration file
│
└── README.md             # Project documentation
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

## Theme Development

The child theme contributes customizations and enhancements to the OceanWP parent theme. Key changes include:

- **Custom Styles**: Added custom CSS to modify the appearance of the theme.
- **Template Files**: Created custom template files to override and extend the functionality of the parent theme.
- **Functionality Enhancements**: Added custom functions to the `functions.php` file to introduce new features and modify existing ones.

To make further changes to the child theme:

1. **Edit CSS**: Modify the `style.css` file in the `oceanwp-child` directory to add or update custom styles.
2. **Create/Edit Template Files**: Add new template files or edit existing ones in the `oceanwp-child` directory to customize the theme's layout and functionality.
3. **Update Functions**: Modify the `functions.php` file in the `oceanwp-child` directory to add or update custom functions and hooks.

## Deployment

The deployment process involves making changes to the site locally, testing them, and then deploying to production. Here’s how it is set up and how you should make new changes:

### Local Development

1. **Make Changes**: Develop and test your changes locally using the Docker environment.
2. **Commit Changes**: Use Git to commit your changes to the repository.

   ```sh
   git add .
   git commit -m "Describe your changes"
   ```

### Testing

1. **Push to Testing Branch**: Push your changes to a testing branch on the remote repository.

   ```sh
   git push origin testing-branch
   ```

2. **Automated Testing**: Use a CI/CD tool (e.g., GitHub Actions) to automatically build and test the changes in a staging environment.

### Deployment to Production

1. **Merge to Main**: Once testing is successful, merge the testing branch into the main branch.

   ```sh
   git checkout main
   git merge testing-branch
   git push origin main
   ```

2. **Automated Deployment**: The CI/CD pipeline will automatically build the Docker images and deploy them to the production environment.

3. **Monitoring**: Monitor the production environment for any issues and use automated rollback mechanisms if necessary.

## Contributing

Contributions are welcome! Please follow these steps:

1. Fork the repository.
2. Create a new branch (`git checkout -b feature-branch`).
3. Make your changes and commit them (`git commit -am 'Add new feature'`).
4. Push to the branch (`git push origin feature-branch`).
5. Create a new Pull Request.

## License

This project is licensed under the MIT License. See the [LICENSE](LICENSE) file for details.


Happy coding!
```

This updated `README.md` file now includes the "Theme Development" and "Deployment" sections, providing detailed information on how to contribute to the child theme and the process of making changes to the site, including local development, testing, and deployment to production.
