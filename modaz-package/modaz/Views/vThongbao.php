
<!-- Bootstrap CSS -->
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">

<!-- jQuery -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<!-- Bootstrap JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script>
    $(document).ready(function () {
        $("#my-modal").modal({backdrop: "static"}); //gọi hàm hiển thị hộp thoại có id=my-modal
    });
</script>
<div id="my-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="my-modal-title" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header" style="background-color: chocolate; color: white;">
                <h4 class="modal-title" id="my-modal-title"><?=$tieude_thongbao?></h4>
            </div>
            <div class="modal-body">
                <h3 style="color:red"><?=$noidung_thongbao?></h3>
                <a href="<?=$link_thongbao?>">Tiếp tục</a>
            </div>
            <div class="modal-footer">
                           
            </div>
        </div>
    </div>
</div>
