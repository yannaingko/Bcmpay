<input id="myInput" type="text" placeholder="Search...">

<div id="buttonContainer"></div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
<script>
        $('#myInput').keyup(function() {
            var searchText = $(this).val();
            $.ajax({
                url : '{{URL::to('search')}}',
                method: 'get',
                data: { searchText: searchText },
                success: function(response) {
                    var buttons = '';
                    $.each(response.data, function(index, item) {
                        buttons += '<button class="myButton" data-id="' + item.id + '">' + item.name + '</button>';
                    });
                    $('#buttonContainer').html(buttons);
                },
            });
        });

        $('#buttonContainer').on('click', '.myButton', function() {
            // var buttonId = $(this).data('id');
            var id = $(this).attr("data-id")
            $.ajax({
                url: '{{URL::to('process')}}/' +id,
                method: 'get',
                data: { $id: id },
                success: function (response) {
                    alert(response.info);
                },
            });
        });
        $.ajaxSetup({ headers: { 'csrftoken' : '{{ csrf_token() }}' } });
</script>