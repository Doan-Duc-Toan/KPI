<div class="top-setting-info">
    <div class="setting-avatar">
        <img src="{{ asset('img/images.jpg') }}" alt="">
        <div class="set-avatar">
            <label for="avatar-file"><i class="fa-solid fa-camera"></i></label>
        </div>
        <input type="file" id="avatar-file">
    </div>
    <div class="setting-story">
        <label for="story">Tiểu sử</label>
        <textarea name="" id="story" cols="30" rows="10" placeholder="Nhập tiểu sử của bạn tại đây"></textarea>
    </div>
</div>
<div class="bot-setting-info">
    @include('key_info')
</div>
<div class="setting-info-nav">
    <div class="setting-info-nav-container">
        <div id="key_info" class="setting-info-nav-item">
            <span class="nav-item-active">Thông tin chính</span>
        </div>
        <div id="address" class="setting-info-nav-item">
            <span>Địa chỉ</span>
        </div>
        <div id="contact" class="setting-info-nav-item">
            <span>Liên hệ</span>
        </div>
    </div>
</div>