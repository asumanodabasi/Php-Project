$(document).ready(function()
{
    $('#word').keyup(function()
    {
        var value = $(this).val()
        var data = "value="+value

        if( value == '' )
        {
            $('.tboxsearch').css('display', 'none')
        }

        else
        {
            $.ajax
            (
                {
                    type: 'POST',
                    url: 'http://localhost/proje/api.php',
                    data: data,
                    success: function(e)
                    {
                        $('.tboxsearch').css('display', 'block')
                        $('.tboxsearch').html(e)
                    }
                }
            )
        }
    })
})