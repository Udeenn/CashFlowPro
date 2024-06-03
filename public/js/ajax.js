$.ajaxSetup({
    headers: {
        "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
    },
});

// Create Data
$(document).on("click", ".create", function (e) {
    e.preventDefault();
    $("#createModal").modal("show");
    $(".simpan").click(function () {
        $.ajax({
            url: "/store",
            type: "POST",
            data: $("#createForm").serialize(),
            success: function (response) {
                console.log(response);
                $("#createModal").modal("hide");
                $("#datatable").load(location.href + " #datatable");
            },
        });
    });
});

// UPDATE
$(document).on("click", ".edit", function (e) {
    e.preventDefault();
    var itemId = $(this).data("id");
    $.get("/data/" + itemId + "/edit", function (data) {
        console.log(data);
        $("#updateModal").modal("show");
        $("#updateForm #tanggal").val(data.tanggal);
        $("#updateForm #tipe option")
            .filter(function () {
                return $(this).text() === data.tipe;
            })
            .prop("selected", true);
        //$('#updateForm #tipe').val(data.tipe);
        $("#updateForm #nominal").val(data.nominal);
        $("#updateForm #keterangan").val(data.keterangan);

        $(".update").click(function () {
            $.ajax({
                url: "/data/" + itemId,
                type: "PUT",
                data: $("#updateForm").serialize(),
                success: function (response) {
                    console.log(response);
                    $("#updateModal").modal("hide");
                    $("#datatable").load(location.href + " #datatable");
                },
            });
        });
    });
});
