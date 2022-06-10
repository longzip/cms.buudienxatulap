<!DOCTYPE html>
<html lang="vi">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>InPhieuNopTienDien</title>
  <style>
    .container {
      padding: 0 0;
      margin: -30px 0;
    }

    body {
      font-family: 'Times New Roman';
      font-size: 14px;
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
    <?php 

    ?>
  <div class="container">
    <table style="width:100%">
      <tr>
        <td align="left">
          <div style="text-align: left;">
            <p style="text-align: left; font-size: 12px;">
              BƯU ĐIỆN THÀNH PHỐ HÀ NỘI<br>BƯU ĐIỆN HUYỆN MÊ LINH
              <br> <span style="border-bottom: 1px solid black"></span>
            </p>
          </div>
        </td>
        <td align="right">
          <!-- <div style="text-align: right;">
            <p style="text-align: center;">
              CỘNG HÒA XÃ HỘI CHỦ NGHĨA VIỆT NAM
              <br>
              <span style="border-bottom: 1px solid black">Độc lập – Tự do – Hạnh phúc</span>

            </p>
          </div> -->
        </td>
      </tr>
    </table>
    <div>
      <h4 style="text-align: center; margin-bottom: 5px; font-size: 18px;">GIẤY NỘP TIỀN MẶT</h4>
      <p style="text-align: center; font-size: 12px;">Ngày {{date("d")}} tháng {{date("m")}} năm {{date("Y")}}</p>
    </div>
    <div>
        <p>Họ và tên người nộp: Hồ Thị Thắm
        <br>Đơn vị: VHX Tự Lập - Bưu Điện huyện Mê Linh</p>
    </div>
    <div>
        <table style="border-collapse: collapse; width: 100%;" border="1">
        <tbody>
        <tr>
        <td style="width: 9.21053%; text-align: center;">STT</td>
        <td style="width: 40.7895%; text-align: center;">NỘI DUNG</td>
        <td style="width: 25%; text-align: center;">SỐ TIỀN</td>
        <td style="width: 25%; text-align: center;">GHI CH&Uacute;</td>
        </tr>
        <tr>
            <td style="width: 9.21053%; text-align: center;">1</td>
            <td style="width: 40.7895%;">Nộp tiền BHYT</td>
            <td style="width: 25%; text-align: center;">{{ number_format($tienBHYT, 0, ',', '.') }}</td>
            <td style="width: 25%;">&nbsp;</td>
        </tr>
        <tr>
            <td style="width: 9.21053%; text-align: center;">1</td>
            <td style="width: 40.7895%;">Nộp tiền BHXH</td>
            <td style="width: 25%; text-align: center;">{{ number_format($tienBHXH, 0, ',', '.') }}</td>
            <td style="width: 25%;">&nbsp;</td>
        </tr>
        <tr>
        <td style="width: 9.21053%; text-align: center;" colspan="2">Tổng tiền</td>
        <td style="width: 25%; text-align: center;">{{ number_format($tienBHYT+$tienBHXH, 0, ',', '.') }}</td>
        <td style="width: 25%;">&nbsp;</td>
        </tr>
        </tbody>
        </table>
        <p>Bằng chữ: {{ convert_number_to_words($tienBHYT) }} đồng!</p>
        <table style="width:100%">
            <tr>
                <td style="width: 50%;">
                    
                </td>
                <td align="right">
                    <div style="text-align: center;">
                        <p style="margin-bottom: 70px;">Người nộp tiền</p>
                        <p>Hồ Thị Thắm</p>
                    </div>
                </td>
            </tr>
        </table>
    </div>
    <div>
        <h4 style="text-align: center; ">Bảng kê các loại tiền nộp</h4>
        <table style="border-collapse: collapse; width: 100%; height: 216px;" border="1">
<tbody>
<tr style="height: 18px;">
<td style="width: 11.8909%; text-align: center;">TT</td>
<td style="width: 30.4093%; text-align: center; height: 18px;">Loại Tiền</td>
<td style="width: 17.7388%; text-align: center; height: 18px;">Số Tờ</td>
<td style="width: 23.2944%; text-align: center; height: 18px;">Th&agrave;nh Tiền</td>
<td style="width: 16.6667%; text-align: center;">Ghi Ch&uacute;</td>
</tr>
<tr style="height: 18px;">
<td style="width: 11.8909%; text-align: center;">1</td>
<td style="width: 30.4093%; text-align: right; height: 18px; padding-right: 70px;">500.000</td>
<td style="width: 17.7388%; text-align: center; height: 18px;">{{ $bangKe['t500'] }}</td>
<td style="width: 23.2944%; text-align: center; height: 18px;">{{ number_format(500000*$bangKe['t500'], 0, ',', '.') }}</td>
<td style="width: 16.6667%; text-align: center;">&nbsp;</td>
</tr>
<tr style="height: 18px;">
<td style="width: 11.8909%; text-align: center;">2</td>
<td style="width: 30.4093%; text-align: right; height: 18px; padding-right: 70px;">200.000</td>
<td style="width: 17.7388%; text-align: center; height: 18px;">{{ $bangKe['t200'] }}</td>
<td style="width: 23.2944%; text-align: center; height: 18px;">{{ number_format(200000*$bangKe['t200'], 0, ',', '.') }}</td>
<td style="width: 16.6667%; text-align: center;">&nbsp;</td>
</tr>
<tr style="height: 18px;">
<td style="width: 11.8909%; text-align: center;">3</td>
<td style="width: 30.4093%; text-align: right; height: 18px; padding-right: 70px;">100.000</td>
<td style="width: 17.7388%; text-align: center; height: 18px;">{{ $bangKe['t100'] }}</td>
<td style="width: 23.2944%; text-align: center; height: 18px;">{{ number_format(100000*$bangKe['t100'], 0, ',', '.') }}</td>
<td style="width: 16.6667%; text-align: center;">&nbsp;</td>
</tr>
<tr style="height: 18px;">
<td style="width: 11.8909%; text-align: center;">4</td>
<td style="width: 30.4093%; text-align: right; height: 18px; padding-right: 70px;">50.000</td>
<td style="width: 17.7388%; text-align: center; height: 18px;">{{ $bangKe['t50'] }}</td>
<td style="width: 23.2944%; text-align: center; height: 18px;">{{ number_format(50000*$bangKe['t50'], 0, ',', '.') }}</td>
<td style="width: 16.6667%; text-align: center;">&nbsp;</td>
</tr>
<tr style="height: 18px;">
<td style="width: 11.8909%; text-align: center;">5</td>
<td style="width: 30.4093%; text-align: right; height: 18px; padding-right: 70px;">20.000</td>
<td style="width: 17.7388%; text-align: center; height: 18px;">{{ $bangKe['t20'] }}</td>
<td style="width: 23.2944%; text-align: center; height: 18px;">{{ number_format(20000*$bangKe['t20'], 0, ',', '.') }}</td>
<td style="width: 16.6667%; text-align: center;">&nbsp;</td>
</tr>
<tr style="height: 18px;">
<td style="width: 11.8909%; text-align: center;">6</td>
<td style="width: 30.4093%; text-align: right; height: 18px; padding-right: 70px;">10.000</td>
<td style="width: 17.7388%; text-align: center; height: 18px;">{{ $bangKe['t10'] }}</td>
<td style="width: 23.2944%; text-align: center; height: 18px;">{{ number_format(10000*$bangKe['t10'], 0, ',', '.') }}</td>
<td style="width: 16.6667%; text-align: center;">&nbsp;</td>
</tr>
<tr style="height: 18px;">
<td style="width: 11.8909%; text-align: center;">7</td>
<td style="width: 30.4093%; text-align: right; height: 18px; padding-right: 70px;">5.000</td>
<td style="width: 17.7388%; text-align: center; height: 18px;">{{ $bangKe['t5'] }}</td>
<td style="width: 23.2944%; text-align: center; height: 18px;">{{ number_format(5000*$bangKe['t5'], 0, ',', '.') }}</td>
<td style="width: 16.6667%; text-align: center;">&nbsp;</td>
</tr>
<tr style="height: 18px;">
<td style="width: 11.8909%; text-align: center;">8</td>
<td style="width: 30.4093%; text-align: right; height: 18px; padding-right: 70px;">2.000</td>
<td style="width: 17.7388%; text-align: center; height: 18px;">{{ $bangKe['t2'] }}</td>
<td style="width: 23.2944%; text-align: center; height: 18px;">{{ number_format(2000*$bangKe['t2'], 0, ',', '.') }}</td>
<td style="width: 16.6667%; text-align: center;">&nbsp;</td>
</tr>
<tr style="height: 18px;">
<td style="width: 11.8909%; text-align: center;">9</td>
<td style="width: 30.4093%; text-align: right; height: 18px; padding-right: 70px;">1.000</td>
<td style="width: 17.7388%; text-align: center; height: 18px;">{{ $bangKe['t1'] }}</td>
<td style="width: 23.2944%; text-align: center; height: 18px;">{{ number_format(1000*$bangKe['t1'], 0, ',', '.') }}</td>
<td style="width: 16.6667%; text-align: center;">&nbsp;</td>
</tr>
<tr style="height: 18px;">
<td style="width: 11.8909%; text-align: center;"><strong>&nbsp;</strong></td>
<td style="width: 30.4093%; text-align: right; height: 18px;"><strong>Tổng cộng</strong></td>
<td style="width: 17.7388%; text-align: center; height: 18px;">&nbsp;</td>
<td style="width: 23.2944%; text-align: center; height: 18px;">{{ number_format(500000*$bangKe['t500']+200000*$bangKe['t200']+100000*$bangKe['t100']+50000*$bangKe['t50']+20000*$bangKe['t20']+10000*$bangKe['t10']+5000*$bangKe['t5']+2000*$bangKe['t2']+1000*$bangKe['t1'], 0, ',', '.') }}</td>
<td style="width: 16.6667%; text-align: center;">&nbsp;</td>
</tr>
<tr style="height: 18px;">
<td style="width: 11.8909%; text-align: right;"><strong>&nbsp;</strong></td>
<td style="width: 30.4093%; text-align: right; height: 18px;"><strong>&nbsp;</strong></td>
<td style="width: 17.7388%; text-align: center; height: 18px;">ck</td>
<td style="width: 23.2944%; text-align: center; height: 18px;">{{ number_format($tienBHYT + $tienBHXH - 500000*$bangKe['t500']+200000*$bangKe['t200']+100000*$bangKe['t100']+50000*$bangKe['t50']+20000*$bangKe['t20']+10000*$bangKe['t10']+5000*$bangKe['t5']+2000*$bangKe['t2']+1000*$bangKe['t1'], 0, ',', '.') }}</td>
<td style="width: 16.6667%; text-align: center;">&nbsp;</td>
</tr>
</tbody>
</table>
    </div>
</div>
</body>

</html>