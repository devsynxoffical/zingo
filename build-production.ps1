# Production Build Script for Zingo Assist
Write-Host "========================================" -ForegroundColor Cyan
Write-Host "Zingo Assist - Production Build" -ForegroundColor Cyan
Write-Host "========================================" -ForegroundColor Cyan
Write-Host ""

# Step 1: Build frontend assets
Write-Host "[1/6] Building frontend assets..." -ForegroundColor Yellow
npm run build
if ($LASTEXITCODE -ne 0) {
    Write-Host "ERROR: Frontend build failed!" -ForegroundColor Red
    exit 1
}
Write-Host "Frontend assets built successfully" -ForegroundColor Green
Write-Host ""

# Step 2: Clear Laravel caches
Write-Host "[2/6] Clearing Laravel caches..." -ForegroundColor Yellow
php artisan config:clear
php artisan cache:clear
php artisan route:clear
php artisan view:clear
Write-Host "Laravel caches cleared" -ForegroundColor Green
Write-Host ""

# Step 3: Create production directory
$timestamp = Get-Date -Format "yyyyMMdd-HHmmss"
$prodDir = "zingo-assist-production-$timestamp"
Write-Host "[3/6] Creating production directory: $prodDir" -ForegroundColor Yellow

if (Test-Path $prodDir) {
    Remove-Item -Recurse -Force $prodDir
}
New-Item -ItemType Directory -Path $prodDir | Out-Null
Write-Host "Production directory created" -ForegroundColor Green
Write-Host ""

# Step 4: Copy files
Write-Host "[4/6] Copying files to production directory..." -ForegroundColor Yellow

$dirsToCopy = @("app", "bootstrap", "config", "database", "public", "resources", "routes", "storage", "vendor")
foreach ($dir in $dirsToCopy) {
    if (Test-Path $dir) {
        Write-Host "  Copying $dir..." -ForegroundColor Gray
        Copy-Item -Path $dir -Destination $prodDir -Recurse -Force
    }
}

$filesToCopy = @("artisan", "composer.json", "composer.lock")
foreach ($file in $filesToCopy) {
    if (Test-Path $file) {
        Copy-Item -Path $file -Destination $prodDir -Force
    }
}

# Create .htaccess for public directory
$htaccessPath = Join-Path $prodDir "public\.htaccess"
$htaccessContent = @"
<IfModule mod_rewrite.c>
    <IfModule mod_negotiation.c>
        Options -MultiViews -Indexes
    </IfModule>
    RewriteEngine On
    RewriteCond %{HTTP:Authorization} .
    RewriteRule .* - [E=HTTP_AUTHORIZATION:%{HTTP:Authorization}]
    RewriteCond %{REQUEST_FILENAME} !-d
    RewriteCond %{REQUEST_URI} (.+)/$
    RewriteRule ^ %1 [L,R=301]
    RewriteCond %{REQUEST_FILENAME} !-d
    RewriteCond %{REQUEST_FILENAME} !-f
    RewriteRule ^ index.php [L]
</IfModule>
"@
if (-not (Test-Path $htaccessPath)) {
    Set-Content -Path $htaccessPath -Value $htaccessContent
}

Write-Host "Files copied successfully" -ForegroundColor Green
Write-Host ""

# Step 5: Create .env.production template
Write-Host "[5/6] Creating .env.production template..." -ForegroundColor Yellow

