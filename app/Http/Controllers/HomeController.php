<?php
 
namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

use App\ReplyMessage;

use Illuminate\Support\Facades\Redirect;
 
use Storage;

use Mail;

use Hash;

use Session;

use App\Product;

use App\Subscriber;

use App\Services;

use App\Testimonial;

use App\Portfolio;

use App\Slider;

use App\Service_Rendered;

use App\Quotation;

use App\Daily;

use App\Blog;

use App\Admin;

use App\Term;

use App\Privacy;

use App\Message;

use App\Notifications;

use App\ServiceRequest;

use App\Quote;



use SEOMeta;
use OpenGraph;
use Twitter;

## or


class HomeController extends Controller
{
     /**
     * @return \Illuminate\View\View
     */

    public function index()
    { 
        SEOMeta::setTitle('Sparol Solutions Group  - We are based on a foundation of personal service and willingness at all times to ensure the clients’ needs are fully satisfied. Quality Service is our benchmark');
        SEOMeta::setDescription('We are based on a foundation of personal service and willingness at all times to ensure the clients’ needs are fully satisfied. Quality Service is our benchmark');
        SEOMeta::setCanonical('http://sparol.co.ke/');

        $SiteSettings = DB::table('sitesettings')->get(); 
        
        Twitter::setTitle('Sparol Solutions Group ​');
        Twitter::setSite('@protonafica');
        
        
        

        $About = DB::table('about')->get();
        $Slider = Slider::all();
        $Blog = DB::table('blog')->paginate(3);
        $Portfolio = DB::table('portfolio')->orderByDesc('id')->paginate(9);
        $Services = DB::table('services')->inRandomOrder()->paginate(13);
        $Testimonial = DB::table('testimonial')->limit('20')->inRandomOrder()->get();
        $Clients = DB::table('clients')->inRandomOrder()->paginate(20);
        $SiteSettings = DB::table('sitesettings')->get();
       
        $sitename = config('app.name', 'Laravel');
        $page_title = 'Home Page';
        return view('front.index',compact('About','SiteSettings','page_title','Testimonial','Slider','Services','Portfolio','Clients'));
    }

   
   

    public function portfolio()
    {
        SEOMeta::setTitle('Our Portfolio - Sparol Solutions Group ​');
        SEOMeta::setTitle('Projects and Gallery | Sparol Solutions Group  - ');
        SEOMeta::setDescription('We are based on a foundation of personal service and willingness at all times to ensure the clients’ needs are fully satisfied. Quality Service is our benchmark');
        SEOMeta::setCanonical('http://sparol.co.ke/projects-and-gallery');

        OpenGraph::setDescription('');
        OpenGraph::setTitle('Sparol Solutions Group  - ');
        OpenGraph::setUrl('http://sparol.co.ke/projects-and-gallery');
        OpenGraph::addProperty('type', 'articles');
        $SiteSettings = DB::table('sitesettings')->get();
        
        Twitter::setTitle('Sparol Solutions Group ​');
        Twitter::setSite('@protonafica');
        $Portfolio = DB::table('portfolio')->paginate(9);
        $page_title = 'Our Works';
        return view('front.portfolio',compact('Portfolio','page_title'));
    }


    public function medias()
    {
        SEOMeta::setTitle('Photo Gallery - Sparol Solutions Group ​');
        SEOMeta::setTitle('Projects and Gallery | Sparol Solutions Group  - ');
        SEOMeta::setDescription('We are based on a foundation of personal service and willingness at all times to ensure the clients’ needs are fully satisfied. Quality Service is our benchmark');
        SEOMeta::setCanonical('http://sparol.co.ke/projects-and-gallery');

        OpenGraph::setDescription('');
        OpenGraph::setTitle('Sparol Solutions Group  - ');
        OpenGraph::setUrl('http://sparol.co.ke/projects-and-gallery');
        OpenGraph::addProperty('type', 'articles');
        $SiteSettings = DB::table('sitesettings')->get();
        
        Twitter::setTitle('Sparol Solutions Group ​');
        Twitter::setSite('@protonafica');
        $Gallery = DB::table('gallery')->paginate(40);
        $page_title = 'Photo Gallery';
        return view('front.gallery',compact('Gallery','page_title'));
    }
    

