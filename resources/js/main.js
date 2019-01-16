$(function () {
    $('[data-js=open-remove]').on('click', function (e) {
            console.log('clicked');
            $("#removeModal").modal();
        }
    );
    $('[data-js-type=modal-submit]').on('click', function (e) {
            $.ajax({
                url: $("[data-js=open-remove]").find('span').attr('url'),
                method: 'POST',
                dataType: 'json',
                data: {id: $("[data-js=open-remove]").find('span').attr('id')},
                success: function (result) {
                    console.log('success:', result);
                    if (result.Success) {
                        document.location.reload(true);
                    } else {
                        console.log('Error From server', result.Error);
                    }
                },
                error:function (error) {
                  console.log('AJAX ERROR', error);
                }
            })
        }
    );
})
