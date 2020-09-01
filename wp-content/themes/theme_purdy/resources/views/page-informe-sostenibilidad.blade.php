{{--
Template Name: Informe Sostenibilidad
--}}

@php global $post; @endphp 
@php 
  $getReports = PageInformeSostenibilidad::getReports();
  $file = $getReports->sustainability_page_reports['report_actual_file'];
@endphp

<!DOCTYPE html>
<html>

<head>
    <title>Memoria de Sostenibilidad | Toyota Costa Rica</title>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.js"></script>

    <link rel="stylesheet" type="text/css" href="{{get_theme_root_uri()}}/theme_purdy/dist/styles/main.css">

    <style>
        .flipbook-icon-general {
            color: #FFF;
        }
        .flipbook-menu, .flipbook-currentPageNumber, #back {
            background-color: #D71921;
            color: #FFF;
        }
        #back {
            position: fixed;
            z-index: 10;
            top: 5px;
            right: 5px;
            border-radius: 15px;
            display: block;
            padding: 10px;
            text-decoration: none;
            font: bold 14px/14px 'Open Sans','Helvetica Neue', Arial, sans-serif;
        }
    </style>

    <script src="{{get_template_directory_uri()}}/assets/scripts/util/flipbook.min.js"></script>

    <script type="text/javascript">

        $(document).ready(function () {
            $("#container").flipBook({
                pdfUrl: "{{ $file }}",
                assets: {
                    flipMp3: "{{get_template_directory_uri()}}/assets/mp3/turnPage.mp3" 
                },
                deeplinking:{
                    enabled:true,
                    prefix:""
                },
                btnDownloadPages: {
                    enabled: true,
                    title: "Download pages",
                    icon: "fa-download",
                    url: "{{ $file }}",
                },

            });

        })
    </script>

</head>

<body>

<a href="/sostenibilidad" id="back">Volver al sitio</a>
<div id="container"></div>

</body>

</html>

