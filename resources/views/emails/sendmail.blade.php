<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Áo Ta Sport</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            background-color: #FAFAFA;
            font: 14px "Tohoma";
        }

        * {
            box-sizing: border-box;
            -moz-box-sizing: border-box;
        }

        .page {
            width: 21cm;
            overflow: hidden;
            min-height: 297mm;
            margin-left: auto;
            margin-right: auto;
            background: white;
            box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
        }

        .subpage {
            padding: 1cm;
            border: 5px red solid;
            height: 237mm;
            outline: 2cm #FFEAEA solid;
        }

        @page {
            size: A4;
            margin: 0;
        }

        button {
            width: 100px;
            height: 24px;
        }

        .header {
            overflow: hidden;
        }

        .logo {
            background-color: #FFFFFF;
            text-align: left;
            float: left;
        }

        .company {
            padding-top: 24px;
            text-transform: uppercase;
            background-color: #FFFFFF;
            text-align: right;
            float: right;
            font-size: 16px;
        }

        .title {
            text-align: center;
            position: relative;
            color: #3a3a3a;
            font-size: 24px;
            top: 1px;
        }

        .footer-left {
            text-align: center;
            text-transform: uppercase;
            padding-top: 24px;
            position: relative;
            height: 150px;
            width: 50%;
            color: #000;
            float: left;
            font-size: 12px;
            bottom: 1px;
        }

        .footer-right {
            text-align: center;
            text-transform: uppercase;
            padding-top: 24px;
            position: relative;
            height: 150px;
            width: 50%;
            color: #000;
            font-size: 12px;
            float: right;
            bottom: 1px;
        }

        .TableData {
            background: #ffffff;
            font-size: 11px;
            width: 100%;
            border-collapse: collapse;
            font-family: Verdana, Arial, Helvetica, sans-serif;
            font-size: 12px;
            border: thin solid #d3d3d3;
        }

        .TableData TH {
            background: rgba(0, 0, 255, 0.1);
            text-align: center;
            font-weight: bold;
            color: #000;
            border: solid 1px #ccc;
            height: 24px;
        }

        .TableData TR {
            height: 24px;
            border: thin solid #d3d3d3;
        }

        .TableData TR TD {
            padding-right: 2px;
            padding-left: 2px;
            border: thin solid #d3d3d3;
        }

        .TableData TR:hover {
            background: rgba(0, 0, 0, 0.05);
        }

        .TableData .cotSTT {
            text-align: center;
            width: 10%;
        }

        .TableData .cotTenSanPham {
            text-align: left;
            width: 40%;
        }

        .TableData .cotHangSanXuat {
            text-align: left;
            width: 20%;
        }

        .TableData .cotGia {
            text-align: right;
            width: 120px;
        }

        .TableData .cotSoLuong {
            text-align: center;
            width: 50px;
        }

        .TableData .cotSo {
            text-align: right;
            width: 120px;
        }

        .TableData .tong {
            text-align: right;
            font-weight: bold;
            text-transform: uppercase;
            padding-right: 4px;
        }

        .TableData .cotSoLuong input {
            text-align: center;
        }

        @media print {
            @page {
                margin: 0;
                border: initial;
                border-radius: initial;
                width: initial;
                min-height: initial;
                box-shadow: initial;
                background: initial;
                page-break-after: always;
            }
        }
    </style>
