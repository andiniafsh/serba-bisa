<script>
        $(document).ready(function(){
            $(".service-cards .card").on('click', function(){
                $(this).css({
                    "border-color": "#039855",
                    "box-shadow": "0 5px 15px rgba(0, 128, 0, 0.5)"
                });
                alert("Anda memilih: " + $(this).find('.card-title').text());
            })
        });
    </script>