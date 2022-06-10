<!DOCTYPE html>
<html lang="vi">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>InPhieuKhamGVC</title>
  <style>
    .container {
      padding: 0 0;
      margin: -30px 0;
    }

    body {
      font-family: 'Times New Roman';
      font-size: 8px;
    }

    .table {
      border: 1px solid black;
    }

    .table td,
    .table th {
      border: 1px solid black;
      padding-left: 5px;
    }

    .dottedUnderline {
      border-bottom: 1px dashed black;
      color: transparent;
    }

    .dotted-line {
      white-space: nowrap;
      position: relative;
      overflow: hidden;
    }

    .dotted-line:after {
      content: "................................................................................................................................................................";
      letter-spacing: 3px;
      display: inline-block;
      width: 100%;
    }

    .in-dam {
      font-weight: bold;
    }

    .icon {
      font-family: DejaVu Sans, sans-serif;
    }
  </style>
</head>

<body>
  <div class="container">
    <table style="width:100%">
      <tr>
        <td align="left">
          <div style="text-align: left;">
            <p style="text-align: center;">
              CÔNG TY CỔ PHẦN GIÓNG VIỆT NAM
              <br> <span style="border-bottom: 1px solid black">{{ $tenCoSo }}</span>
            </p>
          </div>
        </td>
        <td align="right">
          <div style="text-align: right;">
            <p style="text-align: center;">
              CỘNG HÒA XÃ HỘI CHỦ NGHĨA VIỆT NAM
              <br>
              <span style="border-bottom: 1px solid black">Độc lập – Tự do – Hạnh phúc</span>

            </p>
          </div>
        </td>
      </tr>
    </table>
    <!-- {{ $kid }} -->
    <div>
      <h4 style="text-align: center; padding: 0 auto;">{{ $kid->tieuDePhieuKham() }}</h4>
      <?php if ($kid->isNguoiLon()) : ?>
        <div>Họ và tên: {{ $kid->HO_TEN }} <span style="float: right;">Nam <?php echo ($kid->GIOI_TINH == '1' ? '<i class="icon">&#9744;</i>' : '<i class="icon">&#9745;</i>') ?> &nbsp; Nữ <?php echo ($kid->GIOI_TINH == '0' ? '<i class="icon">&#9744;</i>' : '<i class="icon">&#9745;</i>') ?></span> </div>
        <?php elseif ($kid->isTreSoSinh()) : ?>
          <div>Họ và tên: {{ $kid->HO_TEN }} <span style="float: right;">Nam <?php echo ($kid->GIOI_TINH == '1' ? '<i class="icon">&#9744;</i>' : '<i class="icon">&#9745;</i>') ?> &nbsp; Nữ <?php echo ($kid->GIOI_TINH == '0' ? '<i class="icon">&#9744;</i>' : '<i class="icon">&#9745;</i>') ?></span> </div>
          <?php else : ?>
            <div>Họ và tên: {{ $kid->HO_TEN }} <span style="margin-left: 100px">Sinh {{ $kid->ngaySinh() }}</span> <span style="float: right;">Nam <?php echo ($kid->GIOI_TINH == '1' ? '<i class="icon">&#9744;</i>' : '<i class="icon">&#9745;</i>') ?> &nbsp; Nữ <?php echo ($kid->GIOI_TINH == '0' ? '<i class="icon">&#9744;</i>' : '<i class="icon">&#9745;</i>') ?></span> </div>
            <?php endif; ?>
      
      <?php if ($kid->isNguoiLon()) : ?>
        <div>Ngày sinh : {{ $kid->ngaySinhToString() }}</div>
        <div>Điện thoại: {{ $kid->soDienThoai() }} </div>

        <?php elseif ($kid->isTreSoSinh()) : ?>
          <div>Sinh….........giờ ………… {{ $kid->ngaySinh() }}</div>
          <div>Tuổi thai khi sinh........................................................................................</div>
          <div>{{ $kid->tenMe() }}<span style="margin-left: 20px">Điện thoại: {{ $kid->soDienThoai() }} </div>

        <?php else : ?>
          <!-- <div>Sinh {{ $kid->ngaySinh() }}</div> -->
          <div>{{ $kid->tenMe() }}<span style="float: right; margin-right: 170px;">Điện thoại: {{ $kid->soDienThoai() }} </div>
        <?php endif; ?>

        <div>Địa chỉ: {{ $kid->DIA_CHI }}</div>
        <?php if ($kid->isNguoiLon()) : ?>
          <div>{{ $kid->gioTiem() }}</div>
        <?php endif; ?>
        <div>Cân nặng: ....................... kg <span style="margin-left: 20px;"> Nhiệt độ: ................. °C</span>
        </div>
        <div style="display: block; position: absolute; width: 188px; top: 60px; left: 290px; ">
        <div style="text-align: center;">
        <div>{{ $kid->HO_TEN }}</div>
        {!! DNS1D::getBarcodeHTML($kid->MA_DOI_TUONG, "C128",1.4,22) !!}
        <div>{{ $kid->MA_DOI_TUONG}}</div>
        </div>
        </div>
        <?php if ($kid->isTreSoSinh()) : ?>
          <div>Mẹ đã xét nghiệm HbsAg:&nbsp; &nbsp;&nbsp; &nbsp; Không <i class="icon">&#9744;</i>&nbsp; &nbsp; Có <i class="icon">&#9744;</i>
          </div>
          <div>Kết quả:&nbsp; &nbsp;&nbsp; &nbsp; Dương tính <i class="icon">&#9744;</i> &nbsp; &nbsp; Âm tính <i class="icon">&#9744;</i></div>
        <?php endif; ?>
        <div class="in-dam" style="padding-top: 5px;">1. Khám sàng lọc</div>
        <table style="width:100%; border-collapse: collapse;" class="table">
          <thead>
            <tr>
              <th>STT</th>
              <th>Nội dung</th>
              <th>Không</th>
              <th>&nbsp;Có &nbsp;</th>
            </tr>
          </thead>
          <tbody>
            <?php if ($kid->isNguoiLon()) : ?>
              <tr>
                <td align="center">1</td>
                <td>Sốc, phản ứng nặng sau lần tiêm trước</td>
                <td align="center" class="icon">&#9744;</td>
                <td align="center" class="icon">&#9744; </td>
              </tr>
              <tr>
                <td align="center">2</td>
                <td>Đang mắc bệnh cấp tính hoặc bệnh mãn tính tiến triển</td>
                <td align="center" class="icon">&#9744;</td>
                <td align="center" class="icon">&#9744; </td>
              </tr>
              <tr>
                <td align="center">3</td>
                <td>Đang hoặc mới kết thúc đợt điều trị corticoid/ gammaglobuli</td>
                <td align="center" class="icon">&#9744;</td>
                <td align="center" class="icon">&#9744; </td>
              </tr>
              <tr>
                <td align="center">4</td>
                <td>Sốt/Hạ thân Nhiệt: + Sốt: nhiệt độ &#62; 37,5oC;
                  + Hạ thân nhiệt: nhiệt độ &#60; 35,5oC.</td>
                <td align="center" class="icon">&#9744;</td>
                <td align="center" class="icon">&#9744; </td>
              </tr>
              <tr>
                <td align="center">5</td>
                <td>Nghe tim bất thường</td>
                <td align="center" class="icon">&#9744;</td>
                <td align="center" class="icon">&#9744; </td>
              </tr>
              <tr>
                <td align="center">6</td>
                <td>Nhịp thở bất thường</td>
                <td align="center" class="icon">&#9744;</td>
                <td align="center" class="icon">&#9744; </td>
              </tr>
              <tr>
                <td align="center">7</td>
                <td>Tri giác bất thường( li bì hoặc kích thích)</td>
                <td align="center" class="icon">&#9744;</td>
                <td align="center" class="icon">&#9744; </td>
              </tr>


            <?php elseif ($kid->isTreSoSinh()) : ?>
              <tr class="in-dam">
                <td align="center"><em>1.1</em></td>
                <td colspan="3"><em> Chống chỉ định</em></td>
              </tr>
              <tr>
                <td align="center">a</td>
                <td>Không tiêm vắc-xin BCG cho trẻ sinh ra từ mẹ nhiễm HIV mà mẹ không được điều trị dự phòng tốt lây truyền từ mẹ sang con.</td>
                <td align="center" class="icon">&#9744;</td>
                <td align="center" class="icon">&#9744; </td>
              </tr>
              <tr>
                <td align="center">b</td>
                <td>Các trường hợp chống chỉ định khác theo hướng dẫn của nhà sản xuất:...........................................</td>
                <td align="center" class="icon">&#9744;</td>
                <td align="center" class="icon">&#9744; </td>
              </tr>
              <tr class="in-dam">
                <td align="center"><em>1.2</em></td>
                <td colspan="3"><em> Các trường hợp tạm hoãn</em></td>
              </tr>
              <tr>
                <td align="center">a</td>
                <td>Suy chức năng các cơ quan (như suy hô hấp, suy tuần hoàn, suy tim, suy thận, suy gan, hôn mê...)</td>
                <td align="center" class="icon">&#9744;</td>
                <td align="center" class="icon">&#9744; </td>
              </tr>
              <tr>
                <td align="center">b</td>
                <td>Mắc các bệnh cấp tính, các bệnh nhiễm trùng, các bệnh mạn tính tiến triển</td>
                <td align="center" class="icon">&#9744;</td>
                <td align="center" class="icon">&#9744; </td>
              </tr>
              <tr>
                <td align="center">c</td>
                <td>Sốt ≥ 37,5°C hoặc hạ thân nhiệt ≤ 35,5°C)</td>
                <td align="center" class="icon">&#9744;</td>
                <td align="center" class="icon">&#9744; </td>
              </tr>
              <tr>
                <td align="center">d</td>
                <td>Cân nặng &lt 2000g mà mẹ có HbsAg (-)</td>
                <td align="center" class="icon">&#9744;</td>
                <td align="center" class="icon">&#9744; </td>
              </tr>
              <tr>
                <td align="center">e</td>
                <td>Trẻ sinh non có tuổi thai &lt; 34 tuần</td>
                <td align="center" class="icon">&#9744;</td>
                <td align="center" class="icon">&#9744; </td>
              </tr>
              <tr>
                <td align="center">f</td>
                <td>Có trường hợp tạm hoãn tiêm chủng khác theo hướng dẫn của nhà sản xuất:........................................</td>
                <td align="center" class="icon">&#9744;</td>
                <td align="center" class="icon">&#9744; </td>
              </tr>
              <tr>
                <td align="center">g</td>
                <td>Trẻ mắc các bệnh tim bẩm sinh có tang áp lực động mạch phổi(>=40mmHg) hoặc mắc các bệnh mãn tính ở tim, phổi, tiêu hóa, tiết niệu, máu, thần kinh,..........</td>
                <td align="center" class="icon">&#9744;</td>
                <td align="center" class="icon">&#9744; </td>
              </tr>
              <tr>
                <td align="center">h</td>
                <td>Khóc bé hoặc không khóc</td>
                <td align="center" class="icon">&#9744;</td>
                <td align="center" class="icon">&#9744; </td>
              </tr>
              <tr>
                <td align="center">i</td>
                <td>Da, môi không hồng</td>
                <td align="center" class="icon">&#9744;</td>
                <td align="center" class="icon">&#9744; </td>
              </tr>
              <tr>
                <td align="center">j</td>
                <td>Bú kém hoặc bỏ bú</td>
                <td align="center" class="icon">&#9744;</td>
                <td align="center" class="icon">&#9744; </td>
              </tr>

            <?php else : ?>
              <tr class="in-dam">
                <td align="center"><em>1.1</em></td>
                <td colspan="3"><em> Chống chỉ định</em></td>
              </tr>
              <tr>
                <td align="center">a</td>
                <td>Có tiền sử sốc/phản ứng nặng sau tiêm chủng vắc-xin lần trước (có cùng thành phần): sốt trên 39oC kèm co giật hoặc dấu hiệu não/màng não, tím tái, khó thở</td>
                <td align="center" class="icon">&#9744;</td>
                <td align="center" class="icon">&#9744; </td>
              </tr>
              <tr>
                <td align="center">b</td>
                <td>Suy giảm miễn dịch (bệnh suy giảm miễn dịch bẩm sinh, trẻ nhiễm HIV giai đoạn lâm sàng IV hoặc có biểu hiện suy giảm miễn dịch nặng) chống chỉ định tiêm chủng các vắc-xin sống giảm động lực</td>
                <td align="center" class="icon">&#9744;</td>
                <td align="center" class="icon">&#9744; </td>
              </tr>
              <tr>
                <td align="center">c</td>
                <td>Các trường hợp chống chỉ định khác theo hướng dẫn của nhà sản xuất:
                  <div class="dotted-line">
                  </div>
                </td>
                <td align="center" class="icon">&#9744;</td>
                <td align="center" class="icon">&#9744; </td>
              </tr>
              <tr class="in-dam">
                <td align="center"><em>1.2</em></td>
                <td colspan="3"><em>Các trường hợp tạm hoãn</em></td>
              </tr>
              <tr>
                <td align="center">a</td>
                <td>Suy chức năng các cơ quan (như suy hô hấp, suy tuần hoàn, suy tim, suy thận, suy gan, hôn mê...)
                </td>
                <td align="center" class="icon">&#9744;</td>
                <td align="center" class="icon">&#9744; </td>
              </tr>
              <tr>
                <td align="center">b</td>
                <td>Mắc các bệnh cấp tính, các bệnh nhiễm trùng, các bệnh mạn tính tiến triển
                </td>
                <td align="center" class="icon">&#9744;</td>
                <td align="center" class="icon">&#9744; </td>
              </tr>
              <tr>
                <td align="center">c</td>
                <td>Sốt ≥ 37,5°C hoặc hạ thân nhiệt ≤ 35,5°C)
                </td>
                <td align="center" class="icon">&#9744;</td>
                <td align="center" class="icon">&#9744; </td>
              </tr>
              <tr>
                <td align="center">d</td>
                <td>Trẻ mới dùng các sản phẩm globulin miễn dịch trong vòng 3 tháng (trừ kháng huyết thanh viêm gan B)
                </td>
                <td align="center" class="icon">&#9744;</td>
                <td align="center" class="icon">&#9744; </td>
              </tr>
              <tr>
                <td align="center">e</td>
                <td>Trẻ đang hoặc mới kết thúc đợt điều trị corticoid (uống, tiêm) liều cao (tương đương prednison >2mg/kg/ngày), hóa trị, xạ trị, gammaglobulin
                </td>
                <td align="center" class="icon">&#9744;</td>
                <td align="center" class="icon">&#9744; </td>
              </tr>
              <tr>
                <td align="center">g</td>
                <td>Cân nặng < 2000g </td>
                <td align="center" class="icon">&#9744;</td>
                <td align="center" class="icon">&#9744; </td>
              </tr>
              <tr>
                <td align="center">h</td>
                <td>Có tiền sử phản ứng tăng dần sau các lần tiêm chủng trước của cùng loại vắc-xin (VD: lần đầu không sốt, lần sau sốt cao trên 39oC...)
                </td>
                <td align="center" class="icon">&#9744;</td>
                <td align="center" class="icon">&#9744; </td>
              </tr>
              <tr>
                <td align="center">i</td>
                <td>Các trường hợp tạm hoãn tiêm chủng khác theo hướng dẫn của nhà sản xuất:
                  <div class="dotted-line">
                </td>
                <td align="center" class="icon">&#9744;</td>
                <td align="center" class="icon">&#9744; </td>
              </tr>
            <?php endif; ?>
          </tbody>

        </table>

        <?php if ($kid->isNguoiLon()) : ?>
          <div class="in-dam">2. Kết luận: <em>Đủ điều kiện tiêm chủng ngay</em>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp;&nbsp;&nbsp; &nbsp; <span>Không <i class="icon">&#9744;</i> &nbsp; &nbsp; &nbsp; Có <i class="icon">&#9744;</i></span></div>
          <!-- <div><strong>- Đủ điều kiện tiêm chủng ngay </strong> (Tất cả đều <strong>KHÔNG</strong> có điểm bất thường) &nbsp; &nbsp; &nbsp;<i class="icon">&#9744;</i></div> -->
          <div>Loại vắc xin tiêm chủng:
          </div>
          <div class="dotted-line">
          </div>
          <div class="dotted-line">
          </div>
          <div class="dotted-line">
          </div>
          <div>- Chống chỉ định tiêm chủng (Khi <strong>CÓ</strong> điểm bất thường tại mục 1) &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; <span>Không <i class="icon">&#9744;</i> &nbsp; &nbsp; Có <i class="icon">&#9744;</i></span></div>
          <div>- Tạm hoãn tiêm chủng (Khi <strong>CÓ</strong> bất kỳ một điểm bất thường tại mục 2,3,4,5,6,7) &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; <span>Không <i class="icon">&#9744;</i> &nbsp; &nbsp; Có <i class="icon">&#9744;</i></span></div>
          <div class="in-dam">3. Thực hiện tiêm</div>

          <div class="dotted-line">- Giờ tiêm:
          </div>

          <div class="dotted-line">- Người tiêm:
          </div>
          <table style="width:100%">
            <tr>
              <td align="left">
                <div style="text-align: left;">
                  <p style="text-align: center;">
                    <strong>Cha mẹ/người chăm sóc/khách hàng:</strong> <br> đã được bác sỹ tư vấn và đồng ý tiêm chủng <br> (ký, họ tên)
                  </p>
                </div>
              </td>
              <td align="right">
                <div style="text-align: right;">
                  <p style="text-align: center;">
                    <strong>Người thực hiện sàng lọc</strong> <br>

                    (ký,ghi rõ họ tên)
                  </p>
                </div>
              </td>
            </tr>
          </table>

        <?php elseif ($kid->isTreSoSinh()) : ?>
          <div><strong>2. Khám sàng lọc theo chuyên khoa:</strong> <span style="margin-left: 50px;">Không <i class="icon">&#9744;</i> &nbsp; &nbsp; Có <i class="icon">&#9744;</i></span> chuyên khoa: ................</div>

          <div>+ Lý do:.............................................................................................................</div>

          <div>+ Kết quả: ..........................................................................................................</div>

          <div>+Kết luận:...........................................................................................................</div>
          <div><strong>3. Kết luận</strong></div>
          <div><strong>- Đủ điều kiện tiêm chủng ngay </strong> (Tất cả đều <strong>KHÔNG</strong> có điểm bất thường) &nbsp; &nbsp; &nbsp;<i class="icon">&#9744;</i></div>
          <div>Loại vắc xin tiêm chủng:
          </div>
          <div class="dotted-line">
          </div>
          <div class="dotted-line">
          </div>
          <div class="dotted-line">
          </div>
          <div class="dotted-line">
          </div>
          <div class="dotted-line">
          </div>
          <div>- Chống chỉ định tiêm chủng (Khi <strong>CÓ</strong> điểm bất thường tại mục 1.1) &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; <span>Không <i class="icon">&#9744;</i> &nbsp; &nbsp; Có <i class="icon">&#9744;</i></span></div>
          <div>- Tạm hoãn tiêm chủng (Khi <strong>CÓ</strong> bất kỳ một điểm bất thường tại mục 1.2) &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; <span>Không <i class="icon">&#9744;</i> &nbsp; &nbsp; Có <i class="icon">&#9744;</i></span></div>
          <div>Lý do:.....................................................................................................................</div>

          <div>- Đề nghị khám sàng lọc tại bệnh viện: <span style="margin-left: 50px;">Không <i class="icon">&#9744;</i> &nbsp; &nbsp; Có <i class="icon">&#9744;</i></span></div>
          <div style="text-align: right;padding-top: 10px;"><em>{{ $kid->gioTiem() }}</em></div>
          <table style="width:100%">
            <tr>
              <td align="left">
                <div style="text-align: left;">
                  <p style="text-align: center;">
                    <strong>Cha mẹ/người chăm sóc/khách hàng:</strong> <br> đã được bác sỹ tư vấn và đồng ý tiêm chủng <br> (ký, họ tên)
                  </p>
                </div>
              </td>
              <td align="right">
                <div style="text-align: right;">
                  <p style="text-align: center;">
                    <strong>Người thực hiện sàng lọc</strong> <br>

                    (ký,ghi rõ họ tên)
                  </p>
                </div>
              </td>
            </tr>
          </table>

          <div class="in-dam" style="padding-top: 100px;">4. Thực hiện tiêm</div>

          <div class="dotted-line">- Giờ tiêm:
          </div>

          <div class="dotted-line">- Người tiêm:
          </div>

        <?php else : ?>
          <div class="in-dam">2. Kết luận: <em>Đủ điều kiện tiêm chủng ngay</em>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp;&nbsp;&nbsp; &nbsp; <span>Không <i class="icon">&#9744;</i> &nbsp; &nbsp; &nbsp; Có <i class="icon">&#9744;</i></span></div>

          <!-- <div><strong>- Đủ điều kiện tiêm chủng ngay </strong> (Tất cả đều <strong>KHÔNG</strong> có điểm bất thường) &nbsp;&nbsp;&nbsp; <i class="icon">&#9744;</i></div> -->

          <div>Loại vắc xin tiêm chủng:
          </div>
          <div class="dotted-line">
          </div>
          <div class="dotted-line">
          </div>
          <div class="dotted-line">
          </div>
          <div class="dotted-line">
          </div>

          <div>- Chống chỉ định tiêm chủng (Khi <strong>CÓ</strong> điểm bất thường tại mục 1.1) &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; <span>Không <i class="icon">&#9744;</i> &nbsp; &nbsp; Có <i class="icon">&#9744;</i></span></div>

          <div>- Tạm hoãn tiêm chủng (Khi <strong>CÓ</strong> bất kỳ một điểm bất thường tại mục 1.2) &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp;   <span>Không <i class="icon">&#9744;</i> &nbsp; &nbsp; Có <i class="icon">&#9744;</i></span></div>

          <div>- Đề nghị khám sàng lọc tại bệnh viện: <span style="margin-left: 50px;">Không <i class="icon">&#9744;</i> &nbsp; &nbsp; Có <i class="icon">&#9744;</i></span> <span style="margin-left: 50px;">Lý do: ..........................................</span> </div>
          <div style="padding-top: 5px;"><em>{{ $kid->gioTiem() }}</em></div>
          <table style="width:100%">
            <tr>
              <td align="left">
                <div style="text-align: left;">
                  <p style="text-align: center;">
                    <strong>Cha mẹ/người chăm sóc/khách hàng:</strong> <br> đã được bác sỹ tư vấn và đồng ý tiêm chủng <br> (ký, họ tên)
                  </p>
                </div>
              </td>
              <td align="right">
                <div style="text-align: right;">
                  <p style="text-align: center;">
                    <strong>Người thực hiện sàng lọc</strong> <br>

                    (ký,ghi rõ họ tên)
                  </p>
                </div>
              </td>
            </tr>
          </table>

          <div class="in-dam" style="padding-top: 70px;">3. Thực hiện tiêm</div>

          <div class="dotted-line">- Giờ tiêm:
          </div>

          <div class="dotted-line">- Người tiêm:
          </div>
        <?php endif; ?>


</body>

</html>