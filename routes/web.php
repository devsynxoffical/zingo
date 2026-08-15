<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WebController;
use App\Http\Controllers\EmailController;

Route::controller(WebController::class)->group(function () {
    Route::get('/', 'home')->name('home');
    Route::get('/about-us', 'about')->name('about');
    Route::get('/blog', 'blog')->name('blog');
    Route::get('/blog1', 'blog1')->name('blog1');
    Route::get('/blog2', 'blog2')->name('blog2');
    Route::get('/blog3', 'blog3')->name('blog3');
    Route::get('/blog4', 'blog4')->name('blog4');
    Route::get('/blog/seo-strategies', 'seo_strategies')->name('blog.seo_strategies');
    Route::get('/blog/free-va-trial', 'free_va_trial')->name('blog.free_va_trial');
    Route::get('/blog/top-5-tasks', 'top_5_tasks')->name('blog.top_5_tasks');
    Route::get('/blog/web-dev-trends-2025', 'web_dev_trends_2025')->name('blog.web_dev_trends_2025');
    Route::get('/blog/digital-marketing-budget', 'digital_marketing_budget')->name('blog.digital_marketing_budget');
    Route::get('/blog/crm-powered-workflow', 'crm_powered_workflow')->name('blog.crm_powered_workflow');
    Route::get('/blog/va-vs-full-time', 'va_vs_full_time')->name('blog.va_vs_full_time');
    Route::get('/blog/crm-management-2025', 'crm_management_2025')->name('blog.crm_management_2025');
    Route::get('/blog/website-redesign-checklist', 'website_redesign_checklist')->name('blog.website_redesign_checklist');
    Route::get('/blog/seo-vs-ppc', 'seo_vs_ppc')->name('blog.seo_vs_ppc');
    Route::get('/blog/content-marketing-tips', 'content_marketing_tips')->name('blog.content_marketing_tips');
    Route::get('/blog/optimize-website-seo', 'optimize_website_seo')->name('blog.optimize_website_seo');
    Route::get('/blog/10-signs-you-need-a-virtual-assistant', 'ten_signs_need_virtual_assistant')->name('blog.ten_signs_need_virtual_assistant');
    Route::get('/blog/benefits-outsourcing-business-tasks', 'benefits_outsourcing_business_tasks')->name('blog.benefits_outsourcing_business_tasks');
    Route::get('/contact-us', 'contact')->name('contact');
    Route::get('/our-services', 'service')->name('service');
    Route::get('/faq', 'faq')->name('faq');

    Route::get('/real-estate-digital-marketing-agency', 'digital_marketing')->name('service.digital_marketing');
    Route::get('/real-estate-seo-services', 'search_seo')->name('service.search_seo');
    Route::get('/real-estate-web-development-services', 'web_development')->name('service.web_development');
    Route::get('/graphic-design-services', 'graphic_design')->name('service.graphic_design');
    Route::get('/service/testimonials', 'testimonials')->name('service.testimonials');
    Route::get('/mobile-app-development-services', 'app_development')->name('service.app_development');
    Route::get('/crm-management-services', 'crm_management')->name('service.crm_management');
    Route::get('/business-it-support-services', 'it_support')->name('service.it_support');
    Route::get('/video-editing-services', 'video_editing')->name('service.video_editing');
    Route::get('/personal-assistance-services', 'personal_assistance')->name('service.personal_assistance');
    Route::get('/lead-generation-services', 'lead_generation')->name('service.lead_generation');
    Route::get('/real-estate-cold-calling-services', 'cold_calling')->name('service.cold_calling');
    Route::get('/virtual-business-assistance-services', 'virtual_business_assistance')->name('service.virtual_business_assistance');
    Route::get('/virtual-property-management-services', 'virtual_property_management')->name('service.virtual_property_management');
    Route::get('/real-estate-transaction-coordinator-services', 'real_estate_transaction_coordinator')->name('service.real_estate_transaction_coordinator');
    Route::get('/accounting-and-bookkeeping-services', 'bookkeeping_accountant')->name('service.bookkeeping_accountant');
    Route::get('/sitemap.xml', 'sitemap')->name('sitemap');
});

Route::controller(EmailController::class)->group(function () {
    Route::post('/send_mail', 'send_mail')->name('send_mail');
});

Route::view('/terms-conditions', 'static.terms')->name('terms');
Route::view('/privacy-policy', 'static.privacy')->name('privacy');

Route::get('/clear-cache', function () {
    \Illuminate\Support\Facades\Artisan::call('view:clear');
    \Illuminate\Support\Facades\Artisan::call('cache:clear');
    return 'Laravel Cache Cleared successfully!';
});