$envPath = Join-Path $prodDir ".env.production"
$envContent = "APP_NAME=`"Zingo Assist`"`r`n"
$envContent += "APP_ENV=production`r`n"
$envContent += "APP_KEY=`r`n"
$envContent += "APP_DEBUG=false`r`n"
$envContent += "APP_URL=https://your-domain.com`r`n`r`n"
$envContent += "LOG_CHANNEL=stack`r`n"
$envContent += "LOG_STACK=single`r`n"
$envContent += "LOG_DEPRECATIONS_CHANNEL=null`r`n"
$envContent += "LOG_LEVEL=error`r`n`r`n"
$envContent += "DB_CONNECTION=mysql`r`n"
$envContent += "DB_HOST=localhost`r`n"
$envContent += "DB_PORT=3306`r`n"
$envContent += "DB_DATABASE=your_database_name`r`n"
$envContent += "DB_USERNAME=your_database_user`r`n"
$envContent += "DB_PASSWORD=your_database_password`r`n`r`n"
$envContent += "BROADCAST_DRIVER=log`r`n"
$envContent += "CACHE_DRIVER=file`r`n"
$envContent += "FILESYSTEM_DISK=local`r`n"
$envContent += "QUEUE_CONNECTION=sync`r`n"
$envContent += "SESSION_DRIVER=file`r`n"
$envContent += "SESSION_LIFETIME=120`r`n`r`n"
$envContent += "MEMCACHED_HOST=127.0.0.1`r`n`r`n"
$envContent += "REDIS_HOST=127.0.0.1`r`n"
$envContent += "REDIS_PASSWORD=null`r`n"
$envContent += "REDIS_PORT=6379`r`n`r`n"
$envContent += "MAIL_MAILER=smtp`r`n"
$envContent += "MAIL_HOST=mailpit`r`n"
$envContent += "MAIL_PORT=1025`r`n"
$envContent += "MAIL_USERNAME=null`r`n"
$envContent += "MAIL_PASSWORD=null`r`n"
$envContent += "MAIL_ENCRYPTION=null`r`n"
$envContent += "MAIL_FROM_ADDRESS=`"support@zingoassist.us`"`r`n"
$envContent += "MAIL_FROM_NAME=`"Zingo Assist`"`r`n`r`n"
$envContent += "AWS_ACCESS_KEY_ID=`r`n"
$envContent += "AWS_SECRET_ACCESS_KEY=`r`n"
$envContent += "AWS_DEFAULT_REGION=us-east-1`r`n"
$envContent += "AWS_BUCKET=`r`n"
$envContent += "AWS_USE_PATH_STYLE_ENDPOINT=false`r`n`r`n"
$envContent += "VITE_APP_NAME=`"Zingo Assist`""

Set-Content -Path $envPath -Value $envContent

if (Test-Path "env.production.template") {
    Copy-Item -Path "env.production.template" -Destination $prodDir -Force
}

Write-Host ".env.production template created" -ForegroundColor Green
Write-Host ""

# Step 6: Create deployment instructions
Write-Host "[6/6] Creating deployment instructions..." -ForegroundColor Yellow

$instructionsPath = Join-Path $prodDir "DEPLOYMENT_INSTRUCTIONS.txt"
$instructionsContent = "========================================`r`n"
$instructionsContent += "DEPLOYMENT INSTRUCTIONS FOR iHOSTING`r`n"
$instructionsContent += "========================================`r`n`r`n"
$instructionsContent += "1. UPLOAD FILES`r`n"
$instructionsContent += "   - Upload all files from this zip to your hosting root directory`r`n"
$instructionsContent += "   - Usually: /home/username/domain.com or /public_html/`r`n`r`n"
$instructionsContent += "2. SET DOCUMENT ROOT`r`n"
$instructionsContent += "   - IMPORTANT: Point document root to the 'public' folder`r`n"
$instructionsContent += "   - In cPanel: Go to Subdomains/Addon Domains`r`n"
$instructionsContent += "   - Change document root from: /home/username/domain.com`r`n"
$instructionsContent += "   - To: /home/username/domain.com/public`r`n`r`n"
$instructionsContent += "3. CONFIGURE .ENV FILE`r`n"
$instructionsContent += "   - Rename .env.production to .env`r`n"
$instructionsContent += "   - Update these values:`r`n"
$instructionsContent += "     * APP_URL=https://your-domain.com`r`n"
$instructionsContent += "     * DB_HOST=localhost (or from cPanel MySQL Databases)`r`n"
$instructionsContent += "     * DB_DATABASE=your_database_name`r`n"
$instructionsContent += "     * DB_USERNAME=your_database_user`r`n"
$instructionsContent += "     * DB_PASSWORD=your_database_password`r`n"
$instructionsContent += "     * APP_KEY= (run: php artisan key:generate)`r`n`r`n"
$instructionsContent += "4. SET FILE PERMISSIONS`r`n"
$instructionsContent += "   Run these commands via SSH or File Manager:`r`n"
$instructionsContent += "   chmod -R 755 .`r`n"
$instructionsContent += "   chmod -R 777 storage/`r`n"
$instructionsContent += "   chmod -R 777 bootstrap/cache/`r`n"
$instructionsContent += "   chmod -R 755 vendor/`r`n`r`n"
$instructionsContent += "5. INSTALL COMPOSER DEPENDENCIES`r`n"
$instructionsContent += "   SSH into your server and run:`r`n"
$instructionsContent += "   cd /path/to/your/website`r`n"
$instructionsContent += "   composer install --no-dev --optimize-autoloader`r`n`r`n"
$instructionsContent += "   If vendor folder has issues:`r`n"
$instructionsContent += "   rm -rf vendor/`r`n"
$instructionsContent += "   mkdir vendor`r`n"
$instructionsContent += "   chmod -R 777 vendor/`r`n"
$instructionsContent += "   composer install --no-dev --optimize-autoloader`r`n`r`n"
$instructionsContent += "6. GENERATE APPLICATION KEY`r`n"
$instructionsContent += "   php artisan key:generate`r`n`r`n"
$instructionsContent += "7. RUN MIGRATIONS`r`n"
$instructionsContent += "   php artisan migrate --force`r`n`r`n"
$instructionsContent += "8. OPTIMIZE FOR PRODUCTION`r`n"
$instructionsContent += "   php artisan config:cache`r`n"
$instructionsContent += "   php artisan route:cache`r`n"
$instructionsContent += "   php artisan view:cache`r`n`r`n"
$instructionsContent += "9. VERIFY`r`n"
$instructionsContent += "   - Visit your website URL`r`n"
$instructionsContent += "   - Check that all pages load correctly`r`n"
$instructionsContent += "   - Test contact form`r`n`r`n"
$instructionsContent += "TROUBLESHOOTING:`r`n"
$instructionsContent += "- If you see 500 errors, check storage/logs/laravel.log`r`n"
$instructionsContent += "- If database connection fails, verify DB credentials in .env`r`n"
$instructionsContent += "- If 404 errors, verify document root points to /public`r`n"
$instructionsContent += "- If vendor issues, remove vendor/ and reinstall as above`r`n`r`n"
$instructionsContent += "Support: support@zingoassist.us"

