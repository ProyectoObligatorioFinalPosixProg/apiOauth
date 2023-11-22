# Use the official Laravel image as the base image
FROM docker.io/bitnami/laravel:10

# Set the working directory to /app
WORKDIR /app

# Copy the contents of the local project directory to the container
COPY . /app

# Install Laravel dependencies
RUN composer update && \
    composer install --no-scripts

# Generate Laravel application key
RUN php artisan key:generate

# Expose port 8000 to the outside world
EXPOSE 8000

# Command to start the Laravel application
CMD php artisan serve --host=0.0.0.0 --port=8000