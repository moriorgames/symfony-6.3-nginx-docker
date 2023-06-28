# Use a base image with PHP 8.1
FROM php:8.1-fpm

# Set the working directory
WORKDIR /var/www/html

# Install any necessary dependencies
RUN apt-get update && apt-get install -y \
    nginx \
    && rm -rf /var/lib/apt/lists/*

# Copy the application files to the container
COPY . /var/www/html

# Expose the necessary port
EXPOSE 80

# Start PHP-FPM and Nginx
CMD php-fpm && nginx -g "daemon off;"
