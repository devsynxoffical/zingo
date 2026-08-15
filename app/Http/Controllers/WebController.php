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
    
     public function blog2()
    {
        return view('blog2');
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
    
    public function top_5_tasks()
    {
        return view('blog.top_5_tasks');
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

    public function sitemap()
    {
        $routes = [
            'home',
            'about',
            'blog',
            'blog1',
            'blog2',
            'blog3',
            'blog4',
            'blog.seo_strategies',
            'blog.free_va_trial',
            'blog.top_5_tasks',
            'blog.web_dev_trends_2025',
            'blog.digital_marketing_budget',
            'blog.crm_powered_workflow',
            'blog.va_vs_full_time',
            'blog.crm_management_2025',
            'blog.website_redesign_checklist',
            'blog.seo_vs_ppc',
            'blog.content_marketing_tips',
            'blog.optimize_website_seo',
            'blog.ten_signs_need_virtual_assistant',
            'blog.benefits_outsourcing_business_tasks',
            'contact',
            'service',
            'faq',
            'service.digital_marketing',
            'service.search_seo',
            'service.web_development',
            'service.graphic_design',
            'service.testimonials',
            'service.app_development',
            'service.crm_management',
            'service.it_support',
            'service.video_editing',
            'service.personal_assistance',
            'service.lead_generation',
            'service.cold_calling',
            'service.virtual_business_assistance',
            'service.virtual_property_management',
            'service.real_estate_transaction_coordinator',
            'service.bookkeeping_accountant',
            'terms',
            'privacy',
        ];

        $xml = '<?xml version="1.0" encoding="UTF-8"?>';
        $xml .= '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">';
        
        foreach ($routes as $route) {
            if (\Illuminate\Support\Facades\Route::has($route)) {
                $xml .= '<url>';
                $xml .= '<loc>' . route($route) . '</loc>';
                $xml .= '<lastmod>' . date('Y-m-d') . '</lastmod>';
                $xml .= '<changefreq>' . ($route === 'home' ? 'daily' : 'weekly') . '</changefreq>';
                $xml .= '<priority>' . ($route === 'home' ? '1.0' : (str_starts_with($route, 'service.') ? '0.8' : '0.6')) . '</priority>';
                $xml .= '</url>';
            }
        }
        
        $xml .= '</urlset>';

        return response($xml, 200)->header('Content-Type', 'text/xml');
    }
}
