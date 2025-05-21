<?php

namespace App\Http\Controllers;

use App\Models\Accreditation;
use App\Models\AiSolution;
use App\Models\AiSolutionSecondSection;
use App\Models\Award;
use App\Models\Blog;
use App\Models\CaseStudy;
use App\Models\Category;
use App\Models\Client;
use App\Models\ClientCategory;
use App\Models\Contact;
use App\Models\CyberSecurityFirstSection;
use App\Models\CyberSecuritySecondSection;
use App\Models\Demo;
use App\Models\HomeFirstSection;
use App\Models\HomeSecondSection;
use App\Models\HomeServicesSection;
use App\Models\HomeThirdSection;
use App\Models\Job;
use App\Models\Leader;
use App\Models\Number;
use App\Models\OurJourney;
use App\Models\Product;
use App\Models\ProductFifthSection;
use App\Models\ProductFirstSection;
use App\Models\ProductFourthSection;
use App\Models\ProductSecondSection;
use App\Models\ProductSeventhSection;
use App\Models\ProductSixthSection;
use App\Models\ProductThirdSection;
use App\Models\Quality;
use App\Models\Service;
use App\Models\Showcase;
use App\Models\SiteSetting;
use App\Models\Slider;
use App\Models\Testimonial;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

class FrontController extends Controller
{
    public function index()
    {
        $sliders = Slider::where('active', 'Yes')
            ->orderBy('id', 'desc')->take(10)
            ->get();
        $data['slider'] = $sliders;


        $home_first_section = HomeFirstSection::all();
        $data['home_first_section'] = $home_first_section;

        $home_second_section = HomeSecondSection::all();
        $data['home_second_section'] = $home_second_section;

        $home_third_section = HomeThirdSection::all();
        $data['home_third_section'] = $home_third_section;

        $home_services_section = HomeServicesSection::all();
        $data['home_services_section'] = $home_services_section;

        $testimonials = Testimonial::all();
        $data['testimonials'] = $testimonials;

        $clients = Client::all();
        $data['clients'] = $clients;

        $teamMembers = User::where('role', '!=', 2)->get();
        $data['teamMembers'] = $teamMembers;


        $contacts = Contact::all();
        $numbers = Number::all();
        $data['contacts'] = $contacts;
        $data['numbers'] = $numbers;


        $siteSetting = SiteSetting::latest()->first(); // get latest setting
        $data['siteSetting'] = $siteSetting;


        // Get categories
        $enterpriseCategory = Category::where('slug', 'enterprise-solutions')->first();
        $fintechCategory = Category::where('slug', 'fintech-solutions')->first();

        // Fetch 3 products from each if available
        $enterpriseProducts = $enterpriseCategory
            ? Product::where('category_id', $enterpriseCategory->id)->take(3)->get()
            : collect();

        $fintechProducts = $fintechCategory
            ? Product::where('category_id', $fintechCategory->id)->take(3)->get()
            : collect();

        // Merge both into a single collection
        $data['products'] = $enterpriseProducts->merge($fintechProducts);

        return view('front.home', $data);
    }

    public function category()
    {
        $categories = Category::orderBy('name')->get(); // or ->where('status', true)

        return view('components.header', compact('categories'));
    }


    public function categoryProducts($slug)
    {
        $category = Category::where('slug', $slug)->firstOrFail();
        $data['category'] = $category;
        $products = Product::where('category_id', $category->id)->get();
        $data['products'] = $products;
        $subcategories = $category->subcategories()->orderBy('name')->get();
        $data['subcategories'] = $subcategories;
        // $sub_subcategories = $category->subSubCategories()->orderBy('name')->get();
        // $data['sub_subcategories'] = $sub_subcategories;
        return view('front.products', $data);
    }



    public function contact()
    {
        $contacts = Contact::all();
        $numbers = Number::all();
        $data['numbers'] = $numbers;
        $data['contacts'] = $contacts;
        return view('front.contact', $data);
    }

    public function about()
    {

        $home_second_section = HomeSecondSection::all();
        $data['home_second_section'] = $home_second_section;

        $managements = Leader::all();
        $data['managements'] = $managements;

        $accreditations = Accreditation::all();
        $data['accreditations'] = $accreditations;

        $awards = Award::all();
        $data['awards'] = $awards;

        $qualities = Quality::all();
        $data['qualities'] = $qualities;

        $teamMembers = User::where('role', '!=', 2)->get();
        $data['teamMembers'] = $teamMembers;

        $journeys = OurJourney::all();
        $data['journeys'] = $journeys;

        $showcases = Showcase::all();
        $data['showcases'] = $showcases;

        return view('front.about', $data);
    }

    public function products()
    {
        $sections = Product::where("button_name", "filter-sig")->get();
        $data['sections'] = $sections;
        return view('front.products', $data);
    }


    public function mobileApp()
    {
        $sections = Product::where("button_name", "filter-mob")->get();
        $data['sections'] = $sections;
        return view('front.mobile-app', $data);
    }

    public function aiSolutions()
    {
        $sections = Product::where("button_name", "filter-ai")->get();
        $first_sections = AiSolution::all();
        $second_sections = AiSolutionSecondSection::all();

        return view('front.ai-solutions', [
            'sections' => $sections,
            'first_sections' => $first_sections,
            'second_sections' => $second_sections
        ]);
    }


