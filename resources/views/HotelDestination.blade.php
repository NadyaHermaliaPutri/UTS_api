<html lang="en"> 
<head> 
    <meta charset="UTF-8"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <title>Booking COM</title> 
    <link rel="stylesheet" 
    href="https://cdnjs.cloudflare.com/ajax/libs/fontawesome/5.15.4/css/all.min.css"> 
    <style> 
        body { 
            font-family: Arial, sans-serif; 
            margin: 0; 
            padding: 0; 
            background-color: #f4f4f4; 
        } 
 
        .container { 
            width: 80%;
            margin: 50px auto; 
            padding: 20px; 
            background-color: white; 
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); 
        } 
 
        h1 { 
            text-align: center; 
            color: #333; 
        } 
 
        table { 
            width: 100%; 
            border-collapse: collapse; 
        } 
 
        th, td { 
            padding: 10px; 
            text-align: left; 
            border-bottom: 1px solid #ddd; 
        } 
 
        th { 
            background-color: #f4f4f4; 
            color: #333; 
        } 
 
        tr:hover { 
            background-color: #f9f9f9; 
        } 
 
        .error { 
            color: red; 
            font-size: 1.2rem; 
            text-align: center; 
        } 
    </style> 
</head> 
<body> 
 
    <div class="container"> 
        <h1>Hotel Destinations</h1> 
    
        {{-- Tampilkan error jika ada --}}
        @if (isset($data['error'])) 
            <div class="error"> 
                <p>Error: {{ $data['error'] }}</p> 
            </div> 
        @else 
            {{-- Tampilkan tabel data destinasi hotel --}}
            <table border="1" cellpadding="10" cellspacing="0"> 
                <thead> 
                    <tr> 
                        <th>#</th> 
                        <th>Name</th> 
                        <th>City</th> 
                        <th>Region</th> 
                        <th>Country</th> 
                        <th>Hotels</th> 
                        <th>Image</th> 
                    </tr> 
                </thead> 
                <tbody> 
                    @foreach ($data['data'] as $destination) 
                        <tr> 
                            <td>{{ $loop->iteration }}</td> 
                            <td>{{ $destination['name'] }}</td> 
                            <td>{{ $destination['city_name'] ?? '-' }}</td> 
                            <td>{{ $destination['region'] ?? '-' }}</td> 
                            <td>{{ $destination['country'] ?? '-' }}</td> 
                            <td>{{ $destination['nr_hotels'] ?? '-' }}</td> 
                            <td>
                                @if (isset($destination['image_url']))
                                    <img src="{{ $destination['image_url'] }}" alt="Image" width="50">
                                @else
                                    No image
                                @endif
                            </td>
                        </tr> 
                    @endforeach 
                </tbody> 
            </table> 
        @endif 
    </div>
    
</body> 
</html> 