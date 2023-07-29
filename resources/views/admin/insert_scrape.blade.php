@extends('admin.home')
@section('home')
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
     <div style="margin: auto; width: 50%; text-align: center;">
      <label for="">================== Generate KOMIK ====================</label>
      <div style="padding: 15px;">
        <button id="button1">Komiku</button>
        <button id="button2">Mikoroku(18+)</button>
        <button id="button3">Komikcast</button>
      </div>
    </div>
    

    <img src="https://itachi.my.id/image/k/kichiku-eiyuu/chapter-00/3.jpg" alt="" cross-origin="use-credentials">
      
    {{-- ===== KOMIKU ==== --}}
      <form method="POST" action="{{ route('parse_url') }}" id="komikuForm" style="display: none;text-align: center;">
        @csrf
        <div>
          <label for="url">URL:</label>
          <input type="text" name="url" id="url" placeholder="input komiku URL" required>
        </div>
        <button type="submit">Submit</button>
      </form>

    {{-- ===== Mikoroku ==== --}}
      <form method="POST" action="{{ route('mikoroku') }}" id="MangawestForm" style="display: none;text-align: center;">
        @csrf
        <div>
          <label for="url">URL:</label>
          <input type="text" name="url" id="url" placeholder="input mikoroku URL" required>
        </div>
        <button type="submit">Submit</button>
      </form>

    {{-- ===== Komikcast ==== --}}
      <form method="POST" action="{{ route('komikcast') }}" id="ButtonForm" style="display: none;text-align: center;">
        @csrf
        <div>
          <label for="url">URL:</label>
          <input type="text" name="url" id="url" placeholder="input komikcast URL" required>
        </div>
        <button type="submit">Submit</button>
      </form>
      
  <div class="container">
    <div class="row">
      <div class="col-md-6 offset-md-3 mt-5 wrapper" style="margin: auto; width: 50%; text-align: center;">
        @isset($data)
          <label for="">================== Preview KOMIK ====================</label>
          <div style="overflow-y: scroll; height: 700px; margin-bottom: 15px;">
            <table style="width: 100%;">
              <tbody>
                @foreach($data as $key)
                <tr>
                  <td><img src="{{$key}}" alt=""></td>
                </tr>
                @endforeach
              </tbody>
            </table>
          </div>
          <input type="text" name="title" placeholder="Masukan Judul & Episode Komik">
          <button type="button" class="btn btn-primary" onclick="insertImage()">Insert Image</button>
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
      

@endsection
