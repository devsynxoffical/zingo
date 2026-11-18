<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WebController extends Controller
{
    public function home()
    {
        return view('home');
    }

    public function about()
    {
        return view('about');
    }

    public function blog()
    {
        return view('blog');
    }

    public function contact()
    {
        return view('contact');
    }

    public function service()
    {
        return view('service');
    }

    public function team()
    {
        return view('team');
    }

    public function faq()
    {
        return view('faq');
    }

    public function digital_marketing()
    {
        return view('services.digital_marketing');
    }

    public function graphic_design()
    {
        return view('services.graphic_design');
    }

    public function search_seo()
    {
        return view('services.search_seo');
    }

    public function web_design()
    {
        return view('services.web_design');
    }

    public function web_development()
    {
        return view('services.web_development');
    }

    public function app_development()
    {
        return view('services.app_dev');
    }

    public function video_editing()
    {
        return view('services.video_editing');
    }

    public function testimonials()
    {
        return view('services.testimonial');
    }

    public function crm_management()
    {
        return view('services.crm_management');
    }

    public function it_support()
    {
        return view('services.it_support');
    }

    public function personal_assistance()
    {
        return view('services.personal_assistance');
    }

    public function lead_generation()
    {
        return view('services.lead_generation');
    }

    public function virtual_business_assistance()
    {
        return view('services.virtual_business_assistance');
    }

    public function virtual_property_management()
    {
        return view('services.virtual_property_management');
    }

    public function real_estate_transaction_coordinator()
    {
        return view('services.real_estate_transaction_coordinator');
    }

    public function cold_calling()
    {
        return view('services.cold_calling');
    }
    
    public function bookkeeping_accountant()
    {
        return view('services.bookkeeping_accountant');
    }
    
     public function blog1()
    {
        return view('blog1');
    }
      public function blog3()
    {
        return view('blog3');
    }
        public function blog4()
    {
        return view('blog4');
    }
    
    public function seo_strategies()
    {
        return view('blog.seo_strategies');
    }
    
    public function free_va_trial()
    {
        return view('blog.free_va_trial');
    }
    
    public function web_dev_trends_2025()
    {
        return view('blog.web_dev_trends_2025');
    }
    
    public function digital_marketing_budget()
    {
        return view('blog.digital_marketing_budget');
    }
    
    public function crm_powered_workflow()
    {
        return view('blog.crm_powered_workflow');
    }
    
    public function va_vs_full_time()
    {
        return view('blog.va_vs_full_time');
    }
    
    public function crm_management_2025()
    {
        return view('blog.crm_management_2025');
    }
    
    public function website_redesign_checklist()
    {
        return view('blog.website_redesign_checklist');
    }
    
    public function seo_vs_ppc()
    {
        return view('blog.seo_vs_ppc');
    }
    
    public function content_marketing_tips()
    {
        return view('blog.content_marketing_tips');
    }
    
    public function optimize_website_seo()
    {
        return view('blog.optimize_website_seo');
    }

    public function ten_signs_need_virtual_assistant()
    {
        return view('blog.ten_signs_need_virtual_assistant');
    }

    public function benefits_outsourcing_business_tasks()
    {
        return view('blog.benefits_outsourcing_business_tasks');
    }

    public function real_estate_virtual_assistant()
    {
        return view('services.real_estate_virtual_assistant');
    }

    public function real_estate_va_tampa()
    {
        return view('locations.tampa_st_petersburg');
    }

    public function wholesale_cold_calling()
    {
        return view('services.wholesale_cold_calling');
    }

    public function real_estate_isa()
    {
        return view('services.real_estate_isa');
    }

    public function unlicensed_assistant_florida()
    {
        return view('blog.unlicensed_assistant_florida');
    }

    public function re_va_cost()
    {
        return view('blog.re_va_cost');
    }

    public function tc_vs_va()
    {
        return view('blog.tc_vs_va');
    }

    public function florida_cold_calling_laws()
    {
        return view('blog.florida_cold_calling_laws');
    }

    /**
     * XML sitemap. lastmod comes from the view file's modification time so it
     * only changes when the page content actually changes.
     */
    public function sitemap()
    {
        // route name => [view, priority, changefreq]
        $pages = [
            'home' => ['home', '1.0', 'weekly'],
            'service.real_estate_virtual_assistant' => ['services.real_estate_virtual_assistant', '0.9', 'monthly'],
            'service' => ['service', '0.9', 'monthly'],
            'service.real_estate_isa' => ['services.real_estate_isa', '0.9', 'monthly'],
            'service.cold_calling' => ['services.cold_calling', '0.8', 'monthly'],
            'service.wholesale_cold_calling' => ['services.wholesale_cold_calling', '0.8', 'monthly'],
            'service.real_estate_transaction_coordinator' => ['services.real_estate_transaction_coordinator', '0.8', 'monthly'],
            'service.virtual_property_management' => ['services.virtual_property_management', '0.8', 'monthly'],
            'service.virtual_business_assistance' => ['services.virtual_business_assistance', '0.8', 'monthly'],
            'service.personal_assistance' => ['services.personal_assistance', '0.8', 'monthly'],
            'service.lead_generation' => ['services.lead_generation', '0.8', 'monthly'],
            'service.bookkeeping_accountant' => ['services.bookkeeping_accountant', '0.8', 'monthly'],
            'service.crm_management' => ['services.crm_management', '0.8', 'monthly'],
            'service.digital_marketing' => ['services.digital_marketing', '0.8', 'monthly'],
            'service.search_seo' => ['services.search_seo', '0.8', 'monthly'],
            'service.web_development' => ['services.web_development', '0.8', 'monthly'],
            'service.graphic_design' => ['services.graphic_design', '0.7', 'monthly'],
            'service.app_development' => ['services.app_dev', '0.7', 'monthly'],
            'service.it_support' => ['services.it_support', '0.7', 'monthly'],
            'service.video_editing' => ['services.video_editing', '0.7', 'monthly'],
            'location.tampa_st_petersburg' => ['locations.tampa_st_petersburg', '0.8', 'monthly'],
            'about' => ['about', '0.6', 'monthly'],
            'contact' => ['contact', '0.6', 'yearly'],
            'faq' => ['faq', '0.6', 'monthly'],
            'blog' => ['blog', '0.7', 'weekly'],
            'blog.re_va_cost' => ['blog.re_va_cost', '0.7', 'monthly'],
            'blog.tc_vs_va' => ['blog.tc_vs_va', '0.7', 'monthly'],
            'blog.florida_cold_calling_laws' => ['blog.florida_cold_calling_laws', '0.7', 'monthly'],
            'blog.unlicensed_assistant_florida' => ['blog.unlicensed_assistant_florida', '0.7', 'monthly'],
            'blog.ten_signs_need_virtual_assistant' => ['blog.ten_signs_need_virtual_assistant', '0.6', 'monthly'],
            'blog.benefits_outsourcing_business_tasks' => ['blog.benefits_outsourcing_business_tasks', '0.6', 'monthly'],
            'blog.va_vs_full_time' => ['blog.va_vs_full_time', '0.6', 'monthly'],
            'blog3' => ['blog3', '0.6', 'monthly'],
            'blog1' => ['blog1', '0.6', 'monthly'],
            'blog.free_va_trial' => ['blog.free_va_trial', '0.6', 'monthly'],
            'blog.crm_management_2025' => ['blog.crm_management_2025', '0.6', 'monthly'],
            'blog.crm_powered_workflow' => ['blog.crm_powered_workflow', '0.6', 'monthly'],
            'blog.seo_strategies' => ['blog.seo_strategies', '0.6', 'monthly'],
            'blog.seo_vs_ppc' => ['blog.seo_vs_ppc', '0.6', 'monthly'],
            'blog.optimize_website_seo' => ['blog.optimize_website_seo', '0.6', 'monthly'],
            'blog.content_marketing_tips' => ['blog.content_marketing_tips', '0.6', 'monthly'],
            'blog.digital_marketing_budget' => ['blog.digital_marketing_budget', '0.6', 'monthly'],
            'blog.web_dev_trends_2025' => ['blog.web_dev_trends_2025', '0.6', 'monthly'],
            'blog.website_redesign_checklist' => ['blog.website_redesign_checklist', '0.6', 'monthly'],
            'blog4' => ['blog4', '0.5', 'monthly'],
            'editorial' => ['static.editorial', '0.3', 'yearly'],
            'privacy' => ['static.privacy', '0.2', 'yearly'],
            'terms' => ['static.terms', '0.2', 'yearly'],
        ];

        $base = rtrim(config('seo.base_url', url('/')), '/');

        $xml = '<?xml version="1.0" encoding="UTF-8"?>';
        $xml .= '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">';

        foreach ($pages as $route => [$view, $priority, $freq]) {
            if (!\Illuminate\Support\Facades\Route::has($route)) {
                continue;
            }
            $file = resource_path('views/' . str_replace('.', '/', $view) . '.blade.php');
            $lastmod = is_file($file) ? date('Y-m-d', filemtime($file)) : date('Y-m-d');
            $xml .= '<url>';
            $path = parse_url(route($route), PHP_URL_PATH) ?: '/';
            $xml .= '<loc>' . $base . $path . '</loc>';
            $xml .= '<lastmod>' . $lastmod . '</lastmod>';
            $xml .= '<changefreq>' . $freq . '</changefreq>';
            $xml .= '<priority>' . $priority . '</priority>';
            $xml .= '</url>';
        }

        $xml .= '</urlset>';

        return response($xml, 200)->header('Content-Type', 'application/xml; charset=UTF-8');
    }
}