    public function contact()
    {
        SEOMeta::setTitle('Contact Us | Sparol Solutions Group ');
        SEOMeta::setDescription('Sparol Solutions Group Contact infomation for our offices across Nairobi');
        SEOMeta::setCanonical('http://sparol.co.ke/contact-us');

        
        $SiteSettings = DB::table('sitesettings')->get();
        
        Twitter::setTitle('Sparol Solutions Group ​');
        Twitter::setSite('@protonafica');
        $page_title = 'Contact Us';
        $SiteSettings = DB::table('sitesettings')->get();
        return view('front.contact',compact('page_title','SiteSettings'));
    }

    public function products()
    {
        SEOMeta::setTitle('Our Products | Sparol Solutions Group  - ');
        SEOMeta::setDescription('');
        SEOMeta::setCanonical('http://sparol.co.ke/contact');

        OpenGraph::setDescription('');
        OpenGraph::setTitle('Sparol Solutions Group  - ');
        OpenGraph::setUrl('http://sparol.co.ke/contact');
        OpenGraph::addProperty('type', 'articles');
        $SiteSettings = DB::table('sitesettings')->get();
        
        Twitter::setTitle('Sparol Solutions Group ​');
        Twitter::setSite('@protonafica');
        $page_title = 'Our Products';
        $products = DB::table('product')->paginate(12);
        return view('front.products',compact('page_title','products'));
    }

    public function properties()
    {
        SEOMeta::setTitle('Listed Properties | Sparol Solutions Group  - Real Estate Listed Properties ');
        SEOMeta::setDescription('Sparol Solutions Group Real Estate Listed Properties');
        SEOMeta::setCanonical('http://sparol.co.ke/our-properties');

        
        $SiteSettings = DB::table('sitesettings')->get();
        
        Twitter::setTitle('Sparol Solutions Group ​');
        Twitter::setSite('@protonafica');
        $page_title = 'Listed Propeties';
        $Properties = DB::table('product')->paginate(12);
        return view('front.properies',compact('page_title','Properties'));
    }

    public function properties_type($type)
    {
        SEOMeta::setTitle('Listed Properties | Sparol Solutions Group  - Real Estate Listed Properties ');
        SEOMeta::setDescription('Sparol Solutions Group Real Estate Listed Properties');
        SEOMeta::setCanonical('http://sparol.co.ke/our-properties');

        
        $SiteSettings = DB::table('sitesettings')->get();
        
        Twitter::setTitle('Sparol Solutions Group ​');
        Twitter::setSite('@protonafica');
        $page_title = 'Listed Propeties';
        $Properties = DB::table('product')->where('type',$type)->paginate(12);
        return view('front.properies',compact('page_title','Properties'));
    }

    

    
    public function property($title)
    {
        SEOMeta::setTitle(''.$title.' | Sparol Solutions Group  - Real Estate Listed Properties ');
        SEOMeta::setDescription('Sparol Solutions Group Real Estate Listed Properties');
        SEOMeta::setCanonical('http://sparol.co.ke/our-properties/'.$title.'');

        
        $SiteSettings = DB::table('sitesettings')->get();
        
       
        $page_title = $title;
        $Properties = DB::table('product')->where('slung',$title)->get();
        return view('front.property',compact('page_title','Properties','title'));
    }

    public function media($slung)
    {
        $Media = DB::table('media')->where('slung',$slung)->get();
        foreach ($Media as $key => $value) {
            SEOMeta::setTitle(''.$value->title.' | Sparol Solutions Group  - Media Center ');
            SEOMeta::setDescription('Sparol Solutions Group Real Estate Listed Properties');
            SEOMeta::setCanonical('http://sparol.co.ke/media-center/'.$slung.'');
    
            
            $SiteSettings = DB::table('sitesettings')->get();
            
           
            $page_title = $value->title;
         
            return view('front.media',compact('page_title','Media'));
        }
    
    }
    
    