</head>
<body>
<?php date_default_timezone_set('Asia/Bangkok');?>
<div id="page" class="page">
    <div style="text-align: justify; font-size: 14px"> Cảm ơn quý khách đã tin tưởng và lựa chọn sản phẩm ở cửa hàng
        Áo Ta Sport của chúng
        <tôi></tôi>
        .<br>
        Áo Ta Sport rất vui thông báo đơn hàng của quý khách đã được tiếp nhận và đang trong
        quá trình xử lý.<br>
        Tại shop của chúng tôi có những chính sách Chăm Sóc Khách Hàng để bạn luôn yên tâm mua sắm mà bạn sẽ rất ít khi
        gặp
        được ở đâu khác<br>
        Chúc bạn có một trải nghiệm hài lòng tại Áo Ta Sport.
    </div>
    <div style="height:1px;line-height:1px;border-top:3px solid #007aff; padding-top: 10px; padding-bottom: 10px;transform: translateY(10px);">
        <img alt="" width="1" height="1" style="display:block"></div>
    <div style="padding: 0 5em">
        <div>
            <strong>THÔNG TIN ĐƠN HÀNG</strong>
            {{--            <span style="color: #007aff" {{$details['madonhang']}}></span>--}}
            <i>({{date("d-m-Y H:m:s")}})</i> <br>
            <table>
                <tr>
                    <td align="left" valign="top"
                        style="padding:10px;font-size:14px;font-family:Helvetica,'Helvetica Neue',Arial,sans-serif;line-height:1.95">
                        <span style="font-size:14px;font-family:Helvetica,'Helvetica Neue',Arial,sans-serif">
                            <span style="color:#262626;font-weight:700">Thông tin thanh toán</span>
                        </span>
                        <div>
                            <span style="color:#262626;font-family:Helvetica,'Helvetica Neue',Arial,sans-serif">
                                Tên khách hàng: {{$details['tenkh']}}
                            </span>
                        </div>
                        <div>
                            <span style="color:#262626;font-family:Helvetica,'Helvetica Neue',Arial,sans-serif">
                                Email: {{$details['email']}}
                            </span>
                        </div>
                        <div>
                            <span style="color:#262626;font-family:Helvetica,'Helvetica Neue',Arial,sans-serif">
                                Số điện thoại: {{$details['sdt']}}
                            </span>
                        </div>
                    </td>
                    <td>
                    <td align="left" valign="top"
                        style="padding:10px;font-size:14px;font-family:Helvetica,'Helvetica Neue',Arial,sans-serif;line-height:1.95">
                        <span style="font-size:14px;font-family:Helvetica,'Helvetica Neue',Arial,sans-serif">
                            <span style="color:#262626;font-weight:700">Địa chỉ giao hàng: </span>
                        </span>
                        <div>
                            <span style="color:#262626;font-family:Helvetica,'Helvetica Neue',Arial,sans-serif">
                                Tên khách hàng: {{$details['tenkh']}}
                            </span>
                        </div>
                        <div>
                            <span style="color:#262626;font-family:Helvetica,'Helvetica Neue',Arial,sans-serif">
                                Email: {{$details['email']}}
                            </span>
                        </div>
                        <div>
                            <span style="color:#262626;font-family:Helvetica,'Helvetica Neue',Arial,sans-serif">
                                Số điện thoại: {{$details['sdt']}}
                            </span>
                        </div>
                        <div>
                            <span style="color:#262626;font-family:Helvetica,'Helvetica Neue',Arial,sans-serif">
                                Địa chỉ: {{$details['diachi']}}
                            </span>
                        </div>
                    </td>
                </tr>
            </table>
            <table class="TableData">
                <tr>
                    <th>STT</th>
                    <th>Tên Đơn Hàng</th>
                    <th>Đơn giá</th>
                    <th>Số lượng</th>
                    <th>ĐVT</th>
                    <th>Thành tiền</th>
                </tr>
                <?php
                $total = 0;
                $stt = 0;
                $result = $details['content'] ;
                ?>
                @foreach($result as $id => $item)
                    <?php
                    $total += $item['sanpham_gia'] * $item['sanpham_soluong'];
                    ?>
                    <tr>
                        <td class="cotSTT">{{++$stt}}</td>
                        <td class="cotTenSanPham">{{$item['sanpham_ten']}}</td>
                        <td class="cotGia">{{number_format($item['sanpham_gia'])}}</td>
                        <td class="cotSoLuong" align='center'>{{$item['sanpham_soluong']}}</td>
                        <td class="">Cái</td>
                        <td class="cotSo">{{number_format($item['sanpham_gia']*$item['sanpham_soluong'])}}</td>
                    </tr>
                @endforeach
                <tr>
                    <td colspan="5" class="tong">Tổng cộng</td>
                    <td class="cotSo">{{ number_format($total) }}</td>
                </tr>
                </table>
                <i>Số tiền viết bằng chữ: <strong>{{convert_number_to_words($total)}}</strong></i>
        </div>
        </div>
    </div>

