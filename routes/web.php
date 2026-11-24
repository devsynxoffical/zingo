<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WebController;
use App\Http\Controllers\EmailController;

Route::controller(WebController::class)->group(function () {
    Route::get('/', 'home')->name('home');
    Route::get('/about-us', 'about')->name('about');
    Route::get('/blog', 'blog')->name('blog');
    Route::get('/blog/why-your-business-needs-a-virtual-assistant', 'blog1')->name('blog1');
    Route::get('/blog/tasks-to-outsource-to-a-virtual-assistant', 'blog3')->name('blog3');
    Route::get('/blog/how-to-become-a-virtual-assistant', 'blog4')->name('blog4');
    Route::get('/blog/real-estate-virtual-assistant-cost', 're_va_cost')->name('blog.re_va_cost');
    Route::get('/sitemap', 'html_sitemap')->name('html_sitemap');
    Route::get('/real-estate-assistant-rules', 'rules_hub')->name('rules.hub');
    Route::get('/real-estate-assistant-rules/{state}', 'rules_state')->name('rules.state')
        ->where('state', 'florida|texas|california|georgia|north-carolina|arizona|new-york|colorado');
    Route::get('/tools/transaction-coordinator-checklist', 'tc_checklist')->name('blog.tc_checklist');
    Route::get('/real-estate-investor-virtual-assistant', 'investor_va')->name('service.investor_va');
    Route::get('/blog/speed-to-lead-real-estate', 'speed_to_lead')->name('blog.speed_to_lead');
    Route::get('/blog/isa-scripts-expired-fsbo-leads', 'isa_scripts_expired_fsbo')->name('blog.isa_scripts_expired_fsbo');
    Route::get('/blog/follow-up-boss-virtual-assistant', 'follow_up_boss_va')->name('blog.follow_up_boss_va');
    Route::get('/blog/real-estate-virtual-assistant-tasks-checklist', 're_va_tasks_checklist')->name('blog.re_va_tasks_checklist');
    Route::get('/blog/transaction-coordinator-vs-virtual-assistant', 'tc_vs_va')->name('blog.tc_vs_va');
    Route::get('/blog/seo-strategies', 'seo_strategies')->name('blog.seo_strategies');
    Route::get('/blog/free-va-trial', 'free_va_trial')->name('blog.free_va_trial');
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
    Route::get('/real-estate-virtual-assistant', 'real_estate_virtual_assistant')->name('service.real_estate_virtual_assistant');
    Route::get('/real-estate-virtual-assistant-tampa-st-petersburg-fl', 'real_estate_va_tampa')->name('location.tampa_st_petersburg');
    Route::get('/real-estate-isa-services', 'real_estate_isa')->name('service.real_estate_isa');
    Route::get('/wholesale-real-estate-cold-calling', 'wholesale_cold_calling')->name('service.wholesale_cold_calling');
    Route::get('/sitemap.xml', 'sitemap')->name('sitemap');
});

Route::controller(EmailController::class)->group(function () {
    Route::post('/send_mail', 'send_mail')->name('send_mail');
});

Route::view('/terms-conditions', 'static.terms')->name('terms');
Route::view('/privacy-policy', 'static.privacy')->name('privacy');
Route::view('/editorial-policy', 'static.editorial')->name('editorial');
Route::view('/listing-coordinator-virtual-assistant', 'services.listing_coordinator')->name('service.listing_coordinator');
Route::view('/expired-fsbo-cold-calling-services', 'services.expired_fsbo_calling')->name('service.expired_fsbo_calling');
Route::view('/real-estate-va-roi-calculator', 'tools.va_roi_calculator')->name('tool.va_roi_calculator');

// Permanent redirects for retired / legacy URLs (consolidate ranking signals).
Route::permanentRedirect('/blog1', '/blog/why-your-business-needs-a-virtual-assistant');
Route::permanentRedirect('/blog2', '/blog/10-signs-you-need-a-virtual-assistant');
Route::permanentRedirect('/blog3', '/blog/tasks-to-outsource-to-a-virtual-assistant');
Route::permanentRedirect('/blog/top-5-tasks', '/blog/tasks-to-outsource-to-a-virtual-assistant');
Route::permanentRedirect('/blog4', '/blog/how-to-become-a-virtual-assistant');
Route::permanentRedirect('/cold-calling-services', '/real-estate-cold-calling-services');
Route::permanentRedirect('/web-design', '/real-estate-web-development-services');
Route::permanentRedirect('/services', '/our-services');
Route::permanentRedirect('/about', '/about-us');
Route::permanentRedirect('/contact', '/contact-us');
Route::permanentRedirect('/blog/transaction-coordinator-checklist', '/tools/transaction-coordinator-checklist');
Route::permanentRedirect('/blog/what-can-an-unlicensed-real-estate-assistant-do', '/real-estate-assistant-rules');
Route::permanentRedirect('/blog/unlicensed-real-estate-assistant-florida', '/real-estate-assistant-rules/florida');
Route::permanentRedirect('/blog/florida-real-estate-cold-calling-laws', '/real-estate-assistant-rules/florida');
Route::permanentRedirect('/blog/can-an-unlicensed-assistant-make-cold-calls-in-texas', '/real-estate-assistant-rules/texas');