    public function about()
    {
        SEOMeta::setTitle('About Us | Sparol Solutions Group');
        SEOMeta::setDescription('About Us Sparol Solutions Group');
        SEOMeta::setCanonical('http://sparol.co.ke/about-us ');

        $SiteSettings = DB::table('sitesettings')->get(); 
        
        Twitter::setTitle('Sparol Solutions Group ​');
        Twitter::setSite('@protonafica');
        $Clients = DB::table('clients')->inRandomOrder()->paginate(20);
        $Testimonial = Testimonial::all();
        $Admin = Admin::all();
        $About = DB::table('about')->get(); 
        $SiteSettings = DB::table('sitesettings')->get();
        $Services = Services::all();
        $page_title = 'About Us';
        return view('front.about',compact('page_title','Clients','Testimonial','About','Admin'));
    }


    public function about_team()
    {
        SEOMeta::setTitle('About Us | Sparol Solutions Group');
        SEOMeta::setDescription('About Us Sparol Solutions Group');
        SEOMeta::setCanonical('http://sparol.co.ke/about-us/team');

        $SiteSettings = DB::table('sitesettings')->get(); 
        
        Twitter::setTitle('Sparol Solutions Group ​');
        Twitter::setSite('@protonafica');
        $Clients = DB::table('clients')->inRandomOrder()->paginate(20);
        $Testimonial = Testimonial::all();
        $Admin = Admin::all();
        $About = DB::table('about')->get(); 
        $SiteSettings = DB::table('sitesettings')->get();
        $Services = Services::all();
        $page_title = 'About Us';
        return view('front.about_team',compact('page_title','Clients','Testimonial','About','Admin'));
    }

    

    public function terms()
    {
        SEOMeta::setTitle('Terms and Conditions | Sparol Solutions Group');
        SEOMeta::setDescription('About Us Sparol Solutions Group');
        SEOMeta::setCanonical('http://sparol.co.ke/terms');

        $SiteSettings = DB::table('sitesettings')->get();
        
        Twitter::setTitle('Sparol Solutions Group ​');
        Twitter::setSite('@protonafica');
        $Term = Term::all();
        $page_title = 'Terms Of Service';
        return view('front.terms',compact('page_title','Term'));
    }

    public function privacy()
    {
        SEOMeta::setTitle('Privacy Policy | Sparol Solutions Group');
        SEOMeta::setDescription('About Us Sparol Solutions Group');
        SEOMeta::setCanonical('http://sparol.co.ke/privacy');

        $SiteSettings = DB::table('sitesettings')->get();
        
        Twitter::setTitle('Sparol Solutions Group ​');
        Twitter::setSite('@protonafica');
        $Privacy = Privacy::all();
        $page_title = 'Privacy Policy';
        return view('front.privacy',compact('page_title','Privacy'));
    }

    public function copyright()
    {
        SEOMeta::setTitle('Copyright Statement | Sparol Solutions Group');
        SEOMeta::setDescription('About Us Sparol Solutions Group');
        SEOMeta::setCanonical('http://sparol.co.ke/copyright');

        OpenGraph::setDescription('');
        OpenGraph::setTitle('Sparol Solutions Group  - ');
        OpenGraph::setUrl('http://sparol.co.ke/copyright');
        OpenGraph::addProperty('type', 'articles');
        $SiteSettings = DB::table('sitesettings')->get();
        
        Twitter::setTitle('Sparol Solutions Group ​');
        Twitter::setSite('@protonafica');
        $Copyright = DB::table('copyright')->get();
        $page_title = 'Copyright Statement';
        return view('front.copyright',compact('page_title','Copyright'));
    }

    public function sectors()
    {
        SEOMeta::setTitle('Our Sectors | Sparol Solutions Group');
        SEOMeta::setDescription('Sparol Solutions Group Sectors');
        SEOMeta::setCanonical('http://sparol.co.ke/our-sectors');
        $SiteSettings = DB::table('sitesettings')->get();
        
        Twitter::setTitle('Sparol Solutions Group ​');
        Twitter::setSite('@protonafica');
        $Sectors = DB::table('sections')->paginate(12);
        $page_title = 'Sectors';
        return view('front.sectors',compact('Sectors','page_title'));
    }

