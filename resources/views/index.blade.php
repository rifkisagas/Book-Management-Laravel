@php
$i=0;    
@endphp
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Fantasia Laravelia</title>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link href="css/7sm.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</head>
<body>
  <header>
    <div class="wrapper text-font">
      <nav>
        <div class="logo">
          Fantasia Laravelia
        </div>
        <div class="menu">
          <ul>
            <li><a href="#home">Home</a></li>
            <li><a href="#books">Books</a></li>
            {{-- <li><a href="#service">Service</a></li>
            <li><a href="#founder">Founder</a></li> --}}
            @if($user->roles_id == 2)
            @csrf
            <li><a href="{{ url('api/logout')}}">Logout</a></li>
            @elseif($user->roles_id == 1)
            <li><a href="{{ url('admin/home') }}">Admin</a></li>
            @else
            <li><a href="{{ route('login') }}">Login</a></li>
            @endif
          </ul>
        </div>
      </nav>
      <div id="home">
        <h1 class="big-title translate" data-aos="fade-down" >Fantasia Laravelia</h1>
        <h3 class="big-title-comment translate" data-aos="fade-up">Your fantasy for escaping the reality.</h3>
      </div>
    </div>
  </header>
  <div id="books" class="img-fluid bg2">
    <div class="about-port">
      <div class="container">
        <div class="card-group">
          @foreach($book as $key => $books)
          <div class="card">
            <img class="card-img-top" style="height: 514px;" src="storage/cover_buku/{{$books->cover}}" alt="Card image cap">
            <div class="card-body text">
              <p class="card-text">{{$books->judul}}</p>
              <p class="card-text">{{$books->penulis}}</p>
              <p class="card-text">{{$books->tahun}}</p>
              <p class="card-text">{{$books->penerbit}}</p>
            </div>
          </div>
          @php
          $i = $i+1;
          @endphp
          @if($i % 3 == 0)
        </div>
        <div style="margin-bottom: 40px"></div>
        <div class="card-group">
          @endif
          @endforeach
        </div>
      </div>
    </div>
  </div>
</body>
<script>
  AOS.init();
  $(window).on("scroll", function() {
    if($(window).scrollTop()) {
      $('nav').addClass('black');
    }
    else{
      $('nav').removeClass('black');
    }
  })
</script>
</body>
</html>