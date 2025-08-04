#!/bin/bash

# Laravel Docker Compose Development Startup Script

echo "🚀 Starting Laravel Docker Compose Environment..."

# Check if docker-compose is installed
if ! command -v docker-compose &> /dev/null; then
    echo "❌ docker-compose is not installed. Please install Docker Compose first."
    exit 1
fi

# Check if .env file exists, if not copy from .env.docker
if [ ! -f .env ]; then
    echo "📄 Creating .env file from .env.docker template..."
    cp .env.docker .env
    echo "⚠️  Please update the APP_KEY in .env file by running: php artisan key:generate"
fi

# Stop any running containers
echo "🛑 Stopping any running containers..."
docker-compose down

# Build and start containers
echo "🏗️  Building and starting containers..."
docker-compose up --build -d

# Wait for MySQL to be ready
echo "⏳ Waiting for MySQL to be ready..."
until docker-compose exec mysql mysqladmin ping -h"localhost" --silent; do
    sleep 2
done

# Run Laravel setup commands
echo "🔧 Setting up Laravel application..."
docker-compose exec app php artisan key:generate --force
docker-compose exec app php artisan migrate --force
docker-compose exec app php artisan storage:link

echo ""
echo "✅ Laravel application is ready!"
echo ""
echo "🌐 Application URLs:"
echo "   Laravel App:  http://localhost:9000"
echo "   phpMyAdmin:   http://localhost:8080"
echo ""
echo "🗄️  Database Connection:"
echo "   Host:      localhost"
echo "   Port:      3306"
echo "   Database:  laravel"
echo "   Username:  root"
echo "   Password:  secret"
echo ""
echo "📊 Container Status:"
docker-compose ps
echo ""
echo "📝 To view logs:"
echo "   All services:    docker-compose logs -f"
echo "   Laravel app:     docker-compose logs -f app"
echo "   Queue worker:    docker-compose logs -f worker"
echo "   MySQL:           docker-compose logs -f mysql"
echo ""
echo "🛑 To stop all services:"
echo "   docker-compose down"