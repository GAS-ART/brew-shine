@section('footer')
<footer id="contacts" class="site-footer">
    <div class="container footer-inner">
        <p>@lang('footer.title')</p>

        <div class="footer-contacts">
            <p>@lang('footer.address')</p>
            <p>@lang('footer.phone') <a href="tel:@lang('contacts.phone1_href')">@lang('contacts.phone1')</a> |
               <a href="tel:@lang('contacts.phone2_href')">@lang('contacts.phone2')</a></p>
            <p>📧 Email: <a href="mailto:@lang('contacts.email')">@lang('contacts.email')</a></p>
        </div>

        <div class="footer-socials">
            <a href="https://www.facebook.com/brewshine25" target="_blank" rel="noopener">Facebook</a> |
            <a href="https://www.instagram.com/brewshine25" target="_blank" rel="noopener">Instagram</a>
        </div>
    </div>
</footer>

