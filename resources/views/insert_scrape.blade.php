<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <title>Insert Scraper</title>


</head>
<body>
    
    {{-- ===== Cek ==== --}}
    {{-- <form method="POST" action="{{ route('cek') }}" >
        @csrf
        <div>
          <input type="text" name="url" id="url" placeholder="Masukan URL yang ingin di Cek" required>
        </div>
        <button type="submit">Cek Now</button>
    </form>
    <img src="cdn.komiku.co.id/uploads2/2713212-6.jpg" alt="">
    @isset($status)
        @if($status == 'True')
            <p>Image found! URL: {{ $url }}</p>
            <p>If the image not showing it mean the CORS is ON.</p>
            <img src="{{ $url }}" alt="">
        @else
            <p>No image found!</p>
        @endif
    @endisset --}}

    {{-- <img src="https://itachi.my.id/images/k/kill-the-hero/chapter-01/1.jpg" alt="">
     --}}
    <label for="">================== Generate KOMIK ====================</label>
    <div style="padding: 15px">
        <button id="button1">Komiku</button>
        <button id="button2">Mikoroku(18+)</button>
        <button id="button3">Komikcast</button>
    </div>

    <img src="https://itachi.my.id/image/k/kichiku-eiyuu/chapter-00/3.jpg" alt="" cross-origin="use-credentials">
      
    {{-- ===== KOMIKU ==== --}}
      <form method="POST" action="{{ route('parse_url') }}" id="komikuForm" style="display: none;">
        @csrf
        <div>
          <label for="url">URL:</label>
          <input type="text" name="url" id="url" placeholder="input komiku URL" required>
        </div>
        <button type="submit">Submit</button>
      </form>

    {{-- ===== Mikoroku ==== --}}
      <form method="POST" action="{{ route('mikoroku') }}" id="MangawestForm" style="display: none;">
        @csrf
        <div>
          <label for="url">URL:</label>
          <input type="text" name="url" id="url" placeholder="input mangawest URL" required>
        </div>
        <button type="submit">Submit</button>
      </form>

    {{-- ===== Komikcast ==== --}}
      <form method="POST" action="{{ route('komikcast') }}" id="ButtonForm" style="display: none;">
        @csrf
        <div>
          <label for="url">URL:</label>
          <input type="text" name="url" id="url" placeholder="input button URL" required>
        </div>
        <button type="submit">Submit</button>
      </form>
      
      <div class="container">
        <div class="row">
          <div class="col-md-6 offset-md-3 mt-5 wrapper">
            @isset($data)
              @foreach($data as $key)
                {{-- {{$key}} --}}
                <img src="{{$key}}" alt="">
              @endforeach
            @endisset
          </div>
        </div>
      </div>
      
      
      <script>
        const button1 = document.getElementById('button1');
        const button2 = document.getElementById('button2');
        const button3 = document.getElementById('button3');
        const komikuForm = document.getElementById('komikuForm');
        const mangawestForm = document.getElementById('MangawestForm');
        const buttonForm = document.getElementById('ButtonForm');
      
        button1.addEventListener('click', function() {
          komikuForm.style.display = 'block';
          mangawestForm.style.display = 'none';
          buttonForm.style.display = 'none';
        });
      
        button2.addEventListener('click', function() {
          mangawestForm.style.display = 'block';
          komikuForm.style.display = 'none';
          buttonForm.style.display = 'none';
        });
      
        button3.addEventListener('click', function() {
          buttonForm.style.display = 'block';
          komikuForm.style.display = 'none';
          mangawestForm.style.display = 'none';
        });
      </script>
      

</body>
</html>
