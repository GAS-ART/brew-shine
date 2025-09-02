@section('popup')
<div class="popup" id="popup">
    <div class="popup-content">
        <button class="popup-close" id="popupClose">&times;</button>
        <h2>@lang('popup.title')</h2>
        <form class="popup-form" method="POST" action="{{ route('sendMainForm', ['locale' => app()->getLocale()]) }}" data-lang="@lang('lang.current')">
            @csrf
            <div class="form-group">
                <input type="text" name="name" placeholder="@lang('popup.name')" required>
                <p class="error"></p>
            </div>
            <div class="form-group">
                <input type="text" name="phone" placeholder="+{373}00-000-000" required>
                <p class="error"></p>
            </div>
            <div class="form-group">
                <textarea name="text" placeholder="@lang('popup.message')"></textarea>
                <p class="error"></p>
            </div>
            <button type="submit" class="btn">@lang('popup.btn')</button>
        </form>
    </div>
</div>

