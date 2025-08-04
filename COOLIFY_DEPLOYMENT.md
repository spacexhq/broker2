# Laravel Docker Compose Deployment with Coolify

This guide explains how to deploy your Laravel application to Coolify using Docker Compose with automatic GitHub integration.

## 📋 Prerequisites

1. A Coolify server set up and running
2. Your Laravel project pushed to a GitHub repository
3. Access to your Coolify dashboard

## 🚀 Deployment Steps

### 1. Connect GitHub Repository to Coolify

1. **Login to your Coolify dashboard**
2. **Create a new project:**
   - Click "New Project"
   - Choose "Deploy from Git"
   - Connect your GitHub account if not already connected
   - Select your Laravel repository

3. **Configure the deployment:**
   - **Repository URL:** Your GitHub repo URL
   - **Branch:** `main` or your preferred branch
   - **Build Pack:** Choose "Docker Compose"
   - **Root Directory:** Leave empty (unless your docker-compose.yml is in a subdirectory)

### 2. Environment Configuration

1. **Set Environment Variables in Coolify:**
   - Go to your project settings → Environment Variables
   - Add the following variables:

   ```bash
   APP_NAME=YourAppName
   APP_ENV=production
   APP_KEY=base64:YOUR_GENERATED_KEY_HERE
   APP_DEBUG=false
   APP_URL=https://yourdomain.com
   
   DB_CONNECTION=mysql
   DB_HOST=mysql
   DB_PORT=3306
   DB_DATABASE=laravel
   DB_USERNAME=root
   DB_PASSWORD=your_secure_password_here
   
   QUEUE_CONNECTION=database
   ```

2. **Generate APP_KEY:**
   - You can generate this locally: `php artisan key:generate --show`
   - Copy the output (including `base64:` prefix)

### 3. Port Configuration

In Coolify, configure the following ports:

1. **Laravel Application:**
   - **Port:** 9000
   - **Public:** Yes (if you want direct access)
   - **Domain:** Assign your custom domain or use Coolify subdomain

2. **phpMyAdmin:**
   - **Port:** 8080
   - **Public:** Yes (for database management)
   - **Domain:** Assign subdomain like `phpmyadmin.yourdomain.com`

3. **MySQL:**
   - **Port:** 3306
   - **Public:** No (internal only)

### 4. Domain Configuration

1. **Main Application:**
   - Point your domain to the Coolify server IP
   - Configure SSL certificate (Coolify handles this automatically)
   - Set up port forwarding: Domain → Port 9000

2. **phpMyAdmin Access:**
   - Set up subdomain: `phpmyadmin.yourdomain.com` → Port 8080
   - Or access via: `yourdomain.com:8080`

### 5. Auto-Deployment Setup

1. **Webhook Configuration:**
   - Coolify automatically sets up GitHub webhooks
   - Every push to your configured branch triggers a deployment

2. **Deployment Process:**
   - Coolify pulls latest code from GitHub
   - Builds Docker images using your Dockerfile
   - Runs `docker-compose up` with the new images
   - Automatically handles rolling updates

## 🔧 Service Details

### Services Running:

1. **Laravel App (`app`):**
   - Runs on port 9000
   - Uses `php artisan serve`
   - Auto-migrates database on startup
   - Mounts your code for live updates

2. **Queue Worker (`worker`):**
   - Automatically processes queued jobs
   - Runs `php artisan queue:work`
   - Restarts on failure with `restart: unless-stopped`

3. **MySQL Database (`mysql`):**
   - Persistent data storage
   - Accessible internally on port 3306
   - Data persists across deployments

4. **phpMyAdmin (`phpmyadmin`):**
   - Web-based MySQL management
   - Accessible on port 8080
   - Connected to MySQL service

## 🗂️ File Structure

Your repository should have these files:

```
your-laravel-project/
├── docker-compose.yml          # Main orchestration file
├── Dockerfile                  # Laravel container definition
├── .dockerignore              # Exclude files from build
├── .env.docker                # Sample environment variables
├── COOLIFY_DEPLOYMENT.md      # This deployment guide
└── [your Laravel files...]
```

## 🔄 Auto-Deployment Features

### What Happens on Each Push:

1. **Code Update:** Coolify pulls latest changes
2. **Container Rebuild:** New Docker image built with updated code
3. **Database Migration:** Automatic migration via entrypoint script
4. **Cache Clearing:** Config, route, and view caches cleared
5. **Queue Worker Restart:** Worker restarts with new code
6. **Zero Downtime:** Rolling deployment maintains availability

### Worker Auto-Restart:

The queue worker is configured to:
- Restart automatically if it crashes (`restart: unless-stopped`)
- Handle up to 3 job attempts (`--tries=3`)
- Timeout jobs after 90 seconds (`--timeout=90`)
- Process jobs verbosely for better logging (`--verbose`)

## 🛠️ Troubleshooting

### Common Issues:

1. **Database Connection Failed:**
   - Check if MySQL service is running
   - Verify DB_HOST=mysql in environment variables
   - Ensure database credentials match

2. **Port Already in Use:**
   - Check Coolify port assignments
   - Ensure no other services use ports 9000, 8080, 3306

3. **Permission Errors:**
   - Storage directories are automatically configured in Dockerfile
   - Check file permissions if needed

4. **Queue Jobs Not Processing:**
   - Check worker container logs in Coolify
   - Verify QUEUE_CONNECTION=database in environment

### Useful Commands:

```bash
# Check container status
docker-compose ps

# View application logs
docker-compose logs app

# View worker logs
docker-compose logs worker

# Access application container
docker-compose exec app bash

# Run migrations manually
docker-compose exec app php artisan migrate

# Clear caches
docker-compose exec app php artisan config:clear
```

## 🔐 Security Recommendations

1. **Change Default Passwords:**
   - Update MySQL password in both docker-compose.yml and environment variables
   - Use strong, unique passwords

2. **Environment Variables:**
   - Never commit `.env` files to repository
   - Use Coolify's environment variable management

3. **phpMyAdmin Access:**
   - Consider restricting access by IP
   - Use strong MySQL credentials
   - Consider disabling in production

4. **APP_KEY:**
   - Generate a unique key for each environment
   - Never share keys between environments

## 🚀 Production Optimizations

For production deployments, consider:

1. **Redis for Caching:**
   - Add Redis service to docker-compose.yml
   - Update CACHE_DRIVER=redis

2. **File Storage:**
   - Configure S3 or similar for file storage
   - Update filesystem configuration

3. **Monitoring:**
   - Enable application monitoring
   - Set up log aggregation
   - Configure health checks

4. **Backup:**
   - Set up automated MySQL backups
   - Backup uploaded files
   - Test restore procedures