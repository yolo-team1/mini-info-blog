<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Weather extends CI_Controller {

    public function index() {
        // Dapatkan IP pengguna
        $ip = $this->input->ip_address();
        $location = $this->get_location($ip);

        // Inisialisasi array data yang akan dikirim ke view
        $data = [
            'location' => '',
            'currentTime' => '',
            'temperature' => '',
            'description' => '',
            'error' => ''
        ];

        if ($location && $location['status'] == 'success') {
            $lat = $location['lat'];
            $lon = $location['lon'];
            $city = $location['city'];
            $region = $location['regionName'];
            $country = $location['country'];

            $weather = $this->get_weather($lat, $lon);

            if ($weather) {
                $data['location'] = "{$city}, {$region}, {$country}";
                $data['currentTime'] = date('Y-m-d H:i:s');
                $data['temperature'] = $weather['current_condition'][0]['temp_C'];
                $data['description'] = $weather['current_condition'][0]['weatherDesc'][0]['value'];
            } else {
                $data['error'] = "Tidak dapat mendapatkan informasi cuaca.";
            }
        } else {
            $data['error'] = "Tidak dapat mendapatkan lokasi dari IP.";
        }

        // Muat view dengan data
        $this->load->view('blog_homepage', $data);
    }

    private function get_location($ip) {
        $url = "http://ip-api.com/json/{$ip}";
        $response = file_get_contents($url);
        return json_decode($response, true);
    }

    private function get_weather($lat, $lon) {
        $url = "https://wttr.in/{$lat},{$lon}?format=j1";
        $response = file_get_contents($url);
        return json_decode($response, true);
    }
}
