<?php
/**
 * Script to update all service pages with responsive template
 * Run: php update_service_pages.php
 */

$services = [
    'web_development' => ['title' => 'Web Development', 'subtitle' => 'Build powerful, scalable web applications with modern technologies'],
    'personal_assistance' => ['title' => 'Personal Assistance', 'subtitle' => 'Get professional virtual assistance to manage your daily tasks'],
    'digital_marketing' => ['title' => 'Digital Marketing', 'subtitle' => 'Amplify your brand presence and reach your target audience'],
    'graphic_design' => ['title' => 'Graphic Design', 'subtitle' => 'Create stunning visual designs that elevate your brand'],
    'search_seo' => ['title' => 'Search SEO', 'subtitle' => 'Improve your search rankings and drive organic traffic'],
    'app_dev' => ['title' => 'App Development', 'subtitle' => 'Build cross-platform mobile applications that engage users'],
    'video_editing' => ['title' => 'Video Editing', 'subtitle' => 'Transform your raw footage into professional video content'],
    'it_support' => ['title' => 'IT Support', 'subtitle' => 'Get reliable technical support for your business operations'],
    'crm_management' => ['title' => 'CRM Management', 'subtitle' => 'Streamline customer relationships and boost sales'],
    'web_design' => ['title' => 'Web Design', 'subtitle' => 'Create beautiful, user-friendly websites that convert visitors'],
];

$cssTemplate = file_get_contents(__DIR__ . '/resources/views/services/service-template.blade.php');
$cssTemplate = str_replace('{{-- Service Page Template - Shared CSS and Structure --}}', '', $cssTemplate);
$cssTemplate = str_replace('<style>', '', $cssTemplate);
$cssTemplate = str_replace('</style>', '', $cssTemplate);
$cssTemplate = trim($cssTemplate);

foreach ($services as $file => $info) {
    $filePath = __DIR__ . "/resources/views/services/{$file}.blade.php";
    
    if (!file_exists($filePath)) {
        echo "Skipping {$file}.blade.php - file not found\n";
        continue;
    }
    
    $content = file_get_contents($filePath);
    
    // Extract the existing content between service-section and @endsection
    preg_match('/(<!--.*?Start Service.*?-->)(.*?)(<!--.*?End Service.*?-->)/s', $content, $serviceMatches);
    
    if (empty($serviceMatches)) {
        echo "Could not find service section in {$file}.blade.php\n";
        continue;
    }
    
    $serviceContent = $serviceMatches[2];
    
    // Find hero section replacement
    $oldHeroPattern = '/(<!--.*?Start Banner.*?-->)(.*?)(<!--.*?End Banner.*?-->)/s';
    
    $newHero = <<<HERO
<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
        Modern Hero Section
    ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
<section class="service-hero-section">
    <div class="service-hero-background"></div>
    <div class="service-hero-overlay"></div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-12">
                <div class="service-hero-content">
                    <div class="service-hero-badge">
                        <span><i class="fas fa-star"></i> Professional Service</span>
                    </div>
                    <h1 class="service-hero-title">{$info['title']}</h1>
                    <p class="service-hero-subtitle">{$info['subtitle']}</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
    End Hero Section
    ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
HERO;
    
    // Replace old banner with new hero
    $content = preg_replace($oldHeroPattern, $newHero, $content);
    
    // Add CSS at the beginning of content section
    if (strpos($content, '<style>') === false || strpos($content, '.service-hero-section') === false) {
        $content = str_replace('@section(\'content\')', "@section('content')\n\n<style>\n{$cssTemplate}\n</style>", $content);
    }
    
    // Remove decorative elements from contact section
    $content = preg_replace('/<div class="contact-element-five">.*?<\/div>/s', '', $content);
    $content = preg_replace('/<div class="contact-element-six">.*?<\/div>/s', '', $content);
    
    // Fix duplicate name attributes in textarea
    $content = preg_replace('/name="message".*?name="message"/', 'name="message"', $content);
    
    // Remove extra closing span tags
    $content = preg_replace('/<\/span>\s*<\/span>/', '</span>', $content);
    
    file_put_contents($filePath, $content);
    echo "Updated {$file}.blade.php\n";
}

echo "All service pages updated!\n";