</div>
</body>
</html>
<?php
function convert_number_to_words($number)
{
    $hyphen = ' ';
    $conjunction = '  ';
    $separator = ' ';
    $negative = 'âm ';
    $decimal = ' phẩy ';
    $dictionary = array(
        0 => 'không',
        1 => 'một',
        2 => 'hai',
        3 => 'ba',
        4 => 'bốn',
        5 => 'năm',
        6 => 'sáu',
        7 => 'bảy',
        8 => 'tám',
        9 => 'chín',
        10 => 'mười',
        11 => 'mười một',
        12 => 'mười hai',
        13 => 'mười ba',
        14 => 'mười bốn',
        15 => 'mười năm',
        16 => 'mười sáu',
        17 => 'mười bảy',
        18 => 'mười tám',
        19 => 'mười chín',
        20 => 'hai mươi',
        30 => 'ba mươi',
        40 => 'bốn mươi',
        50 => 'năm mươi',
        60 => 'sáu mươi',
        70 => 'bảy mươi',
        80 => 'tám mươi',
        90 => 'chín mươi',
        100 => 'trăm',
        1000 => 'nghìn',
        1000000 => 'triệu',
        1000000000 => 'tỷ',
        1000000000000 => 'nghìn tỷ',
        1000000000000000 => 'nghìn triệu triệu',
        1000000000000000000 => 'tỷ tỷ'
    );
    if (!is_numeric($number)) {
        return false;
    }
    if (($number >= 0 && (int)$number < 0) || (int)$number < 0 - PHP_INT_MAX) {
        // overflow
        trigger_error(
            'convert_number_to_words only accepts numbers between -' . PHP_INT_MAX . ' and ' . PHP_INT_MAX,
            E_USER_WARNING
        );
        return false;
    }
    if ($number < 0) {
        return $negative . convert_number_to_words(abs($number));
    }
    $string = $fraction = null;
    if (strpos($number, '.') !== false) {
        list($number, $fraction) = explode('.', $number);
    }
    switch (true) {
        case $number < 21:
            $string = $dictionary[$number];
            break;
        case $number < 100:
            $tens = ((int)($number / 10)) * 10;
            $units = $number % 10;
            $string = $dictionary[$tens];
            if ($units) {
                $string .= $hyphen . $dictionary[$units];
            }
            break;
        case $number < 1000:
            $hundreds = $number / 100;
            $remainder = $number % 100;
            $string = $dictionary[$hundreds] . ' ' . $dictionary[100];
            if ($remainder) {
                $string .= $conjunction . convert_number_to_words($remainder);
            }
            break;
        default:
            $baseUnit = pow(1000, floor(log($number, 1000)));
            $numBaseUnits = (int)($number / $baseUnit);
            $remainder = $number % $baseUnit;
            $string = convert_number_to_words($numBaseUnits) . ' ' . $dictionary[$baseUnit];
            if ($remainder) {
                $string .= $remainder < 100 ? $conjunction : $separator;
                $string .= convert_number_to_words($remainder);
            }
            break;
    }
    if (null !== $fraction && is_numeric($fraction)) {
        $string .= $decimal;
        $words = array();
        foreach (str_split((string)$fraction) as $number) {
            $words[] = $dictionary[$number];
        }
        $string .= implode(' ', $words);
    }
    return $string;
}
?>
