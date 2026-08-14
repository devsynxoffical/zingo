# Create production build zip excluding development files
$source = "."
$destination = "..\zingo-assist_production.zip"

# Remove old zip if exists
if (Test-Path $destination) {
    Remove-Item $destination -Force
}

# Directories and files to exclude
$exclude = @(
    "node_modules",
    ".git",
    ".vscode",
    ".idea",
    "storage\logs\*",
    "storage\framework\cache\*",
    "storage\framework\sessions\*",
    "storage\framework\views\*",
    "bootstrap\cache\*",
    ".env",
    "*.log",
    "create-build.ps1"
)

Write-Host "Creating production build..." -ForegroundColor Green
Write-Host "Excluding: node_modules, .git, cache files, logs" -ForegroundColor Yellow

# Get all items except excluded
$items = Get-ChildItem -Path $source -Recurse | Where-Object {
    $item = $_
    $shouldExclude = $false
    
    foreach ($pattern in $exclude) {
        if ($item.FullName -like "*\$pattern*" -or $item.Name -like $pattern) {
            $shouldExclude = $true
            break
        }
    }
    
    -not $shouldExclude
}

# Create zip
$items | Compress-Archive -DestinationPath $destination -CompressionLevel Fastest

Write-Host "Build created successfully at: $destination" -ForegroundColor Green
