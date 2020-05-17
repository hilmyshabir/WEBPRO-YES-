$(document).ready(function () {
    $("#btn-search").click(function () {
        $(this).html("mencari..").attr("disabled", "disabled");

        $.ajax({
            url: baseurl + 'posyandu_controller_user/search',
            type: 'POST',
            data: { keyword: $("#keyword").val() },
            dataType: "json",
            beforeSend: function (e) {
                if (e && e.overrideMimeType) {
                    e.overrideMimeType("application/json;charset=UTF-8");
                }
            },
            success: function (response) {
                $("btn-search").html("Cari").removeAttr("disabled");

                $("#view").html(response.hasil);
            },
            error: function (xhr, ajaxOptions, thrownError) {
                alert(xhr.responseText);
            }
        });
    });
});