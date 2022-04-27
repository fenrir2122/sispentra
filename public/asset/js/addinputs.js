let x = 0;
$("#addRow").on(`click`, function () {
    var html = ``;
    if (x < 10) {
        x++;
        html += `<div id="inputFormRow${x}">`;
        html += `<div class="input-group mb-1">`;
        html += `<input name="pr_no[${x}][no]" class="form-control col-6" required="required" type="text" maxlength="9">`;
        html += `<select name="pr_no[${x}][jenis_pr]" class="form-control col-4 ml-2">`;
        html += `<option value="0">OLD</option>`;
        html += `<option value="1">NEW</option>`;
        html += `</select>`;
        if (x == 1) {
            html += `<button id="removeRow" type="button" class="btn btn-danger ml-2"><i class="fa fa-trash" aria-hidden="true"></i></button>`;
        }
        html += `</div>`;

        $('#newRow').append(html);
    }
});

// remove row
$(document).on('click', '#removeRow', function () {
    $('#inputFormRow' + x).remove(); x--;
});