    public function sector($title)
    {
        SEOMeta::setTitle(''.$title.' | Sparol Solutions Group');
        SEOMeta::setDescription(''.$title.' - In Sparol Solutions Group');
        SEOMeta::setCanonical('http://sparol.co.ke/our-sectors/'.$title.'');

        $SiteSettings = DB::table('sitesettings')->get();
        
        Twitter::setTitle('Sparol Solutions Group ​');
        Twitter::setSite('@protonafica');
        $Sectors = DB::table('sections')->where('slung',$title)->get();
        $page_title = 'Sectors';
        return view('front.sector',compact('Sectors','page_title','title'));
    }


    public function services()
    {
        SEOMeta::setTitle('Services | Sparol Solutions Group');
        SEOMeta::setDescription('Sparol Solutions Group Services');
        SEOMeta::setCanonical('http://sparol.co.ke/services');

        
        
        Twitter::setTitle('Sparol Solutions Group ​');
        Twitter::setSite('@protonafica');
        $Services = DB::table('services')->paginate(12);
        $page_title = 'Our Services';
        return view('front.services',compact('Services','page_title'));
    }

    public function service($service)
    {

        SEOMeta::setTitle(''.$service.' | Sparol Solutions Group ​');
        SEOMeta::setDescription(''.$service.' in Sparol Solutions Group');
        SEOMeta::setCanonical('http://sparol.co.ke/our-service/'.$service.'');

        OpenGraph::setDescription('');
        OpenGraph::setTitle('Sparol Solutions Group ​');
        OpenGraph::setUrl('http://sparol.co.ke/services');
        OpenGraph::addProperty('type', 'articles');
        $SiteSettings = DB::table('sitesettings')->get();
        
        Twitter::setTitle('Sparol Solutions Group ​');
        Twitter::setSite('@protonafica');
        $Services = DB::table('services')->where('slung',$service)->get();
        
            $page_title = $service;
           
            return view('front.service',compact('Services','page_title','service'));
        
        
    }

    public function portfolio_single($name)
    {
        $PortfolioName = DB::table('portfolio')->where('title',$name)->get();
        foreach ($PortfolioName as $key => $portfolioname) {
            $PagerTitle = $portfolioname->title;
            SEOMeta::setTitle('Sparol Solutions Group ​ - '.$portfolioname->title.'');
            SEOMeta::setDescription('');
            SEOMeta::setCanonical('http://sparol.co.ke/portfolio/'.$name.'');

            OpenGraph::setDescription('');
            OpenGraph::setTitle('Sparol Solutions Group  - ');
            OpenGraph::setUrl('http://sparol.co.ke/portfolio/'.$portfolioname->title.'');
            OpenGraph::addProperty('type', 'articles');
            $SiteSettings = DB::table('sitesettings')->get();
        
            Twitter::setTitle('Sparol Solutions Group ​');
            Twitter::setSite('@protonafica');
            $Portfolio = Portfolio::find($portfolioname->id);
            $page_title = $portfolioname->title;
            return view('front.portfolio_single',compact('Portfolio','page_title','name'));
        }
        
        
    }

    public function subscribe(Request $request){
        $FindMail = DB::table('subscribers')->where('email',$request->email)->get();
        $Countmails = count($FindMail);
        if($Countmails == 0){
            $email = $request->email;
            $Subscriber = new Subscriber; 
            $Subscriber->email = $email;
            $Subscriber->save();
            return "You have successfully subscribed to our news letters";
        }else{
            return "You are already in our subscribers list thank you for staying with us";
        }
        
    
        
    }

    public function quote(Request $request){

            $email = $request->email;
            $name = $request->name;
            $phone = $request->phone;
            $message = $request->message;

            $Quotation = new Quotation; 
            $Quotation->email = $email;
            $Quotation->name = $name;
            $Quotation->phone = $phone;
            $Quotation->message = $message;
            $Quotation->save();
            
       

            $Notifications = new Notifications;
            $Notifications->type = 'Quotation';
            $Notifications->content = 'You have a new Quotation';
            $Notifications->save();
            ReplyMessage::mailQuotation($name,$email,$phone,$message);
    
            return "Your Quotation Request Has Been Received";
        
    }

    
    public function requestQuote(){
        SEOMeta::setTitle('Request Quote | Sparol Solutions Group');
        SEOMeta::setDescription('Request Quotation for services rendered at Sparol Solutions Group');
        SEOMeta::setCanonical('http://sparol.co.ke/request-quote');

        
        Twitter::setTitle('Sparol Solutions Group ​');
        Twitter::setSite('@protonafica');
        $page_title = 'Request Quote';
        $SiteSettings = DB::table('sitesettings')->get();
        return view('front.request_quote',compact('page_title','SiteSettings'));
      
    }
    public function servicerequest($id){
        $page_title = 'Order Service';
        $Pricings = DB::table('pricing')->where('id',$id)->get();
        return view('front.servicerequest',compact('page_title','Pricings'));
    }
    
