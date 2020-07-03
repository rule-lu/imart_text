<html>
<head>
    <script src="jquery.min.js"></script>
</head>
<body>
<table>
    <form action="text.php" method="post">
        <tr>
            <td>
                <button type="button" value="first_player">first_player</button>
            </td>
            <td id="score">result</td>
            <td>
                <button type="button" value="second_player">second_player</button>
            </td>
        </tr>
        <input type="hidden" id="first_player" value="0">
        <input type="hidden" id="second_player" value="0">
    </form>
</table>
<script>
    $("button").click(function () {
        console.log('text1');
        var add_btn = '#' + $(this).val();
        var i = 1;
        var add_btn_val = parseInt($(add_btn).val()) + i;
        console.log(add_btn_val);
        $(add_btn).val(add_btn_val);
        var scroe1 = $('#first_player').val();
        var scroe2 = $('#second_player').val();
        $.ajax({
            url: "text_ajax.php",
            data: {scroe1: scroe1, scroe2: scroe2},
            type: "POST",
            dataType: 'text',
            success: function (data) {
                console.log(data);
                $('#score').html(data);
            },
            error: function (xhr, ajaxOptions, thrownError) {
                console.log(xhr.responseText);
            }
        });
    });
</script>
</body>
</html>