Set-Content -Path $instructionsPath -Value $instructionsContent
Write-Host "Deployment instructions created" -ForegroundColor Green
Write-Host ""

# Step 7: Clean up
Write-Host "Cleaning up production directory..." -ForegroundColor Yellow

$testPaths = @(
    (Join-Path $prodDir "storage\framework\testing"),
    (Join-Path $prodDir "database\database.sqlite"),
    (Join-Path $prodDir "public\error_log"),
    (Join-Path $prodDir "storage\logs")
)

foreach ($path in $testPaths) {
    if (Test-Path $path) {
        Remove-Item -Path $path -Recurse -Force -ErrorAction SilentlyContinue
    }
}

Get-ChildItem -Path $prodDir -Recurse -Directory -Filter ".git" -ErrorAction SilentlyContinue | Remove-Item -Recurse -Force

Write-Host "Cleanup completed" -ForegroundColor Green
Write-Host ""

# Step 8: Create zip file
$zipFileName = "zingo-assist-production-$timestamp.zip"
Write-Host "Creating zip file: $zipFileName" -ForegroundColor Yellow

if (Test-Path $zipFileName) {
    Remove-Item -Path $zipFileName -Force
}

Add-Type -Assembly System.IO.Compression.FileSystem
[System.IO.Compression.ZipFile]::CreateFromDirectory($prodDir, $zipFileName)

$zipSize = [math]::Round((Get-Item $zipFileName).Length / 1MB, 2)
Write-Host "Zip file created: $zipFileName" -ForegroundColor Green
Write-Host ""

# Summary
Write-Host "========================================" -ForegroundColor Cyan
Write-Host "BUILD COMPLETE!" -ForegroundColor Green
Write-Host "========================================" -ForegroundColor Cyan
Write-Host "Production Directory: $prodDir" -ForegroundColor White
Write-Host "Zip File: $zipFileName" -ForegroundColor White
Write-Host "Size: $zipSize MB" -ForegroundColor White
Write-Host ""
Write-Host "Next Steps:" -ForegroundColor Yellow
Write-Host "1. Upload $zipFileName to iHosting" -ForegroundColor White
Write-Host "2. Extract the zip file on your server" -ForegroundColor White
Write-Host "3. Follow DEPLOYMENT_INSTRUCTIONS.txt" -ForegroundColor White
Write-Host "========================================" -ForegroundColor Cyan
