<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
</head>
<body>
    <h1>{{$heading}}</h1>
    @if(count($listings)==0)
        <p>No Listings Found</p>
    @endif

    @foreach($listings as $listing)
    <a href='/listing/{{$listing['id']}}'><h2>{{ $listing['title'] }}</h2></a>
    <div>{{$listing['desc']}}</div>
    @endforeach
</body>
</html>