    public function service_request(Request $request){
        $name = $request->name;
        $email = $request->email;
        $id = $request->id;
        $service = $request->service;
        $price = $request->price;
        $content = $request->content;
        $budget = $request->budget;

        $ServiceRequest = new ServiceRequest;
        $ServiceRequest->name = $name;
        $ServiceRequest->email = $email;
        $ServiceRequest->serviceID = $id;
        $ServiceRequest->service = $service;
        $ServiceRequest->content = $content;
        $ServiceRequest->price  = $price;
        $ServiceRequest->budget = $budget;
        $ServiceRequest->save();
        ReplyMessage::mailrequest($name,$email,$service,$price,$content,$budget);
        return "Your Request Has Been Received,If we dont respond within an hour kindly contact us through our contact form,call us or use the live chat";
    }

    public function checkEmail(Request $request){
        $email = $request->input('email');
        $isExists = \App\User::where('email',$email)->first();
        //Create The Logics To return AJAX
        if(empty($isExists)) {
            return "";
        }else{
            return "The Email Is already in use by another User";
        }
    }

    public function quote_request(Request $request){
        $name = $request->name;
        $email = $request->email;
        $service = $request->service;
        $content = $request->content;
        $Quote = new Quote;
        $Quote->name = $name;
        $Quote->email = $email;
        $Quote->service = $service;
        $Quote->content = $request->content;
        $Quote->save();
        $price = 'Quote Request';
        $budget = 'Quote Request';
        ReplyMessage::mailrequest($name,$email,$service,$price,$content,$budget);
        return "Your Request Has Been Received";

    }

    public function searchsite(Request $request){
        
        $Services = DB::table('services')
        ->where('title','like', '%'.$request->search.'%')->get();
        $page_title = $request->search;
        return view('front.services',compact('page_title','Services','SubCategory'));
    }

    public function search(Request $request)
    {
        if($request->search == null or $request->search == ''){
            $output = '';
            return Response($output);
        }else
            $url = url('/our-services/');
            $uri = url('/our-sectors/');
            if($request->ajax())
            {
            $output="";
            $products=DB::table('services')->where('title','LIKE','%'.$request->search."%")->paginate(10);
            if($products)
            {
            foreach ($products as $key => $product) {
            //
            $Category = DB::table('sections')->where('id',$product->section_id)->get();
            foreach ($Category as $key => $value) {
                $output.='<tr>'.
                    '<td><a href="'.$url.'/'.$product->title.'"><b>'.$product->title.'</b></a></td>'.
                    '<td>'.$product->pre.'</td>'.
                    '<td><a href="'.$uri.'/'.$value->title.'"><b>'.$value->title.'</b></a></td>'.
                    '</tr>';
            }
            
        }
            return Response($output);
                }
                }
    }

    public function commingsoon(){
        $page_title = 'We will be Back Shortly';
        return view('front.commingsoon',compact('page_title'));
    }
    public function submitMessage(Request $request){
        $email = $request->email;
        $name = $request->name;
        $message = $request->message;
        $subject = $request->subject;
        
        $Message = new Message;
        $Message->name = $name;
        $Message->email = $email;
        $Message->subject = $subject;
        $Message->content = $message;

        $Message->save();
        $Notifications = new Notifications;
        $Notifications->type = 'Message';
        $Notifications->content = 'You have a new Message';
        $Notifications->save();

     
        $subject = 'New Message';
        ReplyMessage::mailNotificaton($name, $email, $subject, $message);

        Session::flash('message', "Your Message Has Been Sent");
        return Redirect::back();
    }
}
