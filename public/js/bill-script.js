$(document).ready(function () {
    var counter = 0;
    $("#addrow").on("click", function () {
      counter++;
        var newRow = $("<tr>");
        var cols = "";
        cols += '<td class="col-sm-3"><input type="text" name="item'+counter+'" class=""/></td>';
        cols += '<td class="col-sm-3"><input type="text"  name="rate'+counter+'" class=""/></td>';
        cols += '<td class="col-sm-3"><input type="text"  name="quantity'+counter+'" class=""/></td>';
        cols += '<td class="col-sm-3"><input type="text" name="hsn_sac'+counter+'" class=""/></td>';
        cols += '<td class="col-sm-3"><input type="button" class="ibtnDel btn btn-md btn-danger "  value="Delete"></td>';
        newRow.append(cols);
        $("#myTable").append(newRow);
        $("#itemcounter").val(counter);

    });
    $("table.order-list").on("click", ".ibtnDel", function (event) {
        $(this).closest("tr").remove();
        var count = $("#itemcounter").val();
        $("#itemcounter").val(count-1);
        counter = count -1;
    });


});



function calculateRow(row) {
    var price = +row.find('input[name^="price"]').val();

}

function calculateGrandTotal() {
    var grandTotal = 0;
    $("table.order-list").find('input[name^="price"]').each(function () {
        grandTotal += +$(this).val();
    });
    $("#grandtotal").text(grandTotal.toFixed(2));
}
