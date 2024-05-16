<div class="modal" id="modal-detail-kpi">
    <div class="bg-modal">
        <div class="modal-content">
            <form action="">
                <div class="modal-content-title">Thêm KPI</div>
                <div id="kpi-name" class="form-create-kpi-group flex-full">
                    <label for="">Tên KPI</label>
                    <input value="Học tiếng Anh tại trung tâm" type="text" placeholder="Nhập tên KPI">
                </div>
                <div class="form-create-kpi-group flex-full">
                    <label for="">Mô tả</label>
                    <textarea placeholder="Nhập mô tả cho KPI của bạn" name="" id="" cols="30" rows="10">Học tiếng anh Tại trung tâm tiếng Nhật Dung Mori</textarea>
                </div>
                <div class="form-create-kpi-group flex-half">
                    <label for="">Giá trị mục tiêu</label>
                    <input value="2" type="number" min="0" placeholder="Nhập giá trị mục tiêu của bạn">
                </div>
                <div  class="form-create-kpi-group flex-half">
                    <label for="">Đơn vị đo</label>
                    <select name="" id="">
                        <option value="">Chọn đơn vị đo</option>
                        <option selected value="">Giờ</option>
                        <option value="">Điểm</option>
                    </select>
                </div>
              
                <div class="form-create-kpi-group flex-half">
                    <label for="">Định kỳ</label>
                    <select name="" id="">
                        <option value="">Chọn loại định kỳ</option>
                        <option value="">Hàng ngày</option>
                        <option selected value="">Hàng tuần</option>
                        <option value="">Hàng tháng</option>
                        <option value="">Hàng Kỳ</option>
                    </select>
                </div>
                <div class="form-create-kpi-group flex-half">
                    <label for="">Thời gian bắt đầu</label>
                    <input type="time" value="07:00" placeholder="Chọn thời gian bắt đầu">
                </div>
                <div class="form-create-kpi-group flex-half">
                    <label for="">Thời hạn</label>
                    <input type="date" value="2024-12-20" placeholder="Chọn thời hạn" >
                </div>
                <div class="form-create-kpi-group flex-half">
                    <label for="">Ưu tiên</label>
                    <select name="" id="">
                        <option value="">Chọn độ ưu tiên</option>
                        <option value="" selected>Cao</option>
                        <option value="">Trung bình</option>
                        <option value="">Thấp</option>
                    </select>
                </div>
                <div class="btn-create">
                    <span class="btn-modal btn-close">Đóng</span>
                    <button class="btn-modal btn-add">Cập nhật</button>
                </div>
            </form>
        </div>
    </div>
</div>