$(document).ready(function() {
    $('.sendForm').on('click', function () {
        var form = $('.formTask');
        $.ajax({
            url: '/TaskController.php',
            type: 'POST',
            data: {
                action: 'create',
                name: form.find('.name').val(),
                description: form.find('.description').val(),
                date: form.find('.date').val(),
                status: form.find('.status').val()
            },
            dataType: 'json',
            success: function(result) {
                $('.formResult').html(result);
            }
        });
    });
});



$('.readDate').on('click', function () {
    $.ajax({
        url: '/TaskController.php',
        type: 'POST',
        data: {
            action: 'read',
        },
        dataType: 'json',
        success: function(result) {
            var html = '<table border="1">';
            html += '<tr>';
            html += '<th>ID</th>';
            html += '<th>Name</th>';
            html += '<th>Description</th>';
            html += '<th>Date</th>';
            html += '<th>Status</th>';
            html += '</tr>';

            for (var i = 0; i < result.length; i++) {
                html += '<tr>';
                html += '<td>' + result[i].id + '</td>';
                html += '<td>' + result[i].nameTask + '</td>';
                html += '<td>' + result[i].descriptionTask + '</td>';
                html += '<td>' + result[i].dateTask + '</td>';
                html += '<td>' + result[i].statusTask + '</td>';
                html += '<td><button onclick="deleteTask(' + result[i].id + ')">Удалить</button></td>';
                html += '<td><button onclick="changeStatus(' + result[i].id + ', \'' + result[i].statusTask + '\')">Изменить статус</button></td>';
                html += '</tr>';
            }

            html += '</table>';
            $('.formResult').html(html);
        }
    });
});


function deleteTask(id) {
    $.ajax({
        url: '/TaskController.php',
        type: 'POST',
        data: {
            action: 'delete',
            id: id
        },
        dataType: 'json',
        success: function(result) {
            $('.readDate').trigger('click');
        }
    });
}

function changeStatus(id, currentStatus) {
    var newStatus = (currentStatus === 'выполнено') ? 'не выполнено' : 'выполнено';
    $.ajax( {
        url: '/TaskController.php',
        type: 'POST',
        data: {
            action: 'update',
            id: id,
            status: newStatus
        },
        dataType: 'json',
        success: function (result) {
            $('.readDate').trigger('click');
        }
        }

    )
}
