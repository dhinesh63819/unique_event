<link
rel="icon"
href={{url('/img/admin/kaiadmin/favicon.ico')}}
type="image/x-icon"
/>

<!-- Fonts and icons -->
<script src={{url('/js/admin/plugin/webfont/webfont.min.js')}}></script>
<!-- <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet"> -->
    <script>
      WebFont.load({
        google: { families: ["Public Sans:300,400,500,600,700"] },
        custom: {
          families: [
            "Font Awesome 5 Solid",
            "Font Awesome 5 Regular",
            "Font Awesome 5 Brands",  
            "simple-line-icons",
          ],
          urls: ['https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css'],
          // urls: ['../../../css/fonts.min.css'],
        },
        active: function () {
          sessionStorage.fonts = true;
        },
      });
    </script>

    <!-- "assets/css/fonts.min.css" -->
    <!-- D:\job\manup-master\resources\css\fonts.min.css -->


    <!-- CSS Files -->
    <link rel="stylesheet" href={{url('/css/admin/bootstrap.min.css')}} />
    <link rel="stylesheet" href={{url('/css/admin/plugins.min.css')}}/>
    <link rel="stylesheet" href={{url('/css/admin/kaiadmin.min.css')}} />

    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link rel="stylesheet" href={{url('/css/admin/demo.css')}}/>