<!DOCTYPE html>
<!--[if IE 9 ]><html class="ie9"><![endif]-->

<head>
<meta charset="utf-8">

<meta name="description" 		content="SIMFORTA - Sistem Informasi pertanian Terbuka">
<meta name="keywords" 			content="sistem,informasi,pertanian,terbuka">

<!-- Dilengkapi url & image -->
<meta property="og:url"			content="http://" />
<meta property="og:type"		content="website" />
<meta property="og:title"		content="Simforta" />
<meta property="og:description"	content="Sistem Informasi pertanian" />
<meta property="og:image"		content="img/gedung.jpg" />
<meta property="og:locale" 		content="id_ID" /> 

<!-- Favicons -->
<link rel="shortcut icon" type="image/x-icon" href="../simforta/favicon.ico" />
<link rel="apple-touch-icon" sizes="57x57" href="../simforta/img/favicons/apple-icon-57x57.png">
<link rel="apple-touch-icon" sizes="60x60" href="../simforta/img/favicons//apple-icon-60x60.png">
<link rel="apple-touch-icon" sizes="72x72" href="../simforta/img/favicons/apple-icon-72x72.png">
<link rel="apple-touch-icon" sizes="76x76" href="../simforta/img/favicons/apple-icon-76x76.png">
<link rel="apple-touch-icon" sizes="114x114" href="../simforta/img/favicons/apple-icon-114x114.png">
<link rel="apple-touch-icon" sizes="120x120" href="../simforta/img/favicons/apple-icon-120x120.png">
<link rel="apple-touch-icon" sizes="144x144" href="../simforta/img/favicons/apple-icon-144x144.png">
<link rel="apple-touch-icon" sizes="152x152" href="../simforta/img/favicons/apple-icon-152x152.png">
<link rel="apple-touch-icon" sizes="180x180" href="../simforta/img/favicons/apple-icon-180x180.png">
<link rel="icon" type="image/png" sizes="192x192"  href="../simforta/img/favicons/android-icon-192x192.png">
<link rel="icon" type="image/png" sizes="32x32" href="../simforta/img/favicons/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="96x96" href="../simforta/img/favicons/favicon-96x96.png">
<link rel="icon" type="image/png" sizes="16x16" href="../simforta/img/favicons/favicon-16x16.png">
<link rel="manifest" href="img/favicons/manifest.json">
<meta name="msapplication-TileColor" content="#ffffff">
<meta name="msapplication-TileImage" content="img/favicons/ms-icon-144x144.png">
<meta name="theme-color" content="#ffffff">

<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Simforta</title>

<!-- Vendor CSS -->
{!! Html::style('../simforta/vendors/animate-css/animate.min.css') !!}
<link href='https://fonts.googleapis.com/css?family=Ubuntu:400,400italic,700,700italic' rel='stylesheet' type='text/css'>

<!-- CSS -->
{!! Html::style('../simforta/css/app.min.css') !!}
{!! Html::style('../simforta/css/custom.css') !!}
{!! Html::script('../simforta/js/Imagecow.js') !!}
</head>

