<footer>
  <div class="footer-social">
    <h3>Social</h3>
    <ul class="footer-social-links">
        <li><a target="_blank" href="{!! $footer_fields->facebook !!}"><i class="icn icn-2 icn-facebook"></i></a></li>
        <li><a target="_blank" href="{!! $footer_fields->linkedin !!}"><i class="icn icn-2 icn-linkedin"></i></a></li>
        {{-- <li><a target="_blank" href="{!! $footer_fields->twitter !!}"><i class="icn icn-2 icn-twitter"></i></a></li>
        <li><a target="_blank" href="{!! $footer_fields->youtube !!}"><i class="icn icn-2 icn-youtube"></i></a></li>
        <li><a target="_blank" href="{!! $footer_fields->instagram !!}"><i class="icn icn-2 icn-instagram"></i></a></li> --}}
    </ul>
  </div>
  <div class="footer-info">
        <a class="logo" href="#top">Grupo Purdy Motor</a>
        <ul class="footer-social-links">
            {{-- <li><a target="_blank" href="{!! $footer_fields->privacy_policy !!}">@php _e('Reglamento') @endphp</a></li> --}}
            <li><a target="_blank" href="{!! $footer_fields->terms_and_conditions !!}">@php _e('Términos y Condiciones') @endphp</a></li>
            <li><a target="_blank" href="{!! $footer_fields->cookies !!}">Cookies</a></li>
        </ul>
        <p class="copy">&copy; Purdy Motor 2019. @php _e('Derechos Reservados') @endphp</p>
  </div>

</footer>
