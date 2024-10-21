<?php /* Smarty version 2.6.11, created on 2023-07-26 07:45:51
         compiled from custom/modules/ECT_Payment/tpls/edit_payment_tragop.tpl */ ?>
<?php echo '
    <style type="text/css">
        .custom-popup {
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 200px;
            height: 60px;
            background-color: #FFFFCC;
            border: 2px solid black;
            border-radius: 5px;
            padding: 20px;
        }
        .hide {
            display: none; /* Ẩn popup ban đầu */
        }

        .stt-column {
            width: 50px;
        }
        .name-column {
            width: 250px;
        }

        .id-column {
            width: 250px;
        }

        .course-column {
            width: 250px;
        }

        .expected-day-column {
            width: 200px;
        }
        .button-group {
            display: flex;
            justify-content: space-between;
            margin-bottom: 10px;
        }
        .close-button {
            background-color: #ccc;
            border: none;
            color: #000;
            padding: 5px 10px;
            border-radius: 3px;
            cursor: pointer;
        }
        .add-button {
            background-color: #ccc;
            border: none;
            color: #000;
            padding: 5px 10px;
            border-radius: 3px;
            cursor: pointer;
        }

        /* Hover style cho nút tắt */
        .close-button:hover {
            background-color: #ddd;
        }

        /* Nút tắt khi hover */
        .close-button:active {
            background-color: #aaa;

        .add-button:hover {
            background-color: #45a049;
        }

        /* Nút add khi hover */
        .add-button:active {
            background-color: #3d9145;
        }

        .payment-input-container {
            display: flex;
            align-items: center;
            margin-bottom: 20px;
        }
        .payment-input-container label {
            margin-right: 10px;
            font-size: 16px; /* Đặt kích thước của nhãn là 16px */
            font-weight: bold; /* Đặt đậm cho nhãn */
        }
        .payment-input-container input {
            flex: 1; /* Tự động mở rộng trường nhập để lấp đầy không gian còn lại */
            padding: 10px; /* Đặt lề cho trường nhập */
            font-size: 16px; /* Đặt kích thước chữ cho trường nhập */
            border: 2px solid #ccc; /* Đặt viền cho trường nhập */
            border-radius: 5px; /* Đặt góc bo cho trường nhập */
        }
    </style>
'; ?>


<button id="addPaymentButton" class="button">Add Payment</button>
<div id="addPaymentPopup" class="custom-popup hide">
    <button id="savePaymentButton" class="close-button">Lưu</button>
    <button id="closePaymentPopupButton" class="close-button">Close</button>
    <div class="payment-input-container">
        <label for="paymentAmount">Số tiền:</label>
        <input type="number" id="paymentAmount" name="payment_amount" min="0" step="10000" placeholder="Nhập số tiền">
    </div>

</div>

<?php echo '
    <script type="text/javascript">
        $("#addPaymentButton").on("click", function() {
            // Hiển thị popup khi nút "Add Student" được bấm
            var popup = $(\'#addPaymentPopup\');
            if (popup.hasClass(\'hide\'))
                popup.removeClass(\'hide\');
            else popup.addClass(\'hide\');
        });
        $("#closePaymentPopupButton").on("click", function () {
            // Ẩn popup khi nút tắt được bấm
            var popup = $(\'#addPaymentPopup\');
            popup.addClass(\'hide\');
        });
            $("#savePaymentButton").on("click", function() {
            // Lấy giá trị số tiền từ trường nhập số
            var paymentAmount = $("#paymentAmount").val();

            // Kiểm tra nếu số tiền không hợp lệ (khác 0) thì mới gửi dữ liệu lên server
            if (paymentAmount !== "" && parseFloat(paymentAmount) !== 0) {
            // Gửi dữ liệu số tiền lên server qua AJAX
            $.ajax({
            type: "POST",
            url: "index.php?module=ECT_Lecturer&action=handleAjaxPayment&sugar_body_only=1",
            data: {
            payment_tuition: paymentAmount
        },
            dataType: "json",
            success: function (response) {
            // Xử lý phản hồi thành công từ server (nếu cần)
            alert("Lưu giá trị " + paymentAmount + " vào database thành công!");
            // Sau khi lưu thành công, có thể ẩn popup và làm các xử lý khác (nếu cần)
        },
            error: function (response) {
            // Xử lý lỗi nếu có lỗi xảy ra trong yêu cầu AJAX (nếu cần)
            alert("Đã xảy ra lỗi!");
        }
        });
        } else {
            alert("Số tiền không hợp lệ. Vui lòng nhập giá trị lớn hơn 0.");
        }
        });

    </script>
'; ?>