<body>
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.5&appId=970920462944136";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<section id="main">
  <section id="content">
    <div class="container">
      <div class="card blog-post">
        <div class="bp-header"> <img src="../../simforta/img/gedung.jpg" alt="">
          <center>
            <a href="#" class="bp-title">
            <h1>SIMFORTA</h1>
            <h2>Sistem Informasi Pertanian</h2>
            </a>
          </center>
        </div>
        <div class="card-body card-padding">
          <form action="/result" method="post">
            <div class="row text-center m-25">
              <div class="col-lg-4 col-md-6 col-xs-12 col-md-offset-3 col-lg-offset-4">
                <div class="input-group"> <span class="input-group-addon"><i class="md md-search"></i></span>
                  <div class="fg-line">
                    <input id="icon_prefix" type="text" name="keyword" class="form-control" placeholder="Cari">
                    <input type="hidden" name="_token" value="{{{ csrf_token() }}}" />
                      
                  
                  </div>
                </div>
              </div>
            </div>
          </form>
          <br>
          <div class="row text-left m-t-25">
            <div class="col-lg-10 col-lg-offset-1">
              <div class="row m-b-25 m-t-25">

                <!-- Content Here -->
                @forelse ($data as $data)
                <h1>{{ $data->document_title }}</h1>
                <div class="col-md-6 col-sm-6">
                  <!--<img src="{{ $data->cover_image }}" width="250px"/>-->
                  <?php 
                  if(!empty($data->cover_image)) {
                    /*$url = ImageHandler::thumb($data->cover_image); */
                    $url = ImageHandler::width($data->cover_image, 250);
                    echo '<img src="'.$url.'" width="250px">';
                  }
                  if(empty($data->cover_image)) {
                    echo '<img src="/cover-logo.png">';
                  }
                   ?>
                  <h3>Oleh {{ $data->writer }}</h3>
                  <p>{{ $data->description }}</p>
                  <p><a href="{{ $data->address }}" target="_blank" class="btn">Unduh / Download File</a></p>
                </div>

                <div class="col-md-6 col-sm-6">
                  <h3>Metadata</h3>
                  <strong>Penerbit : </strong>{{ $data->publisher }}
                  <hr />
                  <strong>Tahun Terbit : </strong>{{ $data->year_published }}
                  <hr />
                  <strong>Tipe File : </strong>{{ $data->file_type }}
                  <hr />
                  <strong>Halaman : </strong>{{ $data->pages }}
                  <hr />
                  <strong>ISBN : </strong>{{ $data->isbn }}
                  <hr />
                  <strong>Ukuran File : </strong>{{ $data->document_size }}
                  <hr />
                  <strong>Ketersediaan : </strong>{{ $data->availability }}
                  <hr />
                </div>
                @empty
                  DATA TIDAK DITEMUKAN
                @endforelse
              </div>
            </div>
            <!-- /.col-lg-10 --> 
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6">
          <div class="card">
            <div class="card-header bgm-cyan">
              <h2>@kementan<small> Akun Twitter Resmi Kementerian Pertanian Republik Indonesia. Dikelola oleh Biro Humas dan Informasi Publik bersama Pusat Data dan Sistem Informasi Pertanian</small></h2>
              <ul class="actions actions-alt">
                <li class="dropdown"> <a href="#" data-toggle="dropdown"> <i class="md md-more-vert"></i> </a>
                  <ul class="dropdown-menu dropdown-menu-right">
                    <li> <a href="https://twitter.com/kementan" role="button" data-scribe="component:followbutton" title="Follow KEMENTAN on Twitter"><i class="ic-button-bird"></i>Follow KEMENTAN on Twitter</a> </li>
                  </ul>
                </li>
              </ul>
            </div>
            <div class="card-body card-padding"> <a class="twitter-timeline" href="https://twitter.com/kementan" data-widget-id="654027964829429760">Tweets by @kementan</a> 
              <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script> 
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="card">
            <div class="card-header bgm-indigo">
              <h2>fb.com/KementanRI<small> Akun Facebook Resmi Kementerian Pertanian Republik Indonesia. Dikelola oleh Biro Umum dan Hubungan Masyarakat bersama Pusat Data dan Sistem Informasi Pertanian</small></h2>
              <ul class="actions actions-alt">
                <li class="dropdown"> <a href="#" data-toggle="dropdown"> <i class="md md-more-vert"></i> </a>
                  <ul class="dropdown-menu dropdown-menu-right">
                    <li> <a href="https://www.facebook.com/kementanRI" role="button" title="Follow KEMENTAN on Twitter"><i class="ic-button-bird"></i>Like KEMENTAN on Facebook</a> </li>
                  </ul>
                </li>
              </ul>
            </div>
            <div class="card-body card-padding">
              <div class="fb-page" data-href="https://www.facebook.com/kementanRI" data-width="500" data-height="604" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true" data-show-posts="true">
                <div class="fb-xfbml-parse-ignore">
                  <blockquote cite="https://www.facebook.com/kementanRI"><a href="https://www.facebook.com/kementanRI">Kementerian Pertanian RI</a></blockquote>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</section>