    public function systemSolutions()
    {
        $sections = Product::where("button_name", "filter-sys")->get();
        $data['sections'] = $sections;
        return view('front.system-solutions', $data);
    }

    public function cyberSecurity()
    {
        $sections = Product::where("button_name", "filter-sys")->get();
        $first_sections = CyberSecurityFirstSection::all();
        $second_sections = CyberSecuritySecondSection::all();

        return view('front.cyber-security', [
            'sections' => $sections,
            'first_sections' => $first_sections,
            'second_sections' => $second_sections
        ]);
    }







    public function showProduct($slug)
    {
        // Retrieve the product based on the slug
        $sections = Product::where('link', $slug)->firstOrFail();

        // Retrieve the section data
        $product_first_sections = ProductFirstSection::where('product_id', $sections->id)->get();
        $product_second_sections = ProductSecondSection::where('product_id', $sections->id)->get();
        $product_third_sections = ProductThirdSection::where('product_id', $sections->id)->get();
        $product_fourth_sections = ProductFourthSection::where('product_id', $sections->id)->get();
        $product_fifth_sections = ProductFifthSection::where('product_id', $sections->id)->get();
        $product_sixth_sections = ProductSixthSection::where('product_id', $sections->id)->get();
        $product_seventh_sections = ProductSeventhSection::where('product_id', $sections->id)->get();

        // Prepare meta data
        $meta_title = $sections->meta_title ?? $sections->title;
        $meta_description = $sections->meta_description ?? \Str::limit(strip_tags($sections->description ?? ''), 150);
        $meta_keywords = $sections->meta_keywords ?? 'Opus Technology Limited, Software, IT Solutions';

        // Return view with all variables
        return view('front.product-post', compact(
            'sections',
            'product_first_sections',
            'product_second_sections',
            'product_third_sections',
            'product_fourth_sections',
            'product_fifth_sections',
            'product_sixth_sections',
            'product_seventh_sections',
            'meta_title',
            'meta_description',
            'meta_keywords'
        ));
    }




    public function fintech()
    {
        $sections = Product::where("button_name", "filter-fin")->get();
        $data['sections'] = $sections;
        return view('front.fintech', $data);
    }

    public function clients()
    {
        $clients = Client::with('clientCategory')->get();
        $categories = ClientCategory::all();

        return view('front.clients', compact('clients', 'categories'));
    }



    public function blog()
    {
        $data['blogPosts'] = Blog::orderBy('date', 'desc')->get(); // Order by date in descending order

        return view('front.blog', $data);
    }


    public function showBlogPost($slug, Request $request)
    {
        $query = Blog::where('slug', $slug);

        if (!empty($request->get('keyword'))) {
            $query->where('description', 'like', '%' . $request->get('keyword') . '%');
        }

        $blogPost = $query->firstOrFail();
        return view('front.blog-post', compact('blogPost'));
    }

    public function showLeaderPost($link, Request $request)
    {
        $query = Leader::where('link', $link);
        $leaderPost = $query->firstOrFail();

        return view('front.leader-post', compact('leaderPost'));
    }

    public function showJobPost($slug, Request $request)
    {
        $query = Job::where('slug', $slug);
        $job = $query->firstOrFail();

        return view('front.job-post', compact('job'));
    }


    public function services()
    {
        $services = Service::all();
        return view('front.services', compact('services'));
    }


    public function caseStudy()
    {


        $caseStudy = CaseStudy::all();
        $data['caseStudy'] = $caseStudy;
        return view('front.case-study', $data);
    }


    public function showCaseStudy($slug, Request $request)
    {
        $query = CaseStudy::where('slug', $slug);

        if (!empty($request->get('keyword'))) {
            $query->where('description', 'like', '%' . $request->get('keyword') . '%');
        }

        $caseStudyPost = $query->firstOrFail();
        return view('front.case-post', compact('caseStudyPost'));
    }


    // public function demo(){
    //     return view('front.demo');
    // }



    // public function job()
    // {
    //     $jobs = Job::all();
    //     $data['jobs'] = $jobs;

    //     return view('front.jobs', $data);
    // }


    // demo request from

    public function demo()
    {
        $products = Product::all(); // Retrieve all products
        return view('front.demo', compact('products'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'mobile' => 'required|string|max:20',
            'product_id' => 'required|exists:products,id',
            'org_name' => 'required|string|max:255',
        ]);

        Demo::create($request->all());

        return redirect()->back()->with('success', 'Your message has been sent!');
    }





    //test api --------

    // public function showCategories()
    // {
    //     $response = Http::get('https://medicus-ecommerce.opusdemo.com/public/api/categories');

    //     if ($response->successful()) {
    //         $categories = $response->json('data'); // Fetch only the 'data' key
    //         return view('front.categories.index', compact('categories'));
    //     }

    //     return back()->with('error', 'Failed to fetch categories.');
    // }




    public function job()
    {
        $response = Http::withOptions(['verify' => false])->get('https://e-recruitment-admin.opuserp.com/api/recruitment/gt-all-jobs');

        if ($response->successful()) {
            $jobs = $response->json(); // Fetch the jobs
            return view('front.jobs', compact('jobs'));
        }

        return back()->with('error', 'Failed to fetch job data.');
    }
}
