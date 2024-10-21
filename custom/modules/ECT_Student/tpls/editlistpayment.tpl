{literal}
    <style type="text/css">
        .custom-popup {
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 1000px;
            height: 600px;
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

    </style>
{/literal}

<button id="listPaymentButton" class="button">List Payment</button>
<div id="listPaymentPopup" class="custom-popup hide">
    <button id="closeListPaymentPopupButton" class="close-button">Close</button>
    <h3>Danh sách học phí đã trả</h3>

    <table>
        <thead>
        <tr>
            <th class="name-column">Mã thanh toán</th>
            <th class="id-column">Tổng số tiền còn nợ</th>
            <th class="course-column">Deadline thanh toán</th>
            <th class="expected-day-column">Tình trạng thanh toán</th>

        </tr>
        </thead>
        <tbody>
        {foreach from=$paymentList item=payment}
            <tr>
                <td class="name-column">{$payment.name}</td>
                <td class="id-column">{$payment.payment_owed_rn}</td>
                <td class="course-column">{$payment.payment_deadline}</td>
                <td class="expected-day-column">{$payment.payment_status}</td>
                <td class="view-payment-column">
                    <button class="view-payment-button" data-payment-id="{$payment.primary_id}">View Payment</button>
            </tr>
        {/foreach}
        </tbody>
    </table>
</div>

{literal}
    <script type="text/javascript">
        $("#listPaymentButton").on("click", function() {
            // Hiển thị popup khi nút "Add Student" được bấm
            var popup = $('#listPaymentPopup');
            if (popup.hasClass('hide'))
                popup.removeClass('hide');
            else popup.addClass('hide');
        });

        $(".view-payment-button").on("click", function() {
            // Lấy id của Payment từ thuộc tính data-payment-id của nút
            var paymentId = $(this).data("payment-id");

            // Dẫn đến trang DetailView của Payment với id tương ứng
            window.location.href = "index.php?module=ECT_Payment&action=DetailView&record=" + paymentId;
        });


        $("#closeListPaymentPopupButton").on("click", function () {
            // Ẩn popup khi nút tắt được bấm
            var popup = $('#listPaymentPopup');
            popup.addClass('hide');
        });
    </script>
{/literal}