<footer id="footer"> Copyright &copy;<script>document.write(new Date().getFullYear())</script> Kementerian Pertanian Republik Indonesia </footer>

<!-- Older IE warning message --> 
<!--[if lt IE 9]>
            <div class="ie-warning">
                <h1 class="c-white">IE SUCKS!</h1>
                <p>You are using an outdated version of Internet Explorer, upgrade to any of the following web browser <br/>in order to access the maximum functionality of this website. </p>
                <ul class="iew-download">
                    <li>
                        <a href="http://www.google.com/chrome/">
                            <img src="img/browsers/chrome.png" alt="">
                            <div>Chrome</div>
                        </a>
                    </li>
                    <li>
                        <a href="https://www.mozilla.org/en-US/firefox/new/">
                            <img src="img/browsers/firefox.png" alt="">
                            <div>Firefox</div>
                        </a>
                    </li>
                    <li>
                        <a href="http://www.opera.com">
                            <img src="img/browsers/opera.png" alt="">
                            <div>Opera</div>
                        </a>
                    </li>
                    <li>
                        <a href="https://www.apple.com/safari/">
                            <img src="img/browsers/safari.png" alt="">
                            <div>Safari</div>
                        </a>
                    </li>
                    <li>
                        <a href="http://windows.microsoft.com/en-us/internet-explorer/download-ie">
                            <img src="img/browsers/ie.png" alt="">
                            <div>IE (New)</div>
                        </a>
                    </li>
                </ul>
                <p>Upgrade your browser for a Safer and Faster web experience. <br/>Thank you for your patience...</p>
            </div>   
        <![endif]--> 

<!-- Javascript Libraries --> 
{!! Html::script('../simforta/js/jquery-2.1.1.min.js') !!}
{!! Html::script('../simforta/js/bootstrap.min.js') !!}
{!! Html::script('../simforta/vendors/nicescroll/jquery.nicescroll.min.js') !!}
{!! Html::script('../simforta/vendors/waves/waves.min.js') !!}
{!! Html::script('../simforta/vendors/bootstrap-growl/bootstrap-growl.min.js') !!}
{!! Html::script('../simforta/vendors/sweet-alert/sweet-alert.min.js') !!}
{!! Html::script('../simforta/js/functions.js') !!}

<!-- Modal -->
<div class="modal fade" id="lahan" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-sm">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Lahan &amp; Musim Tanam</h4>
      </div>
      <div class="modal-body">
        <div class="list-group"> <a href="http://katam.litbang.pertanian.go.id" class="list-group-item">Kalender Tanam Terpadu</a> </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-link" data-dismiss="modal">Tutup</button>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="benih" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-sm">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Benih &amp; Pupuk</h4>
      </div>
      <div class="modal-body">
        <div class="list-group"> <a href="http://bibit.ditjennak.pertanian.go.id" class="list-group-item">Direktorat Pembibitan Ternak</a> </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-link" data-dismiss="modal">Tutup</button>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="budidaya" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-sm">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Budidaya</h4>
      </div>
      <div class="modal-body">
        <div class="list-group"> <a href="#" class="list-group-item">Link</a> </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-link" data-dismiss="modal">Tutup</button>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="harga" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-sm">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Harga Pasar</h4>
      </div>
      <div class="modal-body">
        <div class="list-group"> <a href="http://aplikasi.pertanian.go.id/smshargaprov" class="list-group-item">Informasi Harga Komoditas Pertanian Provinsi</a> </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-link" data-dismiss="modal">Tutup</button>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="pembiayaan" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-sm">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Pembiayaan</h4>
      </div>
      <div class="modal-body">
        <div class="list-group"> <a href="#" class="list-group-item">Link</a> </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-link" data-dismiss="modal">Tutup</button>
      </div>
    </div>
  </div>
</div>

</Body>
</html>