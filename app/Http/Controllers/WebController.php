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


    public function re_va_cost()
    {
        return view('blog.re_va_cost');
    }

    public function pm_va_cost()
    {
        return view('blog.pm_va_cost');
    }

    public function tc_fees()
    {
        return view('blog.tc_fees');
    }



    private function assistantRules(): array
    {
        return require resource_path('data/assistant-rules.php');
    }

    public function rules_hub()
    {
        $d = $this->assistantRules();

        return view('rules.hub', ['states' => $d['states'], 'federal' => $d['federal'], 'reviewed' => $d['reviewed']]);
    }

    public function rules_state(string $state)
    {
        $d = $this->assistantRules();
        $st = $d['states'][$state] ?? abort(404);
        $title = 'Unlicensed Assistant Rules in ' . $st['name'] . ' (2026)';
        if (strlen($title . ' | Zingo Assist') < 60) {
            $title .= ' | Zingo Assist';
        }
        $meta = 'What an unlicensed real estate assistant may and may not do in ' . $st['name'] . ' under ' . $st['short'] . ' guidance, plus ' . $st['name'] . ' calling rules. Sources linked.';

        return view('rules.state', [
            'st' => $st, 'all' => $d['states'], 'tasks' => $d['tasks'], 'federal' => $d['federal'],
            'federalSources' => $d['federal_sources'], 'reviewed' => $d['reviewed'], 'title' => $title, 'meta' => $meta,
        ]);
    }

    public function investor_va()
    {
        return view('services.investor_va');
    }

    public function tc_checklist()
    {
        return view('blog.tc_checklist');
    }

    public function speed_to_lead()
    {
        return view('blog.speed_to_lead');
    }

    public function isa_scripts_expired_fsbo()
    {
        return view('blog.isa_scripts_expired_fsbo');
    }

    public function follow_up_boss_va()
    {
        return view('blog.follow_up_boss_va');
    }

    public function re_va_tasks_checklist()
    {
        return view('blog.re_va_tasks_checklist');
    }

    public function tc_vs_va()
    {
        return view('blog.tc_vs_va');
    }


    /**
     * XML sitemap. lastmod comes from the view file's modification time so it
     * only changes when the page content actually changes.
     */
    /**
     * Indexable pages: route name => [view, priority, changefreq].
     * Shared by the XML sitemap and the HTML site map so they never drift apart.
     */
    private function sitemapPages(): array
    {
        return [
            'home' => ['home', '1.0', 'weekly'],
            'service.real_estate_virtual_assistant' => ['services.real_estate_virtual_assistant', '0.9', 'monthly'],
            'service' => ['service', '0.9', 'monthly'],
            'service.real_estate_isa' => ['services.real_estate_isa', '0.9', 'monthly'],
            'service.listing_coordinator' => ['services.listing_coordinator', '0.8', 'monthly'],
            'service.expired_fsbo_calling' => ['services.expired_fsbo_calling', '0.8', 'monthly'],
            'tool.va_roi_calculator' => ['tools.va_roi_calculator', '0.8', 'monthly'],
            'service.cold_calling' => ['services.cold_calling', '0.8', 'monthly'],
            'service.wholesale_cold_calling' => ['services.wholesale_cold_calling', '0.8', 'monthly'],
            'service.real_estate_transaction_coordinator' => ['services.real_estate_transaction_coordinator', '0.8', 'monthly'],
            'service.investor_va' => ['services.investor_va', '0.8', 'monthly'],
            'service.virtual_property_management' => ['services.virtual_property_management', '0.8', 'monthly'],
            'service.lead_generation' => ['services.lead_generation', '0.8', 'monthly'],
            'service.crm_management' => ['services.crm_management', '0.8', 'monthly'],
            'service.digital_marketing' => ['services.digital_marketing', '0.8', 'monthly'],
            'service.search_seo' => ['services.search_seo', '0.8', 'monthly'],
            'service.web_development' => ['services.web_development', '0.8', 'monthly'],
            'service.video_editing' => ['services.video_editing', '0.7', 'monthly'],
            'location.tampa_st_petersburg' => ['locations.tampa_st_petersburg', '0.8', 'monthly'],
            'about' => ['about', '0.6', 'monthly'],
            'contact' => ['contact', '0.6', 'yearly'],
            'faq' => ['faq', '0.6', 'monthly'],
            'blog' => ['blog', '0.7', 'weekly'],
            'blog.re_va_cost' => ['blog.re_va_cost', '0.7', 'monthly'],
            'blog.pm_va_cost' => ['blog.pm_va_cost', '0.7', 'monthly'],
            'blog.tc_fees' => ['blog.tc_fees', '0.7', 'monthly'],
            'blog.tc_checklist' => ['blog.tc_checklist', '0.7', 'monthly'],
            'blog.speed_to_lead' => ['blog.speed_to_lead', '0.7', 'monthly'],
            'blog.isa_scripts_expired_fsbo' => ['blog.isa_scripts_expired_fsbo', '0.7', 'monthly'],
            'blog.follow_up_boss_va' => ['blog.follow_up_boss_va', '0.7', 'monthly'],
            'blog.re_va_tasks_checklist' => ['blog.re_va_tasks_checklist', '0.7', 'monthly'],
            'blog.tc_vs_va' => ['blog.tc_vs_va', '0.7', 'monthly'],
            'blog.ten_signs_need_virtual_assistant' => ['blog.ten_signs_need_virtual_assistant', '0.6', 'monthly'],
            'blog.benefits_outsourcing_business_tasks' => ['blog.benefits_outsourcing_business_tasks', '0.6', 'monthly'],
            'blog.va_vs_full_time' => ['blog.va_vs_full_time', '0.6', 'monthly'],
            'blog3' => ['blog3', '0.6', 'monthly'],
            'blog1' => ['blog1', '0.6', 'monthly'],
            'blog.free_va_trial' => ['blog.free_va_trial', '0.6', 'monthly'],
            'editorial' => ['static.editorial', '0.3', 'yearly'],
            'privacy' => ['static.privacy', '0.2', 'yearly'],
            'terms' => ['static.terms', '0.2', 'yearly'],
            'rules.hub' => ['rules.hub', '0.8', 'monthly'],
            'rules.state:florida' => ['rules.state', '0.7', 'monthly'],
            'rules.state:texas' => ['rules.state', '0.7', 'monthly'],
            'rules.state:california' => ['rules.state', '0.7', 'monthly'],
            'rules.state:georgia' => ['rules.state', '0.7', 'monthly'],
            'rules.state:north-carolina' => ['rules.state', '0.7', 'monthly'],
            'rules.state:arizona' => ['rules.state', '0.7', 'monthly'],
            'rules.state:new-york' => ['rules.state', '0.7', 'monthly'],
            'rules.state:colorado' => ['rules.state', '0.7', 'monthly'],
            'html_sitemap' => ['static.sitemap', '0.2', 'monthly'],
        ];
    }

    public function sitemap()
    {
        $pages = $this->sitemapPages();

        $base = rtrim(config('seo.base_url', url('/')), '/');

        $xml = '<?xml version="1.0" encoding="UTF-8"?>';
        $xml .= '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">';

        foreach ($pages as $key => [$view, $priority, $freq]) {
            [$route, $param] = array_pad(explode(':', $key, 2), 2, null);
            if (!\Illuminate\Support\Facades\Route::has($route)) {
                continue;
            }
            $file = resource_path('views/' . str_replace('.', '/', $view) . '.blade.php');
            $lastmod = is_file($file) ? date('Y-m-d', filemtime($file)) : date('Y-m-d');
            if (str_starts_with($route, 'rules.')) {
                $lastmod = date('Y-m-d', max(filemtime($file), filemtime(resource_path('data/assistant-rules.php'))));
            }
            $xml .= '<url>';
            $path = parse_url($param ? route($route, $param) : route($route), PHP_URL_PATH) ?: '/';
            $xml .= '<loc>' . $base . $path . '</loc>';
            $xml .= '<lastmod>' . $lastmod . '</lastmod>';
            $xml .= '<changefreq>' . $freq . '</changefreq>';
            $xml .= '<priority>' . $priority . '</priority>';
            $xml .= '</url>';
        }

        $xml .= '</urlset>';

        return response($xml, 200)->header('Content-Type', 'application/xml; charset=UTF-8');
    }

    /** HTML site map: every indexable page, grouped, labelled with its page title. */
    public function html_sitemap()
    {
        $groups = ['Real estate services' => [], 'Tools' => [], 'Rules by state' => [], 'Locations' => [], 'Guides' => [], 'Company' => []];
        $rules = $this->assistantRules()['states'];
        foreach ($this->sitemapPages() as $key => [$view]) {
            [$route, $param] = array_pad(explode(':', $key, 2), 2, null);
            if ($route === 'html_sitemap' || !\Illuminate\Support\Facades\Route::has($route)) {
                continue;
            }
            if ($route === 'rules.state' || $route === 'rules.hub') {
                $groups['Rules by state'][] = [$param ? 'Unlicensed assistant rules in ' . $rules[$param]['name'] : 'Assistant rules by state (all states)', $param ? route($route, $param) : route($route)];
                continue;
            }
            $file = resource_path('views/' . str_replace('.', '/', $view) . '.blade.php');
            $label = $route;
            if (is_file($file) && preg_match("/@section\\('title',\\s*'((?:[^'\\\\]|\\\\.)*)'/", file_get_contents($file), $m)) {
                $label = trim(preg_replace('/\\s*\\|.*$/', '', stripslashes($m[1])));
            }
            $label = ['home' => 'Home', 'service' => 'All services', 'blog' => 'Blog'][$route] ?? $label;
            $group = match (true) {
                str_starts_with($route, 'service') => 'Real estate services',
                str_starts_with($route, 'tool.') => 'Tools',
                str_starts_with($route, 'location.') => 'Locations',
                str_starts_with($route, 'blog') && $route !== 'blog' => 'Guides',
                default => 'Company',
            };
            $groups[$group][] = [$label, route($route)];
        }

        return view('static.sitemap', ['groups' => array_filter($groups)]);
    }
}
