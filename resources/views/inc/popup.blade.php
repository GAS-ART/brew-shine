@section('popup')
<div class="popup" id="popup">
    <div class="popup-content">
        <button class="popup-close" id="popupClose">&times;</button>
        <h2>Закажите консультацию</h2>
        <form class="popup-form">
            <div class="form-group">
                <input type="text" name="name" placeholder="Ваше имя" required>
            </div>
            <div class="form-group">
                <input type="text" name="phone" placeholder="Ваш номер телефона" required>
            </div>
            <div class="form-group">
                <textarea name="message" placeholder="Ваше сообщение"></textarea>
            </div>
            <button type="submit" class="btn">Заказать консультацию</button>
        </form>
    </div>
</div>

