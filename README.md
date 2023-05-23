# LAMP Docker Compose

This project made as part of 'Cloud-Based Application Development' class allows you to run a LAMP service using Docker Compose.

## Prerequisites

Make sure you have Docker and Docker Compose installed on your system.

## Usage

1. Clone this repository.
2. Customize the Dockerfile in MySQL directory if you need to initialize the MySQL database with specific data.
3. Open a terminal and navigate to the cloned repository's directory.
4. Run the following command to start the LAMP service:
   - docker-compose up
5. The Apache server will be available at `http://localhost:6666`.

## Docker Compose Configuration

The `docker-compose.yml` file defines three services: `apache`, `php`, and `mysql`. The `apache` service is connected to both the `backend` and `frontend` networks and is exposed on port 6666. The `php` and `mysql` services are connected to the `backend` network.


