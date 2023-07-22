<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Symfony\Component\DomCrawler\Crawler;
use DOMDocument;
use Sunra\PhpSimple\HtmlDomParser;
use Goutte\Client;
use phpQuery;
use Illuminate\Support\Facades\Http;

class ScraperController extends Controller
{
    private $results = array();

    public function scraper()
    {
        $client = new Client();
        $url = 'https://komiku.id/ch/isekai-elf-no-dorei-chan-chapter-01/';
        $page = $client->request('GET', $url);

        $page->filter('.content')->each(function ($item) {
            $item->filter('.ww')->each(function ($img){
                $this->results[$img->attr('id')] = $img->attr('src');
            });
        });
        // dd($this->results);
        
        $data = $this->results;
        return view('scraper', compact('data'));
    }


    public function insert_scraper(){
        return view('insert_scrape');
    }


    //komiku
    public function parseUrl(Request $request)
    {
        $client = new Client();
        $url = $request->input('url');
        
        $page = $client->request('GET', $url);
        
        $page->filter('#Baca_Komik')->each(function ($item) {
            $item->filter('.ww')->each(function ($img){
                $this->results[$img->attr('id')] = $img->attr('src');
            });
        });
        // dd($this->results);
        
        $data = $this->results;
        return view('insert_scrape', compact('data'));
    }

    //mangawest
    // public function mangawest(Request $request)
    // {
    //     // Get the URL from the input POST request
    //     $url = $request->input('url');
    
    //     // Make a get request to the Flask API
    //     set_time_limit(300);
    //     $response = Http::get('https://maling.adamitee.com/scrape', [
    //         'url' => $url,
    //     ]);
    
    //     // Check if the request was successful (status code 200)
    //     if ($response->status() == 200) {
    //         // Extract the image URLs from the JSON response
    //         $data = $response->json();
    //         $imageUrls = $data['image_urls'] ?? [];
    //         return response()->json(['imageUrls' => $imageUrls]); // Return JSON response
    //     } else {
    //         // If the request failed, handle the error response
    //         $error = $response->json('error');
    //         return response()->json(['error' => $error], 400); // Return JSON response with error status code
    //     }
    // }

    //tes
    public function tes(Request $request)
    {
        $client = new Client();
        $url = $request->input('url');
        
        $page = $client->request('GET', $url);
        
        // Create a new DomCrawler instance with the HTML content
        $crawler = new Crawler($page->html());
        dd($crawler);
        $data = $crawler->filter('.main-reading-area img')->each(function (Crawler $img) {
            // Extract the 'src' attribute from each <img> tag and return it
            return $img->attr('src');
        });
    
        // dd($data);
        
        // Pass the data to your view
        return view('insert_scrape', compact('data'));
    }

    //komikcast
    public function komikcast(Request $request)
    {
        $client = new Client();
        $url = $request->input('url');
        
        $page = $client->request('GET', $url);
        
        // Create a new DomCrawler instance with the HTML content
        $crawler = new Crawler($page->html());
        
        $data = $crawler->filter('.main-reading-area img')->each(function (Crawler $img) {
            // Extract the 'src' attribute from each <img> tag and return it
            return $img->attr('src');
        });
    
        // dd($data);
        
        // Pass the data to your view
        return view('insert_scrape', compact('data'));
    }
    
}
