let x = 0;
console.log("init_multiinput");
$(document).on('click', '#addRow', function () {
    var html = ``;
    if (x < 10) {
        x++;
        console.log("x = " + x);
        html += `<div id="inputFormRow${x}">`;
        html += `<div class="input-group">`;
        html += `<input name="pr_no[${x}][no]" class="form-control col-6" required="required" type="text" maxlength="9">`;
        html += `<select name="pr_no[${x}][jenis_pr]" class="form-control col-4 ml-2">`;
        html += `<option value="0">OLD</option>`;
        html += `<option value="1">NEW</option>`;
        html += `</select>`;
        if (x == 1) {
            html += `<button id="removeRow" type="button" class="btn btn-danger ml-2 col-2"><i class="fa fa-trash" aria-hidden="true"></i></button>`;
        } else {
            html += `<div class="col-2"></div>`
        }
        html += `</div>`;
        html += `</div>`;

        $('#newRow').append(html);
    }
});

function testactive(value) {
    alert(value);
}

$('#testingMethod').on('click', function () {
    var num = document.getElementById("testingMethod").getAttribute("data-value");
    alert(num);
});

$(document).on('click', '#addRowN', function () {
    var num = document.getElementById("addRowN").getAttribute("data-value");
    var html = ``;
    if (num < 10) {
        num++;
        html += `<div id="inputFormRow${num}">`;
        html += `<div class="input-group">`;
        html += `<input name="pr_no[${num}][no]" class="form-control col-6" required="required" type="text" maxlength="9">`;
        html += `<select name="pr_no[${num}][jenis_pr]" class="form-control col-4 ml-2">`;
        html += `<option value="0">OLD</option>`;
        html += `<option value="1">NEW</option>`;
        html += `</select>`;
        if (num == 1) {
            html += `<button id="removeRowN" type="button" class="btn btn-danger ml-2"><i class="fa fa-trash" aria-hidden="true"></i></button>`;
        }
        html += `</div>`;
        html += `</div>`;

        $('#newRow').append(html);
        console.log('num = ' + num);
        document.getElementById("addRowN").setAttribute("data-value", num);
    }
});

// remove row
$(document).on('click', '#removeRowN', function () {
    var num = document.getElementById("addRowN").getAttribute("data-value");
    if (num != 0) {
    $('#inputFormRow' + num).remove(); num--;

    console.log('num = ' + num);
    document.getElementById("addRowN").setAttribute("data-value", num);
    }
});

$(document).on('click', '#removeRow', function () {
    $('#inputFormRow' + x).remove(); x--;
});