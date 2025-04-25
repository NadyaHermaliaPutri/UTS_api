<?php 
 
namespace App\Http\Controllers\Api; 
 
use App\Http\Controllers\Controller; 
use App\Services\ApiService; 
use Illuminate\Http\Request; 
 
class PremierLeagueController extends Controller 
{ 
    protected $apiService; 
 
    // Menambahkan dependensi pada constructor 
      public function __construct(ApiService $apiService) 
    { 
        $this->apiService = $apiService; 
    } 
 
    // Method untuk mendapatkan semua tim 
    public function searchHotelDestination() 
    { 
        // Ambil data tim dari API 
        $HotelDestination = $this->apiService->getsearchHotelDestination(); 
        return view('HotelDestination', ['data' => $HotelDestination]); 
 
    } 
}