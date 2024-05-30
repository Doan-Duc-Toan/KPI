<div class="modal" id="modal-detail-kpi">
    <div class="bg-modal">
        <div class="modal-content">
            <form action="">
                <div class="modal-content-title"><span>Chi tiết KPI</span> <div class="checkbox-wrapper-12">
                    <div class="cbx">
                      <input id="cbx-12" type="checkbox"/>
                      <label for="cbx-12"></label>
                      <svg width="15" height="14" viewbox="0 0 15 14" fill="none">
                        <path d="M2 8.36364L6.23077 12L13 2"></path>
                      </svg>
                    </div>
                    <!-- Gooey-->
                    <svg xmlns="http://www.w3.org/2000/svg" version="1.1">
                      <defs>
                        <filter id="goo-12">
                          <fegaussianblur in="SourceGraphic" stddeviation="4" result="blur"></fegaussianblur>
                          <fecolormatrix in="blur" mode="matrix" values="1 0 0 0 0  0 1 0 0 0  0 0 1 0 0  0 0 0 22 -7" result="goo-12"></fecolormatrix>
                          <feblend in="SourceGraphic" in2="goo-12"></feblend>
                        </filter>
                      </defs>
                    </svg>
                  </div>
                </div>

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
                <div class="form-create-kpi-group flex-half">
                    <label for="">Đơn vị đo  <span class="add_unit" style="cursor: pointer">+</span></label>
                    <select class="select_unit" name="" id="">
                        <option value="">Chọn đơn vị đo</option>
                        <option selected value="">Giờ</option>
                        <option value="">Điểm</option>
                    </select>
                    <input class="input_unit" type="text" placeholder="Nhập đơn vị đo mới">
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
                    <input type="date" value="2024-12-20" placeholder="Chọn thời hạn">
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
